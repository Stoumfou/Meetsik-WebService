<?php

namespace B3DWM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('B3DWMUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
