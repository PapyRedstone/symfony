<?php

/* FrontOfficeBundle:User:profil.html.twig */
class __TwigTemplate_bfbd7cef75dd6fa9115b984983420accb1175ff23d933e23e1e30b2f6d4257c3 extends Twig_Template
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
        $__internal_88b4b55182a3162465dc43b6b64eb0d94b448e4a62b5a8b7c3fe8fb15cadfd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b4b55182a3162465dc43b6b64eb0d94b448e4a62b5a8b7c3fe8fb15cadfd95->enter($__internal_88b4b55182a3162465dc43b6b64eb0d94b448e4a62b5a8b7c3fe8fb15cadfd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b4b55182a3162465dc43b6b64eb0d94b448e4a62b5a8b7c3fe8fb15cadfd95->leave($__internal_88b4b55182a3162465dc43b6b64eb0d94b448e4a62b5a8b7c3fe8fb15cadfd95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbed7663de3ef892e70d30b3521ae458b79404891c3256ffb4aca93f9891e2e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbed7663de3ef892e70d30b3521ae458b79404891c3256ffb4aca93f9891e2e0->enter($__internal_dbed7663de3ef892e70d30b3521ae458b79404891c3256ffb4aca93f9891e2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"user-profile-2\" class=\"user-profile\">
\t<div class=\"tabbable\">
\t\t<div class=\"tab-content no-border padding-24\">
\t\t\t<div id=\"home\" class=\"tab-pane in active\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t\t\t<h4 class=\"blue\">
\t\t\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_profil", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\"\t><span class=\"middle\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</span></a>
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
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["nameMonths"] ?? $this->getContext($context, "nameMonths"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "\t\t<tr>
\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nameMonths"] ?? $this->getContext($context, "nameMonths")), $context["i"], array(), "array"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "annee", array()), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_month", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "month" => $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "mois", array()), "year" => $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "annee", array()))), "html", null, true);
            echo "\" class=\"badge badge-primary\">Voir mois</a>
\t\t\t\t<!--<a href=\"path('delete_month',{idMonth:months[i].id})}}\" class=\"badge badge-danger\">Supprimer mois</a>-->
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t</tbody>
\t<a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_month", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" ><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau mois</button></a>
\t";
        
        $__internal_dbed7663de3ef892e70d30b3521ae458b79404891c3256ffb4aca93f9891e2e0->leave($__internal_dbed7663de3ef892e70d30b3521ae458b79404891c3256ffb4aca93f9891e2e0_prof);

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
        return array (  173 => 77,  170 => 76,  159 => 71,  154 => 69,  150 => 68,  147 => 67,  143 => 66,  123 => 48,  114 => 46,  109 => 45,  100 => 43,  96 => 42,  84 => 33,  74 => 26,  64 => 19,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t\t\t\t\t<a href=\"{{path('edit_profil',{id:user.id})}}\"\t><span class=\"middle\">{{user.nom}} {{user.prenom}}</span></a>
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
\t\t</tr>
\t</thead>
\t<tbody>
\t\t{% for i in 0..(nameMonths|length)-1 %}
\t\t<tr>
\t\t\t<td>{{nameMonths[i]}}</td>
\t\t\t<td>{{months[i].annee}}</td>
\t\t\t<td>
\t\t\t\t<a href=\"{{path('show_month',{id:user.id,month:months[i].mois,year:months[i].annee})}}\" class=\"badge badge-primary\">Voir mois</a>
\t\t\t\t<!--<a href=\"path('delete_month',{idMonth:months[i].id})}}\" class=\"badge badge-danger\">Supprimer mois</a>-->
\t\t\t</td>
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
\t<a href=\"{{path('add_month',{id:user.id})}}\" ><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau mois</button></a>
\t{% endblock body %}
", "FrontOfficeBundle:User:profil.html.twig", "/home/alex/Documents/symfony/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
