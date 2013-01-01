<?php

/* AlivinatuBundle:Comentarios:comentario.html.twig */
class __TwigTemplate_6ca252c7f17449e8aa2bfdb04c12f834 extends Twig_Template
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
        echo "<h1>Comentario con ID ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentario"), "id"), "html", null, true);
        echo "</h1>
<ul>
<li>Author: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentario"), "author"), "html", null, true);
        echo "</li>
<li>Contenido: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comentario"), "content"), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Comentarios:comentario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  17 => 1,);
    }
}
