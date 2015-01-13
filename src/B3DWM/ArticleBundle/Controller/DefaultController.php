<?php

namespace B3DWM\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('B3DWMArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}
