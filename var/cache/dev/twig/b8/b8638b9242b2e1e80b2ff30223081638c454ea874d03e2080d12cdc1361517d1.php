<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0c06d56bb5ad927f860154cae9330bce134aa21fed6034780e74f5a2d5848db1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfccd2d45785a28d215a43837c46dd8d9d2c65af8dbddd8c3b6f13321a3c3173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfccd2d45785a28d215a43837c46dd8d9d2c65af8dbddd8c3b6f13321a3c3173->enter($__internal_bfccd2d45785a28d215a43837c46dd8d9d2c65af8dbddd8c3b6f13321a3c3173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfccd2d45785a28d215a43837c46dd8d9d2c65af8dbddd8c3b6f13321a3c3173->leave($__internal_bfccd2d45785a28d215a43837c46dd8d9d2c65af8dbddd8c3b6f13321a3c3173_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_093bbb4c8b7b1021eb34f6bf658bcff29217ecee6d05a763a44286b39a819d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093bbb4c8b7b1021eb34f6bf658bcff29217ecee6d05a763a44286b39a819d70->enter($__internal_093bbb4c8b7b1021eb34f6bf658bcff29217ecee6d05a763a44286b39a819d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_093bbb4c8b7b1021eb34f6bf658bcff29217ecee6d05a763a44286b39a819d70->leave($__internal_093bbb4c8b7b1021eb34f6bf658bcff29217ecee6d05a763a44286b39a819d70_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f11ad88d66b2def38b79ed9b1d6c24999f7a51ddf7a6ddb73a1a251eb8d1d008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f11ad88d66b2def38b79ed9b1d6c24999f7a51ddf7a6ddb73a1a251eb8d1d008->enter($__internal_f11ad88d66b2def38b79ed9b1d6c24999f7a51ddf7a6ddb73a1a251eb8d1d008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f11ad88d66b2def38b79ed9b1d6c24999f7a51ddf7a6ddb73a1a251eb8d1d008->leave($__internal_f11ad88d66b2def38b79ed9b1d6c24999f7a51ddf7a6ddb73a1a251eb8d1d008_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84c7f0ca356cdef78a174f5612dfa5b670ce5aad369521b4e154ff679642478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c7f0ca356cdef78a174f5612dfa5b670ce5aad369521b4e154ff679642478a->enter($__internal_84c7f0ca356cdef78a174f5612dfa5b670ce5aad369521b4e154ff679642478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_84c7f0ca356cdef78a174f5612dfa5b670ce5aad369521b4e154ff679642478a->leave($__internal_84c7f0ca356cdef78a174f5612dfa5b670ce5aad369521b4e154ff679642478a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
