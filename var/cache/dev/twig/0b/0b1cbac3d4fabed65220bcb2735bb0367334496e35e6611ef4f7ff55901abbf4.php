<?php

/* BackOfficeBundle:Service:new.html.twig */
class __TwigTemplate_b0c541c4e4f065db05d334e2fa5ef36db91ae4ae80ed278f8dc65b28326236df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Service:new.html.twig", 1);
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
        $__internal_45a55658ea6ce9d5bd6a0519f53c632275e16bfb8d748e8e8b86865fdc818660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a55658ea6ce9d5bd6a0519f53c632275e16bfb8d748e8e8b86865fdc818660->enter($__internal_45a55658ea6ce9d5bd6a0519f53c632275e16bfb8d748e8e8b86865fdc818660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a55658ea6ce9d5bd6a0519f53c632275e16bfb8d748e8e8b86865fdc818660->leave($__internal_45a55658ea6ce9d5bd6a0519f53c632275e16bfb8d748e8e8b86865fdc818660_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b805d4c8b2dbfa6c5938f12ac5e702c1d763e02cea17b86ccf756fac237793db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b805d4c8b2dbfa6c5938f12ac5e702c1d763e02cea17b86ccf756fac237793db->enter($__internal_b805d4c8b2dbfa6c5938f12ac5e702c1d763e02cea17b86ccf756fac237793db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Service creation</h2>

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
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b805d4c8b2dbfa6c5938f12ac5e702c1d763e02cea17b86ccf756fac237793db->leave($__internal_b805d4c8b2dbfa6c5938f12ac5e702c1d763e02cea17b86ccf756fac237793db_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Service:new.html.twig";
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
        return new Twig_Source("{% extends 'BackOfficeBundle::base.html.twig' %}

{% block body %}
    <h2 class=\"blue\">Service creation</h2>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_service_index') }}\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "BackOfficeBundle:Service:new.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Service/new.html.twig");
    }
}
