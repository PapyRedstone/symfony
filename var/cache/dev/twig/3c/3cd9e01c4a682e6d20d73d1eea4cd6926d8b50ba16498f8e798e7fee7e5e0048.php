<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
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
        $__internal_3f87d090c468e8bc3ec9da750861a63d06a40ee4b73a7013b5a049a904f6644e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f87d090c468e8bc3ec9da750861a63d06a40ee4b73a7013b5a049a904f6644e->enter($__internal_3f87d090c468e8bc3ec9da750861a63d06a40ee4b73a7013b5a049a904f6644e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f87d090c468e8bc3ec9da750861a63d06a40ee4b73a7013b5a049a904f6644e->leave($__internal_3f87d090c468e8bc3ec9da750861a63d06a40ee4b73a7013b5a049a904f6644e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1bc55177e05abdbdbc0708a0a074e61a461dffe70c53d216ed1508870ad36f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bc55177e05abdbdbc0708a0a074e61a461dffe70c53d216ed1508870ad36f5->enter($__internal_b1bc55177e05abdbdbc0708a0a074e61a461dffe70c53d216ed1508870ad36f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1bc55177e05abdbdbc0708a0a074e61a461dffe70c53d216ed1508870ad36f5->leave($__internal_b1bc55177e05abdbdbc0708a0a074e61a461dffe70c53d216ed1508870ad36f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f72a8aa89d1de207b00ca252248824ddb68d7312a22747df41816575813b400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f72a8aa89d1de207b00ca252248824ddb68d7312a22747df41816575813b400->enter($__internal_2f72a8aa89d1de207b00ca252248824ddb68d7312a22747df41816575813b400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f72a8aa89d1de207b00ca252248824ddb68d7312a22747df41816575813b400->leave($__internal_2f72a8aa89d1de207b00ca252248824ddb68d7312a22747df41816575813b400_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90c3f8fa32836f2ebba5ae99ca836695138e98c497cf2040320578831ad12c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c3f8fa32836f2ebba5ae99ca836695138e98c497cf2040320578831ad12c45->enter($__internal_90c3f8fa32836f2ebba5ae99ca836695138e98c497cf2040320578831ad12c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90c3f8fa32836f2ebba5ae99ca836695138e98c497cf2040320578831ad12c45->leave($__internal_90c3f8fa32836f2ebba5ae99ca836695138e98c497cf2040320578831ad12c45_prof);

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
