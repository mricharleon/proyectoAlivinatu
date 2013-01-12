<?php

/* AlivinatuBundle:Administrador:AdminCliente.html.twig */
class __TwigTemplate_ab6d977094be9e02a5e679f15f6901bf extends Twig_Template
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
        echo "    Admin. Cliente
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        echo "     
    <div id=\"contenido\">
        
        <div id=\"cajaContenido\">
            <div id=\"tituloForm\"><b>Administración de Cliente</b> | Administra todas las cuentas de usuario</div>
            <form id=\"formAdminClienteBuscar\">
                <spam id=\"tituloAdminCU\">Ingresa Criterio de Búsqueda</spam>
                <input type=\"text\" id=\"inputCUBuscar\" placeholder=\"Ingresa tu búsqueda\" />
                
                <input id=\"botonCUBuscar\" type=\"submit\" value=\"Buscar\">
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminCliente"), "html", null, true);
        echo "\"><span id=\"botonCU\">Restaurar</span></a>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroAdmin"), "html", null, true);
        echo "\"><span id=\"botonCU\">Nueva Cuenta</span></a>
                <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menuAdmin"), "html", null, true);
        echo "\"><span id=\"botonCU\">Menu</span></a>
            </form>
            <div id=\"cajaScroll\">
                <table cellspacing=\"0\" cellpadding=\"0\">
            <thead>
                <tr>
                    <th>Cédula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Ciudad</th>
                    <th>Teléfono</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cuentas"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cuenta"]) {
            // line 39
            echo "                    
                <tr>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cuenta"), "cedula"), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cuenta"), "nombre"), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cuenta"), "apellido"), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cuenta"), "fNacimiento"), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cuenta"), "usuario"), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cuenta"), "password"), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cuenta"), "ciudad"), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cuenta"), "telefono"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarCliente", array("id" => $this->getAttribute($this->getContext($context, "cuenta"), "id"))), "html", null, true);
            echo "\">Editar</a>
                        <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrarCliente", array("id" => $this->getAttribute($this->getContext($context, "cuenta"), "id"))), "html", null, true);
            echo "\">Borrar</a>
                    </td>
  
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                <tr>
                    <td colspan=\"5\">No existe ninguna cuenta</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cuenta'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 60
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
        return "AlivinatuBundle:Administrador:AdminCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 60,  135 => 56,  125 => 51,  121 => 50,  116 => 48,  112 => 47,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  92 => 42,  88 => 41,  84 => 39,  79 => 38,  57 => 19,  53 => 18,  49 => 17,  35 => 7,  30 => 4,  27 => 3,);
    }
}
