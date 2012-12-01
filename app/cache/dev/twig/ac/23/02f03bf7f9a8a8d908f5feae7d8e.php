<?php

/* ::base.html.twig */
class __TwigTemplate_ac2302f03bf7f9a8a8d908f5feae7d8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jquery' => array($this, 'block_jquery'),
            'body' => array($this, 'block_body'),
            'headerLogo' => array($this, 'block_headerLogo'),
            'nav' => array($this, 'block_nav'),
            'headerBusqueda' => array($this, 'block_headerBusqueda'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Alivinatu</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('jquery', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("alivinatu.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenid@";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_jquery($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "            <header>
                ";
        // line 13
        $this->displayBlock('headerLogo', $context, $blocks);
        // line 14
        echo "                    <nav>
                        ";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        // line 16
        echo "                    </nav>    
                ";
        // line 17
        $this->displayBlock('headerBusqueda', $context, $blocks);
        // line 18
        echo "            </header>
            
            <footer>
                ";
        // line 21
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "            </footer>
        ";
    }

    // line 13
    public function block_headerLogo($context, array $blocks = array())
    {
        echo " ";
    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 17
    public function block_headerBusqueda($context, array $blocks = array())
    {
        echo " ";
    }

    // line 21
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 21,  113 => 17,  107 => 15,  101 => 13,  96 => 22,  94 => 21,  89 => 18,  87 => 17,  84 => 16,  82 => 15,  79 => 14,  77 => 13,  74 => 12,  71 => 11,  66 => 7,  61 => 6,  55 => 5,  49 => 24,  47 => 11,  40 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
