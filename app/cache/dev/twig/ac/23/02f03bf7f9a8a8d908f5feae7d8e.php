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
            'login' => array($this, 'block_login'),
            'headerBusqueda' => array($this, 'block_headerBusqueda'),
            'headerLogin' => array($this, 'block_headerLogin'),
            'contPrincipal' => array($this, 'block_contPrincipal'),
            'imagenPrincipal' => array($this, 'block_imagenPrincipal'),
            'contenido' => array($this, 'block_contenido'),
            'ofertaTexto' => array($this, 'block_ofertaTexto'),
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
        // line 34
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
        // line 18
        echo "                    </nav>    
                ";
        // line 19
        $this->displayBlock('headerBusqueda', $context, $blocks);
        // line 20
        echo "                ";
        $this->displayBlock('headerLogin', $context, $blocks);
        // line 21
        echo "            </header>
            
            ";
        // line 23
        $this->displayBlock('contPrincipal', $context, $blocks);
        // line 29
        echo "            
            <footer>
                ";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 32
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
        echo " 
                            ";
        // line 16
        $this->displayBlock('login', $context, $blocks);
        // line 17
        echo "                        ";
    }

    // line 16
    public function block_login($context, array $blocks = array())
    {
        echo " ";
    }

    // line 19
    public function block_headerBusqueda($context, array $blocks = array())
    {
        echo " ";
    }

    // line 20
    public function block_headerLogin($context, array $blocks = array())
    {
        echo " ";
    }

    // line 23
    public function block_contPrincipal($context, array $blocks = array())
    {
        // line 24
        echo "                ";
        $this->displayBlock('imagenPrincipal', $context, $blocks);
        // line 25
        echo "                ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 28
        echo "            ";
    }

    // line 24
    public function block_imagenPrincipal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 25
    public function block_contenido($context, array $blocks = array())
    {
        // line 26
        echo "                    ";
        $this->displayBlock('ofertaTexto', $context, $blocks);
        // line 27
        echo "                ";
    }

    // line 26
    public function block_ofertaTexto($context, array $blocks = array())
    {
        echo " ";
    }

    // line 31
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
        return array (  185 => 31,  179 => 26,  175 => 27,  172 => 26,  169 => 25,  163 => 24,  159 => 28,  156 => 25,  153 => 24,  150 => 23,  144 => 20,  138 => 19,  132 => 16,  128 => 17,  126 => 16,  121 => 15,  115 => 13,  110 => 32,  104 => 29,  102 => 23,  93 => 19,  90 => 18,  88 => 15,  85 => 14,  83 => 13,  80 => 12,  77 => 11,  72 => 7,  67 => 6,  61 => 5,  55 => 34,  53 => 11,  46 => 8,  43 => 7,  41 => 6,  108 => 31,  105 => 59,  100 => 74,  98 => 21,  95 => 20,  92 => 57,  49 => 17,  37 => 5,  31 => 1,  28 => 3,);
    }
}
