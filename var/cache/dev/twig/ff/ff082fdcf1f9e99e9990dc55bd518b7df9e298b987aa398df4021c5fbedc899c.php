<?php

/* FrontOfficeBundle:User:create.html.twig */
class __TwigTemplate_c58ea2d772edcffd913c22c760d495aa8cf5a1dcfddfb60aff5d958da664522a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:create.html.twig", 1);
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
        $__internal_de86fe8741ae3fe9137bb0a8d8a64eafdcf62ffbc285a1e8e28fec5a6fe51b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de86fe8741ae3fe9137bb0a8d8a64eafdcf62ffbc285a1e8e28fec5a6fe51b75->enter($__internal_de86fe8741ae3fe9137bb0a8d8a64eafdcf62ffbc285a1e8e28fec5a6fe51b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de86fe8741ae3fe9137bb0a8d8a64eafdcf62ffbc285a1e8e28fec5a6fe51b75->leave($__internal_de86fe8741ae3fe9137bb0a8d8a64eafdcf62ffbc285a1e8e28fec5a6fe51b75_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_651d9ce6993f40471db493eb2abfc8fd6dbfdfd181a9b64439eabb59158e1de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651d9ce6993f40471db493eb2abfc8fd6dbfdfd181a9b64439eabb59158e1de2->enter($__internal_651d9ce6993f40471db493eb2abfc8fd6dbfdfd181a9b64439eabb59158e1de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_651d9ce6993f40471db493eb2abfc8fd6dbfdfd181a9b64439eabb59158e1de2->leave($__internal_651d9ce6993f40471db493eb2abfc8fd6dbfdfd181a9b64439eabb59158e1de2_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontOfficeBundle::base.html.twig\" %}

{% block body %}
{{ form_start(form) }}
    {{ form_widget(form) }}
{{ form_end(form) }}
{% endblock body %}
", "FrontOfficeBundle:User:create.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/create.html.twig");
    }
}
