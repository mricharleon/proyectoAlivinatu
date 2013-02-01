<?php

/* AlivinatuBundle:Usuario:login.html.twig */
class __TwigTemplate_2925f070c576a6b460a79b768159f447 extends Twig_Template
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
        echo "    Login
";
    }

    // line 7
    public function block_contenido($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"gridLogin\">
    <div id=\"tituloForm\"><b>Accede</b> | a tu Cuenta Alivinatu</div>

    ";
        // line 14
        echo "
    <form id=\"formLogin\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check_path"), "html", null, true);
        echo "\" method=\"POST\">
        
            <label for=\"username\">Usuario</label>
            <input type=\"text\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />

            <label for=\"password\">Contraseña</label>
            <input type=\"password\" name=\"_password\" />
            
            <a href=\"\" id=\"olvidoContraseña\"> ¿Has olvidado tu Contraseña? </a><br>
            <a href=\"\" id=\"registrese\">Regístrate</a><br>
            
            
            <a href=\"\"><span id=\"botonForm2\">Cancelar</span></a>
            <input id=\"botonForm\" type=\"submit\" value=\"Acceder\" />
            
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "AlivinatuBundle:Usuario:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  46 => 15,  43 => 14,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
