<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a68d111fbdb1fee2904654bb738c69e72e7a6e5816d47ead3ad9d85c38289456 extends Twig_Template
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
        $__internal_f368eecdcf3a18ebb0bfc44b05538c00bbd231d233053409594c83deca2dbac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f368eecdcf3a18ebb0bfc44b05538c00bbd231d233053409594c83deca2dbac8->enter($__internal_f368eecdcf3a18ebb0bfc44b05538c00bbd231d233053409594c83deca2dbac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f368eecdcf3a18ebb0bfc44b05538c00bbd231d233053409594c83deca2dbac8->leave($__internal_f368eecdcf3a18ebb0bfc44b05538c00bbd231d233053409594c83deca2dbac8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d0610234650683def93351e817d9e0b5d4347c8bbca773917b17f791d769753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d0610234650683def93351e817d9e0b5d4347c8bbca773917b17f791d769753->enter($__internal_7d0610234650683def93351e817d9e0b5d4347c8bbca773917b17f791d769753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7d0610234650683def93351e817d9e0b5d4347c8bbca773917b17f791d769753->leave($__internal_7d0610234650683def93351e817d9e0b5d4347c8bbca773917b17f791d769753_prof);

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
