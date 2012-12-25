<?php

/* AlivinatuBundle:Welcome:index.html.twig */
class __TwigTemplate_b61bb189c7053fe7ee2886e114dbc0ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AlivinatuBundle::layout.html.twig");

        $this->blocks = array(
            'imagenPrincipal' => array($this, 'block_imagenPrincipal'),
            'contenido' => array($this, 'block_contenido'),
            'ofertaTexto' => array($this, 'block_ofertaTexto'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AlivinatuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_imagenPrincipal($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"cajaPortada\">
        <div id=\"textoPortada\">
           
                <span id=\"anuncio\">
                    <spam id=\"date\">";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/y"), "html", null, true);
        echo " </spam> <br>
                    <a href=\"\">
                        <spam id=\"textoAnuncio\">Totalmente Gratis..!<br> Regístrate y obtén tu Cuenta Alivinatu</spam> <br><br>
                        <spam id=\"botonAnuncio\">Registrarse</spam>
                    </a>
                </span>
            
        </div>
            
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/portada.jpg"), "html", null, true);
        echo "\" id=\"imgportada\">
        
        
        
        
    </div>
";
    }

    // line 25
    public function block_contenido($context, array $blocks = array())
    {
        // line 26
        echo "<div id=\"contenido\">
    
    ";
        // line 28
        $this->displayBlock('ofertaTexto', $context, $blocks);
        // line 303
        echo "</div>
";
    }

    // line 28
    public function block_ofertaTexto($context, array $blocks = array())
    {
        // line 29
        echo "        <br>
        <hr>
        <div id=\"tituloOferta\"> Conoce Nuestros Servicios </div>
        <hr>  
       
  
        
        <div id=\"columna0\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/aquaDetox.png"), "html", null, true);
        echo "\">
            </span>
        
            <span id=\"panelOferta\">
                <span id=\"tituloItemOferta\">
                    AQUA DETOX
                </span>  
                    <br>
                <span id=\"contenidoItemOfert\">
                    La limpieza iónica es muy importante para la correcta 
                    eliminación de las toxinas del cuerpo, através del campo
                    electromagnético.
                    <spam id=\"botonOferta0\">Leer más..!</spam>
                    
                </span>
            </span>
        </div>
            
            
        <div id=\"columna1\">
           <span id=\"imgOferta\">
                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/masajes.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <span id=\"tituloItemOferta\">
                    MASAJES RELAJANTES
                </span>  
                    <br>
                <span id=\"contenidoItemOfert\">
                    Servicio de masajes relajantes que elimina tensión acumulada,
                    se aplica de forma lenta y con una presión firme y progresiva.
                    <spam id=\"botonOferta1\">Leer más..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna2\">
           <span id=\"imgOferta\">
                <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/hidroterapiaColonica.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <span id=\"tituloItemOferta\">
                    HIDROTERAPIA COLÓNICA
                </span>  
                    <br>
                <span id=\"contenidoItemOfert\">
                    Actúa como una ducha con presión que durante 45 minutos asegura la distribución
                    del agua con ozono en el colon.
                    <spam id=\"botonOferta2\">Leer más..!</spam>
                </span>
            </span>
        </div>
        
        <!-- Contenido del Toggle -->
        
        <span id=\"contenidoItemOferta0\">
            <img id=\"imgToggle\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/aquaDetox.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Aqua Detox</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Los resultados, son entre otros, el desbloqueo energético y
                    el restablecimiento del equilibrio corporal así como una 
                    pronunciada sensación de bienestar.
                    
                    
                    <ul id=\"beneficiosToggle\">
                    <li>La desintoxicación hepática</li>
                    <li>La desintoxicación renal</li>
                    <li>La desintoxicación de la piel</li>
                    <li>La desintoxicación de las articulaciones.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        <span id=\"contenidoItemOferta1\">
            <img id=\"imgToggle\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/masajes.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Masajes relajantes</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    El efecto de este tipo de masaje es una relajación y disminución
                    del tono muscular, a través de un contacto no agresivo por
                    parte de la persona que lo aplica.
                    
                    
                    <ul id=\"beneficiosToggle\">
                    <li><b>A nivel muscular:</b> Recupera la elasticidad y disipa los signos de tensión.</li>
                    <li><b>A nivel nervioso:</b> Proporciona una sensación relajante.</li>
                    <li><b>A nivel circulatorio:</b> Activa el proceso circulatorio al aumentar el envío de oxígeno a los tejidos.</li>
                    <li><b>A nivel cutáneo:</b> El peeling o la fricción de la epidermis ayuda a liberar los desechos y a eliminar las células muertas.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        <span id=\"contenidoItemOferta2\">
            <img id=\"imgToggle\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/hidroterapiaColonica.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Hidroterapia Colónica</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Es una práctica agradable para el paciente, el cual se encuentra
                    relajado y detecta desde la primera aplicación, una sensación de
                    bienestar y ligereza orgánica.
                    
                    
                    <ul id=\"beneficiosToggle\">
                    <li>Elimina los posibles parásitos y es destructora de micosis.</li>
                    <li>Mejoría del depósito de calcio en los huesos y articulaciones.</li>
                    <li>Mejoría del estado anímico y del sueño.</li>
                    <li>Eliminación de cuerpos extraños ingeridos por error y alimentos no digeridos.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        <!-- fila 2 de las ofertas -->
        <div id=\"columna3\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/bañosCajon.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <span id=\"tituloItemOferta\">
                    BAÑOS DE CAJÓN
                </span>  
                    <br>
                <span id=\"contenidoItemOfert\">
                    Variación del baño de vapor, ambiente más cerrado,
                    en una cabina de madera, da mayor calidez y controla mejor la baja de presión.
                    <spam id=\"botonOferta3\">Leer más..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna4\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/bañosAsiento.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <span id=\"tituloItemOferta\">
                    BAÑOS DE ASIENTO
                </span>  
                    <br>
                <span id=\"contenidoItemOfert\">
                    Extrae el calor de la parte baja del vientre para obtener energía.
                    El calor excesivo en nuestro cuerpo es una pérdida de energía.
                    <spam id=\"botonOferta4\">Leer más..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna5\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/hidromasaje.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <span id=\"tituloItemOferta\">
                    HIDROMASAJE
                </span>  
                    <br>
                <span id=\"contenidoItemOfert\">
                    Recomendado por muchos especialistas de manera terapéutica para combatir la enfermedad
                    de nuestra sociedad el stress.
                    <spam id=\"botonOferta5\">Leer más..!</spam>
                </span>
            </span>
        </div>
        
        <!-- contenido del Toggle -->
        <span id=\"contenidoItemOferta3\">
            <img id=\"imgToggle\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/bañosCajon.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Baños de Cajón</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Muy solicitada por quienes padecen dolencias leves o crónicas,
                    por que al usarla los poros del cuerpo se abren haciendo que las
                    personas eliminen las toxinas del organismo.
                    
                    
                    <ul id=\"beneficiosToggle\">
                    <li>Ayudan a tener una buena circulación de la sangre.</li>
                    <li>Eliminan las células muertas del cuerpo.</li>
                    <li>Recuperar el sueño de forma natural.</li>
                    <li>Bajar los niveles de colesterol.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        <span id=\"contenidoItemOferta4\">
            <img id=\"imgToggle\" src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/bañosAsiento.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Baños de Asiento</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Son remedios eficacísimos para todos los males del bajo vientre,
                    y obran como laxantes, expelen los gases, favorecen la digestión y regularizan la circulación
                    
                    <ul id=\"beneficiosToggle\">
                    <li>Regulariza la circulación sanguinea, normaliza la presión alta o baja.</li>
                    <li>Corrige alteraciones por mal funcionamiento de los organos sexuales.</li>
                    <li>Corrige problemas de las vías urinarias.</li>
                    <li>Alivia las hemorroides.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        <span id=\"contenidoItemOferta5\">
            <img id=\"imgToggle\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/hidromasaje.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Hidromasaje</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Suele ser mas profunda que una bañera normal, para lograr sumergir 
                    todo el cuerpo. El agua alcanza una temperatura de unos 38º C
                    
                    
                    <ul id=\"beneficiosToggle\">
                    <li>Mejora y re-activación de la circulación sanguínea de casi todo el cuerpo.</li>
                    <li>Permite la relajación de los músculos y elimina toxinas al abrir los poros.</li>
                    <li>Recuperación de fracturas y lesiones musculares.</li>
                    <li>Aliviar la úlcera de estómago.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        
        

    ";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 275,  331 => 251,  302 => 225,  282 => 208,  262 => 191,  242 => 174,  211 => 146,  182 => 120,  153 => 94,  132 => 76,  112 => 59,  88 => 38,  77 => 29,  74 => 28,  69 => 303,  67 => 28,  63 => 26,  60 => 25,  49 => 17,  37 => 8,  31 => 4,  28 => 3,);
    }
}
