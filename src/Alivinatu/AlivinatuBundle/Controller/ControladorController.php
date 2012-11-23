<?php

namespace Alivinatu\AlivinatuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ControladorController extends Controller
{
    public function indexAction()
    {
        return $this->render('AlivinatuBundle:Welcome:index.html.twig');
    }
    
}
