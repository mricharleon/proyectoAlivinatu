<?php

/* AlivinatuBundle:Articulos:articulo.html.twig */
class __TwigTemplate_88b832f6bb3575301d43d8f0711cdf36 extends Twig_Template
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
        echo "<h1>Articulo con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "id"), "html", null, true);
        echo "</h1>
<ul>
<li>Titulo: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "title"), "html", null, true);
        echo "</li>
<li>Autor: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "author"), "html", null, true);
        echo "</li>
<li>Contenido: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "content"), "html", null, true);
        echo "</li>
<li>Tag: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "tags"), "html", null, true);
        echo "</li>
<li>Fecha de creacion: ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "created"), "d-m-Y"), "html", null, true);
        echo "</li>
<li>Fecha de actualizacion: ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "updated"), "d-m-Y"), "html", null, true);
        echo "</li>
<li>Slug: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "slug"), "html", null, true);
        echo "</li>
<li>Category: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "articulo"), "category"), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Articulos:articulo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  17 => 1,);
    }
}
