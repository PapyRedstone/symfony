<?php

/* FrontOfficeBundle:User:editDay.html.twig */
class __TwigTemplate_14f44f36c9209f88acd76d3a6d4cdced7e3e55f7d547ba902ecd40df573b2c6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:editDay.html.twig", 1);
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
        $__internal_b70664b6c720030b2723dbd568a555238af5cdaa294f75af18ecb56fd3107630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70664b6c720030b2723dbd568a555238af5cdaa294f75af18ecb56fd3107630->enter($__internal_b70664b6c720030b2723dbd568a555238af5cdaa294f75af18ecb56fd3107630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:editDay.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b70664b6c720030b2723dbd568a555238af5cdaa294f75af18ecb56fd3107630->leave($__internal_b70664b6c720030b2723dbd568a555238af5cdaa294f75af18ecb56fd3107630_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e04eedf5dd7cd7795fad0ee5c244240e4b77deab56f5caa6ba53c8dbc07ed4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04eedf5dd7cd7795fad0ee5c244240e4b77deab56f5caa6ba53c8dbc07ed4b9->enter($__internal_e04eedf5dd7cd7795fad0ee5c244240e4b77deab56f5caa6ba53c8dbc07ed4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" value=\"Modifier\" type=\"button\" class=\"btn btn-success\">Modifier</button>
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_month", array("idMonth" => ($context["idMonth"] ?? $this->getContext($context, "idMonth")), "idUser" => ($context["idUser"] ?? $this->getContext($context, "idUser")))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Back\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

";
        // line 11
        if (array_key_exists("message", $context)) {
            // line 12
            echo "  ";
            echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
            echo "
";
        }
        // line 14
        echo "
";
        
        $__internal_e04eedf5dd7cd7795fad0ee5c244240e4b77deab56f5caa6ba53c8dbc07ed4b9->leave($__internal_e04eedf5dd7cd7795fad0ee5c244240e4b77deab56f5caa6ba53c8dbc07ed4b9_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:editDay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  61 => 12,  59 => 11,  54 => 9,  49 => 7,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<button type=\"submit\" value=\"Modifier\" type=\"button\" class=\"btn btn-success\">Modifier</button>
{{ form_end(form) }}

<a href=\"{{path('show_month',{idMonth:idMonth,idUser:idUser})}}\"> <button type=\"submit\" value=\"Back\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

{% if message is defined %}
  {{message}}
{% endif %}

{% endblock body %}
", "FrontOfficeBundle:User:editDay.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/editDay.html.twig");
    }
}
