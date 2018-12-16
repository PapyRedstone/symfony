<?php

/* :societe:new.html.twig */
class __TwigTemplate_401d3bcbecf06613c993ee600b14ee083895569091cee5537e553066300c67bd extends Twig_Template
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
        $__internal_61bd5f99ea281d19390a18f096960468a0e2b80be62692ed6e37a3175f7bf1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bd5f99ea281d19390a18f096960468a0e2b80be62692ed6e37a3175f7bf1aa->enter($__internal_61bd5f99ea281d19390a18f096960468a0e2b80be62692ed6e37a3175f7bf1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":societe:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61bd5f99ea281d19390a18f096960468a0e2b80be62692ed6e37a3175f7bf1aa->leave($__internal_61bd5f99ea281d19390a18f096960468a0e2b80be62692ed6e37a3175f7bf1aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ebffca1fdd84bc9f9fe834124c880226bd6902c7e174d01400d438993cb6664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebffca1fdd84bc9f9fe834124c880226bd6902c7e174d01400d438993cb6664->enter($__internal_6ebffca1fdd84bc9f9fe834124c880226bd6902c7e174d01400d438993cb6664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ebffca1fdd84bc9f9fe834124c880226bd6902c7e174d01400d438993cb6664->leave($__internal_6ebffca1fdd84bc9f9fe834124c880226bd6902c7e174d01400d438993cb6664_prof);

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
", ":societe:new.html.twig", "/var/www/html/symfony/app/Resources/views/societe/new.html.twig");
    }
}
