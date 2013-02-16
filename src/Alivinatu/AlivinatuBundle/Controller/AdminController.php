<?php

namespace Alivinatu\AlivinatuBundle\Controller;
use Alivinatu\AlivinatuBundle\Form\UsuarioAdminType;
use Alivinatu\AlivinatuBundle\Form\SalaType;
use Alivinatu\AlivinatuBundle\Form\ServicioType;
use Alivinatu\AlivinatuBundle\Form\PromocionType;

use Alivinatu\AlivinatuBundle\Entity\Usuario;
use Alivinatu\AlivinatuBundle\Entity\Sala;
use Alivinatu\AlivinatuBundle\Entity\Servicio;
use Alivinatu\AlivinatuBundle\Entity\Promocion;
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

        /* recupera todos los id de usuario que tienen contacto */
        $q = $em->createQuery('SELECT u.id, u.cedula, u.nombre, u.apellido,
            u.fNacimiento, u.usuario, u.ciudad, u.telefono
            FROM Alivinatu\AlivinatuBundle\Entity\Usuario u ORDER BY u.nombre ASC');

        $users = $q->getResult();
     
        return $this->render('AlivinatuBundle:Administrador\Cliente:AdminCliente.html.twig', array(
            'cuentas' => $users
        ));
        }  elseif ($request->getMethod() == 'POST') {
            $datoBuscar=$_POST['datoBuscar'];
            
            $em = $this->getDoctrine()->getEntityManager();
            $q = $em->createQuery("SELECT u.id, u.cedula, u.nombre, u.apellido,
            u.fNacimiento, u.usuario, u.password, u.ciudad, u.telefono
            FROM Alivinatu\AlivinatuBundle\Entity\Usuario u WHERE 
                (u.nombre LIKE '%$datoBuscar%') OR (u.cedula LIKE '%$datoBuscar%') OR
                (u.apellido LIKE '%$datoBuscar%') OR (u.usuario LIKE '%$datoBuscar%') OR
                (u.ciudad LIKE '%$datoBuscar%') ORDER BY u.nombre ASC"
                    );
            $users2 = $q->getResult();
     
            return $this->render('AlivinatuBundle:Administrador\Cliente:AdminCliente.html.twig', array(
                'cuentas' => $users2
            ));
        }
    }
    
    public function editarClienteAction($id) 
    {
        $request = $this->getRequest();

        if ($request->getMethod() == 'GET') {

            $em = $this->getDoctrine()->getEntityManager();
            $usuario = $em->getRepository('AlivinatuBundle:Usuario')->find($id);
            
            $formAdmin = $this->createForm(new UsuarioAdminType(), $usuario);
            
            return $this->render('AlivinatuBundle:Administrador\Cliente:editarCuenta.html.twig',
                array('formAdmin' => $formAdmin->createView(),
                    'id' => $id)
                    );
        }

        if ($request->getMethod() == 'POST') {
            $usuario = new Usuario();
            $em = $this->getDoctrine()->getEntityManager();
            
            $formAdmin = $this->createForm(new UsuarioAdminType(), $usuario);
            
            $formAdmin->bindRequest($request);
            
                $query = $em->createQuery(
                                "UPDATE AlivinatuBundle:Usuario u 
                                    SET u.usuario = :usuario, u.password= :password, 
                                    u.nombre= :nombre, u.apellido= :apellido, u.cedula= :cedula, 
                                    u.genero= :genero, u.fNacimiento= :fNacimiento, u.rol = :rol, 
                                    u.celular = :celular, u.calle = :calle, u.ciudad = :ciudad,
                                    u.email = :email, u.telefono = :telefono, u.observacion = :observacion,
                                    u.provincia = :provincia
                                    WHERE u.id = :id"
                        )->setParameter('usuario', $usuario->getUsuario())
                        ->setParameter('password', $usuario->getPassword())
                        ->setParameter('nombre', $usuario->getNombre())
                        ->setParameter('apellido', $usuario->getApellido())
                        ->setParameter('cedula', $usuario->getCedula())
                        ->setParameter('genero', $usuario->getGenero())
                        ->setParameter('fNacimiento', $usuario->getFNacimiento())
                        ->setParameter('rol', $usuario->getRol())
                        ->setParameter('celular', $usuario->getCelular())
                        ->setParameter('calle', $usuario->getCalle())
                        ->setParameter('ciudad', $usuario->getCiudad())
                        ->setParameter('email', $usuario->getEmail())
                        ->setParameter('telefono', $usuario->getTelefono())
                        ->setParameter('observacion', $usuario->getObservacion())
                        ->setParameter('provincia', $usuario->getProvincia())
                        
                        ->setParameter('id', $id);

                $usuario = $query->getResult();
                
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
                    (s.numero LIKE '%$datoBuscar%') OR (s.nombreSala LIKE '%$datoBuscar%') OR
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
                                "UPDATE AlivinatuBundle:Sala s SET s.numero = :numero, s.nombreSala= :nombreSala,
                                    s.estado= :estado, s.descripcion= :descripcion WHERE s.id = :id"
                        )->setParameter('numero', $sala->getNumero())
                        ->setParameter('nombreSala', $sala->getNombreSala())
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

        $q = $em->createQuery("SELECT DISTINCT s.id, s.nombre, s.costo, s.descripcion, sa.nombreSala, p.nombrePromocion
            FROM Alivinatu\AlivinatuBundle\Entity\Sala sa JOIN sa.servicios s JOIN s.promocion p 
            
            ORDER BY s.nombre ASC");
        $servicios = $q->getResult();
     
        return $this->render('AlivinatuBundle:Administrador\Servicio:AdminServicio.html.twig', array(
            'servicios' => $servicios,
            //'promocion' => $promocion
        ));
        }  elseif ($request->getMethod() == 'POST') {
            $datoBuscar=$_POST['datoBuscar'];
            
            $em = $this->getDoctrine()->getEntityManager();

            $q = $em->createQuery("SELECT DISTINCT s.id, s.nombre, s.costo, s.descripcion, sa.nombreSala, p.nombrePromocion
            FROM Alivinatu\AlivinatuBundle\Entity\Sala sa JOIN sa.servicios s JOIN s.promocion p 
            WHERE (s.nombre LIKE '%$datoBuscar%') OR (s.costo LIKE '%$datoBuscar%') OR
                  (s.descripcion LIKE '%$datoBuscar%') OR (sa.nombreSala LIKE '%$datoBuscar%')
            ORDER BY s.nombre ASC");
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
        $sala = new Sala();
        $promocion = new Promocion();
        
        $em = $this->getDoctrine()->getEntityManager();
        $q = $em->createQuery("SELECT p.id, p.nombrePromocion
        FROM Alivinatu\AlivinatuBundle\Entity\Promocion p
        ORDER BY p.nombrePromocion ASC"
                );
        $promociones = $q->getResult();

        $qSala = $em->createQuery("SELECT s.id, s.nombreSala
        FROM Alivinatu\AlivinatuBundle\Entity\Sala s
        ORDER BY s.nombreSala ASC"
                );
        $salas = $qSala->getResult();
        
        $formServicio = $this->createForm(new ServicioType(), $servicio);        
        
        if ($request->getMethod() == 'POST') {
                $formServicio = $this->createForm(new ServicioType(), $servicio);
                $formServicio->bindRequest($request);
                
                $nombre = $_POST["nombreSala"];
                $sala = $em->getRepository('AlivinatuBundle:Sala')->findOneByNombreSala($nombre);
                
                if ($_POST["nombrePromocion"] != null){
                    $nombrePromocion = $_POST["nombrePromocion"];
                    $promocion = $em->getRepository('AlivinatuBundle:Promocion')->findOneByNombrePromocion($nombrePromocion);
                    $servicio->setPromocion($promocion);
                }
                //if ( $formServicio->isValid() ) {
                    $em = $this->get('doctrine')->getEntityManager();
                    $sala->addServicio($servicio);
                    
                    
                    $em->persist($servicio);
                    $em->persist($sala);
                    
                    $em->flush();

                    return $this->redirect($this->generateURL('adminServicio'));
                //}
        }
            
        return $this->render('AlivinatuBundle:Administrador\Servicio:registroServicio.html.twig',
                array('formServicio' => $formServicio->createView(),
                    //'formPromocion' => $formPromocion->createView()
                    'promociones' => $promociones,
                    'salas' => $salas
                    ));
    }
   
    public function editarServicioAction($id) {

        $request = $this->getRequest();

        if ($request->getMethod() == 'GET') {

            $em = $this->getDoctrine()->getEntityManager();
            $servicio = $em->getRepository('AlivinatuBundle:Servicio')->find($id);
            
            $a = $_GET["nSala"];
            $sala = $em->getRepository('AlivinatuBundle:Sala')->findOneByNombreSala($a);
            
            $formServicio = $this->createForm(new ServicioType(), $servicio);
            $formSala = $this->createForm(new SalaType(), $sala);
            
            return $this->render('AlivinatuBundle:Administrador\Servicio:editarServicio.html.twig',
                array('formServicio' => $formServicio->createView(),
                    'formSala' => $formSala->createView(),
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
    
    
    
    /*
     * *************************************************************************
     * Funcion de Administrar Promocion y buscar Promocion
     * *************************************************************************
     */
    public function adminPromocionAction()
    {
    
    $request = $this->getRequest();
        
        if ($request->getMethod() != 'POST'){
            
        $em = $this->getDoctrine()->getEntityManager();

        $q = $em->createQuery("SELECT DISTINCT p.id, p.nombrePromocion, p.descuento, p.descripcion, s.nombre
            FROM Alivinatu\AlivinatuBundle\Entity\Promocion p JOIN p.servicios s
            ORDER BY p.nombrePromocion ASC");
        $promociones = $q->getResult();
     
        return $this->render('AlivinatuBundle:Administrador\Promocion:AdminPromocion.html.twig', array(
            'promociones' => $promociones,
            //'promocion' => $promocion
        ));
        }  elseif ($request->getMethod() == 'POST') {
            $datoBuscar=$_POST['datoBuscar'];
            
            $em = $this->getDoctrine()->getEntityManager();

            $q = $em->createQuery("SELECT DISTINCT p.id, p.nombrePromocion, p.descuento, p.descripcion, s.nombre
            FROM Alivinatu\AlivinatuBundle\Entity\promocion p JOIN p.servicios s 
            WHERE (p.nombrePromocion LIKE '%$datoBuscar%') OR (p.descuento LIKE '%$datoBuscar%') OR
                  (p.descripcion LIKE '%$datoBuscar%') OR (s.nombre LIKE '%$datoBuscar%')
            ORDER BY p.nombrePromocion ASC");
            $promociones2 = $q->getResult();
     
            return $this->render('AlivinatuBundle:Administrador\Promocion:AdminPromocion.html.twig', array(
                'promociones' => $promociones2
            ));
        }
    }
    
    public function registroPromocionAction()
    {
        $request = $this->get('request');      
        $servicio = new Servicio();
        $promocion = new Promocion();
        
        $em = $this->getDoctrine()->getEntityManager();
        
        $qServicios = $em->createQuery("SELECT s.id, s.nombre, p.nombrePromocion
        FROM Alivinatu\AlivinatuBundle\Entity\Servicio s 
        JOIN s.promocion p
        WHERE p.nombrePromocion = 'Ninguna'
        ORDER BY s.nombre ASC"
                );
        $servicios = $qServicios->getResult();
        
        $formPromocion = $this->createForm(new PromocionType(), $promocion);        
        
        if ($request->getMethod() == 'POST') {
            $promocion = new Promocion();
            $formPromocion = $this->createForm(new PromocionType(), $promocion);
            $formPromocion->bindRequest($request);
            
            $qListaServicios = $em->createQuery("SELECT s.id, s.nombre, s.descripcion, p.nombrePromocion
            FROM Alivinatu\AlivinatuBundle\Entity\Servicio s
            JOIN s.promocion p
            WHERE p.nombrePromocion = 'Ninguna'
            ORDER BY s.nombre ASC"
                    );
            $listServicios = $qListaServicios->getResult();
             if (isset($_POST['nombreServicio'])) {
               $ns = $_POST['nombreServicio'];
               $n = count($ns);               
               $i = 0;
               
                    $em = $this->get('doctrine')->getEntityManager();
                             for ($i=0; $i < $n; $i++){
                                foreach ($listServicios as $value) {
                                $ad= "$value[nombre]";
                                    if($ad == "{$ns[$i]}"){
                                       echo "{$ns[$i]}<br> ";
                                       $servicio = $em->getRepository('AlivinatuBundle:Servicio')->findOneByNombre($ns[$i]);
                                       $em->persist($promocion);
                                       $em->flush();
                                       
                                       $query = $em->createQuery(
                                                "UPDATE AlivinatuBundle:Servicio s SET s.promocion= :nombre
                                                    WHERE s.id = :id"
                                        )->setParameter('nombre', $promocion->getId())

                                        ->setParameter('id', $servicio->getId());
                                       
                                        $servicio = $query->getResult(); 
                                    }
                                }
                            }
                           $em->flush(); 
            }else{
                echo "<h1>no hay datos</h1>";
            }
                  return $this->redirect($this->generateURL('adminPromocion'));
        }
            
        return $this->render('AlivinatuBundle:Administrador\Promocion:registroPromocion.html.twig',
                array('formPromocion' => $formPromocion->createView(),
                    'servicios' => $servicios
                    ));
    }
    
    public function editarPromocionAction($id) {
        $request = $this->getRequest();
        if ($request->getMethod() == 'GET') {
            
            $em = $this->getDoctrine()->getEntityManager();
            $promocion = $em->getRepository('AlivinatuBundle:Promocion')->find($id);
            $servicios = $promocion->getServicios();

            $formPromocion = $this->createForm(new PromocionType(), $promocion);
            
            return $this->render('AlivinatuBundle:Administrador\Promocion:editarPromocion.html.twig',
                array('servicios' => $servicios,
                    'formPromocion' => $formPromocion->createView(),
                    'id' => $id
                    )
                    );
        }

        if ($request->getMethod() == 'POST') {
            $promocion = new Promocion();
            $query = $em->createQuery(
                                "UPDATE AlivinatuBundle:Servicio s SET s.nombre= :nombre,
                                    s.costo= :costo, s.descripcion= :descripcion WHERE s.id = :id"
                        )->setParameter('nombre', $servicio->getNombre())
                        ->setParameter('costo', $servicio->getCosto())
                        ->setParameter('descripcion', $servicio->getDescripcion())
                        
                        ->setParameter('id', $id);
                
                $servicio = $query->getResult();
                
//            $servicio = new Servicio();
//            $em = $this->getDoctrine()->getEntityManager();
//            $formServicio = $this->createForm(new ServicioType(), $servicio);
//            $formServicio->bindRequest($request);
//            
//                $query = $em->createQuery(
//                                "UPDATE AlivinatuBundle:Servicio s SET s.nombre= :nombre,
//                                    s.costo= :costo, s.descripcion= :descripcion WHERE s.id = :id"
//                        )->setParameter('nombre', $servicio->getNombre())
//                        ->setParameter('costo', $servicio->getCosto())
//                        ->setParameter('descripcion', $servicio->getDescripcion())
//                        
//                        ->setParameter('id', $id);
//                
//                $servicio = $query->getResult(); 

                
                return $this->redirect($this->generateURL('adminPromocion'));

        }        
    }
    
}   