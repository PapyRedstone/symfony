<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
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
        $__internal_7629fe3bf70da6dd0b27a282dfb1691f0d4f441768c94ade013fe570e8e69513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7629fe3bf70da6dd0b27a282dfb1691f0d4f441768c94ade013fe570e8e69513->enter($__internal_7629fe3bf70da6dd0b27a282dfb1691f0d4f441768c94ade013fe570e8e69513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7629fe3bf70da6dd0b27a282dfb1691f0d4f441768c94ade013fe570e8e69513->leave($__internal_7629fe3bf70da6dd0b27a282dfb1691f0d4f441768c94ade013fe570e8e69513_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c7bb6204caffa6687bc112521f63d1f8c17a0adcc2d48eff802bd37b46925ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c7bb6204caffa6687bc112521f63d1f8c17a0adcc2d48eff802bd37b46925ab->enter($__internal_1c7bb6204caffa6687bc112521f63d1f8c17a0adcc2d48eff802bd37b46925ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1c7bb6204caffa6687bc112521f63d1f8c17a0adcc2d48eff802bd37b46925ab->leave($__internal_1c7bb6204caffa6687bc112521f63d1f8c17a0adcc2d48eff802bd37b46925ab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_83dd81d9b18719c376d928b6a3f4ba9ab470ed84319d319e062fbce92e237bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83dd81d9b18719c376d928b6a3f4ba9ab470ed84319d319e062fbce92e237bf6->enter($__internal_83dd81d9b18719c376d928b6a3f4ba9ab470ed84319d319e062fbce92e237bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_83dd81d9b18719c376d928b6a3f4ba9ab470ed84319d319e062fbce92e237bf6->leave($__internal_83dd81d9b18719c376d928b6a3f4ba9ab470ed84319d319e062fbce92e237bf6_prof);

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
