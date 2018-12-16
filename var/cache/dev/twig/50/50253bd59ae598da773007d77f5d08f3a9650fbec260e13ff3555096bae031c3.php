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
        $__internal_8abe434a20896d64d1a12b6c1bb9188a6e4f5f0066e7b3ef90da7799dd285428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abe434a20896d64d1a12b6c1bb9188a6e4f5f0066e7b3ef90da7799dd285428->enter($__internal_8abe434a20896d64d1a12b6c1bb9188a6e4f5f0066e7b3ef90da7799dd285428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8abe434a20896d64d1a12b6c1bb9188a6e4f5f0066e7b3ef90da7799dd285428->leave($__internal_8abe434a20896d64d1a12b6c1bb9188a6e4f5f0066e7b3ef90da7799dd285428_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a827f9abe45f80b3ca323f20b7d584e97a7ad245d9562866a9d5e28f3a4cb91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a827f9abe45f80b3ca323f20b7d584e97a7ad245d9562866a9d5e28f3a4cb91e->enter($__internal_a827f9abe45f80b3ca323f20b7d584e97a7ad245d9562866a9d5e28f3a4cb91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a827f9abe45f80b3ca323f20b7d584e97a7ad245d9562866a9d5e28f3a4cb91e->leave($__internal_a827f9abe45f80b3ca323f20b7d584e97a7ad245d9562866a9d5e28f3a4cb91e_prof);

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
