<?php

/* AlivinatuBundle:Usuario:registroCliente.html.twig */
class __TwigTemplate_10cb4fc5f1a50e5e2a6dd624ffbdf5f9 extends Twig_Template
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
        echo "Registro";
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
        <div id=\"notaForm\"><b><u>NOTA:</u></b> Bienvenido(a) al Sistema de Registro de una Nueva Cuenta Alivinatu, para la 
            correcta creación de la cuenta se solicita muy comedidamente ingresar TODOS LOS CAMPOS que se exponen a continuación. </div>
        
    
        
    <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroCliente"), "html", null, true);
        echo "\" method=\"post\" id=\"formRegistro\" >

        <div id=\"grid1\">
            
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Usuario</div>
            ";
        // line 27
        echo "            
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "usuario"), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "usuario"), 'label');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "usuario"), 'widget');
        echo "
            
            
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formCliente"), "password"), "first"), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formCliente"), "password"), "first"), 'label', array("label" => "Contraseña"));
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formCliente"), "password"), "first"), 'widget');
        echo "
           
            
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formCliente"), "password"), "second"), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formCliente"), "password"), "second"), 'label', array("label" => "Verifica Contraseña"));
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formCliente"), "password"), "second"), 'widget');
        echo "

            
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "nombre"), 'errors');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "nombre"), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "nombre"), 'widget');
        echo "
            
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "apellido"), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "apellido"), 'label');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "apellido"), 'widget');
        echo "
            
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "cedula"), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "cedula"), 'label');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "cedula"), 'widget');
        echo "
            
            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "genero"), 'errors');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "genero"), 'label');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "genero"), 'widget');
        echo "
            
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "fNacimiento"), 'errors');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "fNacimiento"), 'label');
        echo "
                
            <input id=\"datepicker\" name=\"usuario_form[fNacimiento]\" required=\"required\" />
            
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "rol"), 'errors');
        echo "
                ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "rol"), 'label');
        echo "
                ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formCliente"), "rol"), 'widget');
        echo "
        
        </div>
            
            
        <div id=\"grid0\"> &nbsp;
        </div>
            
        <div id=\"grid2\">
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Contacto</div>
            ";
        // line 77
        echo "            
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'errors');
        echo "
                ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'label');
        echo "
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'widget');
        echo "
            
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'errors');
        echo "
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'label');
        echo "
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'widget');
        echo "
            
            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'errors');
        echo "
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'label');
        echo "
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'widget');
        echo "
            
            ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'errors');
        echo "
                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'label');
        echo "
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'widget');
        echo "
            
            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'errors');
        echo "
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'label');
        echo "
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'widget');
        echo "
            
            ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'errors');
        echo "
                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'label');
        echo "
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'widget');
        echo "
            
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'errors');
        echo "
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'label');
        echo "
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'widget', array("attr" => array("wrap" => "soft")));
        echo "
            
            <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alivinatu_homepage"), "html", null, true);
        echo "\"><span id=\"botonForm2\">Cancelar</span></a>
            <input id=\"botonForm\" type=\"submit\" value=\"Crear Cuenta\" />
            
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
        <div id=\"tituloOferta\">Crea tu cuenta Alivinatu</div>
        <hr>
    ";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Usuario:registroCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 10,  298 => 9,  283 => 106,  278 => 104,  274 => 103,  270 => 102,  265 => 100,  261 => 99,  257 => 98,  252 => 96,  248 => 95,  244 => 94,  239 => 92,  235 => 91,  231 => 90,  226 => 88,  222 => 87,  218 => 86,  213 => 84,  209 => 83,  205 => 82,  200 => 80,  196 => 79,  192 => 78,  189 => 77,  176 => 66,  172 => 65,  168 => 64,  161 => 60,  157 => 59,  152 => 57,  148 => 56,  144 => 55,  139 => 53,  135 => 52,  131 => 51,  126 => 49,  122 => 48,  118 => 47,  113 => 45,  109 => 44,  105 => 43,  99 => 40,  95 => 39,  91 => 38,  85 => 35,  81 => 34,  77 => 33,  71 => 30,  67 => 29,  63 => 28,  60 => 27,  52 => 21,  44 => 15,  42 => 9,  37 => 6,  34 => 5,  28 => 3,);
    }
}
