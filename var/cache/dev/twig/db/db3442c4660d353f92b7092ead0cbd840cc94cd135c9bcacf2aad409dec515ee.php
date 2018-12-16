<?php

/* :service:show.html.twig */
class __TwigTemplate_f4f3854a8a407f81fbdb3725c29eaba754ff07caa8ee32c7bdb1e6889b325b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":service:show.html.twig", 1);
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
        $__internal_1dae13ecfd15a166530aba6e1ff277cd70e83e42feae28f29da3c452a32b0ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dae13ecfd15a166530aba6e1ff277cd70e83e42feae28f29da3c452a32b0ece->enter($__internal_1dae13ecfd15a166530aba6e1ff277cd70e83e42feae28f29da3c452a32b0ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dae13ecfd15a166530aba6e1ff277cd70e83e42feae28f29da3c452a32b0ece->leave($__internal_1dae13ecfd15a166530aba6e1ff277cd70e83e42feae28f29da3c452a32b0ece_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da40cd8fd82eb1d0610d8ebc641f8a8fb546b63b53d574e54e71694d08e8d0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da40cd8fd82eb1d0610d8ebc641f8a8fb546b63b53d574e54e71694d08e8d0ae->enter($__internal_da40cd8fd82eb1d0610d8ebc641f8a8fb546b63b53d574e54e71694d08e8d0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Service</th>
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
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_edit", array("id" => $this->getAttribute(($context["service"] ?? $this->getContext($context, "service")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_da40cd8fd82eb1d0610d8ebc641f8a8fb546b63b53d574e54e71694d08e8d0ae->leave($__internal_da40cd8fd82eb1d0610d8ebc641f8a8fb546b63b53d574e54e71694d08e8d0ae_prof);

    }

    public function getTemplateName()
    {
        return ":service:show.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Service</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ service.id }}</td>
            </tr>
            <tr>
                <th>Service</th>
                <td>{{ service.service }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('back_office_service_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('back_office_service_edit', { 'id': service.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":service:show.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/service/show.html.twig");
    }
}
