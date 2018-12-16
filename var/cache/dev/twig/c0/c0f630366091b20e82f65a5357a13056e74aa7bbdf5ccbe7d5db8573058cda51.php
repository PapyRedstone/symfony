<?php

/* FrontOfficeBundle:User:editProfil.html.twig */
class __TwigTemplate_84d552be1f8cb6a90bf76a00c0833aa25f24eb1b18ce2c2e44b61f47765368bb extends Twig_Template
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
        $__internal_6e9522a5dfdb3916cac243257610b859f31aa809c01dfc014fce1fd0dccec4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9522a5dfdb3916cac243257610b859f31aa809c01dfc014fce1fd0dccec4a0->enter($__internal_6e9522a5dfdb3916cac243257610b859f31aa809c01dfc014fce1fd0dccec4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:editProfil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e9522a5dfdb3916cac243257610b859f31aa809c01dfc014fce1fd0dccec4a0->leave($__internal_6e9522a5dfdb3916cac243257610b859f31aa809c01dfc014fce1fd0dccec4a0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d836fed1e63b862f4887580fb9e0687991cd4e2b6430c4cbf1275116770d5e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d836fed1e63b862f4887580fb9e0687991cd4e2b6430c4cbf1275116770d5e31->enter($__internal_d836fed1e63b862f4887580fb9e0687991cd4e2b6430c4cbf1275116770d5e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d836fed1e63b862f4887580fb9e0687991cd4e2b6430c4cbf1275116770d5e31->leave($__internal_d836fed1e63b862f4887580fb9e0687991cd4e2b6430c4cbf1275116770d5e31_prof);

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
", "FrontOfficeBundle:User:editProfil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/editProfil.html.twig");
    }
}
