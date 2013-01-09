<?php

namespace Alivinatu\AlivinatuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
public function menuAdminAction()
    {
        return $this->render('AlivinatuBundle:Administrador:menuAdmin.html.twig');
    }
    
public function adminClienteAction()
    {
        return $this->render('AlivinatuBundle:Administrador:adminCliente.html.twig');
    }
}   