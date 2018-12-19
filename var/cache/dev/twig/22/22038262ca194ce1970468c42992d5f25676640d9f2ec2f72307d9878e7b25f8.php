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
        $__internal_55ac47475a94d679aca8af026f82ca82354f2ecb0c17bb87872162906459351d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ac47475a94d679aca8af026f82ca82354f2ecb0c17bb87872162906459351d->enter($__internal_55ac47475a94d679aca8af026f82ca82354f2ecb0c17bb87872162906459351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ac47475a94d679aca8af026f82ca82354f2ecb0c17bb87872162906459351d->leave($__internal_55ac47475a94d679aca8af026f82ca82354f2ecb0c17bb87872162906459351d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7999351c1f399f804e1d82e362d4608196029b7674ab14c3a549a699d4512a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7999351c1f399f804e1d82e362d4608196029b7674ab14c3a549a699d4512a44->enter($__internal_7999351c1f399f804e1d82e362d4608196029b7674ab14c3a549a699d4512a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7999351c1f399f804e1d82e362d4608196029b7674ab14c3a549a699d4512a44->leave($__internal_7999351c1f399f804e1d82e362d4608196029b7674ab14c3a549a699d4512a44_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ee69b2863e01c992a401f0817e820f99942bdf584b3a12f6a5d6c4947e795ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee69b2863e01c992a401f0817e820f99942bdf584b3a12f6a5d6c4947e795ab->enter($__internal_7ee69b2863e01c992a401f0817e820f99942bdf584b3a12f6a5d6c4947e795ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ee69b2863e01c992a401f0817e820f99942bdf584b3a12f6a5d6c4947e795ab->leave($__internal_7ee69b2863e01c992a401f0817e820f99942bdf584b3a12f6a5d6c4947e795ab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4334643029e0b28b9705fb2df6cebb6d7c8f24285625fe72b969c857d02a8eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4334643029e0b28b9705fb2df6cebb6d7c8f24285625fe72b969c857d02a8eec->enter($__internal_4334643029e0b28b9705fb2df6cebb6d7c8f24285625fe72b969c857d02a8eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4334643029e0b28b9705fb2df6cebb6d7c8f24285625fe72b969c857d02a8eec->leave($__internal_4334643029e0b28b9705fb2df6cebb6d7c8f24285625fe72b969c857d02a8eec_prof);

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
