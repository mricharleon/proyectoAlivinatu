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
            'tituloContenido' => array($this, 'block_tituloContenido'),
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
        // line 37
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
        // line 32
        echo "            
            <footer>
                ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 35
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
        // line 31
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
        // line 30
        echo "                ";
    }

    // line 27
    public function block_ofertaTexto($context, array $blocks = array())
    {
        // line 28
        echo "                        ";
        $this->displayBlock('tituloContenido', $context, $blocks);
        // line 29
        echo "                    ";
    }

    // line 28
    public function block_tituloContenido($context, array $blocks = array())
    {
        echo " ";
    }

    // line 34
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
        return array (  192 => 28,  188 => 29,  185 => 28,  182 => 27,  178 => 30,  175 => 27,  172 => 26,  166 => 25,  159 => 26,  156 => 25,  153 => 24,  147 => 20,  143 => 21,  136 => 19,  130 => 16,  126 => 17,  124 => 16,  119 => 15,  113 => 13,  106 => 34,  102 => 32,  96 => 22,  94 => 19,  91 => 18,  89 => 15,  86 => 14,  84 => 13,  78 => 11,  73 => 7,  68 => 6,  62 => 5,  56 => 37,  54 => 11,  44 => 7,  38 => 5,  32 => 1,  375 => 135,  372 => 134,  367 => 109,  364 => 108,  359 => 84,  356 => 83,  339 => 162,  335 => 161,  330 => 159,  326 => 158,  321 => 156,  317 => 155,  312 => 153,  308 => 152,  303 => 150,  299 => 149,  294 => 147,  290 => 146,  281 => 143,  275 => 140,  271 => 139,  267 => 137,  265 => 134,  240 => 111,  238 => 108,  214 => 86,  212 => 83,  207 => 80,  204 => 79,  198 => 34,  194 => 76,  191 => 75,  184 => 74,  181 => 73,  174 => 62,  171 => 61,  162 => 31,  160 => 61,  154 => 58,  149 => 55,  146 => 54,  141 => 20,  133 => 51,  131 => 48,  111 => 30,  108 => 35,  100 => 24,  95 => 21,  92 => 20,  85 => 16,  81 => 12,  72 => 13,  59 => 8,  55 => 7,  51 => 6,  47 => 8,  42 => 6,  39 => 3,  619 => 28,  616 => 27,  586 => 483,  558 => 458,  538 => 441,  518 => 424,  487 => 396,  459 => 371,  430 => 345,  411 => 329,  392 => 313,  373 => 297,  341 => 268,  314 => 244,  285 => 144,  266 => 202,  247 => 186,  228 => 170,  196 => 141,  167 => 115,  138 => 48,  118 => 72,  99 => 56,  77 => 14,  71 => 33,  69 => 12,  63 => 9,  52 => 17,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
