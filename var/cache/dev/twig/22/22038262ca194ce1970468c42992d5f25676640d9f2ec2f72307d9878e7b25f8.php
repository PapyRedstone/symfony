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
        $__internal_c148113cb1f83fed1c40d57229a817d2c168a20706237c657235ddeb5421b122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c148113cb1f83fed1c40d57229a817d2c168a20706237c657235ddeb5421b122->enter($__internal_c148113cb1f83fed1c40d57229a817d2c168a20706237c657235ddeb5421b122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c148113cb1f83fed1c40d57229a817d2c168a20706237c657235ddeb5421b122->leave($__internal_c148113cb1f83fed1c40d57229a817d2c168a20706237c657235ddeb5421b122_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a6dee3e6e6f3e3dcd56d8b30547f4df11636fd430b5d576de4f9cedb1958bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6dee3e6e6f3e3dcd56d8b30547f4df11636fd430b5d576de4f9cedb1958bc7->enter($__internal_1a6dee3e6e6f3e3dcd56d8b30547f4df11636fd430b5d576de4f9cedb1958bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1a6dee3e6e6f3e3dcd56d8b30547f4df11636fd430b5d576de4f9cedb1958bc7->leave($__internal_1a6dee3e6e6f3e3dcd56d8b30547f4df11636fd430b5d576de4f9cedb1958bc7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0583c7451d30ac951e838e4ea8243d6ae8e698e600b78d26682cbacb43ec4825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0583c7451d30ac951e838e4ea8243d6ae8e698e600b78d26682cbacb43ec4825->enter($__internal_0583c7451d30ac951e838e4ea8243d6ae8e698e600b78d26682cbacb43ec4825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0583c7451d30ac951e838e4ea8243d6ae8e698e600b78d26682cbacb43ec4825->leave($__internal_0583c7451d30ac951e838e4ea8243d6ae8e698e600b78d26682cbacb43ec4825_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19fc03623fdd4abf0ccde10becb0b961c834d6c7d18349426a3cb6489f545211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fc03623fdd4abf0ccde10becb0b961c834d6c7d18349426a3cb6489f545211->enter($__internal_19fc03623fdd4abf0ccde10becb0b961c834d6c7d18349426a3cb6489f545211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19fc03623fdd4abf0ccde10becb0b961c834d6c7d18349426a3cb6489f545211->leave($__internal_19fc03623fdd4abf0ccde10becb0b961c834d6c7d18349426a3cb6489f545211_prof);

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
