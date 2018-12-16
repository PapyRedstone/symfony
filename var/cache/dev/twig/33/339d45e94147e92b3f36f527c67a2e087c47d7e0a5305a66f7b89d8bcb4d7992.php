<?php

/* :service:new.html.twig */
class __TwigTemplate_bffc07710200158cc57b4cbfa405c9ac78f8f4c0686b77138083db8f055db3f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":service:new.html.twig", 1);
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
        $__internal_7acdd60f4f2dd1c8edad08b8b1cc0ca60710303aa2423ab5bb8babce3be961e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acdd60f4f2dd1c8edad08b8b1cc0ca60710303aa2423ab5bb8babce3be961e5->enter($__internal_7acdd60f4f2dd1c8edad08b8b1cc0ca60710303aa2423ab5bb8babce3be961e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7acdd60f4f2dd1c8edad08b8b1cc0ca60710303aa2423ab5bb8babce3be961e5->leave($__internal_7acdd60f4f2dd1c8edad08b8b1cc0ca60710303aa2423ab5bb8babce3be961e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d2d49893639cb0ce2abf30aca6b0cf177704ea98aa6c3f69deef2eb79b97e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2d49893639cb0ce2abf30aca6b0cf177704ea98aa6c3f69deef2eb79b97e81->enter($__internal_5d2d49893639cb0ce2abf30aca6b0cf177704ea98aa6c3f69deef2eb79b97e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5d2d49893639cb0ce2abf30aca6b0cf177704ea98aa6c3f69deef2eb79b97e81->leave($__internal_5d2d49893639cb0ce2abf30aca6b0cf177704ea98aa6c3f69deef2eb79b97e81_prof);

    }

    public function getTemplateName()
    {
        return ":service:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Service creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_service_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":service:new.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/service/new.html.twig");
    }
}
