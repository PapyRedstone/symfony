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
        $__internal_812215979dba2872588cc260a0a5f3b0ca9f455d12eb7e9f19ff0dd2fa135618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812215979dba2872588cc260a0a5f3b0ca9f455d12eb7e9f19ff0dd2fa135618->enter($__internal_812215979dba2872588cc260a0a5f3b0ca9f455d12eb7e9f19ff0dd2fa135618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812215979dba2872588cc260a0a5f3b0ca9f455d12eb7e9f19ff0dd2fa135618->leave($__internal_812215979dba2872588cc260a0a5f3b0ca9f455d12eb7e9f19ff0dd2fa135618_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c0175794dea0aa3616c217075db00d20d0376842d75a0d775b952577fe7ec8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0175794dea0aa3616c217075db00d20d0376842d75a0d775b952577fe7ec8d->enter($__internal_1c0175794dea0aa3616c217075db00d20d0376842d75a0d775b952577fe7ec8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1c0175794dea0aa3616c217075db00d20d0376842d75a0d775b952577fe7ec8d->leave($__internal_1c0175794dea0aa3616c217075db00d20d0376842d75a0d775b952577fe7ec8d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_daeabcd9e75f9e3a4818c441dc663162430f15a52f153404dbf1297dec6a8255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daeabcd9e75f9e3a4818c441dc663162430f15a52f153404dbf1297dec6a8255->enter($__internal_daeabcd9e75f9e3a4818c441dc663162430f15a52f153404dbf1297dec6a8255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_daeabcd9e75f9e3a4818c441dc663162430f15a52f153404dbf1297dec6a8255->leave($__internal_daeabcd9e75f9e3a4818c441dc663162430f15a52f153404dbf1297dec6a8255_prof);

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
