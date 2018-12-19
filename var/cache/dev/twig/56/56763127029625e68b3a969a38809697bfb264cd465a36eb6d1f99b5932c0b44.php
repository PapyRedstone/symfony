<?php

/* BackOfficeBundle:User:new.html.twig */
class __TwigTemplate_7dfc8681ad7c351ab3eacb89e977ae146ac18db93cf9e1a37a169e98f98bef72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:User:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_228a2b678d7132707f6da866b90f0c58d639cc55eb030b9bed8219f236007d68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228a2b678d7132707f6da866b90f0c58d639cc55eb030b9bed8219f236007d68->enter($__internal_228a2b678d7132707f6da866b90f0c58d639cc55eb030b9bed8219f236007d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:User:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_228a2b678d7132707f6da866b90f0c58d639cc55eb030b9bed8219f236007d68->leave($__internal_228a2b678d7132707f6da866b90f0c58d639cc55eb030b9bed8219f236007d68_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_862e48c19305ba4f8c07f49bd8997eab25b51ab7e243ea818e9fae94dfecdb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862e48c19305ba4f8c07f49bd8997eab25b51ab7e243ea818e9fae94dfecdb66->enter($__internal_862e48c19305ba4f8c07f49bd8997eab25b51ab7e243ea818e9fae94dfecdb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">User creation</h2>

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
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_862e48c19305ba4f8c07f49bd8997eab25b51ab7e243ea818e9fae94dfecdb66->leave($__internal_862e48c19305ba4f8c07f49bd8997eab25b51ab7e243ea818e9fae94dfecdb66_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:User:new.html.twig";
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
        return new Twig_Source("{% extends 'BackOfficeBundle::base.html.twig' %}

{% block body %}
    <h2 class=\"blue\">User creation</h2>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_user_index') }}\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "BackOfficeBundle:User:new.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/User/new.html.twig");
    }
}
