<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0c06d56bb5ad927f860154cae9330bce134aa21fed6034780e74f5a2d5848db1 extends Twig_Template
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
        $__internal_034db49edec2e3449e25bfb56703e9845c5de570886b8a901a5e3f34f17f7371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034db49edec2e3449e25bfb56703e9845c5de570886b8a901a5e3f34f17f7371->enter($__internal_034db49edec2e3449e25bfb56703e9845c5de570886b8a901a5e3f34f17f7371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034db49edec2e3449e25bfb56703e9845c5de570886b8a901a5e3f34f17f7371->leave($__internal_034db49edec2e3449e25bfb56703e9845c5de570886b8a901a5e3f34f17f7371_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ba6ad31bc1b09f1bb2660a455605f3a01d499145c81c44e80db224dccbe686d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba6ad31bc1b09f1bb2660a455605f3a01d499145c81c44e80db224dccbe686d->enter($__internal_4ba6ad31bc1b09f1bb2660a455605f3a01d499145c81c44e80db224dccbe686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ba6ad31bc1b09f1bb2660a455605f3a01d499145c81c44e80db224dccbe686d->leave($__internal_4ba6ad31bc1b09f1bb2660a455605f3a01d499145c81c44e80db224dccbe686d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41504781644f35be2cbad6e8ae45534561358802b779cd9a1c4bc1d112715e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41504781644f35be2cbad6e8ae45534561358802b779cd9a1c4bc1d112715e4b->enter($__internal_41504781644f35be2cbad6e8ae45534561358802b779cd9a1c4bc1d112715e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41504781644f35be2cbad6e8ae45534561358802b779cd9a1c4bc1d112715e4b->leave($__internal_41504781644f35be2cbad6e8ae45534561358802b779cd9a1c4bc1d112715e4b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f74dff8715f5952efc8d9a53f3d782b898eae215672b725e53d446e16e075842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74dff8715f5952efc8d9a53f3d782b898eae215672b725e53d446e16e075842->enter($__internal_f74dff8715f5952efc8d9a53f3d782b898eae215672b725e53d446e16e075842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f74dff8715f5952efc8d9a53f3d782b898eae215672b725e53d446e16e075842->leave($__internal_f74dff8715f5952efc8d9a53f3d782b898eae215672b725e53d446e16e075842_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
