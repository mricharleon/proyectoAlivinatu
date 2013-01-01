<?php

/* AlivinatuBundle::layout.html.twig */
class __TwigTemplate_a043fb0ea515e4f3ca78bd6d524bb84e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'jquery' => array($this, 'block_jquery'),
            'headerLogo' => array($this, 'block_headerLogo'),
            'nav' => array($this, 'block_nav'),
            'login' => array($this, 'block_login'),
            'headerBusqueda' => array($this, 'block_headerBusqueda'),
            'headerLogin' => array($this, 'block_headerLogin'),
            'footer' => array($this, 'block_footer'),
            '__internal_de63e3e5b0ac470c5426eea45f63cb8304923570' => array($this, 'block___internal_de63e3e5b0ac470c5426eea45f63cb8304923570'),
            '__internal_33631b6534e3e368d3bb9fd1f9f8d1552bf4deac' => array($this, 'block___internal_33631b6534e3e368d3bb9fd1f9f8d1552bf4deac'),
            '__internal_2d91df418103b891c47a57627018aec40ec68f00' => array($this, 'block___internal_2d91df418103b891c47a57627018aec40ec68f00'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/css/plantilla.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/css/lightbox.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/css/presentacion.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_jquery($context, array $blocks = array())
    {
        // line 10
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/lightbox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
";
    }

    // line 16
    public function block_headerLogo($context, array $blocks = array())
    {
        // line 17
        echo "    <div id=\"contMenu\">
        <div id=\"barraLogo\">
            <a href=\"http://localhost/proyectoAlivinatu/web/app_dev.php\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/logoAlivinatu.png"), "html", null, true);
        echo "\" title=\"Spa terapéutico Alivinatu\" />
            </a>
        </div>
";
    }

    // line 25
    public function block_nav($context, array $blocks = array())
    {
        // line 26
        echo "    <ul>
        <li><a class=\"active\" href=\"#\">Inicio</a></li>
        <li><a href=\"#\">Misión</a></li>
        <li><a href=\"#\">Visión</a></li>
        <li>
            <a href=\"#\">Servicios</a>
            <ul class=\"children\">
                <li><a href=\"#\">Masajes</a></li>
                <li><a href=\"#\">Baño de cajón</a></li>
                <li><a href=\"#\">Hidroterapia</a></li>
                <li><a href=\"#\">Limpieza facial</a></li>
                <li><a href=\"#\">Masajes</a></li>
                <li><a href=\"#\">Ver todos...</a></li>

            </ul>
        </li>
        <li><a href=\"#\">Contactanos</a></li>
        <li><a href=\"#\">Ofertas</a></li>
        ";
        // line 44
        $this->displayBlock('login', $context, $blocks);
        // line 47
        echo "    </ul>
";
    }

    // line 44
    public function block_login($context, array $blocks = array())
    {
        // line 45
        echo "            <li><a href=\"#\">Login</a></li>
        ";
    }

    // line 50
    public function block_headerBusqueda($context, array $blocks = array())
    {
        // line 51
        echo "<div id=\"contBusqueda\">
    <form action=\"\">
        <input type=\"text\" class=\"cajaBusqueda\" name=\"\" placeholder=\"Ingresa tu Búsqueda\"/>
        <input type=\"image\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/buscar.png"), "html", null, true);
        echo "\" class=\"cajaBusqueda_submit\" title=\"Buscar\"/>
    </form>
        
        ";
        // line 57
        $this->displayBlock('headerLogin', $context, $blocks);
        // line 62
        echo "        
</div>

</div>
    
