<?php

namespace Site\NedraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteNedraBundle:Default:index.html.twig', array('name' => $name));
    }
}
