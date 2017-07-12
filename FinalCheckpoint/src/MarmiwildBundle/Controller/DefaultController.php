<?php

namespace MarmiwildBundle\Controller;

use MarmiwildBundle\Entity\Recette;
use MarmiwildBundle\Form\RecetteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $recettes = $em->getRepository('MarmiwildBundle:Recette')->findAll();

        return $this->render('MarmiwildBundle:Default:index.html.twig', array('recettes' => $recettes));
    }

    public function addRecetteAction(Request $request)
    {
        $recette = new Recette();
        $form = $this->createForm('MarmiwildBundle\Form\RecetteType', $recette);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($recette);
            $em->flush();

            return $this->redirectToRoute('marmiwild_homepage', array('id' => $recette->getId()));
        }

        return $this->render('MarmiwildBundle:Default:addRecette.html.twig', array(
            'recette' => $recette,
            'form' => $form->createView(),
        ));
    }
}
