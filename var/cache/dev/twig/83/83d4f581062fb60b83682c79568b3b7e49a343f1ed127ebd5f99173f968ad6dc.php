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
        $__internal_a03eccc074bc97c962682f7c464aab0e2b28f008c786a9a075ba8c14bbce4cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03eccc074bc97c962682f7c464aab0e2b28f008c786a9a075ba8c14bbce4cdb->enter($__internal_a03eccc074bc97c962682f7c464aab0e2b28f008c786a9a075ba8c14bbce4cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:profil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03eccc074bc97c962682f7c464aab0e2b28f008c786a9a075ba8c14bbce4cdb->leave($__internal_a03eccc074bc97c962682f7c464aab0e2b28f008c786a9a075ba8c14bbce4cdb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d16d5be2440812f6073b8e382ffdf0ffe89ad450b016f10d4f7affcfe54f68d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d16d5be2440812f6073b8e382ffdf0ffe89ad450b016f10d4f7affcfe54f68d->enter($__internal_4d16d5be2440812f6073b8e382ffdf0ffe89ad450b016f10d4f7affcfe54f68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"user-profile-2\" class=\"user-profile\">
\t\t<div class=\"tabbable\">
\t\t\t<div class=\"tab-content no-border padding-24\">
\t\t\t\t<div id=\"home\" class=\"tab-pane in active\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
              <h4 class=\"blue\">
\t\t\t\t\t\t\t\t<span class=\"middle\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<div class=\"profile-user-info\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Nom </div>
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

                <div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Prénom </div>
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

                <div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Adresse </div>
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-row\">

\t\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Entreprise </div>

\t\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["societies"] ?? $this->getContext($context, "societies")));
        foreach ($context['_seq'] as $context["_key"] => $context["society"]) {
            // line 43
            echo "                      <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["society"], "societe", array()), "html", null, true);
            echo ",</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['society'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 46
            echo "                      <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "ville", array()), "html", null, true);
            echo "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t</div>
  <table class=\"table table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\">Mois</th>
      <th scope=\"col\">Année</th>
      <th scope=\"col\">ID</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? $this->getContext($context, "months")));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 61
            echo "    <tr>
      <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["month"], "mois", array()), "F"), "html", null, true);
            echo "</td>
      <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "annee", array()), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_movement", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "month" => $this->getAttribute($context["month"], "mois", array()), "year" => $this->getAttribute($context["month"], "annee", array()))), "html", null, true);
            echo "\" class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "id", array()), "html", null, true);
            echo "</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "  </tbody>
";
        
        $__internal_4d16d5be2440812f6073b8e382ffdf0ffe89ad450b016f10d4f7affcfe54f68d->leave($__internal_4d16d5be2440812f6073b8e382ffdf0ffe89ad450b016f10d4f7affcfe54f68d_prof);

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
        return array (  161 => 67,  150 => 64,  146 => 63,  142 => 62,  139 => 61,  135 => 60,  121 => 48,  112 => 46,  107 => 45,  98 => 43,  94 => 42,  82 => 33,  72 => 26,  62 => 19,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t<div class=\"tabbable\">
\t\t\t<div class=\"tab-content no-border padding-24\">
\t\t\t\t<div id=\"home\" class=\"tab-pane in active\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-9\">
              <h4 class=\"blue\">
\t\t\t\t\t\t\t\t<span class=\"middle\">{{user.nom}} {{user.prenom}}</span>
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<div class=\"profile-user-info\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Nom </div>
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t\t<span>{{user.nom}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

                <div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Prénom </div>
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t\t<span>{{user.prenom}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

                <div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Adresse </div>
\t\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t\t<span>{{user.adresse}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-row\">

\t\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Entreprise </div>

\t\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
                    {% for society in societies %}
                      <span>{{society.societe}},</span>
                    {% endfor %}
                    {% for city in cities %}
                      <span>{{city.ville}}</span>
                    {% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t</div>
  <table class=\"table table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\">Mois</th>
      <th scope=\"col\">Année</th>
      <th scope=\"col\">ID</th>
    </tr>
  </thead>
  <tbody>
    {% for month in months %}
    <tr>
      <td>{{month.mois|date(\"F\")}}</td>
      <td>{{month.annee}}</td>
      <td><a href=\"{{path('show_movement',{id:user.id,month:month.mois,year:month.annee})}}\" class=\"badge badge-primary\">{{month.id}}</a></td>
    </tr>
    {% endfor %}
  </tbody>
{% endblock body %}
", "FrontOfficeBundle:User:profil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
