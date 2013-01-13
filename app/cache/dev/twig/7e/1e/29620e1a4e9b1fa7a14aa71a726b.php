<?php

/* AlivinatuBundle:Usuario:registro.html.twig */
class __TwigTemplate_7e1e29620e1a4e9b1fa7a14aa71a726b extends Twig_Template
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
    ";
        // line 21
        echo "        
    <form action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroAdmin"), "html", null, true);
        echo "\" method=\"post\" id=\"formRegistro\" >
        ";
        // line 25
        echo "
        <div id=\"grid1\">
            
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Usuario</div>
            ";
        // line 30
        echo "            
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "usuario"), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "usuario"), 'label');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "usuario"), 'widget');
        echo "
            
            
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "first"), 'errors');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "first"), 'label', array("label" => "Contraseña"));
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "first"), 'widget');
        echo "
           
            
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "second"), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "second"), 'label', array("label" => "Verifica Contraseña"));
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "second"), 'widget');
        echo "

            
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "nombre"), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "nombre"), 'label');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "nombre"), 'widget');
        echo "
            
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "apellido"), 'errors');
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "apellido"), 'label');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "apellido"), 'widget');
        echo "
            
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "cedula"), 'errors');
        echo "
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "cedula"), 'label');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "cedula"), 'widget');
        echo "
            
            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "genero"), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "genero"), 'label');
        echo "
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "genero"), 'widget');
        echo "
            
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "fNacimiento"), 'errors');
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "fNacimiento"), 'label');
        echo "
                
            <input id=\"datepicker\" name=\"usuario_form[fNacimiento]\" required=\"required\" />
            
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "rol"), 'errors');
        echo "
                ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "rol"), 'label');
        echo "
                ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "rol"), 'widget');
        echo "
        
        </div>
            
            
        <div id=\"grid0\"> &nbsp;
        </div>
            
        <div id=\"grid2\">
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Contacto</div>
            ";
        // line 80
        echo "            
            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'errors');
        echo "
                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'label');
        echo "
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'widget');
        echo "
            
            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'label');
        echo "
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'widget');
        echo "
            
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'label');
        echo "
                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'widget');
        echo "
            
            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'label');
        echo "
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'widget');
        echo "
            
            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'errors');
        echo "
                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'label');
        echo "
                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'widget');
        echo "
            
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'errors');
        echo "
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'label');
        echo "
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'widget');
        echo "
            
            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'errors');
        echo "
                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'label');
        echo "
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'widget', array("attr" => array("wrap" => "soft")));
        echo "
            
            <a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminCliente"), "html", null, true);
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
        return "AlivinatuBundle:Usuario:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 10,  300 => 9,  285 => 109,  280 => 107,  276 => 106,  272 => 105,  267 => 103,  263 => 102,  259 => 101,  254 => 99,  250 => 98,  246 => 97,  241 => 95,  237 => 94,  233 => 93,  228 => 91,  224 => 90,  220 => 89,  215 => 87,  211 => 86,  207 => 85,  202 => 83,  198 => 82,  194 => 81,  191 => 80,  178 => 69,  174 => 68,  170 => 67,  163 => 63,  159 => 62,  154 => 60,  150 => 59,  146 => 58,  141 => 56,  137 => 55,  133 => 54,  128 => 52,  124 => 51,  120 => 50,  115 => 48,  111 => 47,  107 => 46,  101 => 43,  97 => 42,  93 => 41,  87 => 38,  83 => 37,  79 => 36,  73 => 33,  69 => 32,  65 => 31,  62 => 30,  56 => 25,  52 => 22,  49 => 21,  44 => 15,  42 => 9,  37 => 6,  34 => 5,  28 => 3,);
    }
}
