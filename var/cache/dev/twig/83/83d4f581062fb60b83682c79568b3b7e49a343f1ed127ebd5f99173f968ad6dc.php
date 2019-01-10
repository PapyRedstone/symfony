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
        $__internal_b3a7df7a93c359e154050044a0cc7fed213603971fcb79552c96daffb89cb7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a7df7a93c359e154050044a0cc7fed213603971fcb79552c96daffb89cb7c3->enter($__internal_b3a7df7a93c359e154050044a0cc7fed213603971fcb79552c96daffb89cb7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3a7df7a93c359e154050044a0cc7fed213603971fcb79552c96daffb89cb7c3->leave($__internal_b3a7df7a93c359e154050044a0cc7fed213603971fcb79552c96daffb89cb7c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_514597d43ed58752c6f89664567494054b318766c60ecdb6bb60e8ade621a443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514597d43ed58752c6f89664567494054b318766c60ecdb6bb60e8ade621a443->enter($__internal_514597d43ed58752c6f89664567494054b318766c60ecdb6bb60e8ade621a443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo " </span><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_profil", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil\"></i></a>
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
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? $this->getContext($context, "months")));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 67
            echo "\t\t<tr>
\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "mois", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "annee", array()), "html", null, true);
            echo "</td>
\t\t";
            // line 70
            if (($this->getAttribute($context["month"], "validation", array()) == 0)) {
                // line 71
                echo "\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_month", array("idMonth" => $this->getAttribute($context["month"], "id", array()), "idUser" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" class=\"badge badge-primary\">Voir mois</a>
\t\t\t\t</td>
\t\t\t";
            }
            // line 75
            echo "\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t</tbody>
\t<a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_month", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" ><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau mois</button></a>

\t";
        
        $__internal_514597d43ed58752c6f89664567494054b318766c60ecdb6bb60e8ade621a443->leave($__internal_514597d43ed58752c6f89664567494054b318766c60ecdb6bb60e8ade621a443_prof);

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
        return array (  179 => 78,  176 => 77,  169 => 75,  163 => 72,  160 => 71,  158 => 70,  154 => 69,  150 => 68,  147 => 67,  143 => 66,  123 => 48,  114 => 46,  109 => 45,  100 => 43,  96 => 42,  84 => 33,  74 => 26,  64 => 19,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
<div id=\"user-profile-2\" class=\"user-profile\">
\t<div class=\"tabbable\">
\t\t<div class=\"tab-content no-border padding-24\">
\t\t\t<div id=\"home\" class=\"tab-pane in active\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
\t\t\t\t\t\t<h4 class=\"blue\">
\t\t\t\t\t\t\t<span class=\"middle\">{{user.nom}} {{user.prenom}} </span><a href=\"{{path('edit_profil',{id:user.id})}}\"><i class=\"fa fa-pencil\"></i></a>
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
\t\t{% for month in months %}
\t\t<tr>
\t\t\t\t<td>{{month.mois}}</td>
\t\t\t\t<td>{{month.annee}}</td>
\t\t{% if month.validation == 0 %}
\t\t\t\t<td>
\t\t\t\t\t<a href=\"{{path('show_month',{idMonth:month.id,idUser:user.id})}}\" class=\"badge badge-primary\">Voir mois</a>
\t\t\t\t</td>
\t\t\t{% endif %}
\t\t</tr>
\t\t{% endfor %}
\t</tbody>
\t<a href=\"{{path('add_month',{id:user.id})}}\" ><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau mois</button></a>

\t{% endblock body %}
", "FrontOfficeBundle:User:profil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
