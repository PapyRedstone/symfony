<?php

/* BackOfficeBundle:Service:index.html.twig */
class __TwigTemplate_ae66855f90f0cb604af27c13c6c4448e64b48123d6476e0e3eb1da9d30a77033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Service:index.html.twig", 1);
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
        $__internal_50e8ddafa44fa36dc8dcf7ba38d465625c953184fea8bdf299ebe94dd5953ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e8ddafa44fa36dc8dcf7ba38d465625c953184fea8bdf299ebe94dd5953ed2->enter($__internal_50e8ddafa44fa36dc8dcf7ba38d465625c953184fea8bdf299ebe94dd5953ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Service:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e8ddafa44fa36dc8dcf7ba38d465625c953184fea8bdf299ebe94dd5953ed2->leave($__internal_50e8ddafa44fa36dc8dcf7ba38d465625c953184fea8bdf299ebe94dd5953ed2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d1cb522c77b16cef428c5f3b77490fdb9f79d86c49203dd32bad580c4c8e38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1cb522c77b16cef428c5f3b77490fdb9f79d86c49203dd32bad580c4c8e38a->enter($__internal_6d1cb522c77b16cef428c5f3b77490fdb9f79d86c49203dd32bad580c4c8e38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Services list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Service</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_show", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "service", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_show", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-primary\">Show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_edit", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\" class=\"badge badge-secondary\">Edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>
    <ul>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_new");
        echo "\"><button class=\"btn btn-success\">Create a new service</button></a>
    </ul>
";
        
        $__internal_6d1cb522c77b16cef428c5f3b77490fdb9f79d86c49203dd32bad580c4c8e38a->leave($__internal_6d1cb522c77b16cef428c5f3b77490fdb9f79d86c49203dd32bad580c4c8e38a_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Service:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">Services list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Service</th>
                <th scope=\"col\">Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for service in services %}
            <tr>
                <td><a href=\"{{ path('back_office_service_show', { 'id': service.id }) }}\">{{ service.id }}</a></td>
                <td>{{ service.service }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('back_office_service_show', { 'id': service.id }) }}\" class=\"badge badge-primary\">Show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('back_office_service_edit', { 'id': service.id }) }}\" class=\"badge badge-secondary\">Edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>
            <a href=\"{{ path('back_office_user_new') }}\"><button class=\"btn btn-success\">Create a new service</button></a>
    </ul>
{% endblock %}
", "BackOfficeBundle:Service:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Service/index.html.twig");
    }
}
