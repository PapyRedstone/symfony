<?php

/* FrontOfficeBundle:User:profil.html.twig */
class __TwigTemplate_396228dabcc693b815916555f472151acd1263733088966332a1abc0d8374294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:profil.html.twig", 1);
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
        $__internal_d1502e23eb264fadf80e3ab167bd500354ac8a212cd654cbf3f660dbffb0bd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1502e23eb264fadf80e3ab167bd500354ac8a212cd654cbf3f660dbffb0bd16->enter($__internal_d1502e23eb264fadf80e3ab167bd500354ac8a212cd654cbf3f660dbffb0bd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1502e23eb264fadf80e3ab167bd500354ac8a212cd654cbf3f660dbffb0bd16->leave($__internal_d1502e23eb264fadf80e3ab167bd500354ac8a212cd654cbf3f660dbffb0bd16_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60c9b1a231f7aa0061e68c4192cba02d8739f95ffa8ba88a5a33cd4f8c24be02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c9b1a231f7aa0061e68c4192cba02d8739f95ffa8ba88a5a33cd4f8c24be02->enter($__internal_60c9b1a231f7aa0061e68c4192cba02d8739f95ffa8ba88a5a33cd4f8c24be02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"user-profile-2\" class=\"user-profile\">
\t<div class=\"tabbable\">
\t\t<div class=\"tab-content no-border padding-24\">
\t\t\t<div id=\"home\" class=\"tab-pane in active\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t\t\t<h4 class=\"blue\">
\t\t\t\t\t\t\t<span class=\"middle\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<div class=\"profile-user-info\">
\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Nom </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Prénom </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Adresse </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">

\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Entreprise </div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["societies"] ?? $this->getContext($context, "societies")));
        foreach ($context['_seq'] as $context["_key"] => $context["society"]) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t<span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["society"], "societe", array()), "html", null, true);
            echo ",</span>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['society'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t<span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "ville", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<table class=\"table table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">Mois</th>
\t\t\t<th scope=\"col\">Année</th>
\t\t\t<th scope=\"col\">ID</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["nameMonths"] ?? $this->getContext($context, "nameMonths"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 68
            echo "\t\t<tr>
\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nameMonths"] ?? $this->getContext($context, "nameMonths")), $context["i"], array(), "array"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "annee", array()), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_month", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "month" => $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "mois", array()), "year" => $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "annee", array()))), "html", null, true);
            echo "\" class=\"badge badge-primary\">Voir mois</a>
\t\t\t\t<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete_month", array("idMonth" => $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-danger\">Supprimer mois</a>
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t</tbody>
\t<a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_month", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" ><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau mois</button></a>
\t";
        
        $__internal_60c9b1a231f7aa0061e68c4192cba02d8739f95ffa8ba88a5a33cd4f8c24be02->leave($__internal_60c9b1a231f7aa0061e68c4192cba02d8739f95ffa8ba88a5a33cd4f8c24be02_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 78,  172 => 77,  162 => 73,  158 => 72,  153 => 70,  149 => 69,  146 => 68,  142 => 67,  121 => 48,  112 => 46,  107 => 45,  98 => 43,  94 => 42,  82 => 33,  72 => 26,  62 => 19,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
<div id=\"user-profile-2\" class=\"user-profile\">
\t<div class=\"tabbable\">
\t\t<div class=\"tab-content no-border padding-24\">
\t\t\t<div id=\"home\" class=\"tab-pane in active\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t\t\t<h4 class=\"blue\">
\t\t\t\t\t\t\t<span class=\"middle\">{{user.nom}} {{user.prenom}}</span>
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<div class=\"profile-user-info\">
\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Nom </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>{{user.nom}}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Prénom </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>{{user.prenom}}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Adresse </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>{{user.adresse}}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">

\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Entreprise </div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t{% for society in societies %}
\t\t\t\t\t\t\t\t\t<span>{{society.societe}},</span>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% for city in cities %}
\t\t\t\t\t\t\t\t\t<span>{{city.ville}}</span>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<table class=\"table table-bordered\">
\t<thead>
\t\t<tr>
\t\t\t<th scope=\"col\">Mois</th>
\t\t\t<th scope=\"col\">Année</th>
\t\t\t<th scope=\"col\">ID</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for i in 0..(nameMonths|length)-1 %}
\t\t<tr>
\t\t\t<td>{{nameMonths[i]}}</td>
\t\t\t<td>{{months[i].annee}}</td>
\t\t\t<td>
\t\t\t\t<a href=\"{{path('show_month',{id:user.id,month:months[i].mois,year:months[i].annee})}}\" class=\"badge badge-primary\">Voir mois</a>
\t\t\t\t<a href=\"{{path('delete_month',{idMonth:months[i].id})}}\" class=\"badge badge-danger\">Supprimer mois</a>
\t\t\t</td>
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
\t<a href=\"{{path('add_month',{id:user.id})}}\" ><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau mois</button></a>
\t{% endblock body %}
", "FrontOfficeBundle:User:profil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
