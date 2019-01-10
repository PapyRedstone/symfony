<?php

/* BackOfficeBundle:Deplacement:show.html.twig */
class __TwigTemplate_ea943d294467a70f4875ae6a4113a6b05190ef034a004990d6014494945b573d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Deplacement:show.html.twig", 1);
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
        $__internal_f705f5bdf99c7e24ca9c226841db98397ab1309e3c0e690bbfd2bf0cfea92d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f705f5bdf99c7e24ca9c226841db98397ab1309e3c0e690bbfd2bf0cfea92d55->enter($__internal_f705f5bdf99c7e24ca9c226841db98397ab1309e3c0e690bbfd2bf0cfea92d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Deplacement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f705f5bdf99c7e24ca9c226841db98397ab1309e3c0e690bbfd2bf0cfea92d55->leave($__internal_f705f5bdf99c7e24ca9c226841db98397ab1309e3c0e690bbfd2bf0cfea92d55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b30b24b271aded1a7ce0fdcaa477ea325f70b11fa232569369041ef88ddbeeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30b24b271aded1a7ce0fdcaa477ea325f70b11fa232569369041ef88ddbeeb4->enter($__internal_b30b24b271aded1a7ce0fdcaa477ea325f70b11fa232569369041ef88ddbeeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Deplacement list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Année</th>
                <th scope=\"col\">Mois</th>
                <th scope=\"col\">Validé ?</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? $this->getContext($context, "months")));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "annee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "mois", array()), "html", null, true);
            echo "</td>
                ";
            // line 19
            if (($this->getAttribute($context["month"], "validation", array()) == 1)) {
                // line 20
                echo "                  <td>Oui</td>
                ";
            }
            // line 22
            echo "                ";
            if (($this->getAttribute($context["month"], "validation", array()) == 0)) {
                // line 23
                echo "                  <td>Non</td>
                ";
            }
            // line 25
            echo "                ";
            if ((($context["id"] ?? $this->getContext($context, "id")) != 1)) {
                // line 26
                echo "                <td>
                    <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_detail", array("idUser" => ($context["id"] ?? $this->getContext($context, "id")), "idMonth" => $this->getAttribute($context["month"], "id", array()))), "html", null, true);
                echo "\" class=\"badge badge-primary\"> Detail </a>
                </td>
                ";
            }
            // line 30
            echo "                ";
            if ((($context["id"] ?? $this->getContext($context, "id")) == 1)) {
                // line 31
                echo "                <td>
                    <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_detail", array("idUser" => ($context["id"] ?? $this->getContext($context, "id")), "idMonth" => $this->getAttribute($context["month"], "id", array()))), "html", null, true);
                echo "\" class=\"badge badge-primary\"> Change state </a>
                </td>
                ";
            }
            // line 35
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_index");
        echo "\" class=\"badge badge-primary\">Back</a>
        </li>
    </ul>

";
        
        $__internal_b30b24b271aded1a7ce0fdcaa477ea325f70b11fa232569369041ef88ddbeeb4->leave($__internal_b30b24b271aded1a7ce0fdcaa477ea325f70b11fa232569369041ef88ddbeeb4_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Deplacement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  112 => 37,  105 => 35,  99 => 32,  96 => 31,  93 => 30,  87 => 27,  84 => 26,  81 => 25,  77 => 23,  74 => 22,  70 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">Deplacement list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Année</th>
                <th scope=\"col\">Mois</th>
                <th scope=\"col\">Validé ?</th>
            </tr>
        </thead>
        <tbody>
        {% for month in months %}
            <tr>
                <td>{{ month.annee }}</td>
                <td>{{ month.mois}}</td>
                {% if month.validation == 1 %}
                  <td>Oui</td>
                {% endif %}
                {% if month.validation == 0 %}
                  <td>Non</td>
                {% endif %}
                {% if id != 1 %}
                <td>
                    <a href=\"{{path('back_office_deplacement_detail',{idUser:id,idMonth:month.id})}}\" class=\"badge badge-primary\"> Detail </a>
                </td>
                {% endif %}
                {% if id == 1 %}
                <td>
                    <a href=\"{{path('back_office_deplacement_detail',{idUser:id,idMonth:month.id})}}\" class=\"badge badge-primary\"> Change state </a>
                </td>
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('back_office_deplacement_index') }}\" class=\"badge badge-primary\">Back</a>
        </li>
    </ul>

{% endblock %}
", "BackOfficeBundle:Deplacement:show.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Deplacement/show.html.twig");
    }
}
