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
        // line 35
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
        // line 22
        echo "            </header>
            
            ";
        // line 24
        $this->displayBlock('contPrincipal', $context, $blocks);
        // line 30
        echo "            
            <footer>
                ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 33
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
        echo " 
                    ";
        // line 20
        $this->displayBlock('headerLogin', $context, $blocks);
        // line 21
        echo "                ";
    }

    // line 20
    public function block_headerLogin($context, array $blocks = array())
    {
        echo " ";
    }

    // line 24
    public function block_contPrincipal($context, array $blocks = array())
    {
        // line 25
        echo "                ";
        $this->displayBlock('imagenPrincipal', $context, $blocks);
        // line 26
        echo "                ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 29
        echo "            ";
    }

    // line 25
    public function block_imagenPrincipal($context, array $blocks = array())
    {
        echo " ";
    }

    // line 26
    public function block_contenido($context, array $blocks = array())
    {
        // line 27
        echo "                    ";
        $this->displayBlock('ofertaTexto', $context, $blocks);
        // line 28
        echo "                ";
    }

    // line 27
    public function block_ofertaTexto($context, array $blocks = array())
    {
        echo " ";
    }

    // line 32
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
        return array (  187 => 32,  181 => 27,  177 => 28,  174 => 27,  171 => 26,  161 => 29,  158 => 26,  146 => 20,  142 => 21,  140 => 20,  125 => 17,  123 => 16,  118 => 15,  107 => 33,  105 => 32,  101 => 30,  99 => 24,  95 => 22,  93 => 19,  90 => 18,  85 => 14,  83 => 13,  80 => 12,  72 => 7,  61 => 5,  55 => 35,  53 => 11,  46 => 8,  43 => 7,  41 => 6,  333 => 125,  330 => 124,  322 => 98,  317 => 74,  314 => 73,  297 => 152,  293 => 151,  288 => 149,  284 => 148,  279 => 146,  275 => 145,  270 => 143,  266 => 142,  261 => 140,  257 => 139,  252 => 137,  248 => 136,  243 => 134,  233 => 130,  229 => 129,  225 => 127,  223 => 124,  198 => 101,  196 => 98,  172 => 76,  170 => 73,  165 => 25,  162 => 69,  155 => 25,  152 => 24,  143 => 62,  141 => 57,  135 => 19,  130 => 51,  127 => 50,  122 => 45,  119 => 44,  114 => 47,  112 => 13,  92 => 26,  89 => 25,  81 => 20,  76 => 17,  73 => 16,  66 => 12,  62 => 11,  57 => 10,  54 => 9,  48 => 6,  44 => 5,  39 => 4,  36 => 3,  597 => 484,  569 => 459,  549 => 442,  529 => 425,  498 => 397,  470 => 372,  441 => 346,  422 => 330,  403 => 314,  384 => 298,  352 => 269,  325 => 99,  296 => 219,  277 => 203,  258 => 187,  239 => 133,  207 => 142,  178 => 116,  149 => 90,  129 => 16,  110 => 57,  88 => 15,  77 => 11,  74 => 28,  69 => 510,  67 => 6,  63 => 26,  60 => 25,  49 => 17,  37 => 5,  31 => 1,  28 => 3,);
    }
}
