<?php

/* FrontOfficeBundle:User:editProfil.html.twig */
class __TwigTemplate_84d552be1f8cb6a90bf76a00c0833aa25f24eb1b18ce2c2e44b61f47765368bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:editProfil.html.twig", 1);
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
        $__internal_3e89285e2ceda890a36eea2f3fb9dd9f2d5c8509d0ee0b0753f6296371801be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e89285e2ceda890a36eea2f3fb9dd9f2d5c8509d0ee0b0753f6296371801be6->enter($__internal_3e89285e2ceda890a36eea2f3fb9dd9f2d5c8509d0ee0b0753f6296371801be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:editProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e89285e2ceda890a36eea2f3fb9dd9f2d5c8509d0ee0b0753f6296371801be6->leave($__internal_3e89285e2ceda890a36eea2f3fb9dd9f2d5c8509d0ee0b0753f6296371801be6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78f0698bd9e22eb46680b30dac207a52f6317063b6bf4cc766336f18952c568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78f0698bd9e22eb46680b30dac207a52f6317063b6bf4cc766336f18952c568->enter($__internal_b78f0698bd9e22eb46680b30dac207a52f6317063b6bf4cc766336f18952c568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Modifier</button>
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_main_page", array("id" => ($context["id"] ?? $this->getContext($context, "id")))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

";
        
        $__internal_b78f0698bd9e22eb46680b30dac207a52f6317063b6bf4cc766336f18952c568->leave($__internal_b78f0698bd9e22eb46680b30dac207a52f6317063b6bf4cc766336f18952c568_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:editProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 7,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Modifier</button>
{{ form_end(form) }}

<a href=\"{{path('user_main_page',{id:id})}}\"> <button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

{% endblock body %}
", "FrontOfficeBundle:User:editProfil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/editProfil.html.twig");
    }
}
