<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c98ab064b093751aeea645603bbec645bff4b7858f252d95c8ba1f30623d6137 extends Twig_Template
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
        $__internal_6bf150ab6e3316f51e23b79843eb360a67b6c4fb202623df4b1a3763ad0b5c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf150ab6e3316f51e23b79843eb360a67b6c4fb202623df4b1a3763ad0b5c32->enter($__internal_6bf150ab6e3316f51e23b79843eb360a67b6c4fb202623df4b1a3763ad0b5c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf150ab6e3316f51e23b79843eb360a67b6c4fb202623df4b1a3763ad0b5c32->leave($__internal_6bf150ab6e3316f51e23b79843eb360a67b6c4fb202623df4b1a3763ad0b5c32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd906ea5ca8e586f45cb7fd389a7d7e8c96c1e42d419c375419fbe05c0c2f2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd906ea5ca8e586f45cb7fd389a7d7e8c96c1e42d419c375419fbe05c0c2f2dd->enter($__internal_dd906ea5ca8e586f45cb7fd389a7d7e8c96c1e42d419c375419fbe05c0c2f2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd906ea5ca8e586f45cb7fd389a7d7e8c96c1e42d419c375419fbe05c0c2f2dd->leave($__internal_dd906ea5ca8e586f45cb7fd389a7d7e8c96c1e42d419c375419fbe05c0c2f2dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30c47b370c43e3e13526295786047adeb671b674ff430b564c55bd894c65129e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c47b370c43e3e13526295786047adeb671b674ff430b564c55bd894c65129e->enter($__internal_30c47b370c43e3e13526295786047adeb671b674ff430b564c55bd894c65129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30c47b370c43e3e13526295786047adeb671b674ff430b564c55bd894c65129e->leave($__internal_30c47b370c43e3e13526295786047adeb671b674ff430b564c55bd894c65129e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e44b609b5238796f0acef56200790d9082eb36621db3641dfb9b10278b402eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44b609b5238796f0acef56200790d9082eb36621db3641dfb9b10278b402eb4->enter($__internal_e44b609b5238796f0acef56200790d9082eb36621db3641dfb9b10278b402eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e44b609b5238796f0acef56200790d9082eb36621db3641dfb9b10278b402eb4->leave($__internal_e44b609b5238796f0acef56200790d9082eb36621db3641dfb9b10278b402eb4_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
