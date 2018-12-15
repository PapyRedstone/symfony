<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_609e731490df3ffe4632372e80895c4d9fda3e89e64aa12970dc6d5d46e1a74e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45357e3c29939f979dc0dff12763336b10cd6340a72def9d06d8f866402485de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45357e3c29939f979dc0dff12763336b10cd6340a72def9d06d8f866402485de->enter($__internal_45357e3c29939f979dc0dff12763336b10cd6340a72def9d06d8f866402485de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45357e3c29939f979dc0dff12763336b10cd6340a72def9d06d8f866402485de->leave($__internal_45357e3c29939f979dc0dff12763336b10cd6340a72def9d06d8f866402485de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5226143135b1a39809500cb492b8c865b5dc8a1e82abf66786381d67cb41787e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5226143135b1a39809500cb492b8c865b5dc8a1e82abf66786381d67cb41787e->enter($__internal_5226143135b1a39809500cb492b8c865b5dc8a1e82abf66786381d67cb41787e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5226143135b1a39809500cb492b8c865b5dc8a1e82abf66786381d67cb41787e->leave($__internal_5226143135b1a39809500cb492b8c865b5dc8a1e82abf66786381d67cb41787e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c2269599c677739a13b8662ff64c4f88d88fa3b4e79ca1e000246e56c4a6ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2269599c677739a13b8662ff64c4f88d88fa3b4e79ca1e000246e56c4a6ae7->enter($__internal_8c2269599c677739a13b8662ff64c4f88d88fa3b4e79ca1e000246e56c4a6ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_8c2269599c677739a13b8662ff64c4f88d88fa3b4e79ca1e000246e56c4a6ae7->leave($__internal_8c2269599c677739a13b8662ff64c4f88d88fa3b4e79ca1e000246e56c4a6ae7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
