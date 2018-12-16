<?php

/* :user:new.html.twig */
class __TwigTemplate_a8431ddc92bc354e2d5f3d879169170f65067cbf8659bb85caaa985c1e3a2516 extends Twig_Template
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
        $__internal_35307f3d2ffaac3f60f4b53ba3cdcbcdb3322130c7789b10b0d8c7b2d211374f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35307f3d2ffaac3f60f4b53ba3cdcbcdb3322130c7789b10b0d8c7b2d211374f->enter($__internal_35307f3d2ffaac3f60f4b53ba3cdcbcdb3322130c7789b10b0d8c7b2d211374f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35307f3d2ffaac3f60f4b53ba3cdcbcdb3322130c7789b10b0d8c7b2d211374f->leave($__internal_35307f3d2ffaac3f60f4b53ba3cdcbcdb3322130c7789b10b0d8c7b2d211374f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d48610884d758447cb7235438580dcd3db77fa6994491730e966c1e76bf0bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d48610884d758447cb7235438580dcd3db77fa6994491730e966c1e76bf0bbe->enter($__internal_2d48610884d758447cb7235438580dcd3db77fa6994491730e966c1e76bf0bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d48610884d758447cb7235438580dcd3db77fa6994491730e966c1e76bf0bbe->leave($__internal_2d48610884d758447cb7235438580dcd3db77fa6994491730e966c1e76bf0bbe_prof);

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
", ":user:new.html.twig", "/var/www/html/symfony/app/Resources/views/user/new.html.twig");
    }
}