";
    }

    // line 57
    public function block_headerLogin($context, array $blocks = array())
    {
        // line 58
        echo "        <div id=\"headerLogin\">
            Hola, Desconocido(a) (Salir)
        </div>
    ";
    }

    // line 69
    public function block_footer($context, array $blocks = array())
    {
        // line 70
        echo "    <div id=\"contFooter\">
        <div id=\"columna\">
            <div id=\"tituloFooter\">
                ";
        // line 73
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_de63e3e5b0ac470c5426eea45f63cb8304923570", $context, $blocks)), "html", null, true);
        // line 76
        echo "            </div>
            <ul class=\"social\">
                <li class=\"twitter\"><a href=\"http://www.twitter.com\" title=\"Twitter\"></a></li>
                <li class=\"facebook\"><a href=\"http://www.facebook.com\" title=\"Facebook\"></a></li>
                <li class=\"gplus\"><a href=\"https://plus.google.com\" title=\"Google Plus\"></a></li>
                <li class=\"youtube\"><a href=\"https://youtube.com\" title=\"YouTube\"></a></li>
                <li class=\"vimeo\"><a href=\"https://vimeo.com\" title=\"Vimeo\"></a></li>
            </ul>

            <span id=\"textoFooter\">
                Siguenos en las Redes Sociales para que te mantengas informado.
            </span>
                <br>
            <span id=\"textoDerechos\">
                © 2012 ALIVINATU. <br>
                ALL RIGHTS RESERVED.
            </span>

        </div>

        <div id=\"columna\">
            <div id=\"tituloFooter\">
                ";
        // line 98
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_33631b6534e3e368d3bb9fd1f9f8d1552bf4deac", $context, $blocks)), "html", null, true);
        // line 101
        echo "            </div>
            <span id=\"textoCuadroFooter\">
                Te brindamos una serie de servicios para tu confort, no te arrepentiras.
            </span>
            <a href=\"\">
                <span id=\"botonFooter\">
                     Servicios
                </span>
            </a>

            <span id=\"textoCuadroFooter\">
                Te recordamos que puedes crear tu cuenta Alivinatu, totalmente gratis..!
            </span>
            <a href=\"\">
                <span id=\"botonFooter\">
                     Registrarse
                </span>
            </a>

        </div>

        <div id=\"columna\">
            <div id=\"tituloFooter\">
                ";
        // line 124
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_2d91df418103b891c47a57627018aec40ec68f00", $context, $blocks)), "html", null, true);
        // line 127
        echo "            </div>
            <span id=\"galeriaFooter\">
                <a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria1.jpg"), "html", null, true);
        echo "\" title=\"Hidromasaje\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria1.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>

                <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria2.jpg"), "html", null, true);
        echo "\" title=\"Biomagnetismo\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria2.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria3.jpg"), "html", null, true);
        echo "\" title=\"Baños de Barro\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria3.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria4.jpg"), "html", null, true);
        echo "\" title=\"MIcrodermoabrasión\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria4.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a><br>
                <a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria5.jpg"), "html", null, true);
        echo "\" title=\"Masajes Relajantes\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria5.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria6.jpg"), "html", null, true);
        echo "\" title=\"Baños de Cajón\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria6.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria7.jpg"), "html", null, true);
        echo "\" title=\"Baños de Asciento\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria7.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria8.jpg"), "html", null, true);
        echo "\" title=\"Aqua Detox\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria8.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
            </span>
            <a href=\"\">
                <span id=\"botonFooter\">
                     Ver más...
                </span>
            </a>

        </div>

    </div>
";
    }

    // line 73
    public function block___internal_de63e3e5b0ac470c5426eea45f63cb8304923570($context, array $blocks = array())
    {
        // line 74
        echo "                        Visitanos...!
                ";
    }

    // line 98
    public function block___internal_33631b6534e3e368d3bb9fd1f9f8d1552bf4deac($context, array $blocks = array())
    {
        // line 99
        echo "                    Noticias...
                ";
    }

    // line 124
    public function block___internal_2d91df418103b891c47a57627018aec40ec68f00($context, array $blocks = array())
    {
        // line 125
        echo "                    Visista Nuestra Galeria
                ";
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
        return array (  333 => 125,  330 => 124,  322 => 98,  317 => 74,  314 => 73,  297 => 152,  293 => 151,  288 => 149,  284 => 148,  279 => 146,  275 => 145,  270 => 143,  266 => 142,  261 => 140,  257 => 139,  252 => 137,  248 => 136,  243 => 134,  233 => 130,  229 => 129,  225 => 127,  223 => 124,  198 => 101,  196 => 98,  172 => 76,  170 => 73,  165 => 70,  162 => 69,  155 => 58,  152 => 57,  143 => 62,  141 => 57,  135 => 54,  130 => 51,  127 => 50,  122 => 45,  119 => 44,  114 => 47,  112 => 44,  92 => 26,  89 => 25,  81 => 20,  76 => 17,  73 => 16,  66 => 12,  62 => 11,  57 => 10,  54 => 9,  48 => 6,  44 => 5,  39 => 4,  36 => 3,  597 => 484,  569 => 459,  549 => 442,  529 => 425,  498 => 397,  470 => 372,  441 => 346,  422 => 330,  403 => 314,  384 => 298,  352 => 269,  325 => 99,  296 => 219,  277 => 203,  258 => 187,  239 => 133,  207 => 142,  178 => 116,  149 => 90,  129 => 73,  110 => 57,  88 => 38,  77 => 29,  74 => 28,  69 => 510,  67 => 28,  63 => 26,  60 => 25,  49 => 17,  37 => 8,  31 => 4,  28 => 3,);
    }
}
