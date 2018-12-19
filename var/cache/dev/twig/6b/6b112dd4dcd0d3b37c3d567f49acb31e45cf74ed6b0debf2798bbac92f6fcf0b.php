<?php

/* BackOfficeBundle:Stats:index.html.twig */
class __TwigTemplate_9211183d88d8362f25487733dd3edd9151f20a18f37169342f096d40b099cff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Stats:index.html.twig", 1);
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
        $__internal_e3aaebc119bd391cac95041c1ef090f1c595c24b4e3af22bdd4471154b74253a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3aaebc119bd391cac95041c1ef090f1c595c24b4e3af22bdd4471154b74253a->enter($__internal_e3aaebc119bd391cac95041c1ef090f1c595c24b4e3af22bdd4471154b74253a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Stats:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3aaebc119bd391cac95041c1ef090f1c595c24b4e3af22bdd4471154b74253a->leave($__internal_e3aaebc119bd391cac95041c1ef090f1c595c24b4e3af22bdd4471154b74253a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cf69bd98fa22b12ef6389c354ed75a8d9ac5ac0ff60918ccf761b0660e62a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf69bd98fa22b12ef6389c354ed75a8d9ac5ac0ff60918ccf761b0660e62a6a->enter($__internal_8cf69bd98fa22b12ef6389c354ed75a8d9ac5ac0ff60918ccf761b0660e62a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Stats</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">User</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["number"] ?? $this->getContext($context, "number")));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["num"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["num"], "nbre_user", array()), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Societe</th>
                <th scope=\"col\">KM</th>
                <th scope=\"col\">User</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["kilometers"] ?? $this->getContext($context, "kilometers")));
        foreach ($context['_seq'] as $context["_key"] => $context["kilom"]) {
            // line 33
            echo "            <tr>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["kilom"], "societe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["kilom"], "nb_km", array()), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kilom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>

";
        
        $__internal_8cf69bd98fa22b12ef6389c354ed75a8d9ac5ac0ff60918ccf761b0660e62a6a->leave($__internal_8cf69bd98fa22b12ef6389c354ed75a8d9ac5ac0ff60918ccf761b0660e62a6a_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Stats:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 38,  97 => 35,  93 => 34,  90 => 33,  86 => 32,  72 => 20,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">Stats</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">User</th>
            </tr>
        </thead>
        <tbody>
          {% for num in number %}
            <tr>
                <td>{{ num.ville }}</td>
                <td>{{ num.nbre_user}}</td>
            </tr>
          {% endfor %}
        </tbody>
    </table>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Societe</th>
                <th scope=\"col\">KM</th>
                <th scope=\"col\">User</th>
            </tr>
        </thead>
        <tbody>
          {% for kilom in kilometers %}
            <tr>
                <td>{{ kilom.societe }}</td>
                <td>{{ kilom.nb_km }}</td>
            </tr>
          {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "BackOfficeBundle:Stats:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Stats/index.html.twig");
    }
}
