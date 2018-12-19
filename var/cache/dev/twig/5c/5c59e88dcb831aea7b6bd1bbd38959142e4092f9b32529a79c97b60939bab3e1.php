<?php

/* BackOfficeBundle:Societe:index.html.twig */
class __TwigTemplate_aef2a1d2ed5629b2c51469a17ff29ce3fc4439f03333a0f8262f99b8caf731ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Societe:index.html.twig", 1);
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
        $__internal_35b2fbfef2425c0004d52245550a6444aca3b0cfd4a914e96388cf79ebe47fe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b2fbfef2425c0004d52245550a6444aca3b0cfd4a914e96388cf79ebe47fe7->enter($__internal_35b2fbfef2425c0004d52245550a6444aca3b0cfd4a914e96388cf79ebe47fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Societe:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b2fbfef2425c0004d52245550a6444aca3b0cfd4a914e96388cf79ebe47fe7->leave($__internal_35b2fbfef2425c0004d52245550a6444aca3b0cfd4a914e96388cf79ebe47fe7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2261cbe7451382b0a3fdd595a826619cf995d7315af4fcfedb0a1025d93bbfb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2261cbe7451382b0a3fdd595a826619cf995d7315af4fcfedb0a1025d93bbfb0->enter($__internal_2261cbe7451382b0a3fdd595a826619cf995d7315af4fcfedb0a1025d93bbfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Societies list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Societe</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["societes"] ?? $this->getContext($context, "societes")));
        foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_show", array("id" => $this->getAttribute($context["societe"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["societe"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["societe"], "societe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["societe"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_show", array("id" => $this->getAttribute($context["societe"], "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-primary\">Show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_edit", array("id" => $this->getAttribute($context["societe"], "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-secondary\">Edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_new");
        echo "\"><button class=\"btn btn-success\">Create a new society</button></a>
    </ul>
";
        
        $__internal_2261cbe7451382b0a3fdd595a826619cf995d7315af4fcfedb0a1025d93bbfb0->leave($__internal_2261cbe7451382b0a3fdd595a826619cf995d7315af4fcfedb0a1025d93bbfb0_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Societe:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">Societies list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Societe</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for societe in societes %}
            <tr>
                <td><a href=\"{{ path('back_office_societe_show', { 'id': societe.id }) }}\">{{ societe.id }}</a></td>
                <td>{{ societe.societe }}</td>
                <td>{{ societe.adresse }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('back_office_societe_show', { 'id': societe.id }) }}\" class=\"badge badge-primary\">Show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('back_office_societe_edit', { 'id': societe.id }) }}\" class=\"badge badge-secondary\">Edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
            <a href=\"{{ path('back_office_user_new') }}\"><button class=\"btn btn-success\">Create a new society</button></a>
    </ul>
{% endblock %}
", "BackOfficeBundle:Societe:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Societe/index.html.twig");
    }
}
