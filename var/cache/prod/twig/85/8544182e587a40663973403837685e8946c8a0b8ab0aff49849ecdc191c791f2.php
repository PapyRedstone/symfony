<?php

/* FrontOfficeBundle:User:profil.html.twig */
class __TwigTemplate_030b7b669ee16100d473fa7e505685e49f6c09bfa689dc820c82b150b1257d9d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "prenom", array()), "html", null, true);
        echo " </span><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_profil", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t</h4>

\t\t\t\t\t\t<div class=\"profile-user-info\">
\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Nom </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Prénom </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "prenom", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">
\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Adresse </div>
\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "adresse", array()), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"profile-info-row\">

\t\t\t\t\t\t\t\t<div class=\"profile-info-name\"> Entreprise </div>

\t\t\t\t\t\t\t\t<div class=\"profile-info-value\">
\t\t\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["societies"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["cities"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? null));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_month", array("idMonth" => $this->getAttribute($context["month"], "id", array()), "idUser" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_month", array("id" => $this->getAttribute(($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\" ><button type=\"button\" class=\"btn btn-success\">Ajouter un nouveau mois</button></a>

\t";
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
        return array (  170 => 78,  167 => 77,  160 => 75,  154 => 72,  151 => 71,  149 => 70,  145 => 69,  141 => 68,  138 => 67,  134 => 66,  114 => 48,  105 => 46,  100 => 45,  91 => 43,  87 => 42,  75 => 33,  65 => 26,  55 => 19,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontOfficeBundle:User:profil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
