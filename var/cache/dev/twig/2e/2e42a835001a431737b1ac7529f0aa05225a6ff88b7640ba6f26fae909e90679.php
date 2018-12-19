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
        $__internal_6b07909c313203696dc930667fc89fcf9b069453ff5440dfb90665ecfec6d726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b07909c313203696dc930667fc89fcf9b069453ff5440dfb90665ecfec6d726->enter($__internal_6b07909c313203696dc930667fc89fcf9b069453ff5440dfb90665ecfec6d726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b07909c313203696dc930667fc89fcf9b069453ff5440dfb90665ecfec6d726->leave($__internal_6b07909c313203696dc930667fc89fcf9b069453ff5440dfb90665ecfec6d726_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_154b56482f79531470756d1f0fbc87d72987669677ed02113ec0babc78d08401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154b56482f79531470756d1f0fbc87d72987669677ed02113ec0babc78d08401->enter($__internal_154b56482f79531470756d1f0fbc87d72987669677ed02113ec0babc78d08401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_154b56482f79531470756d1f0fbc87d72987669677ed02113ec0babc78d08401->leave($__internal_154b56482f79531470756d1f0fbc87d72987669677ed02113ec0babc78d08401_prof);

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
