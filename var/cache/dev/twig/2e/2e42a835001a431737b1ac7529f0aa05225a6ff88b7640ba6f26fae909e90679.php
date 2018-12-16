<?php

/* :user:new.html.twig */
class __TwigTemplate_081bae33cf39c154e446deb56f21bb3f5d069025099907f75fb233c5327dee47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
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
        $__internal_d4322ea34ca8678f4256c3035c7b238e050911d3e4b28e3fcdbed2956f5023bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4322ea34ca8678f4256c3035c7b238e050911d3e4b28e3fcdbed2956f5023bb->enter($__internal_d4322ea34ca8678f4256c3035c7b238e050911d3e4b28e3fcdbed2956f5023bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4322ea34ca8678f4256c3035c7b238e050911d3e4b28e3fcdbed2956f5023bb->leave($__internal_d4322ea34ca8678f4256c3035c7b238e050911d3e4b28e3fcdbed2956f5023bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9c0c1e1602c5919b49baafdb8ee1bb7374b48d44e49f7941d5f5f08fe567e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c0c1e1602c5919b49baafdb8ee1bb7374b48d44e49f7941d5f5f08fe567e3f->enter($__internal_d9c0c1e1602c5919b49baafdb8ee1bb7374b48d44e49f7941d5f5f08fe567e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d9c0c1e1602c5919b49baafdb8ee1bb7374b48d44e49f7941d5f5f08fe567e3f->leave($__internal_d9c0c1e1602c5919b49baafdb8ee1bb7374b48d44e49f7941d5f5f08fe567e3f_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
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
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":user:new.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/user/new.html.twig");
    }
}
