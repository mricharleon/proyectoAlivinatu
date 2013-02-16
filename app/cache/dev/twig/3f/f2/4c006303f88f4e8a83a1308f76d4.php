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
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroServicio"), "html", null, true);
        echo "\" method=\"post\" id=\"formRegistro\" >

        <div id=\"grid1\">
            
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Servicio</div>
            
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "nombre"), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "nombre"), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "nombre"), 'widget');
        echo "
           
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "costo"), 'errors');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "costo"), 'label');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "costo"), 'widget');
        echo "

            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "descripcion"), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "descripcion"), 'label');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formServicio"), "descripcion"), 'widget');
        echo "
        
        </div>
        
        <div id=\"grid0\">
            &nbsp;
        </div>
        
        <div id=\"grid2\">
            
            <div id=\"tituloForm\"><b>Agrega</b> | Opciones Adicionales</div>
            <label>Agrega una Sala</label>
            <select name=\"nombreSala\">
               <option></option>
                ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "salas"));
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            // line 50
            echo "                    <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sala"), "nombreSala"), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "            </select>
            
            <label>Agrega una Promoción</label>
            <select name=\"nombrePromocion\">
                
                 ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "promociones"));
        foreach ($context['_seq'] as $context["_key"] => $context["promocion"]) {
            // line 58
            echo "                     <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "promocion"), "nombrePromocion"), "html", null, true);
            echo "</option>
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promocion'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "             </select>
                
            <a href=\"";
        // line 62
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
        return array (  164 => 10,  161 => 9,  147 => 62,  143 => 60,  134 => 58,  130 => 57,  123 => 52,  114 => 50,  110 => 49,  93 => 35,  89 => 34,  85 => 33,  80 => 31,  76 => 30,  72 => 29,  67 => 27,  63 => 26,  59 => 25,  50 => 19,  44 => 15,  42 => 9,  37 => 6,  34 => 5,  28 => 3,);
    }
}
