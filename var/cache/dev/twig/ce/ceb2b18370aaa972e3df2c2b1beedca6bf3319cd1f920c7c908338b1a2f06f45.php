<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_1860ab2e49a4bce78f3015e075186c8f6fe82dd5652e47bacb317d770ab6cd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7222271a76e3bb2a7d30cf1458590663962372db5c6f555bfdab62ba9778a059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7222271a76e3bb2a7d30cf1458590663962372db5c6f555bfdab62ba9778a059->enter($__internal_7222271a76e3bb2a7d30cf1458590663962372db5c6f555bfdab62ba9778a059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_7222271a76e3bb2a7d30cf1458590663962372db5c6f555bfdab62ba9778a059->leave($__internal_7222271a76e3bb2a7d30cf1458590663962372db5c6f555bfdab62ba9778a059_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "BackOfficeBundle:Default:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
