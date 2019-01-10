<?php

/* BackOfficeBundle:Service:show.html.twig */
class __TwigTemplate_6dc7357dca85f8fe3ede13835c09ac76f27f61b2bd6c40d80139d4006e1b35ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Service:show.html.twig", 1);
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
        $__internal_d0e8d1f507f106199090ca2af5f645f866dffbdf7057f89f6636aa0b7a03316c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e8d1f507f106199090ca2af5f645f866dffbdf7057f89f6636aa0b7a03316c->enter($__internal_d0e8d1f507f106199090ca2af5f645f866dffbdf7057f89f6636aa0b7a03316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Service:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0e8d1f507f106199090ca2af5f645f866dffbdf7057f89f6636aa0b7a03316c->leave($__internal_d0e8d1f507f106199090ca2af5f645f866dffbdf7057f89f6636aa0b7a03316c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3155f7d6c4f222d5a92b08f41a07ea53a76a5d73ab72db8cf95ea0724b242efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3155f7d6c4f222d5a92b08f41a07ea53a76a5d73ab72db8cf95ea0724b242efd->enter($__internal_3155f7d6c4f222d5a92b08f41a07ea53a76a5d73ab72db8cf95ea0724b242efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Service</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Service</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "service", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_index");
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_edit", array("id" => $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()))), "html", null, true);
        echo "\" class=\"badge badge-secondary\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">  Delete </button>
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3155f7d6c4f222d5a92b08f41a07ea53a76a5d73ab72db8cf95ea0724b242efd->leave($__internal_3155f7d6c4f222d5a92b08f41a07ea53a76a5d73ab72db8cf95ea0724b242efd_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Service:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">Service</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>{{ service.id }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Service</th>
                <td>{{ service.service }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('back_office_service_index') }}\" class=\"badge badge-primary\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('back_office_service_edit', { 'id': service.id }) }}\" class=\"badge badge-secondary\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">  Delete </button>
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackOfficeBundle:Service:show.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Service/show.html.twig");
    }
}
