<?php

/* AlivinatuBundle:Administrador:editarCuenta.html.twig */
class __TwigTemplate_2b2b58afdb0f664b684a316cb44c03d2 extends Twig_Template
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
        // line 4
        echo "    Editar Cuenta
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        echo "   
<div id=\"contenido\">
    ";
        // line 9
        $this->displayBlock('tituloContenido', $context, $blocks);
        // line 15
        echo "    
        <div id=\"notaForm\"><b><u>NOTA:</u></b> Bienvenido(a) al Sistema de Edición de una Cuenta Alivinatu, para la 
            correcta edición de la cuenta se solicita muy comedidamente ingresar TODOS LOS CAMPOS que se exponen a continuación. </div>
    <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarCliente", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" id=\"formRegistro\" >

        <div id=\"grid1\">
            
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Usuario</div>
            ";
        // line 24
        echo "            
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "usuario"), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "usuario"), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "usuario"), 'widget');
        echo "
            
            
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "first"), 'errors');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "first"), 'label', array("label" => "Contraseña"));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "first"), 'widget');
        echo "
           
            
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "second"), 'errors');
        echo "
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "second"), 'label', array("label" => "Verifica Contraseña"));
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getContext($context, "formAdmin"), "password"), "second"), 'widget');
        echo "

            
            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "nombre"), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "nombre"), 'label');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "nombre"), 'widget');
        echo "
            
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "apellido"), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "apellido"), 'label');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "apellido"), 'widget');
        echo "
            
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "cedula"), 'errors');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "cedula"), 'label');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "cedula"), 'widget');
        echo "
            
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "genero"), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "genero"), 'label');
        echo "
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "genero"), 'widget');
        echo "
            
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "fNacimiento"), 'errors');
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "fNacimiento"), 'label');
        echo "
                
            <input id=\"datepicker\" name=\"usuario_form[fNacimiento]\" required=\"required\" />
            
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "rol"), 'errors');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "rol"), 'label');
        echo "
                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formAdmin"), "rol"), 'widget');
        echo "
        
        </div>
            
            
        <div id=\"grid0\"> &nbsp;
        </div>
            
        <div id=\"grid2\">
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Contacto</div>
            ";
        // line 74
        echo "            
            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'errors');
        echo "
                ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'label');
        echo "
                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "celular"), 'widget');
        echo "
            
            ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'errors');
        echo "
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'label');
        echo "
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "telefono"), 'widget');
        echo "
            
            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'errors');
        echo "
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'label');
        echo "
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "email"), 'widget');
        echo "
            
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'errors');
        echo "
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'label');
        echo "
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "provincia"), 'widget');
        echo "
            
            ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'errors');
        echo "
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'label');
        echo "
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "ciudad"), 'widget');
        echo "
            
            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'errors');
        echo "
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'label');
        echo "
                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "calle"), 'widget');
        echo "
            
            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'errors');
        echo "
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'label');
        echo "
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formContacto"), "observacion"), 'widget', array("attr" => array("wrap" => "soft")));
        echo "
            
            <a href=\"";
        // line 103
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
        <div id=\"tituloOferta\">Edición de cuenta Alivinatu</div>
        <hr>
    ";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Administrador:editarCuenta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 10,  294 => 9,  280 => 103,  275 => 101,  271 => 100,  267 => 99,  262 => 97,  258 => 96,  254 => 95,  249 => 93,  245 => 92,  241 => 91,  236 => 89,  232 => 88,  228 => 87,  223 => 85,  219 => 84,  215 => 83,  210 => 81,  206 => 80,  202 => 79,  197 => 77,  193 => 76,  189 => 75,  186 => 74,  173 => 63,  169 => 62,  165 => 61,  158 => 57,  154 => 56,  149 => 54,  145 => 53,  141 => 52,  136 => 50,  132 => 49,  128 => 48,  123 => 46,  119 => 45,  115 => 44,  110 => 42,  106 => 41,  102 => 40,  96 => 37,  92 => 36,  88 => 35,  82 => 32,  78 => 31,  74 => 30,  68 => 27,  64 => 26,  60 => 25,  57 => 24,  49 => 18,  44 => 15,  42 => 9,  36 => 7,  31 => 4,  28 => 3,);
    }
}
