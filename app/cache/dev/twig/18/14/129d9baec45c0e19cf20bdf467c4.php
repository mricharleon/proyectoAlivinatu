<?php

/* AlivinatuBundle:Comentarios:listar.html.twig */
class __TwigTemplate_1814129d9baec45c0e19cf20bdf467c4 extends Twig_Template
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
        echo "<h1>Comentario ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentarios"), "id"), "html", null, true);
        echo " con su respectivo articulo</h1>
<table border=\"1\">
<tr>
    <th>ID del comentario</th>
    <th>Autor del comentario</th>
    <th>ID del articulo</th>
    <th>Titulo del articulo</th>
</tr>

    <tr>
        <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentarios"), "id"), "html", null, true);
        echo "</td>
        <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentarios"), "author"), "html", null, true);
        echo "</td>
        <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulos"), "id"), "html", null, true);
        echo "</td>
        <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulos"), "title"), "html", null, true);
        echo "</td>
    </tr>


</table>";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Comentarios:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  39 => 13,  35 => 12,  31 => 11,  17 => 1,);
    }
}
