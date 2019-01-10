<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c98ab064b093751aeea645603bbec645bff4b7858f252d95c8ba1f30623d6137 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1459430b4665eae48a0897d33f27803e9fba2dce1c0b252ac39abbcc23c19d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1459430b4665eae48a0897d33f27803e9fba2dce1c0b252ac39abbcc23c19d0c->enter($__internal_1459430b4665eae48a0897d33f27803e9fba2dce1c0b252ac39abbcc23c19d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1459430b4665eae48a0897d33f27803e9fba2dce1c0b252ac39abbcc23c19d0c->leave($__internal_1459430b4665eae48a0897d33f27803e9fba2dce1c0b252ac39abbcc23c19d0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8956ab46428cb463a8949b2f9bf6da6889df75320e4dd7e96ba0fce81fe6333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8956ab46428cb463a8949b2f9bf6da6889df75320e4dd7e96ba0fce81fe6333->enter($__internal_d8956ab46428cb463a8949b2f9bf6da6889df75320e4dd7e96ba0fce81fe6333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8956ab46428cb463a8949b2f9bf6da6889df75320e4dd7e96ba0fce81fe6333->leave($__internal_d8956ab46428cb463a8949b2f9bf6da6889df75320e4dd7e96ba0fce81fe6333_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1651491584e946898b2bc6baa5ddd75b8d0d83fec56d9a0a958b814437a43b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1651491584e946898b2bc6baa5ddd75b8d0d83fec56d9a0a958b814437a43b87->enter($__internal_1651491584e946898b2bc6baa5ddd75b8d0d83fec56d9a0a958b814437a43b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1651491584e946898b2bc6baa5ddd75b8d0d83fec56d9a0a958b814437a43b87->leave($__internal_1651491584e946898b2bc6baa5ddd75b8d0d83fec56d9a0a958b814437a43b87_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89ac0b407d4182d1bc0cf1b3493f21d0ec2e7c3edd72bcedf0cde8e6e189decb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ac0b407d4182d1bc0cf1b3493f21d0ec2e7c3edd72bcedf0cde8e6e189decb->enter($__internal_89ac0b407d4182d1bc0cf1b3493f21d0ec2e7c3edd72bcedf0cde8e6e189decb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_89ac0b407d4182d1bc0cf1b3493f21d0ec2e7c3edd72bcedf0cde8e6e189decb->leave($__internal_89ac0b407d4182d1bc0cf1b3493f21d0ec2e7c3edd72bcedf0cde8e6e189decb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
