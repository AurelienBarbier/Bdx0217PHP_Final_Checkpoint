<?php

namespace Marmiwild\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MarmiwildCoreBundle:Default:index.html.twig');
    }
}
