<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_682b407ecb249660b4cbff22f07ccff8092af72e11fcb0eca48264cc06cde41b extends Twig_Template
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
        $__internal_62a3e8d6c94a2a78310ac7e8daf330f17a2cd0022830e1c91c590a32df679c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a3e8d6c94a2a78310ac7e8daf330f17a2cd0022830e1c91c590a32df679c10->enter($__internal_62a3e8d6c94a2a78310ac7e8daf330f17a2cd0022830e1c91c590a32df679c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_62a3e8d6c94a2a78310ac7e8daf330f17a2cd0022830e1c91c590a32df679c10->leave($__internal_62a3e8d6c94a2a78310ac7e8daf330f17a2cd0022830e1c91c590a32df679c10_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a363f4111798be1c90ba262c1511dbcdc1a0050f976d60f5569055a087a98ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a363f4111798be1c90ba262c1511dbcdc1a0050f976d60f5569055a087a98ea5->enter($__internal_a363f4111798be1c90ba262c1511dbcdc1a0050f976d60f5569055a087a98ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a363f4111798be1c90ba262c1511dbcdc1a0050f976d60f5569055a087a98ea5->leave($__internal_a363f4111798be1c90ba262c1511dbcdc1a0050f976d60f5569055a087a98ea5_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
