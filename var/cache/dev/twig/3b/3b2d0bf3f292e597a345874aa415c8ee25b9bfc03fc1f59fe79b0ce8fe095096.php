<?php

/* BackOfficeBundle:Societe:show.html.twig */
class __TwigTemplate_fce973a9437fb1883fa97167bda8627ba01ee955a86b94ca78e51554b37131ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Societe:show.html.twig", 1);
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
        $__internal_dbd5a4ebf11cd773d3849d68ec80f5d0e0bd36bc950357bb35055705fa29931d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd5a4ebf11cd773d3849d68ec80f5d0e0bd36bc950357bb35055705fa29931d->enter($__internal_dbd5a4ebf11cd773d3849d68ec80f5d0e0bd36bc950357bb35055705fa29931d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Societe:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbd5a4ebf11cd773d3849d68ec80f5d0e0bd36bc950357bb35055705fa29931d->leave($__internal_dbd5a4ebf11cd773d3849d68ec80f5d0e0bd36bc950357bb35055705fa29931d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df546222e35e272114cfd762201415d574acf181d8fe5f33501d52ab2b8da374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df546222e35e272114cfd762201415d574acf181d8fe5f33501d52ab2b8da374->enter($__internal_df546222e35e272114cfd762201415d574acf181d8fe5f33501d52ab2b8da374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Society</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Societe</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "societe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Adresse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_index");
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_edit", array("id" => $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "id", array()))), "html", null, true);
        echo "\" class=\"badge badge-secondary\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">  Delete </button>
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_df546222e35e272114cfd762201415d574acf181d8fe5f33501d52ab2b8da374->leave($__internal_df546222e35e272114cfd762201415d574acf181d8fe5f33501d52ab2b8da374_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Societe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">Society</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>{{ societe.id }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Societe</th>
                <td>{{ societe.societe }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Adresse</th>
                <td>{{ societe.adresse }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('back_office_societe_index') }}\" class=\"badge badge-primary\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('back_office_societe_edit', { 'id': societe.id }) }}\" class=\"badge badge-secondary\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">  Delete </button>
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackOfficeBundle:Societe:show.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Societe/show.html.twig");
    }
}
