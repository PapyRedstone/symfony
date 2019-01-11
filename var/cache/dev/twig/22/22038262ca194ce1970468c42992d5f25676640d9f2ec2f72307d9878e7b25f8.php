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
        $__internal_4a8123170467920dcc1860ac93eb52a0a20fbc21d9862c9dc018350f6b2a148f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8123170467920dcc1860ac93eb52a0a20fbc21d9862c9dc018350f6b2a148f->enter($__internal_4a8123170467920dcc1860ac93eb52a0a20fbc21d9862c9dc018350f6b2a148f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a8123170467920dcc1860ac93eb52a0a20fbc21d9862c9dc018350f6b2a148f->leave($__internal_4a8123170467920dcc1860ac93eb52a0a20fbc21d9862c9dc018350f6b2a148f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f499f4a52d5152b436e1c7c8adb80f59fd54bdff04dc01c228039e9449886783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f499f4a52d5152b436e1c7c8adb80f59fd54bdff04dc01c228039e9449886783->enter($__internal_f499f4a52d5152b436e1c7c8adb80f59fd54bdff04dc01c228039e9449886783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f499f4a52d5152b436e1c7c8adb80f59fd54bdff04dc01c228039e9449886783->leave($__internal_f499f4a52d5152b436e1c7c8adb80f59fd54bdff04dc01c228039e9449886783_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8762fa3e34b35ece84ad5921a0b8d23c0e53ce723e2e179ece882e4b611aa39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8762fa3e34b35ece84ad5921a0b8d23c0e53ce723e2e179ece882e4b611aa39->enter($__internal_b8762fa3e34b35ece84ad5921a0b8d23c0e53ce723e2e179ece882e4b611aa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8762fa3e34b35ece84ad5921a0b8d23c0e53ce723e2e179ece882e4b611aa39->leave($__internal_b8762fa3e34b35ece84ad5921a0b8d23c0e53ce723e2e179ece882e4b611aa39_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee58a2572cfb0beb3fbee3de0bd0c02a1458e5b8c81982ee529f69e36b0bf64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee58a2572cfb0beb3fbee3de0bd0c02a1458e5b8c81982ee529f69e36b0bf64a->enter($__internal_ee58a2572cfb0beb3fbee3de0bd0c02a1458e5b8c81982ee529f69e36b0bf64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee58a2572cfb0beb3fbee3de0bd0c02a1458e5b8c81982ee529f69e36b0bf64a->leave($__internal_ee58a2572cfb0beb3fbee3de0bd0c02a1458e5b8c81982ee529f69e36b0bf64a_prof);

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
