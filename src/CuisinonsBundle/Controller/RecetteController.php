<?php

namespace CuisinonsBundle\Controller;

use CuisinonsBundle\Entity\Recette;
use CuisinonsBundle\Form\RecetteType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RecetteController extends Controller
{
    public function listAction()
    {
        return $this->render('CuisinonsBundle:Recette:list.html.twig');
    }

    public function addAction(Request $request)
    {
        $recette = new Recette();
        $recette->setUser($this->getUser());

        $form = $this->createForm(RecetteType::class, $recette);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($recette);
            $em->flush();

            $this->addFlash(
                'success',
                'La recette a bien été créée'
            );

            return $this->redirectToRoute('cuisinons_recette_list');
        }

        return $this->render('CuisinonsBundle:Recette:add.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editAction(Recette $recette, Request $request)
    {
        $orignialIngredients = new ArrayCollection();

        foreach ($recette->getIngredients() as $ingredient) {
            $orignialIngredients->add($ingredient);
        }

        $form = $this->createForm(RecetteType::class, $recette);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            foreach ($orignialIngredients as $ingredient) {
                if (false === $recette->getIngredients()->contains($ingredient)) {
                    $ingredient->setRecette(null);
                    $em->remove($ingredient);
                }
            }
            $em->flush();

            $this->addFlash(
                'success',
                'La recette a bien été modifiée'
            );

            return $this->redirectToRoute('cuisinons_recette_list');
        }

        return $this->render('CuisinonsBundle:Recette:edit.html.twig', array(
            'form' => $form->createView(),
            'recette' => $recette
        ));
    }

    public function deleteAction(Recette $recette)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($recette);
        $em->flush();

        $this->addFlash(
            'success',
            'La recette a bien été suprimée'
        );

        return $this->redirectToRoute('cuisinons_recette_list');
    }
}
