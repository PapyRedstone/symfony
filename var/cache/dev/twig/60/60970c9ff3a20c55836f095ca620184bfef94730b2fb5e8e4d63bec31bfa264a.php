<?php

/* FrontOfficeBundle:User:addDay.html.twig */
class __TwigTemplate_06e103e93b45fbb7663d637170e6ddad022ddc6484420c3073a73f91730c0f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:addDay.html.twig", 1);
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
        $__internal_f0eaac178414247100674a5743057673dbe42315e74c2e4bbfc78b3031d9764a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0eaac178414247100674a5743057673dbe42315e74c2e4bbfc78b3031d9764a->enter($__internal_f0eaac178414247100674a5743057673dbe42315e74c2e4bbfc78b3031d9764a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:addDay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0eaac178414247100674a5743057673dbe42315e74c2e4bbfc78b3031d9764a->leave($__internal_f0eaac178414247100674a5743057673dbe42315e74c2e4bbfc78b3031d9764a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53ecd5b05d6f8a3e2a69874b734288612a1de230b2ab62068cfd9888f1776393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ecd5b05d6f8a3e2a69874b734288612a1de230b2ab62068cfd9888f1776393->enter($__internal_53ecd5b05d6f8a3e2a69874b734288612a1de230b2ab62068cfd9888f1776393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Ajouter</button>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_month", array("idMonth" => ($context["idMonth"] ?? $this->getContext($context, "idMonth")), "month" => ($context["month"] ?? $this->getContext($context, "month")), "year" => ($context["year"] ?? $this->getContext($context, "year")), "idUser" => ($context["idUser"] ?? $this->getContext($context, "idUser")))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Back\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

";
        
        $__internal_53ecd5b05d6f8a3e2a69874b734288612a1de230b2ab62068cfd9888f1776393->leave($__internal_53ecd5b05d6f8a3e2a69874b734288612a1de230b2ab62068cfd9888f1776393_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:addDay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

<a href=\"{{path('show_month',{idMonth:idMonth,month:month,year:year,idUser:idUser})}}\"> <button type=\"submit\" value=\"Back\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

{% endblock body %}
", "FrontOfficeBundle:User:addDay.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/addDay.html.twig");
    }
}
