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
            'headerBusqueda' => array($this, 'block_headerBusqueda'),
            'footer' => array($this, 'block_footer'),
            '__internal_dd79f628e836c7c163e3c96adc3ecb061328012c' => array($this, 'block___internal_dd79f628e836c7c163e3c96adc3ecb061328012c'),
            '__internal_afce837815cc088265a487c82387430fedb7a765' => array($this, 'block___internal_afce837815cc088265a487c82387430fedb7a765'),
            '__internal_42f5ab75791f414c6a645efb7a178b4b0140ff45' => array($this, 'block___internal_42f5ab75791f414c6a645efb7a178b4b0140ff45'),
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
";
    }

    // line 8
    public function block_jquery($context, array $blocks = array())
    {
        // line 9
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/lightbox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"> </script>
";
    }

    // line 13
    public function block_headerLogo($context, array $blocks = array())
    {
        // line 14
        echo "    <div id=\"contMenu\">
        <div id=\"barraLogo\">
            <a href=\"http://localhost/proyectoAlivinatu/web/app_dev.php\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/logoAlivinatu.png"), "html", null, true);
        echo "\" title=\"Spa terapéutico Alivinatu\" />
            </a>
        </div>
";
    }

    // line 22
    public function block_nav($context, array $blocks = array())
    {
        // line 23
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
        <li><a href=\"#\">Login</a></li>
    </ul>
";
    }

    // line 45
    public function block_headerBusqueda($context, array $blocks = array())
    {
        // line 46
        echo "<div id=\"contBusqueda\">
    <form action=\"\">
        <input type=\"text\" class=\"cajaBusqueda\" name=\"\" placeholder=\"Ingresa tu Búsqueda\"/>
        <input type=\"image\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/buscar.png"), "html", null, true);
        echo "\" class=\"cajaBusqueda_submit\" title=\"Buscar\"/>
    </form>
</div>

</div>
";
    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        // line 57
        echo "    <div id=\"contFooter\">
        <div id=\"columna\">
            <span id=\"tituloFooter\">
                ";
        // line 60
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_dd79f628e836c7c163e3c96adc3ecb061328012c", $context, $blocks)), "html", null, true);
        // line 63
        echo "            </span>
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
            <span id=\"tituloFooter\">
                ";
        // line 85
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_afce837815cc088265a487c82387430fedb7a765", $context, $blocks)), "html", null, true);
        // line 88
        echo "            </span>
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
            <span id=\"tituloFooter\">
                ";
        // line 111
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_42f5ab75791f414c6a645efb7a178b4b0140ff45", $context, $blocks)), "html", null, true);
        // line 114
        echo "            </span>
            <span id=\"galeriaFooter\">
                <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria1.jpg"), "html", null, true);
        echo "\" title=\"Hidromasaje\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria1.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>

                <a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria2.jpg"), "html", null, true);
        echo "\" title=\"Biomagnetismo\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria2.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria3.jpg"), "html", null, true);
        echo "\" title=\"Baños de Barro\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria3.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria4.jpg"), "html", null, true);
        echo "\" title=\"MIcrodermoabrasión\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria4.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a><br>
                <a href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria5.jpg"), "html", null, true);
        echo "\" title=\"Masajes Relajantes\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria5.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria6.jpg"), "html", null, true);
        echo "\" title=\"Baños de Cajón\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria6.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria7.jpg"), "html", null, true);
        echo "\" title=\"Baños de Asciento\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria7.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria8.jpg"), "html", null, true);
        echo "\" title=\"Aqua Detox\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 139
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

    // line 60
    public function block___internal_dd79f628e836c7c163e3c96adc3ecb061328012c($context, array $blocks = array())
    {
        // line 61
        echo "                    Visitanos...!
                ";
    }

    // line 85
    public function block___internal_afce837815cc088265a487c82387430fedb7a765($context, array $blocks = array())
    {
        // line 86
        echo "                    Noticias...
                ";
    }

    // line 111
    public function block___internal_42f5ab75791f414c6a645efb7a178b4b0140ff45($context, array $blocks = array())
    {
        // line 112
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
        return array (  294 => 112,  291 => 111,  286 => 86,  283 => 85,  278 => 61,  275 => 60,  258 => 139,  254 => 138,  249 => 136,  245 => 135,  240 => 133,  236 => 132,  231 => 130,  227 => 129,  222 => 127,  218 => 126,  213 => 124,  209 => 123,  204 => 121,  200 => 120,  194 => 117,  190 => 116,  186 => 114,  184 => 111,  159 => 88,  157 => 85,  133 => 63,  131 => 60,  126 => 57,  123 => 56,  113 => 49,  108 => 46,  105 => 45,  81 => 23,  78 => 22,  70 => 17,  65 => 14,  62 => 13,  56 => 10,  51 => 9,  48 => 8,  42 => 5,  37 => 4,  34 => 3,);
    }
}
