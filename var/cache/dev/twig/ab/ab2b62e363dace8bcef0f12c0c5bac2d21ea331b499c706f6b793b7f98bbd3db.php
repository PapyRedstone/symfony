<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_64180bc5d592cec1aee10e0424950d82cbd57a14a4bdca8402996a233b7bbc00 extends Twig_Template
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
        $__internal_8e2c0f0504ff241e52646c9fb61218776f203a3b3330709bc151c5fe2ef3e4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2c0f0504ff241e52646c9fb61218776f203a3b3330709bc151c5fe2ef3e4df->enter($__internal_8e2c0f0504ff241e52646c9fb61218776f203a3b3330709bc151c5fe2ef3e4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2c0f0504ff241e52646c9fb61218776f203a3b3330709bc151c5fe2ef3e4df->leave($__internal_8e2c0f0504ff241e52646c9fb61218776f203a3b3330709bc151c5fe2ef3e4df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_83077071e520f530415c3893090c6c23a147b362cb9034f126530f968401dce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83077071e520f530415c3893090c6c23a147b362cb9034f126530f968401dce1->enter($__internal_83077071e520f530415c3893090c6c23a147b362cb9034f126530f968401dce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_83077071e520f530415c3893090c6c23a147b362cb9034f126530f968401dce1->leave($__internal_83077071e520f530415c3893090c6c23a147b362cb9034f126530f968401dce1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3eb50695283802d1709c46fa10408fa65f0746a9cd7393162d1da67ecd0bf9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eb50695283802d1709c46fa10408fa65f0746a9cd7393162d1da67ecd0bf9a->enter($__internal_f3eb50695283802d1709c46fa10408fa65f0746a9cd7393162d1da67ecd0bf9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3eb50695283802d1709c46fa10408fa65f0746a9cd7393162d1da67ecd0bf9a->leave($__internal_f3eb50695283802d1709c46fa10408fa65f0746a9cd7393162d1da67ecd0bf9a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_70f011623284ec2e53a66061a70591a49b5635b95805b20f8d2a2c3f8201d503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f011623284ec2e53a66061a70591a49b5635b95805b20f8d2a2c3f8201d503->enter($__internal_70f011623284ec2e53a66061a70591a49b5635b95805b20f8d2a2c3f8201d503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_70f011623284ec2e53a66061a70591a49b5635b95805b20f8d2a2c3f8201d503->leave($__internal_70f011623284ec2e53a66061a70591a49b5635b95805b20f8d2a2c3f8201d503_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
