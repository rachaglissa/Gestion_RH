<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    
    /**
     * @return \symfony\component\HTTPFoundation\Response
     *
     * @Route("/login_ok/", name="login_ok")
     *
     * @Security("has_role('ROLE_USER')")
     */
    public function okPageAction()
    {
       return $this->redirectToRoute('sonata_admin_dashboard');
    } 

}

























