<?php

/* AlivinatuBundle::layout.html.twig */
class __TwigTemplate_a043fb0ea515e4f3ca78bd6d524bb84e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>Proyecto Alivinatu</title>
        ";
        // line 8
        echo "    </head>
    <body>
        <header>
            
        </header>
            <h1>plantilla</h1>
            ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "    </body>
</html>

";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "            ";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  42 => 14,  35 => 16,  33 => 14,  25 => 8,  18 => 1,);
    }
}
