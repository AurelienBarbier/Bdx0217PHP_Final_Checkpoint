<?php

namespace MarmiwildBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MarmiwildBundle:Default:index.html.twig');
    }
}
