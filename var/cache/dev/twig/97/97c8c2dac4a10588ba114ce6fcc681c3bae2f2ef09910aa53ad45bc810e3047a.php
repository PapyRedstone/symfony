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
        $__internal_15d1db80589dfee1cd8c357ffb3407cc89fdf8c88cc61bc7becc11fd6ebeed6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d1db80589dfee1cd8c357ffb3407cc89fdf8c88cc61bc7becc11fd6ebeed6d->enter($__internal_15d1db80589dfee1cd8c357ffb3407cc89fdf8c88cc61bc7becc11fd6ebeed6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15d1db80589dfee1cd8c357ffb3407cc89fdf8c88cc61bc7becc11fd6ebeed6d->leave($__internal_15d1db80589dfee1cd8c357ffb3407cc89fdf8c88cc61bc7becc11fd6ebeed6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_909cebde99021f207c39a35552c95fdb9036595096cbaef702d71c6e399b3812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909cebde99021f207c39a35552c95fdb9036595096cbaef702d71c6e399b3812->enter($__internal_909cebde99021f207c39a35552c95fdb9036595096cbaef702d71c6e399b3812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_909cebde99021f207c39a35552c95fdb9036595096cbaef702d71c6e399b3812->leave($__internal_909cebde99021f207c39a35552c95fdb9036595096cbaef702d71c6e399b3812_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16a5bacf8886e6632da3fa54cf8f744ee28431fe48737b953766ee8d3d11ef1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a5bacf8886e6632da3fa54cf8f744ee28431fe48737b953766ee8d3d11ef1f->enter($__internal_16a5bacf8886e6632da3fa54cf8f744ee28431fe48737b953766ee8d3d11ef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_16a5bacf8886e6632da3fa54cf8f744ee28431fe48737b953766ee8d3d11ef1f->leave($__internal_16a5bacf8886e6632da3fa54cf8f744ee28431fe48737b953766ee8d3d11ef1f_prof);

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
