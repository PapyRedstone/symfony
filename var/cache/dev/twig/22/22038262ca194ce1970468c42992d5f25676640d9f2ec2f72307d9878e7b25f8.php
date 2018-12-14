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
        $__internal_423a1901dbc4a708251ab1743755b85bfc39e8421ba4b044d96ef90908bea77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423a1901dbc4a708251ab1743755b85bfc39e8421ba4b044d96ef90908bea77f->enter($__internal_423a1901dbc4a708251ab1743755b85bfc39e8421ba4b044d96ef90908bea77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423a1901dbc4a708251ab1743755b85bfc39e8421ba4b044d96ef90908bea77f->leave($__internal_423a1901dbc4a708251ab1743755b85bfc39e8421ba4b044d96ef90908bea77f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cad56b7baa037ce7fc481f945aa1e7c374fda87b683fe5879f68f1e0d9259f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad56b7baa037ce7fc481f945aa1e7c374fda87b683fe5879f68f1e0d9259f87->enter($__internal_cad56b7baa037ce7fc481f945aa1e7c374fda87b683fe5879f68f1e0d9259f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cad56b7baa037ce7fc481f945aa1e7c374fda87b683fe5879f68f1e0d9259f87->leave($__internal_cad56b7baa037ce7fc481f945aa1e7c374fda87b683fe5879f68f1e0d9259f87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e80d14abd970dc924d01df4a4608d137242039840a972ab7646b905b7666f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e80d14abd970dc924d01df4a4608d137242039840a972ab7646b905b7666f56->enter($__internal_0e80d14abd970dc924d01df4a4608d137242039840a972ab7646b905b7666f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e80d14abd970dc924d01df4a4608d137242039840a972ab7646b905b7666f56->leave($__internal_0e80d14abd970dc924d01df4a4608d137242039840a972ab7646b905b7666f56_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd9ca21a6b166c1736b8acabac49c3f0cc127ce5f10fe22763fa23f31f42543e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9ca21a6b166c1736b8acabac49c3f0cc127ce5f10fe22763fa23f31f42543e->enter($__internal_bd9ca21a6b166c1736b8acabac49c3f0cc127ce5f10fe22763fa23f31f42543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bd9ca21a6b166c1736b8acabac49c3f0cc127ce5f10fe22763fa23f31f42543e->leave($__internal_bd9ca21a6b166c1736b8acabac49c3f0cc127ce5f10fe22763fa23f31f42543e_prof);

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
