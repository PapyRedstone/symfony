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
        $__internal_60554fafbf814d02f08b9c53bc20749521767d6f9fc4b6feeb9c77b7c8838617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60554fafbf814d02f08b9c53bc20749521767d6f9fc4b6feeb9c77b7c8838617->enter($__internal_60554fafbf814d02f08b9c53bc20749521767d6f9fc4b6feeb9c77b7c8838617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60554fafbf814d02f08b9c53bc20749521767d6f9fc4b6feeb9c77b7c8838617->leave($__internal_60554fafbf814d02f08b9c53bc20749521767d6f9fc4b6feeb9c77b7c8838617_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e938ae99941e8c3b57d8182b16db9ea30f73c4da01de23126944e12cc1649452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e938ae99941e8c3b57d8182b16db9ea30f73c4da01de23126944e12cc1649452->enter($__internal_e938ae99941e8c3b57d8182b16db9ea30f73c4da01de23126944e12cc1649452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e938ae99941e8c3b57d8182b16db9ea30f73c4da01de23126944e12cc1649452->leave($__internal_e938ae99941e8c3b57d8182b16db9ea30f73c4da01de23126944e12cc1649452_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5544355c11f0d74afb62392442797b19171f9d563a76f4bf55838cdfb602e674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5544355c11f0d74afb62392442797b19171f9d563a76f4bf55838cdfb602e674->enter($__internal_5544355c11f0d74afb62392442797b19171f9d563a76f4bf55838cdfb602e674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5544355c11f0d74afb62392442797b19171f9d563a76f4bf55838cdfb602e674->leave($__internal_5544355c11f0d74afb62392442797b19171f9d563a76f4bf55838cdfb602e674_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f75c417d1e0c6e8251a2bd5f1613771b99f0148df5c067ae978c21f6ab16db3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75c417d1e0c6e8251a2bd5f1613771b99f0148df5c067ae978c21f6ab16db3b->enter($__internal_f75c417d1e0c6e8251a2bd5f1613771b99f0148df5c067ae978c21f6ab16db3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f75c417d1e0c6e8251a2bd5f1613771b99f0148df5c067ae978c21f6ab16db3b->leave($__internal_f75c417d1e0c6e8251a2bd5f1613771b99f0148df5c067ae978c21f6ab16db3b_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/etdfrm1/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
