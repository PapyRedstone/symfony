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
        $__internal_5e827f8e1d5904c3935a1768b459582a8e2ff9046444b9b8c2163dcb5037cc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e827f8e1d5904c3935a1768b459582a8e2ff9046444b9b8c2163dcb5037cc1d->enter($__internal_5e827f8e1d5904c3935a1768b459582a8e2ff9046444b9b8c2163dcb5037cc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e827f8e1d5904c3935a1768b459582a8e2ff9046444b9b8c2163dcb5037cc1d->leave($__internal_5e827f8e1d5904c3935a1768b459582a8e2ff9046444b9b8c2163dcb5037cc1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39d4b543b6e5ca846c614b5e38c0f0dda30da4dd64b00a8148bb37fed3ae0acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d4b543b6e5ca846c614b5e38c0f0dda30da4dd64b00a8148bb37fed3ae0acb->enter($__internal_39d4b543b6e5ca846c614b5e38c0f0dda30da4dd64b00a8148bb37fed3ae0acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_39d4b543b6e5ca846c614b5e38c0f0dda30da4dd64b00a8148bb37fed3ae0acb->leave($__internal_39d4b543b6e5ca846c614b5e38c0f0dda30da4dd64b00a8148bb37fed3ae0acb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3501dfbfb1e788c5e07609b13c11a7143221d4d2f370730107b4bbef799e3a0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3501dfbfb1e788c5e07609b13c11a7143221d4d2f370730107b4bbef799e3a0d->enter($__internal_3501dfbfb1e788c5e07609b13c11a7143221d4d2f370730107b4bbef799e3a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3501dfbfb1e788c5e07609b13c11a7143221d4d2f370730107b4bbef799e3a0d->leave($__internal_3501dfbfb1e788c5e07609b13c11a7143221d4d2f370730107b4bbef799e3a0d_prof);

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
