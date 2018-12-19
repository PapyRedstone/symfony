<?php

/* :service:index.html.twig */
class __TwigTemplate_496459240ea2da02fa92f3d39eb910401806154f39ee85a2cdfd72c94a9d8fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":service:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b06406d7f8f7e836c0a7e342a5d36d7a72db3ca0dd66c343e943ff38e7602b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b06406d7f8f7e836c0a7e342a5d36d7a72db3ca0dd66c343e943ff38e7602b8->enter($__internal_4b06406d7f8f7e836c0a7e342a5d36d7a72db3ca0dd66c343e943ff38e7602b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b06406d7f8f7e836c0a7e342a5d36d7a72db3ca0dd66c343e943ff38e7602b8->leave($__internal_4b06406d7f8f7e836c0a7e342a5d36d7a72db3ca0dd66c343e943ff38e7602b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a11b15f8f84bc7ddfe2f63e6d4b246dd4257c24912464567a344ffb33f2ff014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11b15f8f84bc7ddfe2f63e6d4b246dd4257c24912464567a344ffb33f2ff014->enter($__internal_a11b15f8f84bc7ddfe2f63e6d4b246dd4257c24912464567a344ffb33f2ff014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Services list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Service</th>
                <th>Actions</th>
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
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_edit", array("id" => $this->getAttribute($context["service"], "id", array()))), "html", null, true);
            echo "\">edit</a>
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
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_new");
        echo "\">Create a new service</a>
        </li>
    </ul>
";
        
        $__internal_a11b15f8f84bc7ddfe2f63e6d4b246dd4257c24912464567a344ffb33f2ff014->leave($__internal_a11b15f8f84bc7ddfe2f63e6d4b246dd4257c24912464567a344ffb33f2ff014_prof);

    }

    public function getTemplateName()
    {
        return ":service:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Services list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Service</th>
                <th>Actions</th>
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
                            <a href=\"{{ path('back_office_service_show', { 'id': service.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('back_office_service_edit', { 'id': service.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('back_office_service_new') }}\">Create a new service</a>
        </li>
    </ul>
{% endblock %}
", ":service:index.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/service/index.html.twig");
    }
}
