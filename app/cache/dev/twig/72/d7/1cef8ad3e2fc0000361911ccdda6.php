<?php

/* AlivinatuBundle:Administrador\Promocion:registroPromocion.html.twig */
class __TwigTemplate_72d71cef8ad3e2fc0000361911ccdda6 extends Twig_Template
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
        echo "Registro Promoción";
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
        <div id=\"notaForm\"><b><u>NOTA:</u></b> Bienvenido(a) al Sistema de Registro de una Nueva Promoción Alivinatu, para la 
            correcta creación de una promoción se solicita muy comedidamente ingresar TODOS LOS CAMPOS que se exponen a continuación. </div>
     
    <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroServicio"), "html", null, true);
        echo "\" method=\"post\" id=\"formRegistro\" >

        <div id=\"grid1\">
            
            <div id=\"tituloForm\"><b>Ingresa</b> | Datos de Promoción</div>
            
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "nombrePromocion"), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "nombrePromocion"), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "nombrePromocion"), 'widget');
        echo "
           
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "descuento"), 'errors');
        echo "
                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "descuento"), 'label');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "descuento"), 'widget');
        echo "

            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "descripcion"), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "descripcion"), 'label');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formPromocion"), "descripcion"), 'widget');
        echo "
        
        </div>
        
        <div id=\"grid0\" style=\"width: 30px\">
            &nbsp;
        </div>
        
        <div id=\"grid2\" style=\"width: 500px\">
            
            <div id=\"tituloForm\"><b>Agrega</b> | Opciones Adicionales</div>
            
            <table cellspacing=\"0\" cellpadding=\"0\" style=\"width: 450px\">
            <thead>
                <tr>
                    <th style=\"text-align: center; opacity: .9\">Servicio</th>
                    <th style=\"text-align: center; width: 125px; opacity: .9\">Agregar promoción</th>
                </tr>
            </thead>

            <tbody>
            ";
        // line 56
        if (($this->getContext($context, "servicios") != "null")) {
            // line 57
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "servicios"));
            foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
                // line 58
                echo "                <tr>           
                    <td>
                        ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "servicio"), "nombre"), "html", null, true);
                echo "
                        <td style=\"text-align: center\">
                            <input type=\"checkbox\" name=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "servicio"), "nombre"), "html", null, true);
                echo "\"/>
                        </td>
                    </td>
                    
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 68
            echo "            ";
        } else {
            echo "                    
                <tr>
                    <td colspan=\"5\">No existe ninguna Promoción</td>
                </tr>
            ";
        }
        // line 73
        echo " 
            </tbody>
        </table>
                
            <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPromocion"), "html", null, true);
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
        <div id=\"tituloOferta\">Crea una nueva Promoción</div>
        <hr>
    ";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Administrador\\Promocion:registroPromocion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 10,  174 => 9,  160 => 77,  154 => 73,  145 => 68,  133 => 62,  128 => 60,  124 => 58,  119 => 57,  117 => 56,  93 => 35,  89 => 34,  85 => 33,  80 => 31,  76 => 30,  72 => 29,  67 => 27,  63 => 26,  59 => 25,  50 => 19,  44 => 15,  42 => 9,  37 => 6,  34 => 5,  28 => 3,);
    }
}
