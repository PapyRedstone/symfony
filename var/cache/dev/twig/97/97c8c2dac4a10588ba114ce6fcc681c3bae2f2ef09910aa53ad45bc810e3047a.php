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
        $__internal_59ecb0993a4de9e3f85dbfa3a6fb83c282f6ea7dffe2be1747da17fc1811e704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ecb0993a4de9e3f85dbfa3a6fb83c282f6ea7dffe2be1747da17fc1811e704->enter($__internal_59ecb0993a4de9e3f85dbfa3a6fb83c282f6ea7dffe2be1747da17fc1811e704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59ecb0993a4de9e3f85dbfa3a6fb83c282f6ea7dffe2be1747da17fc1811e704->leave($__internal_59ecb0993a4de9e3f85dbfa3a6fb83c282f6ea7dffe2be1747da17fc1811e704_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67d667f1fcefca100c29667f0404edb77347857b4e22c2c4ec13a77df522e1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d667f1fcefca100c29667f0404edb77347857b4e22c2c4ec13a77df522e1d1->enter($__internal_67d667f1fcefca100c29667f0404edb77347857b4e22c2c4ec13a77df522e1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_67d667f1fcefca100c29667f0404edb77347857b4e22c2c4ec13a77df522e1d1->leave($__internal_67d667f1fcefca100c29667f0404edb77347857b4e22c2c4ec13a77df522e1d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ecf3113cbe0ea6cba80eb99442cda3655466ccec816397276552468062adc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecf3113cbe0ea6cba80eb99442cda3655466ccec816397276552468062adc18->enter($__internal_2ecf3113cbe0ea6cba80eb99442cda3655466ccec816397276552468062adc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ecf3113cbe0ea6cba80eb99442cda3655466ccec816397276552468062adc18->leave($__internal_2ecf3113cbe0ea6cba80eb99442cda3655466ccec816397276552468062adc18_prof);

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
