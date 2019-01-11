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
        $__internal_9da8c3bcbabd31c94748bc8e9e64a10bac7095e490a137d18285999459ac70ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da8c3bcbabd31c94748bc8e9e64a10bac7095e490a137d18285999459ac70ac->enter($__internal_9da8c3bcbabd31c94748bc8e9e64a10bac7095e490a137d18285999459ac70ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9da8c3bcbabd31c94748bc8e9e64a10bac7095e490a137d18285999459ac70ac->leave($__internal_9da8c3bcbabd31c94748bc8e9e64a10bac7095e490a137d18285999459ac70ac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8da9984f0592bcfb37340b0fab19967e57e4276e211358c9cb77d2a52d8bb853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da9984f0592bcfb37340b0fab19967e57e4276e211358c9cb77d2a52d8bb853->enter($__internal_8da9984f0592bcfb37340b0fab19967e57e4276e211358c9cb77d2a52d8bb853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8da9984f0592bcfb37340b0fab19967e57e4276e211358c9cb77d2a52d8bb853->leave($__internal_8da9984f0592bcfb37340b0fab19967e57e4276e211358c9cb77d2a52d8bb853_prof);

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
