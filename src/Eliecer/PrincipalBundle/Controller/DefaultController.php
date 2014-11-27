<?php

namespace Eliecer\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EliecerPrincipalBundle:Default:index.html.twig');
    }
}
