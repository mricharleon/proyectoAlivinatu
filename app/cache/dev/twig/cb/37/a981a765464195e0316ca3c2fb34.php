<?php

/* AlivinatuBundle:Administrador\Servicio:AdminServicio.html.twig */
class __TwigTemplate_cb37a981a765464195e0316ca3c2fb34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AlivinatuBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
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
        echo "    Admin. Servicio
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        echo "     
    <div id=\"contenido\">
        
        <div id=\"cajaContenido\">
            <div id=\"tituloForm\"><b>Administración de Servicios</b> | Administra todos los Servicios</div>
            <form id=\"formAdminClienteBuscar\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminServicio"), "html", null, true);
        echo "\" method=\"POST\">
                <spam id=\"tituloAdminCU\">Ingresa Criterio de Búsqueda</spam>
                <input type=\"text\" id=\"inputCUBuscar\" name=\"datoBuscar\" placeholder=\"Ingresa tu búsqueda\" />
                
                <input id=\"botonCUBuscar\" type=\"submit\" value=\"Buscar\">
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminServicio"), "html", null, true);
        echo "\"><span id=\"botonCU\">Restaurar</span></a>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroServicio"), "html", null, true);
        echo "\"><span id=\"botonCU\">Nuevo Servicio</span></a>
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menuAdmin"), "html", null, true);
        echo "\"><span id=\"botonCU\">Menu</span></a>
            </form>
            <div id=\"cajaScroll\">
                <table cellspacing=\"0\" cellpadding=\"0\">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Costo</th>
                    <th>Descripción</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "servicios"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 34
            echo "                    
                <tr>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "servicio"), "nombre"), "html", null, true);
            echo "</td>
                    <td>\$";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "servicio"), "costo"), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "servicio"), "descripcion"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarServicio", array("id" => $this->getAttribute($this->getContext($context, "servicio"), "id"))), "html", null, true);
            echo "\">Editar</a>
                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrarServicio", array("id" => $this->getAttribute($this->getContext($context, "servicio"), "id"))), "html", null, true);
            echo "\">Borrar</a>
                    </td>
  
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "                <tr>
                    <td colspan=\"5\">No existe ningun Servicio</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "                
                
            </tbody>
        </table>
                </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Administrador\\Servicio:AdminServicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  113 => 46,  103 => 41,  99 => 40,  94 => 38,  90 => 37,  86 => 36,  82 => 34,  77 => 33,  60 => 19,  56 => 18,  52 => 17,  44 => 12,  35 => 7,  30 => 4,  27 => 3,);
    }
}
