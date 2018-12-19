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
        $__internal_df4459ff3cb4e96726efc3acca9f8f7740738a42c390a856f1bcf57de67e217b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4459ff3cb4e96726efc3acca9f8f7740738a42c390a856f1bcf57de67e217b->enter($__internal_df4459ff3cb4e96726efc3acca9f8f7740738a42c390a856f1bcf57de67e217b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:editProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df4459ff3cb4e96726efc3acca9f8f7740738a42c390a856f1bcf57de67e217b->leave($__internal_df4459ff3cb4e96726efc3acca9f8f7740738a42c390a856f1bcf57de67e217b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_992dd01dc2ec9e3e1231fcd3b8573d0dac5e54964d08690cf5d397093260a503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992dd01dc2ec9e3e1231fcd3b8573d0dac5e54964d08690cf5d397093260a503->enter($__internal_992dd01dc2ec9e3e1231fcd3b8573d0dac5e54964d08690cf5d397093260a503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_992dd01dc2ec9e3e1231fcd3b8573d0dac5e54964d08690cf5d397093260a503->leave($__internal_992dd01dc2ec9e3e1231fcd3b8573d0dac5e54964d08690cf5d397093260a503_prof);

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
