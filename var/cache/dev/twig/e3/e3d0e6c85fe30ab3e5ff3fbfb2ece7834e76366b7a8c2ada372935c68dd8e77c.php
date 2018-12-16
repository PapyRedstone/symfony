<?php

/* :societe:new.html.twig */
class __TwigTemplate_a7b134e2bb6fefd659e8b50d91ed81897bcec01670f09a1215e734790ac5350b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":societe:new.html.twig", 1);
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
        $__internal_cd507de65167d3fa3d80ebf1e9ba7923d533db66139188890501e0152120e5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd507de65167d3fa3d80ebf1e9ba7923d533db66139188890501e0152120e5de->enter($__internal_cd507de65167d3fa3d80ebf1e9ba7923d533db66139188890501e0152120e5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":societe:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd507de65167d3fa3d80ebf1e9ba7923d533db66139188890501e0152120e5de->leave($__internal_cd507de65167d3fa3d80ebf1e9ba7923d533db66139188890501e0152120e5de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f033871624425833a3e8f8e2d0a5fbf0303d92ab90aa7b54c9ce4a73d9589d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f033871624425833a3e8f8e2d0a5fbf0303d92ab90aa7b54c9ce4a73d9589d41->enter($__internal_f033871624425833a3e8f8e2d0a5fbf0303d92ab90aa7b54c9ce4a73d9589d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Societe creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f033871624425833a3e8f8e2d0a5fbf0303d92ab90aa7b54c9ce4a73d9589d41->leave($__internal_f033871624425833a3e8f8e2d0a5fbf0303d92ab90aa7b54c9ce4a73d9589d41_prof);

    }

    public function getTemplateName()
    {
        return ":societe:new.html.twig";
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
    <h1>Societe creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_societe_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":societe:new.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/societe/new.html.twig");
    }
}
