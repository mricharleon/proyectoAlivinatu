<?php

/* AlivinatuBundle::layoutLogin.html.twig */
class __TwigTemplate_ed891372133bd503d0cc910322faed35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AlivinatuBundle::layout.html.twig");

        $this->blocks = array(
            'headerLogin' => array($this, 'block_headerLogin'),
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
    public function block_headerLogin($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle::layoutLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  26 => 3,);
    }
}
