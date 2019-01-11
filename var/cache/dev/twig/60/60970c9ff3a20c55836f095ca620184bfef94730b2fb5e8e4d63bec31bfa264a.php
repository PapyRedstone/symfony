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
        $__internal_1101108539a679f405fb452e857580c3265a3f2591b670b8ee2a94db055074e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1101108539a679f405fb452e857580c3265a3f2591b670b8ee2a94db055074e7->enter($__internal_1101108539a679f405fb452e857580c3265a3f2591b670b8ee2a94db055074e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:addDay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1101108539a679f405fb452e857580c3265a3f2591b670b8ee2a94db055074e7->leave($__internal_1101108539a679f405fb452e857580c3265a3f2591b670b8ee2a94db055074e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d16eaaceb161dc2a26947d7d207b4f29a05ebf1dc0f5110b3054e1ea6f7683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0d16eaaceb161dc2a26947d7d207b4f29a05ebf1dc0f5110b3054e1ea6f7683->enter($__internal_e0d16eaaceb161dc2a26947d7d207b4f29a05ebf1dc0f5110b3054e1ea6f7683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_month", array("idMonth" => ($context["idMonth"] ?? $this->getContext($context, "idMonth")), "idUser" => ($context["idUser"] ?? $this->getContext($context, "idUser")))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Back\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

";
        // line 12
        if (array_key_exists("message", $context)) {
            // line 13
            echo " ";
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "
 ";
        }
        // line 15
        echo "
";
        
        $__internal_e0d16eaaceb161dc2a26947d7d207b4f29a05ebf1dc0f5110b3054e1ea6f7683->leave($__internal_e0d16eaaceb161dc2a26947d7d207b4f29a05ebf1dc0f5110b3054e1ea6f7683_prof);

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
        return array (  70 => 15,  64 => 13,  62 => 12,  57 => 10,  52 => 8,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

<a href=\"{{path('show_month',{idMonth:idMonth,idUser:idUser})}}\"> <button type=\"submit\" value=\"Back\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

{% if message is defined %}
 {{message}}
 {% endif %}

{% endblock body %}
", "FrontOfficeBundle:User:addDay.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/addDay.html.twig");
    }
}
