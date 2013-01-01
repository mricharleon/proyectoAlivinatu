<?php
    namespace Alivinatu\AlivinatuBundle\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Alivinatu\AlivinatuBundle\Entity\Articles;
    use Alivinatu\AlivinatuBundle\Entity\Comments;
    
class ArticulosController extends Controller
{      
    public function listarAction()
    {
        /*$articulos = $em->getRepository('AlivinatuBundle:Articles')->findByCategory('ejemplo'); */
        
        /*$em = $this->getDoctrine()->getEntityManager();
        $articulos = $em->getRepository('AlivinatuBundle:Articles')->findAll();
        
        return $this->render('AlivinatuBundle:Articulos:listar.html.twig',
        array('articulos' => $articulos));*/
        
        $em = $this->getDoctrine()->getEntityManager();
        $articulo = $em->getRepository('AlivinatuBundle:Articles')->find(3);
        
        $comentarios = $articulo->getComments();
        
        /*foreach($comentarios as $c)
        {
            echo $c->getContent();
            echo $c->getReplyTo();
            echo '<br>';
        }*/
        
        return $this->render('AlivinatuBundle:Articulos:listar.html.twig',
        array('comentarios' => $comentarios, 'articulos'=>$articulo));
        
        
    }
    
    public function crearAction($n)
    {
        $comentario = new Comments();
        $comentario->setAuthor('Autor del comentario');
        $comentario->setContent('Contenido del comentario');
        $comentario->setReplyTo(101);
        
        $em2 = $this->getDoctrine()->getEntityManager();
        $articulo = $em2->getRepository('AlivinatuBundle:Articles')->find($n);
        
        
        $comentario->setArticle($articulo);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($comentario);
        $em->persist($articulo);
        $em->flush();
        
        return $this->render('AlivinatuBundle:Articulos:articulo.html.twig',
        array('articulo' => $articulo));
    }
    
    public function editarAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $articulo = $em->getRepository('AlivinatuBundle:Articles')->find($id);
        $articulo->setTitle('Articulo de ejemplo 1 - modificado');
        $articulo->setUpdated(new \DateTime());
        $em->persist($articulo);
        $em->flush();
        return $this->render('AlivinatuBundle:Articulos:articulo.html.twig',
        array('articulo' => $articulo));
    }
    
    public function borrarAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $articulo = $em->getRepository('AlivinatuBundle:Articles')->find($id);
        
        $em->remove($articulo);
        $em->flush();
        return $this->redirect(
        $this->generateUrl('articulo_listar')
        );
    }
}

?>
