<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eafcbdeefd905f8110ae7893e793eec82c3e00d2c70f441e7e14729e66647293 extends Twig_Template
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
        $__internal_7ed141d0d132ddb9fb158dde8cb1a0ac3f10719baf018d0afc15f7008a3c4ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed141d0d132ddb9fb158dde8cb1a0ac3f10719baf018d0afc15f7008a3c4ae2->enter($__internal_7ed141d0d132ddb9fb158dde8cb1a0ac3f10719baf018d0afc15f7008a3c4ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ed141d0d132ddb9fb158dde8cb1a0ac3f10719baf018d0afc15f7008a3c4ae2->leave($__internal_7ed141d0d132ddb9fb158dde8cb1a0ac3f10719baf018d0afc15f7008a3c4ae2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_887e0ede413ee6283b8a51a22b39bba59243dd7f744990b8cb88c4bb1c0cfbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887e0ede413ee6283b8a51a22b39bba59243dd7f744990b8cb88c4bb1c0cfbc3->enter($__internal_887e0ede413ee6283b8a51a22b39bba59243dd7f744990b8cb88c4bb1c0cfbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_887e0ede413ee6283b8a51a22b39bba59243dd7f744990b8cb88c4bb1c0cfbc3->leave($__internal_887e0ede413ee6283b8a51a22b39bba59243dd7f744990b8cb88c4bb1c0cfbc3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da62de82fea1ac65b25059c3a86bbb821a74caf334e4790adcf19152afe48e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da62de82fea1ac65b25059c3a86bbb821a74caf334e4790adcf19152afe48e8->enter($__internal_7da62de82fea1ac65b25059c3a86bbb821a74caf334e4790adcf19152afe48e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7da62de82fea1ac65b25059c3a86bbb821a74caf334e4790adcf19152afe48e8->leave($__internal_7da62de82fea1ac65b25059c3a86bbb821a74caf334e4790adcf19152afe48e8_prof);

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
