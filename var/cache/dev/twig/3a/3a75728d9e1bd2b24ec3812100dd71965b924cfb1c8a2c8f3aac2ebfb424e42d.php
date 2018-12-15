<?php

/* FrontOfficeBundle:User:addMonth.html.twig */
class __TwigTemplate_82b104124b3091794a1b090b7f49ef6f2bcc9638ca94de187126adc942fd3c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:addMonth.html.twig", 1);
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
        $__internal_df1e6d82df20978e193046581bd01531bd9fdf5a774c7c793520f6372351d5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1e6d82df20978e193046581bd01531bd9fdf5a774c7c793520f6372351d5a5->enter($__internal_df1e6d82df20978e193046581bd01531bd9fdf5a774c7c793520f6372351d5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:addMonth.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df1e6d82df20978e193046581bd01531bd9fdf5a774c7c793520f6372351d5a5->leave($__internal_df1e6d82df20978e193046581bd01531bd9fdf5a774c7c793520f6372351d5a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_295216501dfc35a3850de342cf54be23be41aeb748d6699a44f26722350772b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295216501dfc35a3850de342cf54be23be41aeb748d6699a44f26722350772b9->enter($__internal_295216501dfc35a3850de342cf54be23be41aeb748d6699a44f26722350772b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Ajouter</button>
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_295216501dfc35a3850de342cf54be23be41aeb748d6699a44f26722350772b9->leave($__internal_295216501dfc35a3850de342cf54be23be41aeb748d6699a44f26722350772b9_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:addMonth.html.twig";
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
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Ajouter</button>
{{ form_end(form) }}
{% endblock body %}
", "FrontOfficeBundle:User:addMonth.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/addMonth.html.twig");
    }
}
