<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_85f4e1842eaa237a7a2631facd179aabe70cc588a3cd9d18cdeb5a5e5f31c9cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_d7c3e61e2721d0de32993944e02759439101b922f7b39c0145e9a4c874416331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c3e61e2721d0de32993944e02759439101b922f7b39c0145e9a4c874416331->enter($__internal_d7c3e61e2721d0de32993944e02759439101b922f7b39c0145e9a4c874416331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7c3e61e2721d0de32993944e02759439101b922f7b39c0145e9a4c874416331->leave($__internal_d7c3e61e2721d0de32993944e02759439101b922f7b39c0145e9a4c874416331_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90b7bb51941db18df539fe6a6f0b49a84a0929babd7fcbda5849aef1c8d88b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b7bb51941db18df539fe6a6f0b49a84a0929babd7fcbda5849aef1c8d88b43->enter($__internal_90b7bb51941db18df539fe6a6f0b49a84a0929babd7fcbda5849aef1c8d88b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90b7bb51941db18df539fe6a6f0b49a84a0929babd7fcbda5849aef1c8d88b43->leave($__internal_90b7bb51941db18df539fe6a6f0b49a84a0929babd7fcbda5849aef1c8d88b43_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b9973275d979daa553c353d3fdcee95e984385873616a77ed78e2d3d522cd405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9973275d979daa553c353d3fdcee95e984385873616a77ed78e2d3d522cd405->enter($__internal_b9973275d979daa553c353d3fdcee95e984385873616a77ed78e2d3d522cd405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b9973275d979daa553c353d3fdcee95e984385873616a77ed78e2d3d522cd405->leave($__internal_b9973275d979daa553c353d3fdcee95e984385873616a77ed78e2d3d522cd405_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd61a20565170feef956fcd41a914d2381687204df7140f3289f731b98ecdd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd61a20565170feef956fcd41a914d2381687204df7140f3289f731b98ecdd7e->enter($__internal_dd61a20565170feef956fcd41a914d2381687204df7140f3289f731b98ecdd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dd61a20565170feef956fcd41a914d2381687204df7140f3289f731b98ecdd7e->leave($__internal_dd61a20565170feef956fcd41a914d2381687204df7140f3289f731b98ecdd7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
