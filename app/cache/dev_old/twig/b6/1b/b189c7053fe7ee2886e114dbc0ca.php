<?php

/* AlivinatuBundle:Welcome:index.html.twig */
class __TwigTemplate_b61bb189c7053fe7ee2886e114dbc0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AlivinatuBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'prueba' => array($this, 'block_prueba'),
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    CU 1
";
    }

    // line 7
    public function block_prueba($context, array $blocks = array())
    {
        // line 8
        echo "    CU 2
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
