<?php

/* BackOfficeBundle:Service:edit.html.twig */
class __TwigTemplate_a71e99ccd34ed3071a6fd2d0b2c1f0e4bd10f26a33b3c51c7d37d489a355175d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Service:edit.html.twig", 1);
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
        $__internal_12b4e3b0f25f9cb0f3d25840326390140e47e12482503d0f35c3777aa43bbb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b4e3b0f25f9cb0f3d25840326390140e47e12482503d0f35c3777aa43bbb10->enter($__internal_12b4e3b0f25f9cb0f3d25840326390140e47e12482503d0f35c3777aa43bbb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Service:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b4e3b0f25f9cb0f3d25840326390140e47e12482503d0f35c3777aa43bbb10->leave($__internal_12b4e3b0f25f9cb0f3d25840326390140e47e12482503d0f35c3777aa43bbb10_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0cf37b32adffe21101642d414bae52bdb42fa79799cfdd460b98c7a67a4a758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cf37b32adffe21101642d414bae52bdb42fa79799cfdd460b98c7a67a4a758->enter($__internal_e0cf37b32adffe21101642d414bae52bdb42fa79799cfdd460b98c7a67a4a758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Service edit</h2>

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
        <li >
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_index");
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">  Delete </button>
            ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e0cf37b32adffe21101642d414bae52bdb42fa79799cfdd460b98c7a67a4a758->leave($__internal_e0cf37b32adffe21101642d414bae52bdb42fa79799cfdd460b98c7a67a4a758_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Service:edit.html.twig";
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
        return new Twig_Source("{% extends 'BackOfficeBundle::base.html.twig' %}

{% block body %}
    <h2 class=\"blue\">Service edit</h2>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li >
            <a href=\"{{ path('back_office_service_index') }}\" class=\"badge badge-primary\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
            <button type=\"submit\" value=\"Delete\" class=\"btn btn-danger\">  Delete </button>
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "BackOfficeBundle:Service:edit.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Service/edit.html.twig");
    }
}
