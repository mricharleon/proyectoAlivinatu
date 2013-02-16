<?php
    
namespace Alivinatu\AlivinatuBundle\Controller;

use Alivinatu\AlivinatuBundle\Entity\Usuario;
use Alivinatu\AlivinatuBundle\Entity\Contacto;
use Alivinatu\AlivinatuBundle\Entity\Administrador;
use Alivinatu\AlivinatuBundle\Entity\Cliente;
use Alivinatu\AlivinatuBundle\Form\UsuarioAdminType;
use Alivinatu\AlivinatuBundle\Form\UsuarioClienteType;
use Alivinatu\AlivinatuBundle\Form\ContactoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityCOntext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class UsuarioController extends Controller
{
    public function loginAction()
    {
        if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $this->get('request')->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $this->get('request')->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render('AlivinatuBundle:Usuario:login.html.twig', array(
            'last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }
    
    
    public function registroAdminAction()
    {
        $usuario = new Usuario();
        $administrador = new Administrador();
        $cliente = new Cliente();
        
        $formAdmin = $this->createForm(new UsuarioAdminType(), $usuario);
//        $formAdmin = $this->get('form.factory')->create(new UsuarioAdminType(), array() );
//        $formContacto = $this->get('form.factory')->create(new ContactoType(), array() );

        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $formAdmin->bindRequest($request);
            //$formAdmin->bind($request);
            if ( $formAdmin->isValid() ) {
                 
               //  Obtenemos el usuario
                $usuario = $formAdmin->getData();

                // Codificamos el password
//                $factory = $this->get('security.encoder_factory');
//                $codificador = $factory->getEncoder($usuario);
//                $password = $codificador->encodePassword($usuario->getPassword(), $usuario->getSalt());
//                $usuario->setPassword($password);

     
                $role = $usuario->getRol();
            
                if ($role == "ROLE_ADMIN"){
                    $administrador = new Administrador();
                    $formAdmin = $this->createForm(new UsuarioAdminType(), $administrador);
                    $formAdmin->bindRequest($request);
                    // Guardamos el objeto en base de datos
                    $em = $this->get('doctrine')->getEntityManager();
                    $em->Persist($administrador);
                    $em->flush();
                    
                }  else{
                    $cliente = new Cliente();
                    $formAdmin = $this->createForm(new UsuarioAdminType(), $cliente);
                    $formAdmin->bindRequest($request);
                    $em = $this->get('doctrine')->getEntityManager();
                    $em->Persist($cliente);
                    $em->flush();
                }
                return $this->redirect($this->generateURL('adminCliente'));
         
            }else{
                echo "<h3>no valida...!!!</h3>";
            }
        }
        
        
        return $this->render('AlivinatuBundle:Usuario:registro.html.twig',
                array('formAdmin' => $formAdmin->createView()
                    ));
    }
    
    
    // registro del cliente
     public function registroClienteAction()
    {
         
        $request = $this->get('request');
         
        $cliente = new Cliente();
        
        $formCliente = $this->createForm(new UsuarioClienteType(), $cliente);
        
        if ($request->getMethod() == 'POST') {
            
            $formCliente->bindRequest($request);
            
            //if($formContacto->isValid()){

            // Codificamos el password
//            $factory = $this->get('security.encoder_factory');
//            $codificador = $factory->getEncoder($cliente);
//            $password = $codificador->encodePassword($cliente->getPassword(), $cliente->getSalt());
//            $cliente->setPassword($password);

            $em = $this->get('doctrine')->getEntityManager();
            $em->Persist($cliente);
            $em->flush();
                    
            return $this->redirect($this->generateURL('alivinatu_homepage'));
        }

    
        return $this->render('AlivinatuBundle:Usuario:registroCliente.html.twig',
                array('formCliente' => $formCliente->createView()
                    ));
    }
}

