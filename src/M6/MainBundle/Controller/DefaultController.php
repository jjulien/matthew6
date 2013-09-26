<?php

namespace M6\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('M6MainBundle:Default:index.html.twig', array());
    }
}
