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
        // line 510
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
       
        <!-- fila 1 de las ofertas -->
        
        <div id=\"columna0\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/aquaDetox.png"), "html", null, true);
        echo "\">
            </span>
        
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    AQUA DETOX
                </div>  
                <span id=\"contenidoItemOfert\">
                    Limpieza iónica es muy importante para la correcta 
                    eliminación de las toxinas del cuerpo, através del campo
                    electro magnético
                    <spam id=\"botonOferta0\">Continuar leyendo..!</spam>
                    
                </span>
            </span>
        </div>
            
        <div id=\"columna1\">
           <span id=\"imgOferta\">
                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/masajes.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    MASAJES RELAJANTES
                </div>  
                <span id=\"contenidoItemOfert\">
                    Servicio de masajes relajantes que elimina tensión acumulada,
                    se aplica de forma lenta y con una presión firme y progresiva
                    <spam id=\"botonOferta1\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna2\">
           <span id=\"imgOferta\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/hidroterapiaColonica.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    HIDROTERAPIA COLÓNICA
                </div>  
                <span id=\"contenidoItemOfert\">
                    Actúa como una ducha con una presión que durante 45 minutos asegura la distribución
                    del agua con ozono en el colon
                    <spam id=\"botonOferta2\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <!-- Contenido del Toggle -->
        
        <span id=\"contenidoItemOferta0\">
            <img id=\"imgToggle\" src=\"";
        // line 90
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
        // line 116
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
        // line 142
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
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/bañosCajon.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    BAÑOS DE CAJÓN
                </div>  
                <span id=\"contenidoItemOfert\">
                    Variación del baño de vapor, ambiente más cerrado,
                    en cabina de madera, da mayor calidez y controla mejor la baja de presión
                    <spam id=\"botonOferta3\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna4\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/bañosAsiento.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    BAÑOS DE ASIENTO
                </div>  
                <span id=\"contenidoItemOfert\">
                    Extrae el calor de la parte baja del vientre para obtener energía.
                    El calor excesivo en nuestro cuerpo es una pérdida de energía
                    <spam id=\"botonOferta4\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna5\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/hidromasaje.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    HIDROMASAJE
                </div>  
                <span id=\"contenidoItemOfert\">
                    Recomendado por especialistas de manera terapéutica para combatir la enfermedad
                    de nuestra sociedad el stress
                    <spam id=\"botonOferta5\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <!-- contenido del Toggle -->
        <span id=\"contenidoItemOferta3\">
            <img id=\"imgToggle\" src=\"";
        // line 219
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
        // line 245
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
        // line 269
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
        
        
        <!-- fila 3 de las ofertas -->
        
        <div id=\"columna6\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/camaJade.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    CAMA DE JADE
                </div>  
                <span id=\"contenidoItemOfert\">
                    Son camillas con un rodillo interno de piedra de jade que
                    emite helio y tres placas carbónicas que aportan rayos infrarrojos
                    <spam id=\"botonOferta6\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna7\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/biomagnetismo.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    BIOMAGNETISMO
                </div>  
                <span id=\"contenidoItemOfert\">
                    Aplicando imanes con una determinada fuerza y polaridad en puntos 
                    específicos del cuerpo se puede exterminar virus
                    <spam id=\"botonOferta7\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna8\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/microdermoabrasion.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    MICRODERMOABRASIÓN
                </div>  
                    <span id=\"contenidoItemOfert\">
                    Elimina las capas superficiales de piel 
                    muerta y opaca, estimulando la renovación y la producción de colágeno
                    <spam id=\"botonOferta8\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <!-- contenido del Toggle -->
        <span id=\"contenidoItemOferta6\">
            <img id=\"imgToggle\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/camaJade.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Cama de Jade</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Las camas de piedras Jade actúan a través del movimiento de sus
                    rodillos y del calor que transmiten. Sirven para reducir los 
                    dolores musculares provocados por el estrés y contrarrestar la tensión muscular.
                    
                    
                    <ul id=\"beneficiosToggle\">
                    <li>Estrés: (ideal para después de varias horas de trabajo frente al computador) elimina la tensión.</li>
                    <li>Mejoramiento de la postura, rectificación de vértebras, equilibra el sistema nervioso.</li>
                    <li>Mejora la celulitis, las várices y las piernas hinchadas.</li>
                    <li>Mejora las funciones inmunológicas.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        <span id=\"contenidoItemOferta7\">
            <img id=\"imgToggle\" src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/biomagnetismo.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Biomagnetismo</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Extermina en tiempo breve, virus, bacterias, hongos o parásitos,
                    que son causa de la mayoría de las enfermedades graves del hombre,
                    incluso algunas en las que la medicina oficial no siempre reconoce.
                    
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
        
        <span id=\"contenidoItemOferta8\">
            <img id=\"imgToggle\" src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/microdermoabrasion.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Microdermoabrasión</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Muchos pacientes observan cambios radicales en el tono, la textura
                    y el color de las zonas tratadas desde el primer tratamiento.
                    
                    
                    <ul id=\"beneficiosToggle\">
                    <li>Problemas leves de la piel (como la pigmentación despareja o una mala textura).</li>
                    <li>Cicatrices leves causadas por el acné.</li>
                    <li>Poros dilatados y líneas finas.</li>
                    <li>Piel grasosa o sin brillo.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        <!-- fila 4 de las ofertas -->
        
        <div id=\"columna9\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/bañosBarro.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    BAÑOS DE BARRO
                </div>  
                    
                <span id=\"contenidoItemOfert\">
                    Exofoliante natural, saca las impurezas de la piel, retira 
                    las celulas viejas, quita manchas y mejora la circulación.
                    <spam id=\"botonOferta9\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        <div id=\"columna10\">
            <span id=\"imgOferta\">
                <img src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/ofertas/quiropraxia.png"), "html", null, true);
        echo "\">
            </span>
            <span id=\"panelOferta\">
                <div id=\"tituloItemOferta\">
                    QUIROPRAXIA
                </div>  
                <span id=\"contenidoItemOfert\">
                    Busca el restablecimiento de la salud mediante la manipulación de
                    ciertos órganos, especialmente de la columna vertebral.
                    <spam id=\"botonOferta10\">Continuar leyendo..!</spam>
                </span>
            </span>
        </div>
        
        
        <!-- contenido del Toggle -->
        <span id=\"contenidoItemOferta9\">
            <img id=\"imgToggle\" src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/bañosBarro.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Baños de Barro</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Los baños de barro  se remontan a los albores del tiempo,
                    y se asocian a la relajación y muchos otros beneficios:
                    
                    
                    <ul id=\"beneficiosToggle\">
                    <li>Calman la artritis y los dolores en las articulaciones.</li>
                    <li>Mejoran la piel, dejándola más joven y tersa.</li>
                    <li>Alivian la tensión muscular e inflamación.</li>
                    <li>Desintoxican la piel.</li>
                    </ul>
                    </div>
                    
                    <a href=\"\"><spam id=\"botonToggle\">Solicitar Cita Ahora..!</spam></a>
                    
            </span>
        </span>
        
        <span id=\"contenidoItemOferta10\">
            <img id=\"imgToggle\" src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/servicios/quiropraxia.jpg"), "html", null, true);
        echo "\">
            <span id=\"contenidoToggle\">
                <div id=\"tituloToggle\">
                    <b>Quiropraxia</b> | Conoce un poco más de este servicio
                </div>
                    <br>
                    <div id=\"textoToggle\">
                    Esta práctica es definida como la \"profesión sanitaria que se ocupa del diagnóstico,
                    el tratamiento y la prevención de trastornos mecánicos del sistema neuro-musculoesqueléticos.
                    
                    <ul id=\"beneficiosToggle\">
                    <li>Mejora la elasticidad de la piel, así como la velocidad de cicatrización.</li>
                    <li>Mejora la inmunidad (mayor resistencia a catarros y todo tipo de infecciones).</li>
                    <li>Sensación de bienestary mejora del estado de ánimo.</li>
                    <li>Mejora la actividad sexual en ambos sexos.</li>
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
        return array (  597 => 484,  569 => 459,  549 => 442,  529 => 425,  498 => 397,  470 => 372,  441 => 346,  422 => 330,  403 => 314,  384 => 298,  352 => 269,  325 => 245,  296 => 219,  277 => 203,  258 => 187,  239 => 171,  207 => 142,  178 => 116,  149 => 90,  129 => 73,  110 => 57,  88 => 38,  77 => 29,  74 => 28,  69 => 510,  67 => 28,  63 => 26,  60 => 25,  49 => 17,  37 => 8,  31 => 4,  28 => 3,);
    }
}
