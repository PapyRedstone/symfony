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
        $__internal_d61d57579f46275bc8897bcc119cd1f4d695314b9c5154fa89abaded2c297414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61d57579f46275bc8897bcc119cd1f4d695314b9c5154fa89abaded2c297414->enter($__internal_d61d57579f46275bc8897bcc119cd1f4d695314b9c5154fa89abaded2c297414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d61d57579f46275bc8897bcc119cd1f4d695314b9c5154fa89abaded2c297414->leave($__internal_d61d57579f46275bc8897bcc119cd1f4d695314b9c5154fa89abaded2c297414_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8da8ab4b46b884fa46ee07fc4c895af5c581f1dd782731296a305cb9b63fbbe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8da8ab4b46b884fa46ee07fc4c895af5c581f1dd782731296a305cb9b63fbbe5->enter($__internal_8da8ab4b46b884fa46ee07fc4c895af5c581f1dd782731296a305cb9b63fbbe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8da8ab4b46b884fa46ee07fc4c895af5c581f1dd782731296a305cb9b63fbbe5->leave($__internal_8da8ab4b46b884fa46ee07fc4c895af5c581f1dd782731296a305cb9b63fbbe5_prof);

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
