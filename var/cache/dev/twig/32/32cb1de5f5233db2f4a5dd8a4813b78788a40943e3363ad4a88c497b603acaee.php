<?php

/* BackOfficeBundle:User:index.html.twig */
class __TwigTemplate_ebf3cc08813a5783126e62f9f879e241211aa680fa3bb19c215223425f346226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:User:index.html.twig", 1);
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
        $__internal_0f1acdd5b102db0cd5ba4e3e1161c392137180dd32c0b5b78f90ae324a393d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1acdd5b102db0cd5ba4e3e1161c392137180dd32c0b5b78f90ae324a393d85->enter($__internal_0f1acdd5b102db0cd5ba4e3e1161c392137180dd32c0b5b78f90ae324a393d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1acdd5b102db0cd5ba4e3e1161c392137180dd32c0b5b78f90ae324a393d85->leave($__internal_0f1acdd5b102db0cd5ba4e3e1161c392137180dd32c0b5b78f90ae324a393d85_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d92f6ccead822b8804f11ee9d45b69247571c472e504dee3d8f8bf94ae15612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d92f6ccead822b8804f11ee9d45b69247571c472e504dee3d8f8bf94ae15612->enter($__internal_0d92f6ccead822b8804f11ee9d45b69247571c472e504dee3d8f8bf94ae15612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Users list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">Distanceinit</th>
                <th scope=\"col\">Created</th>
                <th scope=\"col\">Updated</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "distanceInit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            if ($this->getAttribute($context["user"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["user"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-primary\">Show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-secondary\">Edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
    <ul>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_new");
        echo "\"><button class=\"btn btn-success\">Create a new user</button></a>
    </ul>
";
        
        $__internal_0d92f6ccead822b8804f11ee9d45b69247571c472e504dee3d8f8bf94ae15612->leave($__internal_0d92f6ccead822b8804f11ee9d45b69247571c472e504dee3d8f8bf94ae15612_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 44,  120 => 41,  108 => 35,  102 => 32,  93 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">Users list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prenom</th>
                <th scope=\"col\">Adresse</th>
                <th scope=\"col\">Distanceinit</th>
                <th scope=\"col\">Created</th>
                <th scope=\"col\">Updated</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('back_office_user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.nom }}</td>
                <td>{{ user.prenom }}</td>
                <td>{{ user.adresse }}</td>
                <td>{{ user.distanceInit }}</td>
                <td>{% if user.created %}{{ user.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if user.updated %}{{ user.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('back_office_user_show', { 'id': user.id }) }}\" class=\"badge badge-primary\">Show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('back_office_user_edit', { 'id': user.id }) }}\" class=\"badge badge-secondary\">Edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>
            <a href=\"{{ path('back_office_user_new') }}\"><button class=\"btn btn-success\">Create a new user</button></a>
    </ul>
{% endblock %}
", "BackOfficeBundle:User:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/User/index.html.twig");
    }
}
