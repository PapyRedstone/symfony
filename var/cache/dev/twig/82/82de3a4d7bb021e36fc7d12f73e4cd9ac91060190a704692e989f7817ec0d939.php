<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a36317c0576be5d305eb4569f1521eea3ad153744af7174557154d2e09e46743 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a77c169d1b98d9836c5275a62f665e3a8b79d33e26ab4671ac443132e5379069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77c169d1b98d9836c5275a62f665e3a8b79d33e26ab4671ac443132e5379069->enter($__internal_a77c169d1b98d9836c5275a62f665e3a8b79d33e26ab4671ac443132e5379069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a77c169d1b98d9836c5275a62f665e3a8b79d33e26ab4671ac443132e5379069->leave($__internal_a77c169d1b98d9836c5275a62f665e3a8b79d33e26ab4671ac443132e5379069_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01627bc4249622850818640d9d9f07a964c2acd7488e083a514799aea8138c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01627bc4249622850818640d9d9f07a964c2acd7488e083a514799aea8138c49->enter($__internal_01627bc4249622850818640d9d9f07a964c2acd7488e083a514799aea8138c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_01627bc4249622850818640d9d9f07a964c2acd7488e083a514799aea8138c49->leave($__internal_01627bc4249622850818640d9d9f07a964c2acd7488e083a514799aea8138c49_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16b9620e748bcb96b1679dc6c4a466393733eca6fd9393733f784d2c52fc1939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b9620e748bcb96b1679dc6c4a466393733eca6fd9393733f784d2c52fc1939->enter($__internal_16b9620e748bcb96b1679dc6c4a466393733eca6fd9393733f784d2c52fc1939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16b9620e748bcb96b1679dc6c4a466393733eca6fd9393733f784d2c52fc1939->leave($__internal_16b9620e748bcb96b1679dc6c4a466393733eca6fd9393733f784d2c52fc1939_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9502846c13c9f23f68b00a6819912259c7b53cb19dcae478c3db9ea4756bb7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9502846c13c9f23f68b00a6819912259c7b53cb19dcae478c3db9ea4756bb7d9->enter($__internal_9502846c13c9f23f68b00a6819912259c7b53cb19dcae478c3db9ea4756bb7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9502846c13c9f23f68b00a6819912259c7b53cb19dcae478c3db9ea4756bb7d9->leave($__internal_9502846c13c9f23f68b00a6819912259c7b53cb19dcae478c3db9ea4756bb7d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
