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
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/css/plantilla.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <header>
            <div id=\"barMenu\">
                <h1>plantilla</h1>
                ";
        // line 13
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "            </div>
        </header>
            
    </body>
</html>

";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  47 => 13,  37 => 15,  35 => 13,  25 => 7,  18 => 1,);
    }
}
