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
        $__internal_9804287e9a539f21f7002b328b73573b1c007bc94fd6ddc02072a55514e1c664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9804287e9a539f21f7002b328b73573b1c007bc94fd6ddc02072a55514e1c664->enter($__internal_9804287e9a539f21f7002b328b73573b1c007bc94fd6ddc02072a55514e1c664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:addMonth.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9804287e9a539f21f7002b328b73573b1c007bc94fd6ddc02072a55514e1c664->leave($__internal_9804287e9a539f21f7002b328b73573b1c007bc94fd6ddc02072a55514e1c664_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94eb5222e900adc3efe89e3f7dc3ee8a5feceb10a17a2aace5fbbb2880d9811c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94eb5222e900adc3efe89e3f7dc3ee8a5feceb10a17a2aace5fbbb2880d9811c->enter($__internal_94eb5222e900adc3efe89e3f7dc3ee8a5feceb10a17a2aace5fbbb2880d9811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_94eb5222e900adc3efe89e3f7dc3ee8a5feceb10a17a2aace5fbbb2880d9811c->leave($__internal_94eb5222e900adc3efe89e3f7dc3ee8a5feceb10a17a2aace5fbbb2880d9811c_prof);

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
