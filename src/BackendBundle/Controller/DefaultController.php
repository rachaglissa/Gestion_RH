<?php

namespace BackendBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    return $this->render('BackendBundle:Default:index.html.twig');
    }
	
}
