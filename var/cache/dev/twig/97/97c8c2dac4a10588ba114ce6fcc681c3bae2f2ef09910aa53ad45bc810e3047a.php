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
        $__internal_2dedeb241064317419e07a600a3c431807da52360164a034e598ddb4f3cfb423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dedeb241064317419e07a600a3c431807da52360164a034e598ddb4f3cfb423->enter($__internal_2dedeb241064317419e07a600a3c431807da52360164a034e598ddb4f3cfb423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dedeb241064317419e07a600a3c431807da52360164a034e598ddb4f3cfb423->leave($__internal_2dedeb241064317419e07a600a3c431807da52360164a034e598ddb4f3cfb423_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b86a6f692a20d4b9c0bc677efec596a99228ed108f59eae80b54b4dc9737476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b86a6f692a20d4b9c0bc677efec596a99228ed108f59eae80b54b4dc9737476->enter($__internal_5b86a6f692a20d4b9c0bc677efec596a99228ed108f59eae80b54b4dc9737476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5b86a6f692a20d4b9c0bc677efec596a99228ed108f59eae80b54b4dc9737476->leave($__internal_5b86a6f692a20d4b9c0bc677efec596a99228ed108f59eae80b54b4dc9737476_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f353c364cb87b6c946d42956bb6b6150c1795b93c440563884d0d0a06f1ede64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f353c364cb87b6c946d42956bb6b6150c1795b93c440563884d0d0a06f1ede64->enter($__internal_f353c364cb87b6c946d42956bb6b6150c1795b93c440563884d0d0a06f1ede64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f353c364cb87b6c946d42956bb6b6150c1795b93c440563884d0d0a06f1ede64->leave($__internal_f353c364cb87b6c946d42956bb6b6150c1795b93c440563884d0d0a06f1ede64_prof);

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
