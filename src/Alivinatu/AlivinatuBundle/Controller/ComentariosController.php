<?php

namespace Alivinatu\AlivinatuBundle\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Alivinatu\AlivinatuBundle\Entity\Comments;
    
    
class ComentariosController extends Controller
{
    public function crearAction()
    {
        $comentario = new Comments();
        $comentario->setAuthor('Autor de ejemplo 1');
        $comentario->setContent('Contenido del comentario');
        $comentario->setReplyTo(1250);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($comentario);
        $em->flush();
        
        return $this->render('AlivinatuBundle:Comentarios:comentario.html.twig',
        array('comentario' => $comentario));
    }
    
    
    public function listarComentariosAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $comentario = $em->getRepository('AlivinatuBundle:Comments')->find(1);
        
        $articulo = $comentario->getArticle();
        
        return $this->render('AlivinatuBundle:Comentarios:listar.html.twig',
        array('comentarios' => $comentario, 'articulos'=>$articulo));   
    }
}