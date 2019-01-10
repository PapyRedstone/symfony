<?php

/* BackOfficeBundle:User:show.html.twig */
class __TwigTemplate_cd9d5b11288f2ab9317900a1d3f3d63c8f90bf99e6f4f819d2e7f2fa1bfa825c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:User:show.html.twig", 1);
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
        $__internal_3415a7240c099eb4e302be9ab3b537882fb4beb3a302c55ac64b82c1328ad1cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3415a7240c099eb4e302be9ab3b537882fb4beb3a302c55ac64b82c1328ad1cb->enter($__internal_3415a7240c099eb4e302be9ab3b537882fb4beb3a302c55ac64b82c1328ad1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3415a7240c099eb4e302be9ab3b537882fb4beb3a302c55ac64b82c1328ad1cb->leave($__internal_3415a7240c099eb4e302be9ab3b537882fb4beb3a302c55ac64b82c1328ad1cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_041c1861ec6919af5f7bdb8cc8ecf9f87d2415dc27918d3f1af2438d958bfecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041c1861ec6919af5f7bdb8cc8ecf9f87d2415dc27918d3f1af2438d958bfecf->enter($__internal_041c1861ec6919af5f7bdb8cc8ecf9f87d2415dc27918d3f1af2438d958bfecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">User</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Adresse</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Distanceinit</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "distanceInit", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Created</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Updated</th>
                <td>";
        // line 34
        if ($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_index");
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"badge badge-secondary\">Edit</a>
        </li>
        <li>
            ";
        // line 46
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">  Delete </button>
            ";
        // line 48
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_041c1861ec6919af5f7bdb8cc8ecf9f87d2415dc27918d3f1af2438d958bfecf->leave($__internal_041c1861ec6919af5f7bdb8cc8ecf9f87d2415dc27918d3f1af2438d958bfecf_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 48,  115 => 46,  109 => 43,  103 => 40,  92 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">User</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Nom</th>
                <td>{{ user.nom }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Prenom</th>
                <td>{{ user.prenom }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Adresse</th>
                <td>{{ user.adresse }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Distanceinit</th>
                <td>{{ user.distanceInit }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Created</th>
                <td>{% if user.created %}{{ user.created|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th scope=\"col\">Updated</th>
                <td>{% if user.updated %}{{ user.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('back_office_user_index') }}\" class=\"badge badge-primary\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('back_office_user_edit', { 'id': user.id }) }}\" class=\"badge badge-secondary\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">  Delete </button>
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackOfficeBundle:User:show.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/User/show.html.twig");
    }
}
