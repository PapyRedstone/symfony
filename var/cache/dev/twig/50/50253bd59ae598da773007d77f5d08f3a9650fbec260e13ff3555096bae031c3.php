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
        $__internal_54b8a0a60c9a9dae4f595f2079d0c3da1341cddaf7628a7b49e4a2b7318bec98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b8a0a60c9a9dae4f595f2079d0c3da1341cddaf7628a7b49e4a2b7318bec98->enter($__internal_54b8a0a60c9a9dae4f595f2079d0c3da1341cddaf7628a7b49e4a2b7318bec98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_54b8a0a60c9a9dae4f595f2079d0c3da1341cddaf7628a7b49e4a2b7318bec98->leave($__internal_54b8a0a60c9a9dae4f595f2079d0c3da1341cddaf7628a7b49e4a2b7318bec98_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1908f72983cbb278b575942701e8aa5af264676a3719de5ff1bf89b5fde839f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1908f72983cbb278b575942701e8aa5af264676a3719de5ff1bf89b5fde839f8->enter($__internal_1908f72983cbb278b575942701e8aa5af264676a3719de5ff1bf89b5fde839f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1908f72983cbb278b575942701e8aa5af264676a3719de5ff1bf89b5fde839f8->leave($__internal_1908f72983cbb278b575942701e8aa5af264676a3719de5ff1bf89b5fde839f8_prof);

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
