<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b722fecf95834f0dfcbc31bc3b29c9c455de15b4105e717bdd98a71f4a40fea8 extends Twig_Template
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
        $__internal_4d9d88e3e3e5a11291c5287b044339783724b8721940a86b60fc5e32bf359699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9d88e3e3e5a11291c5287b044339783724b8721940a86b60fc5e32bf359699->enter($__internal_4d9d88e3e3e5a11291c5287b044339783724b8721940a86b60fc5e32bf359699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9d88e3e3e5a11291c5287b044339783724b8721940a86b60fc5e32bf359699->leave($__internal_4d9d88e3e3e5a11291c5287b044339783724b8721940a86b60fc5e32bf359699_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe65c7a91419dc5fdf3c71157a4f728df36f0603c1dbb66806bba16e68d21036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe65c7a91419dc5fdf3c71157a4f728df36f0603c1dbb66806bba16e68d21036->enter($__internal_fe65c7a91419dc5fdf3c71157a4f728df36f0603c1dbb66806bba16e68d21036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe65c7a91419dc5fdf3c71157a4f728df36f0603c1dbb66806bba16e68d21036->leave($__internal_fe65c7a91419dc5fdf3c71157a4f728df36f0603c1dbb66806bba16e68d21036_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08839d0200c40c2efd263e372c0d411eab4fe8345b39ecf834096b837634c3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08839d0200c40c2efd263e372c0d411eab4fe8345b39ecf834096b837634c3bc->enter($__internal_08839d0200c40c2efd263e372c0d411eab4fe8345b39ecf834096b837634c3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_08839d0200c40c2efd263e372c0d411eab4fe8345b39ecf834096b837634c3bc->leave($__internal_08839d0200c40c2efd263e372c0d411eab4fe8345b39ecf834096b837634c3bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c524ee2ac8e5e6b66513a86bb6b9db3b180111beb5055c8cda1e8f7a8081e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c524ee2ac8e5e6b66513a86bb6b9db3b180111beb5055c8cda1e8f7a8081e75->enter($__internal_7c524ee2ac8e5e6b66513a86bb6b9db3b180111beb5055c8cda1e8f7a8081e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7c524ee2ac8e5e6b66513a86bb6b9db3b180111beb5055c8cda1e8f7a8081e75->leave($__internal_7c524ee2ac8e5e6b66513a86bb6b9db3b180111beb5055c8cda1e8f7a8081e75_prof);

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
