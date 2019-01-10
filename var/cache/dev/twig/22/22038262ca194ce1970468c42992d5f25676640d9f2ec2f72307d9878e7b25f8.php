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
        $__internal_c573f81cc9917ef79c3ff61bf167fa1855341d623453f564a1963829707e8602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c573f81cc9917ef79c3ff61bf167fa1855341d623453f564a1963829707e8602->enter($__internal_c573f81cc9917ef79c3ff61bf167fa1855341d623453f564a1963829707e8602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c573f81cc9917ef79c3ff61bf167fa1855341d623453f564a1963829707e8602->leave($__internal_c573f81cc9917ef79c3ff61bf167fa1855341d623453f564a1963829707e8602_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_629de77f09130abc11f0d856f5b95b713ee69a151c99bd12f4dface84ae22a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629de77f09130abc11f0d856f5b95b713ee69a151c99bd12f4dface84ae22a3a->enter($__internal_629de77f09130abc11f0d856f5b95b713ee69a151c99bd12f4dface84ae22a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_629de77f09130abc11f0d856f5b95b713ee69a151c99bd12f4dface84ae22a3a->leave($__internal_629de77f09130abc11f0d856f5b95b713ee69a151c99bd12f4dface84ae22a3a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b06ec952004bcd3d56f3ba6afa9ba73f4a82a7cb7ca57620bc9a3407d25bdc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06ec952004bcd3d56f3ba6afa9ba73f4a82a7cb7ca57620bc9a3407d25bdc6d->enter($__internal_b06ec952004bcd3d56f3ba6afa9ba73f4a82a7cb7ca57620bc9a3407d25bdc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b06ec952004bcd3d56f3ba6afa9ba73f4a82a7cb7ca57620bc9a3407d25bdc6d->leave($__internal_b06ec952004bcd3d56f3ba6afa9ba73f4a82a7cb7ca57620bc9a3407d25bdc6d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab8439b02fbe1f43da9b7a90924d70e8a5a56834628dd40221872f9e3e1e3afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8439b02fbe1f43da9b7a90924d70e8a5a56834628dd40221872f9e3e1e3afe->enter($__internal_ab8439b02fbe1f43da9b7a90924d70e8a5a56834628dd40221872f9e3e1e3afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ab8439b02fbe1f43da9b7a90924d70e8a5a56834628dd40221872f9e3e1e3afe->leave($__internal_ab8439b02fbe1f43da9b7a90924d70e8a5a56834628dd40221872f9e3e1e3afe_prof);

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
