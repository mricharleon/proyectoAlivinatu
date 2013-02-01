<?php

/* AlivinatuBundle:Administrador\Promocion:AdminPromocion.html.twig */
class __TwigTemplate_963c710da7435befcb0967d561d726d6 extends Twig_Template
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
        echo "    Admin. Promoción
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        echo "     
    <div id=\"contenido\">
        
        <div id=\"cajaContenido\">
            <div id=\"tituloForm\"><b>Administración de Promociones</b> | Administra todas las Promociones</div>
            <form id=\"formAdminClienteBuscar\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPromocion"), "html", null, true);
        echo "\" method=\"POST\">
                <spam id=\"tituloAdminCU\">Ingresa Criterio de Búsqueda</spam>
                <input type=\"text\" id=\"inputCUBuscar\" name=\"datoBuscar\" placeholder=\"Ingresa tu búsqueda\" />
                
                <input id=\"botonCUBuscar\" type=\"submit\" value=\"Buscar\">
                <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPromocion"), "html", null, true);
        echo "\"><span id=\"botonCU\">Restaurar</span></a>
                <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registroPromocion"), "html", null, true);
        echo "\"><span id=\"botonCU\">Nueva Promoción</span></a>
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
                    <th>Descuento</th>
                    <th>Descripción</th>
                    <th>Servicios</th>
                    <th colspan=\"2\">Opciones</th>
                </tr>
            </thead>

            <tbody>
                ";
        // line 35
        $context["np"] = "";
        // line 36
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "promociones"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["promocion"]) {
            // line 37
            echo "                
                    ";
            // line 38
            if (($this->getContext($context, "np") != $this->getAttribute($this->getContext($context, "promocion"), "nombrePromocion"))) {
                // line 39
                echo "                        ";
                if (($this->getAttribute($this->getContext($context, "promocion"), "nombrePromocion") != "Ninguna")) {
                    // line 40
                    echo "                            <tr>
                                <td>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "promocion"), "nombrePromocion"), "html", null, true);
                    echo "</td>
                                <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "promocion"), "descuento"), "html", null, true);
                    echo "%</td>
                                <td>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "promocion"), "descripcion"), "html", null, true);
                    echo "</td>
                                <td>
                                    <ul style=\"list-style: symbols; margin: 0px; padding: 0px 0px 0px 15px\">
                                        ";
                    // line 46
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "promociones"));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 47
                        echo "                                           ";
                        if (($this->getAttribute($this->getContext($context, "p"), "nombrePromocion") == $this->getAttribute($this->getContext($context, "promocion"), "nombrePromocion"))) {
                            // line 48
                            echo "                                            <li style=\"left: 0px;\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "p"), "nombre"), "html", null, true);
                            echo "</li>
                                           ";
                        }
                        // line 50
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    echo " 
                                    </ul>
                                </td>
                                <td>
                                    <a href=\"";
                    // line 54
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editarPromocion", array("id" => $this->getAttribute($this->getContext($context, "promocion"), "id"))), "html", null, true);
                    echo "\">Editar</a>
                                </td>
                                <td>
                                    <a href=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrarPromocion", array("id" => $this->getAttribute($this->getContext($context, "promocion"), "id"))), "html", null, true);
                    echo "\">Borrar</a>
                                </td>
                            </tr>
                            ";
                    // line 60
                    $context["np"] = $this->getAttribute($this->getContext($context, "promocion"), "nombrePromocion");
                    // line 61
                    echo "                        ";
                }
                echo " 
                    ";
            }
            // line 63
            echo "                            
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "                <tr>
                    <td colspan=\"5\">No existe ninguna Promoción</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promocion'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 69
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
        return "AlivinatuBundle:Administrador\\Promocion:AdminPromocion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 69,  162 => 65,  156 => 63,  150 => 61,  148 => 60,  142 => 57,  136 => 54,  125 => 50,  119 => 48,  116 => 47,  112 => 46,  106 => 43,  102 => 42,  98 => 41,  95 => 40,  92 => 39,  90 => 38,  87 => 37,  81 => 36,  79 => 35,  60 => 19,  56 => 18,  52 => 17,  44 => 12,  35 => 7,  30 => 4,  27 => 3,);
    }
}
