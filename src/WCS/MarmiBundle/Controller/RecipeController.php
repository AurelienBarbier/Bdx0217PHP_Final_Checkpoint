<?php

namespace WCS\MarmiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use WCS\MarmiBundle\Entity\Image;
use WCS\MarmiBundle\Entity\Recette;
use WCS\MarmiBundle\Form\RecetteType;

class RecipeController extends Controller
{
    public function addAction(Request $request)
    {
        $recette = new Recette();
        $form = $this->createForm(RecetteType::class, $recette);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $recette->setDifficulty($request->get('difficulty'));
            $image = $request->files->get('image');
            $fileName = md5(uniqid()) . '.' . $image->getClientOriginalExtension();
            $recette->setImageUrl($fileName);
            $image->move(
                $this->getParameter('image_directory'),
                $fileName
            );
            foreach ($request->files->get('images') as $image){
                $fileName = md5(uniqid()) . '.' . $image->getClientOriginalExtension();
                $qimage = new Image();
                $qimage->setImageUrl($fileName);
                $qimage->setRecette($recette);
                $image->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );
                $recette->addImage($qimage);
                $em->persist($qimage);
            }
            $recette->setCreator($this->getUser());
            $typef = "";
            foreach($request->get('type') as $type){
                $typef .= $type.' ';
            }
            $recette->setType($typef);
            foreach($recette->getIngredients() as $ingredient){
                $ingredient->setRecette($recette);
                $em->persist($ingredient);
            }
            $em->persist($recette);
            $em->flush();
            $this->addFlash(
                'success',
                'La recette à était ajoutée avec succés'
            );
            return $this->redirectToRoute('wcs_marmi_myrecipe');
        }

        return $this->render('WCSMarmiBundle:Recipe:add.html.twig',
            array('form' => $form->createView()));
    }
    public function editAction(Request $request, Recette $recette)
    {
        $form = $this->createForm(RecetteType::class, $recette);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $recette->setDifficulty($request->get('difficulty'));
            $image = $request->files->get('image');
            if ($image){
                $fileName = md5(uniqid()).'.'.$image->getClientOriginalExtension();
                $recette->setImageUrl($fileName);
                $image->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );
            }

            $recette->setCreator($this->getUser());
            $typef = "";
            foreach($request->get('type') as $type){
                $typef .= $type.' ';
            }
            $recette->setType($typef);
            foreach($recette->getIngredients() as $ingredient){
                var_dump($ingredient->getNom());
                if ($ingredient->getNom() == NULL){
                    $recette->removeIngredient($ingredient);
                    $em->remove($ingredient);
                }
                else{
                    $ingredient->setRecette($recette);
                    $em->persist($ingredient);
                }
            }
            $em->persist($recette);
            $em->flush();
            $this->addFlash(
                'success',
                'La recette à était modifiée avec succés'
            );
            return $this->redirectToRoute('wcs_marmi_myrecipe');
        }

        return $this->render('WCSMarmiBundle:Recipe:edit.html.twig',
            array('form' => $form->createView(), 'recette' => $recette));
    }
    public function deleteAction(Recette $recette)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($recette);
        $em->flush();
        $this->addFlash(
            'success',
            'La recette à était supprimée avec succés'
        );
        return $this->redirectToRoute('wcs_marmi_myrecipe');
    }
}
