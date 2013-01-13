<?php

namespace Alivinatu\AlivinatuBundle\Controller;

use Alivinatu\AlivinatuBundle\Form\ContactoType;
use Alivinatu\AlivinatuBundle\Form\UsuarioAdminType;
use Alivinatu\AlivinatuBundle\Form\SalaType;
use Alivinatu\AlivinatuBundle\Form\ServicioType;
use Alivinatu\AlivinatuBundle\Form\UsuarioClienteType;

use Alivinatu\AlivinatuBundle\Entity\Usuario;
use Alivinatu\AlivinatuBundle\Entity\Sala;
use Alivinatu\AlivinatuBundle\Entity\Servicio;
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
    
    /*
     * Funcion de Administrar Cliente y buscar cliente
     */
public function adminClienteAction()
    {
    
    $request = $this->getRequest();
        
        if ($request->getMethod() != 'POST'){
            
        $em = $this->getDoctrine()->getEntityManager();
        //$q = $em->createQuery("select u from Alivinatu\AlivinatuBundle\Entity\Usuario u where u.id = 6");
        
        //$q = $em->createQuery("SELECT u, c FROM Alivinatu\AlivinatuBundle\Entity\Usuario u JOIN u.contacto c WHERE c.calle = 'q2'");
        ///$q = $em->createQuery("SELECT c, u FROM Alivinatu\AlivinatuBundle\Entity\Contacto c JOIN c.usuario u WHERE u.id = c.usuario");
        
        /* recupera todos los id de usuario que tienen contacto */
        $q = $em->createQuery('SELECT DISTINCT u.id, u.cedula, u.nombre, u.apellido,
            u.fNacimiento, u.usuario, u.password, c.ciudad, c.telefono
            FROM Alivinatu\AlivinatuBundle\Entity\Contacto c JOIN c.usuario u ORDER BY u.nombre ASC');
        /* recupera algo mismo */
        //$q = $em->createQuery("SELECT u FROM Alivinatu\AlivinatuBundle\Entity\Usuario u LEFT JOIN u.contacto c WHERE c.calle = 'q2'");
        
        $users = $q->getResult();
     
        return $this->render('AlivinatuBundle:Administrador\Cliente:AdminCliente.html.twig', array(
            'cuentas' => $users
        ));
        }  elseif ($request->getMethod() == 'POST') {
            $datoBuscar=$_POST['datoBuscar'];
            
            $em = $this->getDoctrine()->getEntityManager();
            $q = $em->createQuery("SELECT DISTINCT u.id, u.cedula, u.nombre, u.apellido,
            u.fNacimiento, u.usuario, u.password, c.ciudad, c.telefono
            FROM Alivinatu\AlivinatuBundle\Entity\Contacto c JOIN c.usuario u WHERE 
                (u.nombre LIKE '%$datoBuscar%') OR (u.cedula LIKE '%$datoBuscar%') OR
                (u.apellido LIKE '%$datoBuscar%') OR (u.usuario LIKE '%$datoBuscar%') OR
                (c.ciudad LIKE '%$datoBuscar%') ORDER BY u.nombre ASC"
                    );
            $users2 = $q->getResult();
     
            return $this->render('AlivinatuBundle:Administrador\Cliente:AdminCliente.html.twig', array(
                'cuentas' => $users2
            ));
        }
    }
    
    /*
     * Funcion Borrar Cuenta de Cliente
     */
    public function borrarClienteAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $em->getRepository('AlivinatuBundle:Usuario')->find($id);
        $em->remove($usuario);
        $em->flush();
        return $this->redirect($this->generateUrl('adminCliente'));
    }
    
   
    public function editarClienteAction($id) 
    {
        $request = $this->getRequest();

        if ($request->getMethod() == 'GET') {

            $em = $this->getDoctrine()->getEntityManager();
            $usuario = $em->getRepository('AlivinatuBundle:Usuario')->find($id);
            
            $contacto= $usuario->getContacto();
            
            $formAdmin = $this->createForm(new UsuarioAdminType(), $usuario);
            $formContacto = $this->createForm(new ContactoType(), $contacto);
            
            return $this->render('AlivinatuBundle:Administrador\Cliente:editarCuenta.html.twig',
                array('formAdmin' => $formAdmin->createView(),
                    'formContacto' => $formContacto->createView(),
                    'id' => $id)
                    );
        }

        if ($request->getMethod() == 'POST') {
            $usuario = new Usuario();
            $contacto = new Contacto();
            $em = $this->getDoctrine()->getEntityManager();
            
            $formAdmin = $this->createForm(new UsuarioAdminType(), $usuario);
            $formContacto = $this->createForm(new ContactoType(), $contacto);
            
            $formAdmin->bindRequest($request);
            $formContacto->bindRequest($request);
            
                $query = $em->createQuery(
                                "UPDATE AlivinatuBundle:Usuario u SET u.usuario = :usuario, u.password= :password,
                                    u.nombre= :nombre, u.apellido= :apellido, u.cedula= :cedula, u.genero= :genero,
                                    u.fNacimiento= :fNacimiento, u.rol = :rol
                                    WHERE u.id = :id"
                        )->setParameter('usuario', $usuario->getUsuario())
                        ->setParameter('password', $usuario->getPassword())
                        ->setParameter('nombre', $usuario->getNombre())
                        ->setParameter('apellido', $usuario->getApellido())
                        ->setParameter('cedula', $usuario->getCedula())
                        ->setParameter('genero', $usuario->getGenero())
                        ->setParameter('fNacimiento', $usuario->getFNacimiento())
                        ->setParameter('rol', $usuario->getRol())
                        //->setParameter('ciudad', $contacto->getCiudad())
                        
                        ->setParameter('id', $id);

                $usuario = $query->getResult();
                $contacto = $query->getResult();
                
                return $this->redirect($this->generateURL('adminCliente'));
                
           // }
        }
        return $this->redirect($this->generateURL('cuenta'));
        
    }
    
    
    /*
     * *************************************************************************
     * Funciones para el CU Administrar Sala
     * *************************************************************************
     */
        
    public function adminSalaAction()
    {
        $request = $this->getRequest();
        
        if ($request->getMethod() != 'POST')
        {   
            $em = $this->getDoctrine()->getEntityManager();

            $q = $em->createQuery('SELECT s FROM Alivinatu\AlivinatuBundle\Entity\sala s');

            $salas = $q->getResult();

            return $this->render('AlivinatuBundle:Administrador\Sala:AdminSala.html.twig', array(
                'salas' => $salas
            ));
        } elseif ($request->getMethod() == 'POST') 
            {
                $datoBuscar=$_POST['datoBuscar'];

                $em = $this->getDoctrine()->getEntityManager();
                $q = $em->createQuery("SELECT s FROM Alivinatu\AlivinatuBundle\Entity\Sala s WHERE 
                    (s.numero LIKE '%$datoBuscar%') OR (s.nombre LIKE '%$datoBuscar%') OR
                    (s.estado LIKE '%$datoBuscar%') OR (s.descripcion LIKE '%$datoBuscar%') ORDER BY s.numero ASC"
                        );
                $salas2 = $q->getResult();

                return $this->render('AlivinatuBundle:Administrador\Sala:AdminSala.html.twig', array(
                    'salas' => $salas2
                ));
            }
    }
    
    
    public function registroSalaAction()
    {
        $request = $this->get('request');
         
        $sala = new Sala();
        
        $formSala = $this->createForm(new SalaType(), $sala);        
        
        if ($request->getMethod() == 'POST') {
            $sala = new Sala();
            $formSala = $this->createForm(new SalaType(), $sala);
            $formSala->bindRequest($request);
            
            $em = $this->get('doctrine')->getEntityManager();
            $em->persist($sala);
            $em->flush();
                    
            return $this->redirect($this->generateURL('adminSala'));
        }

        return $this->render('AlivinatuBundle:Administrador\Sala:registroSala.html.twig',
                array('formSala' => $formSala->createView()
                    ));
    }
    
        /*
     * Funcion Borrar sala
     */
    public function borrarSalaAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $sala = $em->getRepository('AlivinatuBundle:Sala')->find($id);
        $em->remove($sala);
        $em->flush();
        return $this->redirect($this->generateUrl('adminSala'));
    }
    
    
    public function editarSalaAction($id) {

        $request = $this->getRequest();

        if ($request->getMethod() == 'GET') {

            $em = $this->getDoctrine()->getEntityManager();
            $sala = $em->getRepository('AlivinatuBundle:Sala')->find($id);
            
            $formSala = $this->createForm(new SalaType(), $sala);
            
            return $this->render('AlivinatuBundle:Administrador\Sala:editarSala.html.twig',
                array('formSala' => $formSala->createView(),
                    'id' => $id)
                    );
        }

        if ($request->getMethod() == 'POST') {
            $sala = new Sala();
            $em = $this->getDoctrine()->getEntityManager();
            $formSala = $this->createForm(new SalaType(), $sala);
            $formSala->bindRequest($request);
            
                $query = $em->createQuery(
                                "UPDATE AlivinatuBundle:Sala s SET s.numero = :numero, s.nombre= :nombre,
                                    s.estado= :estado, s.descripcion= :descripcion WHERE s.id = :id"
                        )->setParameter('numero', $sala->getNumero())
                        ->setParameter('nombre', $sala->getNombre())
                        ->setParameter('estado', $sala->getEstado())
                        ->setParameter('descripcion', $sala->getDescripcion())
                        
                        ->setParameter('id', $id);
                
                $sala = $query->getResult(); 

                
                return $this->redirect($this->generateURL('adminSala'));

        }        
    }
    
    
    /*
     * *************************************************************************
     * Funcion de Administrar Servicio y buscar servicio
     * *************************************************************************
     */
    public function adminServicioAction()
    {
    
    $request = $this->getRequest();
        
        if ($request->getMethod() != 'POST'){
            
        $em = $this->getDoctrine()->getEntityManager();

        $q = $em->createQuery('SELECT s.id, s.nombre, s.costo, s.descripcion
            FROM Alivinatu\AlivinatuBundle\Entity\Servicio s ORDER BY s.nombre ASC');

        $servicios = $q->getResult();
     
        return $this->render('AlivinatuBundle:Administrador\Servicio:AdminServicio.html.twig', array(
            'servicios' => $servicios
        ));
        }  elseif ($request->getMethod() == 'POST') {
            $datoBuscar=$_POST['datoBuscar'];
            
            $em = $this->getDoctrine()->getEntityManager();
            $q = $em->createQuery("SELECT s.id, s.nombre, s.costo, s.descripcion
            FROM Alivinatu\AlivinatuBundle\Entity\Servicio s WHERE 
                (s.nombre LIKE '%$datoBuscar%') OR (s.costo LIKE '%$datoBuscar%') OR
                (s.descripcion LIKE '%$datoBuscar%') ORDER BY s.nombre ASC"
                    );
            $servicios2 = $q->getResult();
     
            return $this->render('AlivinatuBundle:Administrador\Servicio:AdminServicio.html.twig', array(
                'servicios' => $servicios2
            ));
        }
    }
    
    public function registroServicioAction()
    {
        $request = $this->get('request');
         
        $servicio = new Servicio();
        
        $formServicio = $this->createForm(new ServicioType(), $servicio);        
        
        
            if ($request->getMethod() == 'POST') {
                
                $servicio = new Servicio();
                $formServicio = $this->createForm(new ServicioType(), $servicio);
                $formServicio->bindRequest($request);
                
                if ( $formServicio->isValid() ) {
                
                    $em = $this->get('doctrine')->getEntityManager();
                    $em->persist($servicio);
                    $em->flush();

                    return $this->redirect($this->generateURL('adminServicio'));
              }
        }
        return $this->render('AlivinatuBundle:Administrador\Servicio:registroServicio.html.twig',
                array('formServicio' => $formServicio->createView()
                    ));
    }
    
    /*
     * Funcion Borrar sala
     */
    public function borrarServicioAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $servicio = $em->getRepository('AlivinatuBundle:Servicio')->find($id);
        $em->remove($servicio);
        $em->flush();
        return $this->redirect($this->generateUrl('adminServicio'));
    }
    
    
    public function editarServicioAction($id) {

        $request = $this->getRequest();

        if ($request->getMethod() == 'GET') {

            $em = $this->getDoctrine()->getEntityManager();
            $servicio = $em->getRepository('AlivinatuBundle:Servicio')->find($id);
            
            $formServicio = $this->createForm(new ServicioType(), $servicio);
            
            return $this->render('AlivinatuBundle:Administrador\Servicio:editarServicio.html.twig',
                array('formServicio' => $formServicio->createView(),
                    'id' => $id)
                    );
        }

        if ($request->getMethod() == 'POST') {
            $servicio = new Servicio();
            $em = $this->getDoctrine()->getEntityManager();
            $formServicio = $this->createForm(new ServicioType(), $servicio);
            $formServicio->bindRequest($request);
            
                $query = $em->createQuery(
                                "UPDATE AlivinatuBundle:Servicio s SET s.nombre= :nombre,
                                    s.costo= :costo, s.descripcion= :descripcion WHERE s.id = :id"
                        )->setParameter('nombre', $servicio->getNombre())
                        ->setParameter('costo', $servicio->getCosto())
                        ->setParameter('descripcion', $servicio->getDescripcion())
                        
                        ->setParameter('id', $id);
                
                $servicio = $query->getResult(); 

                
                return $this->redirect($this->generateURL('adminServicio'));

        }        
    }
    
}   