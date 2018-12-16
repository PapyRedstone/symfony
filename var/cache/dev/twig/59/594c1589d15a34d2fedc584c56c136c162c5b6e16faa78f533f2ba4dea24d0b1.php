<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b722fecf95834f0dfcbc31bc3b29c9c455de15b4105e717bdd98a71f4a40fea8 extends Twig_Template
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
        $__internal_a16b18b645a83f0411cdba2b241a36505c5adce3c04636ee241ac65e2c6ed56d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16b18b645a83f0411cdba2b241a36505c5adce3c04636ee241ac65e2c6ed56d->enter($__internal_a16b18b645a83f0411cdba2b241a36505c5adce3c04636ee241ac65e2c6ed56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16b18b645a83f0411cdba2b241a36505c5adce3c04636ee241ac65e2c6ed56d->leave($__internal_a16b18b645a83f0411cdba2b241a36505c5adce3c04636ee241ac65e2c6ed56d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28eb6fc9c4d5b0860026cbfe61ad642422512201049b100adba9dc6eef6115db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eb6fc9c4d5b0860026cbfe61ad642422512201049b100adba9dc6eef6115db->enter($__internal_28eb6fc9c4d5b0860026cbfe61ad642422512201049b100adba9dc6eef6115db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28eb6fc9c4d5b0860026cbfe61ad642422512201049b100adba9dc6eef6115db->leave($__internal_28eb6fc9c4d5b0860026cbfe61ad642422512201049b100adba9dc6eef6115db_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4476128c1cbb4dfac3bc6a243793f012997d649d7bdb118be1c630db757cffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4476128c1cbb4dfac3bc6a243793f012997d649d7bdb118be1c630db757cffe->enter($__internal_e4476128c1cbb4dfac3bc6a243793f012997d649d7bdb118be1c630db757cffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4476128c1cbb4dfac3bc6a243793f012997d649d7bdb118be1c630db757cffe->leave($__internal_e4476128c1cbb4dfac3bc6a243793f012997d649d7bdb118be1c630db757cffe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10806f34bb68256a87640788c6b5fa392da5e47b16161187c42f122faca2fac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10806f34bb68256a87640788c6b5fa392da5e47b16161187c42f122faca2fac8->enter($__internal_10806f34bb68256a87640788c6b5fa392da5e47b16161187c42f122faca2fac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_10806f34bb68256a87640788c6b5fa392da5e47b16161187c42f122faca2fac8->leave($__internal_10806f34bb68256a87640788c6b5fa392da5e47b16161187c42f122faca2fac8_prof);

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
