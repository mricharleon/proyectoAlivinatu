<?php

/* AlivinatuBundle:Administrador\Servicio:editarServicio.html.twig */
class __TwigTemplate_a7a8b70cef6362e2413a1ee80e39c185 extends Twig_Template
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
        echo "Editar Servicio";
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
    <div id=\"notaForm\"><b><u>NOTA:</u></b> Bienvenido(a) al Sistema de Edición de Servicios Alivinatu, para la 
        correcta edición del servicio se solicita muy comedidamente ingresar TODOS LOS CAMPOS que se exponen a continuación. </div>



    <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarServicio", array("id" => $this->getContext($context, "id"))), "html", null, true);
        echo "\" method=\"post\" id=\"formRegistro\" >

        <div id=\"grid1\">

            <div id=\"tituloForm\"><b>Edita</b> | Datos de Servicio</div>

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


        </div>

        <div id=\"grid0\">
            &nbsp;
        </div>

        <div id=\"grid2\">

            <div id=\"tituloForm\"><b>Edita</b> | Opciones Adicionales</div>
            <label>Agrega una Sala</label>
            
            <select name=\"nombreSala\">
                <option></option>
                ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "salas"));
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            // line 54
            echo "                    ";
            if (($this->getAttribute($this->getContext($context, "sala"), "nombreSala") != $this->getAttribute($this->getContext($context, "salaSelect"), "nombreSala"))) {
                // line 55
                echo "                        <option>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sala"), "nombreSala"), "html", null, true);
                echo "</option>
                        ";
            } else {
                // line 57
                echo "                        <option selected=\"true\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "salaSelect"), "nombreSala"), "html", null, true);
                echo "</option>
                    ";
            }
            // line 59
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
        echo "            </select>

            <label>Agrega una Promoción</label>
            <select name=\"nombrePromocion\">

                 ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "promociones"));
        foreach ($context['_seq'] as $context["_key"] => $context["promocion"]) {
            // line 66
            echo "                    ";
            if (($this->getAttribute($this->getContext($context, "promocion"), "nombrePromocion") != $this->getAttribute($this->getContext($context, "promocionSelect"), "nombrePromocion"))) {
                // line 67
                echo "                        <option>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "promocion"), "nombrePromocion"), "html", null, true);
                echo "</option>
                        ";
            } else {
                // line 69
                echo "                        <option selected=\"true\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "promocionSelect"), "nombrePromocion"), "html", null, true);
                echo "</option>
                    ";
            }
            // line 71
            echo "                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promocion'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 72
        echo "            </select>

            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminServicio"), "html", null, true);
        echo "\"><span id=\"botonForm2\">Cancelar</span></a>
            <input id=\"botonForm\" type=\"submit\" value=\"Actualizar\" />

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
    <div id=\"tituloOferta\">Edita el Servicio</div>
    <hr>
    ";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Administrador\\Servicio:editarServicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 10,  189 => 9,  175 => 74,  171 => 72,  165 => 71,  159 => 69,  153 => 67,  150 => 66,  146 => 65,  139 => 60,  133 => 59,  127 => 57,  121 => 55,  118 => 54,  114 => 53,  95 => 37,  91 => 36,  87 => 35,  82 => 33,  78 => 32,  74 => 31,  69 => 29,  65 => 28,  61 => 27,  52 => 21,  44 => 15,  42 => 9,  37 => 6,  34 => 5,  28 => 3,);
    }
}
