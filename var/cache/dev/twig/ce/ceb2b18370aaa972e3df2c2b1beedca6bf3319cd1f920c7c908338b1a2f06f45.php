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
        $__internal_4d9dffa0ad0c7a07790b1c67dd885adbeb14e1be67ea1c721173365734fef33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9dffa0ad0c7a07790b1c67dd885adbeb14e1be67ea1c721173365734fef33a->enter($__internal_4d9dffa0ad0c7a07790b1c67dd885adbeb14e1be67ea1c721173365734fef33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9dffa0ad0c7a07790b1c67dd885adbeb14e1be67ea1c721173365734fef33a->leave($__internal_4d9dffa0ad0c7a07790b1c67dd885adbeb14e1be67ea1c721173365734fef33a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bc612d365dc32f18925c5d8c1d3902c61617bee425903c3a5047e1977e84fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc612d365dc32f18925c5d8c1d3902c61617bee425903c3a5047e1977e84fa5->enter($__internal_7bc612d365dc32f18925c5d8c1d3902c61617bee425903c3a5047e1977e84fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7bc612d365dc32f18925c5d8c1d3902c61617bee425903c3a5047e1977e84fa5->leave($__internal_7bc612d365dc32f18925c5d8c1d3902c61617bee425903c3a5047e1977e84fa5_prof);

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
