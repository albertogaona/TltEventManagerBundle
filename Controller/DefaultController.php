<?php

namespace Tlt\EventManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TltEventManagerBundle:Default:index.html.twig', array('name' => $name));
    }
}
