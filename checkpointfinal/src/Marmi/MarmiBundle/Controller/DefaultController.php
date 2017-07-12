<?php

namespace Marmi\MarmiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MarmiWildBundle:Default:index.html.twig');
    }
}
