<?php

namespace TutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TutoBundle:Default:index.html.twig');
    }
    public function pageAction()
    {
        return $this->render('TutoBundle:Default:page.html.twig');    	
    }
}
