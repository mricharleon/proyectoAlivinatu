<?php

/* AlivinatuBundle:Articulos:listar.html.twig */
class __TwigTemplate_001b3f598157fe791b3918a466d331b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Listado de Articulos con sus respectivos comentarios</h1>
<table border=\"1\">
<tr>
    <th>ID del articulo</th>
    <th>Titulo del articulo</th>
    <th>ID del comentario</th>
    <th>Autor del comentario</th>
</tr>
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "comentarios"));
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 10
            echo "    <tr>
        <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulos"), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulos"), "title"), "html", null, true);
            echo "</td>
        <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentario"), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentario"), "author"), "html", null, true);
            echo "</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Articulos:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  46 => 14,  42 => 13,  38 => 12,  34 => 11,  31 => 10,  27 => 9,  17 => 1,);
    }
}
