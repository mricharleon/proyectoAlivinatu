<?php

/* AlivinatuBundle:Administrador:menuAdmin.html.twig */
class __TwigTemplate_f7f22a7aaa52e835fc96f4024a25f3e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AlivinatuBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
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
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Administración
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        echo "     
    <div id=\"contenido\">
        
        
        <div id=\"cajaContenido\">
            <div id=\"tituloForm\"><b>Selecciona</b> | El Caso de Uso para su Administración</div>
            
            <div id=\"columnaCU1\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/administrador/menu/adminCliente.jpg"), "html", null, true);
        echo "\">
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminCliente"), "html", null, true);
        echo "\"><span id=\"tituloCU\">Administrar Cliente</span></a>
            </div>
            
            <div id=\"columnaCU1\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/administrador/menu/adminServicio.jpg"), "html", null, true);
        echo "\">
                <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminServicio"), "html", null, true);
        echo "\"><span id=\"tituloCU\">Administrar Servicio</span></a>
            </div>
            
            <div id=\"columnaCU1\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/administrador/menu/adminSala.jpg"), "html", null, true);
        echo "\">
                <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminSala"), "html", null, true);
        echo "\"><span id=\"tituloCU\">Administrar Sala</span></a>
            </div>
            
            <div id=\"columnaCU1\">
                <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/administrador/menu/adminPromocion.jpg"), "html", null, true);
        echo "\">
                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("adminPromocion"), "html", null, true);
        echo "\"><span id=\"tituloCU\">Administrar Promoción</span></a>
            </div>
            
            <div id=\"columnaCU1\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/recursosAlivinatu/images/administrador/menu/adminReserva.jpg"), "html", null, true);
        echo "\">
                <span id=\"tituloCU\">Administrar Cita</span>
            </div>
            
            <div class=\"clear\"></div>
            
           ";
        // line 42
        echo "        </div>
    
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Administrador:menuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  91 => 35,  84 => 31,  80 => 30,  73 => 26,  69 => 25,  62 => 21,  58 => 20,  51 => 16,  47 => 15,  35 => 7,  30 => 4,  27 => 3,);
    }
}
