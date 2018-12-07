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
        $__internal_8ddfddbc10ff368dbd4c867e5e27ca0995fcb5a493d0d90a69018ac4f910d241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddfddbc10ff368dbd4c867e5e27ca0995fcb5a493d0d90a69018ac4f910d241->enter($__internal_8ddfddbc10ff368dbd4c867e5e27ca0995fcb5a493d0d90a69018ac4f910d241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8ddfddbc10ff368dbd4c867e5e27ca0995fcb5a493d0d90a69018ac4f910d241->leave($__internal_8ddfddbc10ff368dbd4c867e5e27ca0995fcb5a493d0d90a69018ac4f910d241_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5b391a4c16a114828c4eebd1a92f4965a5bb4334e9b2c1035e4d1229ff0c0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b391a4c16a114828c4eebd1a92f4965a5bb4334e9b2c1035e4d1229ff0c0d7->enter($__internal_d5b391a4c16a114828c4eebd1a92f4965a5bb4334e9b2c1035e4d1229ff0c0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d5b391a4c16a114828c4eebd1a92f4965a5bb4334e9b2c1035e4d1229ff0c0d7->leave($__internal_d5b391a4c16a114828c4eebd1a92f4965a5bb4334e9b2c1035e4d1229ff0c0d7_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
