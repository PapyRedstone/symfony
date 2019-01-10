<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_036ba21c5c0360ab5071efe154dcb4ddd4d680cd8a383c8cd7da208309b0879b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b268eda75021359f5d3490b41be5c5c023cc2713c3beca9e2afd13f1b4c626fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b268eda75021359f5d3490b41be5c5c023cc2713c3beca9e2afd13f1b4c626fb->enter($__internal_b268eda75021359f5d3490b41be5c5c023cc2713c3beca9e2afd13f1b4c626fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b268eda75021359f5d3490b41be5c5c023cc2713c3beca9e2afd13f1b4c626fb->leave($__internal_b268eda75021359f5d3490b41be5c5c023cc2713c3beca9e2afd13f1b4c626fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d4c873337504af194ddc8998407802989c3a02733579ab0b93b9bfc3a4962aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d4c873337504af194ddc8998407802989c3a02733579ab0b93b9bfc3a4962aa->enter($__internal_0d4c873337504af194ddc8998407802989c3a02733579ab0b93b9bfc3a4962aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0d4c873337504af194ddc8998407802989c3a02733579ab0b93b9bfc3a4962aa->leave($__internal_0d4c873337504af194ddc8998407802989c3a02733579ab0b93b9bfc3a4962aa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e958ba16ed6ca4cd5710ca00480c8caaeb6cae260f2ad2f229ae16dc5109fca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e958ba16ed6ca4cd5710ca00480c8caaeb6cae260f2ad2f229ae16dc5109fca0->enter($__internal_e958ba16ed6ca4cd5710ca00480c8caaeb6cae260f2ad2f229ae16dc5109fca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e958ba16ed6ca4cd5710ca00480c8caaeb6cae260f2ad2f229ae16dc5109fca0->leave($__internal_e958ba16ed6ca4cd5710ca00480c8caaeb6cae260f2ad2f229ae16dc5109fca0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c85ff91b4700128d512b3ccd2c1864fc476d926e8e957fe79d302c7360abb5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85ff91b4700128d512b3ccd2c1864fc476d926e8e957fe79d302c7360abb5a3->enter($__internal_c85ff91b4700128d512b3ccd2c1864fc476d926e8e957fe79d302c7360abb5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c85ff91b4700128d512b3ccd2c1864fc476d926e8e957fe79d302c7360abb5a3->leave($__internal_c85ff91b4700128d512b3ccd2c1864fc476d926e8e957fe79d302c7360abb5a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
