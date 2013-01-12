<?php

namespace Alivinatu\AlivinatuBundle\Controller;

use Alivinatu\AlivinatuBundle\Form\ContactoType;
use Alivinatu\AlivinatuBundle\Form\UsuarioAdminType;
use Alivinatu\AlivinatuBundle\Form\UsuarioClienteType;

use Alivinatu\AlivinatuBundle\Entity\Usuario;
use Alivinatu\AlivinatuBundle\Entity\Cliente;
use Alivinatu\AlivinatuBundle\Entity\Administrador;
use Alivinatu\AlivinatuBundle\Entity\Contacto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
public function menuAdminAction()
    {
        return $this->render('AlivinatuBundle:Administrador:menuAdmin.html.twig');
    }
    
public function adminClienteAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        //$q = $em->createQuery("select u from Alivinatu\AlivinatuBundle\Entity\Usuario u where u.id = 6");
        
        //$q = $em->createQuery("SELECT u, c FROM Alivinatu\AlivinatuBundle\Entity\Usuario u JOIN u.contacto c WHERE c.calle = 'q2'");
        ///$q = $em->createQuery("SELECT c, u FROM Alivinatu\AlivinatuBundle\Entity\Contacto c JOIN c.usuario u WHERE u.id = c.usuario");
        
        /* recupera todos los id de usuario que tienen contacto */
        $q = $em->createQuery('SELECT DISTINCT u.id, u.cedula, u.nombre, u.apellido,
            u.fNacimiento, u.usuario, u.password, c.ciudad, c.telefono
            FROM Alivinatu\AlivinatuBundle\Entity\Contacto c JOIN c.usuario u');
        /* recupera algo mismo */
        //$q = $em->createQuery("SELECT u FROM Alivinatu\AlivinatuBundle\Entity\Usuario u LEFT JOIN u.contacto c WHERE c.calle = 'q2'");
        
        $users = $q->getResult();
     
        return $this->render('AlivinatuBundle:Administrador:AdminCliente.html.twig', array(
            'cuentas' => $users
        ));
    }
    
    public function buscarClienteAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $em->getRepository('AlivinatuBundle:Usuario')->find($id);
        $em->remove($usuario);
        $em->flush();
        return $this->redirect($this->generateUrl('adminCliente'));
    }
    
    public function borrarClienteAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $em->getRepository('AlivinatuBundle:Usuario')->find($id);
        $em->remove($usuario);
        $em->flush();
        return $this->redirect($this->generateUrl('adminCliente'));
    }
    
   
    public function editarClienteAction($id) {
        $usuario = new Usuario();
        $contacto = new Contacto();

        $request = $this->getRequest();

        if ($request->getMethod() == 'GET') {

            $em = $this->getDoctrine()->getEntityManager();
            $usuario = $em->getRepository('AlivinatuBundle:Usuario')->find($id);
            
            $contacto= $usuario->getContacto();
            
            $formAdmin = $this->createForm(new UsuarioAdminType(), $usuario);
            $formContacto = $this->createForm(new ContactoType(), $contacto);
            
            return $this->render('AlivinatuBundle:Administrador:editarCuenta.html.twig',
                array('formAdmin' => $formAdmin->createView(),
                    'formContacto' => $formContacto->createView(),
                    'id' => $id)
                    );
        }

        if ($request->getMethod() == 'POST') {
            $contacto = new Contacto();
            $em = $this->getDoctrine()->getEntityManager();
            
            //$usuario->bindRequest($request);

                $query = $em->createQuery(
                                "UPDATE AlivinatuBundle:Usuario u SET u.usuario = :usuario, u.password= :password,
                                    u.nombre= :nombre, u.apellido= :apellido, u.cedula= :cedula, u.genero= :genero,
                                    u.fNacimiento= :fNacimiento WHERE u.id = :id"
                        )->setParameter('usuario', $usuario->getUsuario())
                        ->setParameter('password', $usuario->getPassword())
                        ->setParameter('nombre', $usuario->getNombre())
                        ->setParameter('apellido', $usuario->getApellido())
                        ->setParameter('cedula', $usuario->getCedula())
                        ->setParameter('genero', $usuario->getGenero())
                        ->setParameter('fNacimiento', $usuario->getFNacimiento())
                        
                        ->setParameter('id', $id);
                
                //$usuario2 = new Usuario();
                $usuario = $query->getResult();
                
               
                
                return $this->redirect($this->generateURL('adminCliente'));
                
           // }
        }
        return $this->redirect($this->generateURL('cuenta'));
        
    }
        
    
}   