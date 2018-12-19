<?php

/* FrontOfficeBundle:User:addMonth.html.twig */
class __TwigTemplate_82b104124b3091794a1b090b7f49ef6f2bcc9638ca94de187126adc942fd3c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:addMonth.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b3f22e3b861d03e82cf888a7067e14e0cf8a4a69cafc6816b281c22c373d91d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3f22e3b861d03e82cf888a7067e14e0cf8a4a69cafc6816b281c22c373d91d->enter($__internal_6b3f22e3b861d03e82cf888a7067e14e0cf8a4a69cafc6816b281c22c373d91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:addMonth.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3f22e3b861d03e82cf888a7067e14e0cf8a4a69cafc6816b281c22c373d91d->leave($__internal_6b3f22e3b861d03e82cf888a7067e14e0cf8a4a69cafc6816b281c22c373d91d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_45c26f975f025769a9c6c1322b5c6cd8945abd3221322c7200195d6eb0f9a1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c26f975f025769a9c6c1322b5c6cd8945abd3221322c7200195d6eb0f9a1b2->enter($__internal_45c26f975f025769a9c6c1322b5c6cd8945abd3221322c7200195d6eb0f9a1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Ajouter</button>
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_45c26f975f025769a9c6c1322b5c6cd8945abd3221322c7200195d6eb0f9a1b2->leave($__internal_45c26f975f025769a9c6c1322b5c6cd8945abd3221322c7200195d6eb0f9a1b2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:addMonth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontOfficeBundle::base.html.twig' %}

{% block body %}
{{ form_start(form) }}
{{ form_widget(form) }}
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Ajouter</button>
{{ form_end(form) }}
{% endblock body %}
", "FrontOfficeBundle:User:addMonth.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/addMonth.html.twig");
    }
}
