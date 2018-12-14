<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a68d111fbdb1fee2904654bb738c69e72e7a6e5816d47ead3ad9d85c38289456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b028f71746c88acf30ae1d8117ee5f4b8042e1144f9a677c6745a3d1e04caae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b028f71746c88acf30ae1d8117ee5f4b8042e1144f9a677c6745a3d1e04caae->enter($__internal_1b028f71746c88acf30ae1d8117ee5f4b8042e1144f9a677c6745a3d1e04caae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1b028f71746c88acf30ae1d8117ee5f4b8042e1144f9a677c6745a3d1e04caae->leave($__internal_1b028f71746c88acf30ae1d8117ee5f4b8042e1144f9a677c6745a3d1e04caae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4aebcbe87a5a9ef8c497f31e3fc8be928bb31d6276331074a9c8d1656a37f4dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aebcbe87a5a9ef8c497f31e3fc8be928bb31d6276331074a9c8d1656a37f4dd->enter($__internal_4aebcbe87a5a9ef8c497f31e3fc8be928bb31d6276331074a9c8d1656a37f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4aebcbe87a5a9ef8c497f31e3fc8be928bb31d6276331074a9c8d1656a37f4dd->leave($__internal_4aebcbe87a5a9ef8c497f31e3fc8be928bb31d6276331074a9c8d1656a37f4dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
