<?php

/* BackOfficeBundle:Deplacement:index.html.twig */
class __TwigTemplate_01f8da0fee6ca213aa3dd20f62d55b1361096f518449d4a58fd7ebe851f40715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Deplacement:index.html.twig", 1);
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
        $__internal_89d927fb1176c4c89ddba9c6dfd37260376497b65efbf8ce18ed557d9980fac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d927fb1176c4c89ddba9c6dfd37260376497b65efbf8ce18ed557d9980fac9->enter($__internal_89d927fb1176c4c89ddba9c6dfd37260376497b65efbf8ce18ed557d9980fac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Deplacement:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89d927fb1176c4c89ddba9c6dfd37260376497b65efbf8ce18ed557d9980fac9->leave($__internal_89d927fb1176c4c89ddba9c6dfd37260376497b65efbf8ce18ed557d9980fac9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1edabf4595ad56020f66edecf5715928473ec9dbd4c8c02798c8e5b83033bc25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edabf4595ad56020f66edecf5715928473ec9dbd4c8c02798c8e5b83033bc25->enter($__internal_1edabf4595ad56020f66edecf5715928473ec9dbd4c8c02798c8e5b83033bc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Deplacement list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Surname</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                <td> <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-primary\"> Detail </a> </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>
";
        
        $__internal_1edabf4595ad56020f66edecf5715928473ec9dbd4c8c02798c8e5b83033bc25->leave($__internal_1edabf4595ad56020f66edecf5715928473ec9dbd4c8c02798c8e5b83033bc25_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Deplacement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
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
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Surname</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td> <a href=\"{{path('back_office_deplacement_show',{id:user.id})}}\" class=\"badge badge-primary\"> Detail </a> </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "BackOfficeBundle:Deplacement:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Deplacement/index.html.twig");
    }
}
