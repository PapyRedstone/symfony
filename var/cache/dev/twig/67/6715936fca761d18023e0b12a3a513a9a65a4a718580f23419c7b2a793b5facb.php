<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_9707132bbe1b59e34b98c0dc0ee67a132c4f0bec41e8b17bf088142d01854fc1 extends Twig_Template
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
        $__internal_01db106a2ffa4d80825a27f13021dbc4008d2186f619dbc01e82b50440401af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01db106a2ffa4d80825a27f13021dbc4008d2186f619dbc01e82b50440401af1->enter($__internal_01db106a2ffa4d80825a27f13021dbc4008d2186f619dbc01e82b50440401af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_01db106a2ffa4d80825a27f13021dbc4008d2186f619dbc01e82b50440401af1->leave($__internal_01db106a2ffa4d80825a27f13021dbc4008d2186f619dbc01e82b50440401af1_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
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
", "FrontOfficeBundle:Default:index.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
