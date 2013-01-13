<?php

/* AlivinatuBundle:Administrador\Sala:AdminSala.html.twig */
class __TwigTemplate_6aa3a4f1940d946236c9a0be8295def2 extends Twig_Template
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
        echo "    Admin. Sala
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        echo "     
    <div id=\"contenido\">
        
        <div id=\"cajaContenido\">
            <div id=\"tituloForm\"><b>Administración de Sala</b> | Administra todas las Salas</div>
            <form id=\"formAdminClienteBuscar\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSala"), "html", null, true);
        echo "\" method=\"POST\">
                <spam id=\"tituloAdminCU\">Ingresa Criterio de Búsqueda</spam>
                <input type=\"text\" id=\"inputCUBuscar\" name=\"datoBuscar\" placeholder=\"Ingresa tu búsqueda\" />
                
                <input id=\"botonCUBuscar\" type=\"submit\" value=\"Buscar\">
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSala"), "html", null, true);
        echo "\"><span id=\"botonCU\">Restaurar</span></a>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroSala"), "html", null, true);
        echo "\"><span id=\"botonCU\">Nueva Sala</span></a>
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menuAdmin"), "html", null, true);
        echo "\"><span id=\"botonCU\">Menu</span></a>
            </form>
            <div id=\"cajaScroll\">
                <table cellspacing=\"0\" cellpadding=\"0\">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Descripción</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "salas"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sala"]) {
            // line 35
            echo "                    
                <tr>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sala"), "numero"), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sala"), "nombre"), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sala"), "estado"), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "sala"), "descripcion"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarSala", array("id" => $this->getAttribute($this->getContext($context, "sala"), "id"))), "html", null, true);
            echo "\">Editar</a>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrarSala", array("id" => $this->getAttribute($this->getContext($context, "sala"), "id"))), "html", null, true);
            echo "\">Borrar</a>
                    </td>
  
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                <tr>
                    <td colspan=\"5\">No existe ninguna Sala</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sala'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
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
        return "AlivinatuBundle:Administrador\\Sala:AdminSala.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  118 => 48,  108 => 43,  104 => 42,  99 => 40,  95 => 39,  91 => 38,  87 => 37,  83 => 35,  78 => 34,  60 => 19,  56 => 18,  52 => 17,  44 => 12,  35 => 7,  30 => 4,  27 => 3,);
    }
}
