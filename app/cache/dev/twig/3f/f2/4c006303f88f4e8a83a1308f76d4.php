<?php

/* AlivinatuBundle:Administrador\Servicio:registroServicio.html.twig */
class __TwigTemplate_3ff24c006303f88f4e8a83a1308f76d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AlivinatuBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
            'tituloContenido' => array($this, 'block_tituloContenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AlivinatuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Registro Servicio";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "      
<div id=\"contenido\">
    
    ";
        // line 9
        $this->displayBlock('tituloContenido', $context, $blocks);
        // line 15
        echo "    
        <div id=\"notaForm\"><b><u>NOTA:</u></b> Bienvenido(a) al Sistema de Registro de un Nuevo Servicio Alivinatu, para la 
            correcta creación del servicio se solicita muy comedidamente ingresar TODOS LOS CAMPOS que se exponen a continuación. </div>
        
    
        
    <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroServicio"), "html", null, true);
        echo "\" method=\"post\" id=\"formRegistro\" >

        <div id=\"grid1\">
            
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Servicio</div>
            
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "nombre"), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "nombre"), 'label');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "nombre"), 'widget');
        echo "
           
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "costo"), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "costo"), 'label');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "costo"), 'widget');
        echo "

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "descripcion"), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "descripcion"), 'label');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "descripcion"), 'widget');
        echo "
            
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminServicio"), "html", null, true);
        echo "\"><span id=\"botonForm2\">Cancelar</span></a>
            <input id=\"botonForm\" type=\"submit\" value=\"Crear Servicio\" />
        
        </div>

    </form>
    
</div>

";
    }

    // line 9
    public function block_tituloContenido($context, array $blocks = array())
    {
        // line 10
        echo "        
        <hr>
        <div id=\"tituloOferta\">Crea un Nuevo Servicio</div>
        <hr>
    ";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Administrador\\Servicio:registroServicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 10,  114 => 9,  100 => 39,  95 => 37,  91 => 36,  87 => 35,  82 => 33,  78 => 32,  74 => 31,  69 => 29,  65 => 28,  61 => 27,  52 => 21,  44 => 15,  42 => 9,  37 => 6,  34 => 5,  28 => 3,);
    }
}
