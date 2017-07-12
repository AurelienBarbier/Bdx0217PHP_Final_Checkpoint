<?php

namespace CuisinonsBundle\Controller;

use CuisinonsBundle\Entity\Recette;
use CuisinonsBundle\Form\RecetteType;
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
}
