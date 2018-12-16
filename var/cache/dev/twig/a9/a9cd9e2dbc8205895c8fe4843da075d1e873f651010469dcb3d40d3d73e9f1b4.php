<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_fcc947946cb22a3f68cf854e81af7a540ec40db42ca4f572d3597edbf40e58db extends Twig_Template
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
        $__internal_815eaaae262f09a14d3049a1f308208aaf5e67cc2d945865ae29d267c2f87e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815eaaae262f09a14d3049a1f308208aaf5e67cc2d945865ae29d267c2f87e95->enter($__internal_815eaaae262f09a14d3049a1f308208aaf5e67cc2d945865ae29d267c2f87e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_815eaaae262f09a14d3049a1f308208aaf5e67cc2d945865ae29d267c2f87e95->leave($__internal_815eaaae262f09a14d3049a1f308208aaf5e67cc2d945865ae29d267c2f87e95_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_206a893285a94105f9ed02896bba6caa6b2a1c29db2faed7bf3cb69d9e924676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206a893285a94105f9ed02896bba6caa6b2a1c29db2faed7bf3cb69d9e924676->enter($__internal_206a893285a94105f9ed02896bba6caa6b2a1c29db2faed7bf3cb69d9e924676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_206a893285a94105f9ed02896bba6caa6b2a1c29db2faed7bf3cb69d9e924676->leave($__internal_206a893285a94105f9ed02896bba6caa6b2a1c29db2faed7bf3cb69d9e924676_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_449bed0d314d62f56d3bb2c19fb08966a096be2a9c8431890ef94dfff3da8369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449bed0d314d62f56d3bb2c19fb08966a096be2a9c8431890ef94dfff3da8369->enter($__internal_449bed0d314d62f56d3bb2c19fb08966a096be2a9c8431890ef94dfff3da8369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_449bed0d314d62f56d3bb2c19fb08966a096be2a9c8431890ef94dfff3da8369->leave($__internal_449bed0d314d62f56d3bb2c19fb08966a096be2a9c8431890ef94dfff3da8369_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
