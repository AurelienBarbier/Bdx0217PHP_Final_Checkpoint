<?php

namespace RecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecipesBundle:Default:index.html.twig');
    }
}
