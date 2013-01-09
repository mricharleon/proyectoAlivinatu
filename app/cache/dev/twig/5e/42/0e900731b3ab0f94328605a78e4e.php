<?php

/* AlivinatuBundle:Administrador:adminCliente.html.twig */
class __TwigTemplate_5e420e900731b3ab0f94328605a78e4e extends Twig_Template
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
        echo "    Admin. Cliente
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        echo "     
    <div id=\"contenido\">
        
        <div id=\"cajaContenido\">
            <div id=\"tituloForm\"><b>Administración de Cliente</b> | Administra todas las cuentas de usuario</div>
            <form id=\"formAdminClienteBuscar\">
                <spam id=\"tituloAdminCU\">Ingresa Criterio de Búsqueda</spam>
                <input type=\"text\" id=\"inputCUBuscar\" placeholder=\"Ingresa tu búsqueda\" />
                
                <input id=\"botonCUBuscar\" type=\"submit\" value=\"Buscar\">
                <a href=\"\"><span id=\"botonCU\">Limpiar</span></a>
            </form>
            
        </div>
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Administrador:adminCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 4,  27 => 3,);
    }
}
