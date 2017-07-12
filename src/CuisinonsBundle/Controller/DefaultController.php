<?php

namespace CuisinonsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $recettes = $this->getDoctrine()->getRepository('CuisinonsBundle:Recette')->findAll();
        $recettesSemaine = $this->getDoctrine()->getRepository('CuisinonsBundle:Recette')->findAll();

        return $this->render('CuisinonsBundle:Default:index.html.twig', array(
            'recettes' => $recettes,
            'recettesSemaine' => $recettesSemaine
        ));
    }

    public function loginAction(Request $request)
    {
        $authUtils = $this->get('security.authentication_utils');

        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();


        return $this->render('CuisinonsBundle:Default:login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error
        ));
    }
}
