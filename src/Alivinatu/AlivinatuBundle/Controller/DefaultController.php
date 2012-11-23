<?php

namespace Alivinatu\AlivinatuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlivinatuBundle:Default:index.html.twig', array('name' => $name));
    }
}
