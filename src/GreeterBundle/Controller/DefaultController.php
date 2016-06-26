<?php

namespace GreeterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GreeterBundle:scenario:gender.html.twig');
    }
}
