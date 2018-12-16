<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_485f0e7da045e2d6e1bc043dfa9c7f529e83fc967396a0b0e0aa13809c64ed92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b4a74e39ebb0e0082fd58238b87d9d53c6c24cdef34d0974c79c3b8517b2d977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a74e39ebb0e0082fd58238b87d9d53c6c24cdef34d0974c79c3b8517b2d977->enter($__internal_b4a74e39ebb0e0082fd58238b87d9d53c6c24cdef34d0974c79c3b8517b2d977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a74e39ebb0e0082fd58238b87d9d53c6c24cdef34d0974c79c3b8517b2d977->leave($__internal_b4a74e39ebb0e0082fd58238b87d9d53c6c24cdef34d0974c79c3b8517b2d977_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40d67723e8abf166f564ea5783d9b79976d312ef277cc96c0cf2475211d00f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d67723e8abf166f564ea5783d9b79976d312ef277cc96c0cf2475211d00f1a->enter($__internal_40d67723e8abf166f564ea5783d9b79976d312ef277cc96c0cf2475211d00f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_40d67723e8abf166f564ea5783d9b79976d312ef277cc96c0cf2475211d00f1a->leave($__internal_40d67723e8abf166f564ea5783d9b79976d312ef277cc96c0cf2475211d00f1a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd2a73f219be386828bcbaadc02213d9b70cd78964f653ba92989533704ef306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2a73f219be386828bcbaadc02213d9b70cd78964f653ba92989533704ef306->enter($__internal_fd2a73f219be386828bcbaadc02213d9b70cd78964f653ba92989533704ef306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_fd2a73f219be386828bcbaadc02213d9b70cd78964f653ba92989533704ef306->leave($__internal_fd2a73f219be386828bcbaadc02213d9b70cd78964f653ba92989533704ef306_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a391949054fc8552e700a0f503dbb2ada4b5b4d7f88d4024497e7dfe6c0e61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a391949054fc8552e700a0f503dbb2ada4b5b4d7f88d4024497e7dfe6c0e61a->enter($__internal_7a391949054fc8552e700a0f503dbb2ada4b5b4d7f88d4024497e7dfe6c0e61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7a391949054fc8552e700a0f503dbb2ada4b5b4d7f88d4024497e7dfe6c0e61a->leave($__internal_7a391949054fc8552e700a0f503dbb2ada4b5b4d7f88d4024497e7dfe6c0e61a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
