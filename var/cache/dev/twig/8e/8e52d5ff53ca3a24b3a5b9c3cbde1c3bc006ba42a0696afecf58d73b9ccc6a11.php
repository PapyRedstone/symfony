<?php

/* :service:edit.html.twig */
class __TwigTemplate_48e519efa238a106a14f3d5f8b9c0bcbf526bbc8a29687fca0d1575938cd561a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":service:edit.html.twig", 1);
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
        $__internal_2f75e757d0f7bc2e0c22d4fc2bd14d9b6e28c9424215543b7d67518d1315e0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f75e757d0f7bc2e0c22d4fc2bd14d9b6e28c9424215543b7d67518d1315e0cf->enter($__internal_2f75e757d0f7bc2e0c22d4fc2bd14d9b6e28c9424215543b7d67518d1315e0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f75e757d0f7bc2e0c22d4fc2bd14d9b6e28c9424215543b7d67518d1315e0cf->leave($__internal_2f75e757d0f7bc2e0c22d4fc2bd14d9b6e28c9424215543b7d67518d1315e0cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88f35696c6058970e29dd0f20a1ccb0697f149081d675f7e08dddcab17e40d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f35696c6058970e29dd0f20a1ccb0697f149081d675f7e08dddcab17e40d96->enter($__internal_88f35696c6058970e29dd0f20a1ccb0697f149081d675f7e08dddcab17e40d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_88f35696c6058970e29dd0f20a1ccb0697f149081d675f7e08dddcab17e40d96->leave($__internal_88f35696c6058970e29dd0f20a1ccb0697f149081d675f7e08dddcab17e40d96_prof);

    }

    public function getTemplateName()
    {
        return ":service:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Service edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_service_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":service:edit.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/service/edit.html.twig");
    }
}
