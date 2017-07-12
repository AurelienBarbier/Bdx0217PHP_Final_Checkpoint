<?php

namespace CuisinonsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CuisinonsBundle:Default:index.html.twig');
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
