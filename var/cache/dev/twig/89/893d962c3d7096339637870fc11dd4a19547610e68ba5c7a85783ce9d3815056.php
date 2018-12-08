<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d84ef98dee78fedca5f86e9b28b90a358db8b9ee512fb97c321fb61b860f0735 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_13b4fcba2d4807ef54a78295e51d88fcf53f6bcda4da27ad44f1e403390bc7de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b4fcba2d4807ef54a78295e51d88fcf53f6bcda4da27ad44f1e403390bc7de->enter($__internal_13b4fcba2d4807ef54a78295e51d88fcf53f6bcda4da27ad44f1e403390bc7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b4fcba2d4807ef54a78295e51d88fcf53f6bcda4da27ad44f1e403390bc7de->leave($__internal_13b4fcba2d4807ef54a78295e51d88fcf53f6bcda4da27ad44f1e403390bc7de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c673cbe5c4ad86f92a6f6b885cc801e64d83767d5dd2685edb83ec55dbc3119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c673cbe5c4ad86f92a6f6b885cc801e64d83767d5dd2685edb83ec55dbc3119->enter($__internal_3c673cbe5c4ad86f92a6f6b885cc801e64d83767d5dd2685edb83ec55dbc3119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c673cbe5c4ad86f92a6f6b885cc801e64d83767d5dd2685edb83ec55dbc3119->leave($__internal_3c673cbe5c4ad86f92a6f6b885cc801e64d83767d5dd2685edb83ec55dbc3119_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca8c53b099c0ad96e525c6518611161aea22b39a408660d960cd69699659d530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8c53b099c0ad96e525c6518611161aea22b39a408660d960cd69699659d530->enter($__internal_ca8c53b099c0ad96e525c6518611161aea22b39a408660d960cd69699659d530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ca8c53b099c0ad96e525c6518611161aea22b39a408660d960cd69699659d530->leave($__internal_ca8c53b099c0ad96e525c6518611161aea22b39a408660d960cd69699659d530_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a42547af81d14ddc30a6ce4bc9de6ccf33ba31d493826c22511f7d40ac6f9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a42547af81d14ddc30a6ce4bc9de6ccf33ba31d493826c22511f7d40ac6f9c1->enter($__internal_7a42547af81d14ddc30a6ce4bc9de6ccf33ba31d493826c22511f7d40ac6f9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7a42547af81d14ddc30a6ce4bc9de6ccf33ba31d493826c22511f7d40ac6f9c1->leave($__internal_7a42547af81d14ddc30a6ce4bc9de6ccf33ba31d493826c22511f7d40ac6f9c1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
