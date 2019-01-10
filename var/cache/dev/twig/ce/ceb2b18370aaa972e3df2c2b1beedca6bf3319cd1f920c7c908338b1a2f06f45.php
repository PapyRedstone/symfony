<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_1860ab2e49a4bce78f3015e075186c8f6fe82dd5652e47bacb317d770ab6cd93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5745e58537eb34f25d61d8a97e7cdb2757d898313b676a303126b2b45d135b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5745e58537eb34f25d61d8a97e7cdb2757d898313b676a303126b2b45d135b4->enter($__internal_e5745e58537eb34f25d61d8a97e7cdb2757d898313b676a303126b2b45d135b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5745e58537eb34f25d61d8a97e7cdb2757d898313b676a303126b2b45d135b4->leave($__internal_e5745e58537eb34f25d61d8a97e7cdb2757d898313b676a303126b2b45d135b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e280e46b21754dc593fa2a635ec68c10a3b6c967d2f43e0b45fede403398eafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e280e46b21754dc593fa2a635ec68c10a3b6c967d2f43e0b45fede403398eafc->enter($__internal_e280e46b21754dc593fa2a635ec68c10a3b6c967d2f43e0b45fede403398eafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2 class=\"blue\"> Welcome ! Vous pouvez visualiser les BDD suivantes. </h2>

<div class=\"row\">
  <div class=\"col-4\">
    <div class=\"list-group\" id=\"list-tab\" role=\"tablist\">
      <a class=\"list-group-item list-group-item-action\" id=\"list-home-list\" data-toggle=\"list\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_index");
        echo "\" role=\"tab\" aria-controls=\"home\">User</a>
      <a class=\"list-group-item list-group-item-action\" id=\"list-profile-list\" data-toggle=\"list\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_index");
        echo "\" role=\"tab\" aria-controls=\"profile\">Societe</a>
      <a class=\"list-group-item list-group-item-action\" id=\"list-messages-list\" data-toggle=\"list\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_index");
        echo "\" role=\"tab\" aria-controls=\"messages\">Service</a>
      <a class=\"list-group-item list-group-item-action\" id=\"list-messages-list\" data-toggle=\"list\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_stats_index");
        echo "\" role=\"tab\" aria-controls=\"messages\">Statistique</a>
      <a class=\"list-group-item list-group-item-action\" id=\"list-messages-list\" data-toggle=\"list\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_index");
        echo "\" role=\"tab\" aria-controls=\"messages\">Deplacement</a>
    </div>
  </div>
</div>

";
        
        $__internal_e280e46b21754dc593fa2a635ec68c10a3b6c967d2f43e0b45fede403398eafc->leave($__internal_e280e46b21754dc593fa2a635ec68c10a3b6c967d2f43e0b45fede403398eafc_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackOfficeBundle::base.html.twig' %}

{% block body %}

<h2 class=\"blue\"> Welcome ! Vous pouvez visualiser les BDD suivantes. </h2>

<div class=\"row\">
  <div class=\"col-4\">
    <div class=\"list-group\" id=\"list-tab\" role=\"tablist\">
      <a class=\"list-group-item list-group-item-action\" id=\"list-home-list\" data-toggle=\"list\" href=\"{{path('back_office_user_index')}}\" role=\"tab\" aria-controls=\"home\">User</a>
      <a class=\"list-group-item list-group-item-action\" id=\"list-profile-list\" data-toggle=\"list\" href=\"{{path('back_office_societe_index')}}\" role=\"tab\" aria-controls=\"profile\">Societe</a>
      <a class=\"list-group-item list-group-item-action\" id=\"list-messages-list\" data-toggle=\"list\" href=\"{{path('back_office_service_index')}}\" role=\"tab\" aria-controls=\"messages\">Service</a>
      <a class=\"list-group-item list-group-item-action\" id=\"list-messages-list\" data-toggle=\"list\" href=\"{{path('back_office_stats_index')}}\" role=\"tab\" aria-controls=\"messages\">Statistique</a>
      <a class=\"list-group-item list-group-item-action\" id=\"list-messages-list\" data-toggle=\"list\" href=\"{{path('back_office_deplacement_index')}}\" role=\"tab\" aria-controls=\"messages\">Deplacement</a>
    </div>
  </div>
</div>

{% endblock %}
", "BackOfficeBundle:Default:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
