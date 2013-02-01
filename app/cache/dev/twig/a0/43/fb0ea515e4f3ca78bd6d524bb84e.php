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
            'contenido' => array($this, 'block_contenido'),
            'ofertaTexto' => array($this, 'block_ofertaTexto'),
            'tituloContenido' => array($this, 'block_tituloContenido'),
            'footer' => array($this, 'block_footer'),
            '__internal_7c3ab581109949f8d33099b9186f444f384470dd' => array($this, 'block___internal_7c3ab581109949f8d33099b9186f444f384470dd'),
            '__internal_73c9af7d6fef00e11c76930225d8eecf6f7422b6' => array($this, 'block___internal_73c9af7d6fef00e11c76930225d8eecf6f7422b6'),
            '__internal_af45a1a048766fff0893746830561e713822f7f5' => array($this, 'block___internal_af45a1a048766fff0893746830561e713822f7f5'),
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
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/css/acceso.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/css/administrador.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/css/jquery-ui-1.9.2.custom.css"), "html", null, true);
        echo "\" />
";
    }

    // line 12
    public function block_jquery($context, array $blocks = array())
    {
        // line 13
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/lightbox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
";
    }

    // line 20
    public function block_headerLogo($context, array $blocks = array())
    {
        // line 21
        echo "    <div id=\"contMenu\">
        <div id=\"barraLogo\">
            <a href=\"http://localhost/proyectoAlivinatu/web/app_dev.php\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/logoAlivinatu.png"), "html", null, true);
        echo "\" title=\"Spa terapéutico Alivinatu\" />
            </a>
        </div>
";
    }

    // line 29
    public function block_nav($context, array $blocks = array())
    {
        // line 30
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
        // line 48
        $this->displayBlock('login', $context, $blocks);
        // line 51
        echo "    </ul>
";
    }

    // line 48
    public function block_login($context, array $blocks = array())
    {
        // line 49
        echo "            <li><a href=\"#\">Login</a></li>
        ";
    }

    // line 54
    public function block_headerBusqueda($context, array $blocks = array())
    {
        // line 55
        echo "<div id=\"contBusqueda\">
    <form action=\"\">
        <input type=\"text\" class=\"cajaBusqueda\" name=\"\" placeholder=\"Ingresa tu Búsqueda\"/>
        <input type=\"image\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/buscar.png"), "html", null, true);
        echo "\" class=\"cajaBusqueda_submit\" title=\"Buscar\"/>
    </form>
        
        ";
        // line 61
        $this->displayBlock('headerLogin', $context, $blocks);
        // line 66
        echo "        
</div>

</div>
    
";
    }

    // line 61
    public function block_headerLogin($context, array $blocks = array())
    {
        // line 62
        echo "        <div id=\"headerLogin\">
            Hola, Desconocido(a) (Salir)
        </div>
    ";
    }

    // line 73
    public function block_contenido($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        $this->displayBlock('ofertaTexto', $context, $blocks);
    }

    public function block_ofertaTexto($context, array $blocks = array())
    {
        // line 75
        echo "        ";
        $this->displayBlock('tituloContenido', $context, $blocks);
        // line 76
        echo "    ";
    }

    // line 75
    public function block_tituloContenido($context, array $blocks = array())
    {
        echo " ";
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "    <div id=\"contFooter\">
        <div id=\"columna\">
            <div id=\"tituloFooter\">
                ";
        // line 83
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_7c3ab581109949f8d33099b9186f444f384470dd", $context, $blocks)), "html", null, true);
        // line 86
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
        // line 108
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_73c9af7d6fef00e11c76930225d8eecf6f7422b6", $context, $blocks)), "html", null, true);
        // line 111
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
        // line 134
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_af45a1a048766fff0893746830561e713822f7f5", $context, $blocks)), "html", null, true);
        // line 137
        echo "            </div>
            <span id=\"galeriaFooter\">
                <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria1.jpg"), "html", null, true);
        echo "\" title=\"Hidromasaje\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria1.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>

                <a href=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria2.jpg"), "html", null, true);
        echo "\" title=\"Biomagnetismo\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria2.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria3.jpg"), "html", null, true);
        echo "\" title=\"Baños de Barro\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria3.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria4.jpg"), "html", null, true);
        echo "\" title=\"MIcrodermoabrasión\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria4.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a><br>
                <a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria5.jpg"), "html", null, true);
        echo "\" title=\"Masajes Relajantes\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria5.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria6.jpg"), "html", null, true);
        echo "\" title=\"Baños de Cajón\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria6.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria7.jpg"), "html", null, true);
        echo "\" title=\"Baños de Asciento\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria7.jpg"), "html", null, true);
        echo "\" class=\"galeria\">
                </a>
                <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/galeria8.jpg"), "html", null, true);
        echo "\" title=\"Aqua Detox\" rel=\"lightbox[galeria]\">
                    <img src=\"";
        // line 162
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

    // line 83
    public function block___internal_7c3ab581109949f8d33099b9186f444f384470dd($context, array $blocks = array())
    {
        // line 84
        echo "                        Visitanos...!
                ";
    }

    // line 108
    public function block___internal_73c9af7d6fef00e11c76930225d8eecf6f7422b6($context, array $blocks = array())
    {
        // line 109
        echo "                    Noticias...
                ";
    }

    // line 134
    public function block___internal_af45a1a048766fff0893746830561e713822f7f5($context, array $blocks = array())
    {
        // line 135
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
        return array (  375 => 135,  372 => 134,  367 => 109,  364 => 108,  359 => 84,  356 => 83,  339 => 162,  335 => 161,  330 => 159,  326 => 158,  321 => 156,  317 => 155,  312 => 153,  308 => 152,  303 => 150,  299 => 149,  294 => 147,  290 => 146,  281 => 143,  275 => 140,  271 => 139,  267 => 137,  265 => 134,  240 => 111,  238 => 108,  214 => 86,  212 => 83,  207 => 80,  204 => 79,  198 => 75,  194 => 76,  191 => 75,  184 => 74,  181 => 73,  174 => 62,  171 => 61,  162 => 66,  160 => 61,  154 => 58,  149 => 55,  146 => 54,  141 => 49,  133 => 51,  131 => 48,  111 => 30,  108 => 29,  100 => 24,  95 => 21,  92 => 20,  85 => 16,  81 => 15,  72 => 13,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  619 => 28,  616 => 27,  586 => 483,  558 => 458,  538 => 441,  518 => 424,  487 => 396,  459 => 371,  430 => 345,  411 => 329,  392 => 313,  373 => 297,  341 => 268,  314 => 244,  285 => 144,  266 => 202,  247 => 186,  228 => 170,  196 => 141,  167 => 115,  138 => 48,  118 => 72,  99 => 56,  77 => 14,  71 => 33,  69 => 12,  63 => 9,  52 => 17,  41 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
