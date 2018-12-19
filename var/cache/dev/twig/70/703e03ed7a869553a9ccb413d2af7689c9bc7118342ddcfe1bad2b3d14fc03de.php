<?php

/* BackOfficeBundle:Societe:new.html.twig */
class __TwigTemplate_1d2a9106589419a0c9acb4747f641685d7aa30064ae8535df7bf96bcf675f1e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Societe:new.html.twig", 1);
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
        $__internal_3381ed933c1e61f5004eccc299bf8186854610b110fcfffe7cdd0c74bcbdfc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3381ed933c1e61f5004eccc299bf8186854610b110fcfffe7cdd0c74bcbdfc6d->enter($__internal_3381ed933c1e61f5004eccc299bf8186854610b110fcfffe7cdd0c74bcbdfc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Societe:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3381ed933c1e61f5004eccc299bf8186854610b110fcfffe7cdd0c74bcbdfc6d->leave($__internal_3381ed933c1e61f5004eccc299bf8186854610b110fcfffe7cdd0c74bcbdfc6d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba03db1564a22e184dac34fb310b36cf339e6eee06375873b29b02a1771f3ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba03db1564a22e184dac34fb310b36cf339e6eee06375873b29b02a1771f3ae9->enter($__internal_ba03db1564a22e184dac34fb310b36cf339e6eee06375873b29b02a1771f3ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Society creation</h2>

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
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ba03db1564a22e184dac34fb310b36cf339e6eee06375873b29b02a1771f3ae9->leave($__internal_ba03db1564a22e184dac34fb310b36cf339e6eee06375873b29b02a1771f3ae9_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Societe:new.html.twig";
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
    <h2 class=\"blue\">Society creation</h2>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_societe_index') }}\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "BackOfficeBundle:Societe:new.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Societe/new.html.twig");
    }
}
