<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_2395e4206b82ae353b70eed2c2628adac6a699e77c0837c3fd347d36c5c1e969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2395e4206b82ae353b70eed2c2628adac6a699e77c0837c3fd347d36c5c1e969->enter($__internal_2395e4206b82ae353b70eed2c2628adac6a699e77c0837c3fd347d36c5c1e969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2395e4206b82ae353b70eed2c2628adac6a699e77c0837c3fd347d36c5c1e969->leave($__internal_2395e4206b82ae353b70eed2c2628adac6a699e77c0837c3fd347d36c5c1e969_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_058aff06e78fff2d761b7ac154d421ad74c8660d664005479935e4573743143a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058aff06e78fff2d761b7ac154d421ad74c8660d664005479935e4573743143a->enter($__internal_058aff06e78fff2d761b7ac154d421ad74c8660d664005479935e4573743143a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_058aff06e78fff2d761b7ac154d421ad74c8660d664005479935e4573743143a->leave($__internal_058aff06e78fff2d761b7ac154d421ad74c8660d664005479935e4573743143a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_965721f5757fd7600f2cab756525cd0cf6c8e0000d0d1c0d3cb9800098ea8881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965721f5757fd7600f2cab756525cd0cf6c8e0000d0d1c0d3cb9800098ea8881->enter($__internal_965721f5757fd7600f2cab756525cd0cf6c8e0000d0d1c0d3cb9800098ea8881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_965721f5757fd7600f2cab756525cd0cf6c8e0000d0d1c0d3cb9800098ea8881->leave($__internal_965721f5757fd7600f2cab756525cd0cf6c8e0000d0d1c0d3cb9800098ea8881_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe968f34688e01a1fa1677ffc45ce963d6763b74750665036bb001b9a888a65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe968f34688e01a1fa1677ffc45ce963d6763b74750665036bb001b9a888a65c->enter($__internal_fe968f34688e01a1fa1677ffc45ce963d6763b74750665036bb001b9a888a65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fe968f34688e01a1fa1677ffc45ce963d6763b74750665036bb001b9a888a65c->leave($__internal_fe968f34688e01a1fa1677ffc45ce963d6763b74750665036bb001b9a888a65c_prof);

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
