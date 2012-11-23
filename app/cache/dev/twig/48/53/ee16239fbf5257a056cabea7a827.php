<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_4853ee16239fbf5257a056cabea7a827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
    <html>
        <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        </head>
        <body>
        <div id=\"sidebar\">
            ";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "            </div>

        <div id=\"contenido\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "            </div>
        </body>
    </html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        // line 11
        echo "            <ul>
                <li><a href=\"/\">mi primera vista con twig</a></li>
                <li><a href=\"/blog\">Blog</a></li>
            </ul>
            ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  58 => 11,  55 => 10,  49 => 6,  42 => 20,  40 => 19,  35 => 16,  33 => 10,  26 => 6,  20 => 2,);
    }
}
