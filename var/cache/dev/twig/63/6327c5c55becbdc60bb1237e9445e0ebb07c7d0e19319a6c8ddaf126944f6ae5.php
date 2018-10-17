<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3778406ef85a6637d2a2a0be9d378272396e22464ec59695638d364213c2a4f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87440ee2d3ae21521cf68579a739a062ae33e956c25968c7a21407c34d9e7c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87440ee2d3ae21521cf68579a739a062ae33e956c25968c7a21407c34d9e7c49->enter($__internal_87440ee2d3ae21521cf68579a739a062ae33e956c25968c7a21407c34d9e7c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87440ee2d3ae21521cf68579a739a062ae33e956c25968c7a21407c34d9e7c49->leave($__internal_87440ee2d3ae21521cf68579a739a062ae33e956c25968c7a21407c34d9e7c49_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e93e963432cf20d19eda8ce1cffb65473ede0f5d5da6e7c8d5cc1ae0eed06ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e93e963432cf20d19eda8ce1cffb65473ede0f5d5da6e7c8d5cc1ae0eed06ab->enter($__internal_9e93e963432cf20d19eda8ce1cffb65473ede0f5d5da6e7c8d5cc1ae0eed06ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e93e963432cf20d19eda8ce1cffb65473ede0f5d5da6e7c8d5cc1ae0eed06ab->leave($__internal_9e93e963432cf20d19eda8ce1cffb65473ede0f5d5da6e7c8d5cc1ae0eed06ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/etdfrm1/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
