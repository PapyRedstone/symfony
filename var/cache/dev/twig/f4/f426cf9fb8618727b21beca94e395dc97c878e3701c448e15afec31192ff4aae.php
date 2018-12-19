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
        $__internal_7bbbde3ce5eb75b2381845cfb72803bc31f00e15c9c42765cea2f53edb4661e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bbbde3ce5eb75b2381845cfb72803bc31f00e15c9c42765cea2f53edb4661e5->enter($__internal_7bbbde3ce5eb75b2381845cfb72803bc31f00e15c9c42765cea2f53edb4661e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Deplacement:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbbde3ce5eb75b2381845cfb72803bc31f00e15c9c42765cea2f53edb4661e5->leave($__internal_7bbbde3ce5eb75b2381845cfb72803bc31f00e15c9c42765cea2f53edb4661e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c50270ef127a83d492dff0950809489bafd0d7d5250580d1472103554f44c3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50270ef127a83d492dff0950809489bafd0d7d5250580d1472103554f44c3e9->enter($__internal_c50270ef127a83d492dff0950809489bafd0d7d5250580d1472103554f44c3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["nameMonths"] ?? $this->getContext($context, "nameMonths"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "annee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["nameMonths"] ?? $this->getContext($context, "nameMonths")), $context["i"], array(), "array"), "html", null, true);
            echo "</td>
                ";
            // line 19
            if (($this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "validation", array()) == 1)) {
                // line 20
                echo "                  <td>Oui</td>
                ";
            }
            // line 22
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "validation", array()) == 0)) {
                // line 23
                echo "                  <td>Non</td>
                ";
            }
            // line 25
            echo "                <td> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_detail", array("idUser" => ($context["id"] ?? $this->getContext($context, "id")), "idMonth" => $this->getAttribute($this->getAttribute(($context["months"] ?? $this->getContext($context, "months")), $context["i"], array(), "array"), "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-primary\"> Detail </a> </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_index");
        echo "\" class=\"badge badge-primary\">Back</a>
        </li>
    </ul>

";
        
        $__internal_c50270ef127a83d492dff0950809489bafd0d7d5250580d1472103554f44c3e9->leave($__internal_c50270ef127a83d492dff0950809489bafd0d7d5250580d1472103554f44c3e9_prof);

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
        return array (  98 => 33,  91 => 28,  81 => 25,  77 => 23,  74 => 22,  70 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
        {% for i in 0..(nameMonths|length)-1 %}
            <tr>
                <td>{{ months[i].annee }}</td>
                <td>{{ nameMonths[i]}}</td>
                {% if months[i].validation == 1 %}
                  <td>Oui</td>
                {% endif %}
                {% if months[i].validation == 0 %}
                  <td>Non</td>
                {% endif %}
                <td> <a href=\"{{path('back_office_deplacement_detail',{idUser:id,idMonth:months[i].id})}}\" class=\"badge badge-primary\"> Detail </a> </td>
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
