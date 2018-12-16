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
        $__internal_3dc099b3d7a6ab494a4dd7131de3e04a1c320adba6bb66e23ad42ff1664961fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc099b3d7a6ab494a4dd7131de3e04a1c320adba6bb66e23ad42ff1664961fa->enter($__internal_3dc099b3d7a6ab494a4dd7131de3e04a1c320adba6bb66e23ad42ff1664961fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dc099b3d7a6ab494a4dd7131de3e04a1c320adba6bb66e23ad42ff1664961fa->leave($__internal_3dc099b3d7a6ab494a4dd7131de3e04a1c320adba6bb66e23ad42ff1664961fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a840f91efb42d9a7847a2ea0936a838d8841d121488ab6def2a9445b25477488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a840f91efb42d9a7847a2ea0936a838d8841d121488ab6def2a9445b25477488->enter($__internal_a840f91efb42d9a7847a2ea0936a838d8841d121488ab6def2a9445b25477488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a840f91efb42d9a7847a2ea0936a838d8841d121488ab6def2a9445b25477488->leave($__internal_a840f91efb42d9a7847a2ea0936a838d8841d121488ab6def2a9445b25477488_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_beba7408d02facf142818738c2c850a98cb4fb9bbec1c01f665f83243f42ad0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beba7408d02facf142818738c2c850a98cb4fb9bbec1c01f665f83243f42ad0d->enter($__internal_beba7408d02facf142818738c2c850a98cb4fb9bbec1c01f665f83243f42ad0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_beba7408d02facf142818738c2c850a98cb4fb9bbec1c01f665f83243f42ad0d->leave($__internal_beba7408d02facf142818738c2c850a98cb4fb9bbec1c01f665f83243f42ad0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_621e99d5e7e4ca7956cbf4dab8ff6dfaf692494f3bcf4996ea552c7b9cbb5a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621e99d5e7e4ca7956cbf4dab8ff6dfaf692494f3bcf4996ea552c7b9cbb5a03->enter($__internal_621e99d5e7e4ca7956cbf4dab8ff6dfaf692494f3bcf4996ea552c7b9cbb5a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_621e99d5e7e4ca7956cbf4dab8ff6dfaf692494f3bcf4996ea552c7b9cbb5a03->leave($__internal_621e99d5e7e4ca7956cbf4dab8ff6dfaf692494f3bcf4996ea552c7b9cbb5a03_prof);

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
