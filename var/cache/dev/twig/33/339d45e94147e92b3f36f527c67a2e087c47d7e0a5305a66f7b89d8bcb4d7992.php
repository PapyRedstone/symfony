<?php

/* :service:new.html.twig */
class __TwigTemplate_bffc07710200158cc57b4cbfa405c9ac78f8f4c0686b77138083db8f055db3f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":service:new.html.twig", 1);
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
        $__internal_2867618b15ccc354704433f89a6d0e902630e1106c312adbf2cbf92b1c375f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2867618b15ccc354704433f89a6d0e902630e1106c312adbf2cbf92b1c375f80->enter($__internal_2867618b15ccc354704433f89a6d0e902630e1106c312adbf2cbf92b1c375f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2867618b15ccc354704433f89a6d0e902630e1106c312adbf2cbf92b1c375f80->leave($__internal_2867618b15ccc354704433f89a6d0e902630e1106c312adbf2cbf92b1c375f80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6c33060dfa49bad6f29c205cf3ec366175232cef08c3af238c5e58785750a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c33060dfa49bad6f29c205cf3ec366175232cef08c3af238c5e58785750a63->enter($__internal_c6c33060dfa49bad6f29c205cf3ec366175232cef08c3af238c5e58785750a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service creation</h1>

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
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c6c33060dfa49bad6f29c205cf3ec366175232cef08c3af238c5e58785750a63->leave($__internal_c6c33060dfa49bad6f29c205cf3ec366175232cef08c3af238c5e58785750a63_prof);

    }

    public function getTemplateName()
    {
        return ":service:new.html.twig";
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
    <h1>Service creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_service_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":service:new.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/service/new.html.twig");
    }
}
