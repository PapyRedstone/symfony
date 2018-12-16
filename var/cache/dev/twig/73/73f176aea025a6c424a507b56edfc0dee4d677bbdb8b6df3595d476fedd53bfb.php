<?php

/* FrontOfficeBundle:User:editProfil.html.twig */
class __TwigTemplate_d2bbf4dfde384712b2259e6eb28b0bef40903b61bf4d183707a7838955cd8e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:editProfil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4509cc3bc22b91b6a4d3ab50240f53355f95b465bc3f2e0756f40f03e3389b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4509cc3bc22b91b6a4d3ab50240f53355f95b465bc3f2e0756f40f03e3389b73->enter($__internal_4509cc3bc22b91b6a4d3ab50240f53355f95b465bc3f2e0756f40f03e3389b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:editProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4509cc3bc22b91b6a4d3ab50240f53355f95b465bc3f2e0756f40f03e3389b73->leave($__internal_4509cc3bc22b91b6a4d3ab50240f53355f95b465bc3f2e0756f40f03e3389b73_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8ac42588a964204f55010f91218c6a7c6a9ea5194e07f26b89ff7ae68e11b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ac42588a964204f55010f91218c6a7c6a9ea5194e07f26b89ff7ae68e11b82->enter($__internal_e8ac42588a964204f55010f91218c6a7c6a9ea5194e07f26b89ff7ae68e11b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Modifier</button>
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e8ac42588a964204f55010f91218c6a7c6a9ea5194e07f26b89ff7ae68e11b82->leave($__internal_e8ac42588a964204f55010f91218c6a7c6a9ea5194e07f26b89ff7ae68e11b82_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:editProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontOfficeBundle::base.html.twig\" %}

{% block body %}
{{ form_start(form) }}
{{ form_widget(form) }}
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Modifier</button>
{{ form_end(form) }}
{% endblock body %}
", "FrontOfficeBundle:User:editProfil.html.twig", "/home/alex/Documents/symfony/symfony/src/FrontOfficeBundle/Resources/views/User/editProfil.html.twig");
    }
}
