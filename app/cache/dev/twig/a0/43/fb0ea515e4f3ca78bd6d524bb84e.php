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
            'footer' => array($this, 'block_footer'),
            '__internal_f1dc6368e30deaca34a563e55a8fddc7db84eebb' => array($this, 'block___internal_f1dc6368e30deaca34a563e55a8fddc7db84eebb'),
            '__internal_0fa91e3fd2d3009e5da25a6810a013bae532a233' => array($this, 'block___internal_0fa91e3fd2d3009e5da25a6810a013bae532a233'),
            '__internal_63b5cfc070cccbbee1d64f159ea14236b8b6f123' => array($this, 'block___internal_63b5cfc070cccbbee1d64f159ea14236b8b6f123'),
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
</div>

</div>
";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "    <div id=\"contFooter\">
        <div id=\"columna\">
            <div id=\"tituloFooter\">
                ";
        // line 65
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_f1dc6368e30deaca34a563e55a8fddc7db84eebb", $context, $blocks)), "html", null, true);
        // line 68
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
        // line 90
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_0fa91e3fd2d3009e5da25a6810a013bae532a233", $context, $blocks)), "html", null, true);
        // line 93
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
        // line 116
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_63b5cfc070cccbbee1d64f159ea14236b8b6f123", $context, $blocks)), "html", null, true);
        // line 119
        echo "            </div>
            <span id=\"galeriaFooter\">
                <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria1.jpg"), "html", null, true);
        echo "\" title=\"Hidromasaje\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria1.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>

                <a href=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria2.jpg"), "html", null, true);
        echo "\" title=\"Biomagnetismo\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria2.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria3.jpg"), "html", null, true);
        echo "\" title=\"Baños de Barro\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria3.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria4.jpg"), "html", null, true);
        echo "\" title=\"MIcrodermoabrasión\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria4.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a><br>
                <a href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria5.jpg"), "html", null, true);
        echo "\" title=\"Masajes Relajantes\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria5.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria6.jpg"), "html", null, true);
        echo "\" title=\"Baños de Cajón\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria6.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria7.jpg"), "html", null, true);
        echo "\" title=\"Baños de Asciento\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria7.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria8.jpg"), "html", null, true);
        echo "\" title=\"Aqua Detox\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 144
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

    // line 65
    public function block___internal_f1dc6368e30deaca34a563e55a8fddc7db84eebb($context, array $blocks = array())
    {
        // line 66
        echo "                        Visitanos...!
                ";
    }

    // line 90
    public function block___internal_0fa91e3fd2d3009e5da25a6810a013bae532a233($context, array $blocks = array())
    {
        // line 91
        echo "                    Noticias...
                ";
    }

    // line 116
    public function block___internal_63b5cfc070cccbbee1d64f159ea14236b8b6f123($context, array $blocks = array())
    {
        // line 117
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
        return array (  315 => 117,  312 => 116,  307 => 91,  304 => 90,  299 => 66,  296 => 65,  279 => 144,  275 => 143,  270 => 141,  266 => 140,  261 => 138,  257 => 137,  252 => 135,  248 => 134,  243 => 132,  239 => 131,  234 => 129,  230 => 128,  225 => 126,  221 => 125,  215 => 122,  207 => 119,  205 => 116,  180 => 93,  178 => 90,  154 => 68,  152 => 65,  147 => 62,  144 => 61,  134 => 54,  129 => 51,  126 => 50,  121 => 45,  118 => 44,  113 => 47,  111 => 44,  91 => 26,  80 => 20,  75 => 17,  72 => 16,  65 => 12,  61 => 11,  56 => 10,  53 => 9,  47 => 6,  43 => 5,  38 => 4,  35 => 3,  358 => 275,  331 => 251,  302 => 225,  282 => 208,  262 => 191,  242 => 174,  211 => 121,  182 => 120,  153 => 94,  132 => 76,  112 => 59,  88 => 25,  77 => 29,  74 => 28,  69 => 303,  67 => 28,  63 => 26,  60 => 25,  49 => 17,  37 => 8,  31 => 4,  28 => 3,);
    }
}
