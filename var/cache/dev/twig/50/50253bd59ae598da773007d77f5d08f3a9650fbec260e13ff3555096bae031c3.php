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
        $__internal_e413ff578cee4dddc2ec79b8c290cb382ec74e44186b6858a113dde0851666a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e413ff578cee4dddc2ec79b8c290cb382ec74e44186b6858a113dde0851666a1->enter($__internal_e413ff578cee4dddc2ec79b8c290cb382ec74e44186b6858a113dde0851666a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e413ff578cee4dddc2ec79b8c290cb382ec74e44186b6858a113dde0851666a1->leave($__internal_e413ff578cee4dddc2ec79b8c290cb382ec74e44186b6858a113dde0851666a1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_335c519b19dc3a5778ec9ce29497a59b12d690dbb42fa6445e64b638df43bd52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335c519b19dc3a5778ec9ce29497a59b12d690dbb42fa6445e64b638df43bd52->enter($__internal_335c519b19dc3a5778ec9ce29497a59b12d690dbb42fa6445e64b638df43bd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_335c519b19dc3a5778ec9ce29497a59b12d690dbb42fa6445e64b638df43bd52->leave($__internal_335c519b19dc3a5778ec9ce29497a59b12d690dbb42fa6445e64b638df43bd52_prof);

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
