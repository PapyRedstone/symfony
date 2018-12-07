<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_257f8af107cd3dd8b6250e7cc86ac14b28072a6d96f75e9e1a19c0fe43429989 extends Twig_Template
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
        $__internal_9fe13ab24f70a2ee81c131c94385933e31bb77e2f4a941f75a1a671c964e7e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe13ab24f70a2ee81c131c94385933e31bb77e2f4a941f75a1a671c964e7e2a->enter($__internal_9fe13ab24f70a2ee81c131c94385933e31bb77e2f4a941f75a1a671c964e7e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9fe13ab24f70a2ee81c131c94385933e31bb77e2f4a941f75a1a671c964e7e2a->leave($__internal_9fe13ab24f70a2ee81c131c94385933e31bb77e2f4a941f75a1a671c964e7e2a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ebbb40d2cac5fbcf77556e18f4948888c27596918062dc4ab50dfdc9d2a8aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebbb40d2cac5fbcf77556e18f4948888c27596918062dc4ab50dfdc9d2a8aa7->enter($__internal_2ebbb40d2cac5fbcf77556e18f4948888c27596918062dc4ab50dfdc9d2a8aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2ebbb40d2cac5fbcf77556e18f4948888c27596918062dc4ab50dfdc9d2a8aa7->leave($__internal_2ebbb40d2cac5fbcf77556e18f4948888c27596918062dc4ab50dfdc9d2a8aa7_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
