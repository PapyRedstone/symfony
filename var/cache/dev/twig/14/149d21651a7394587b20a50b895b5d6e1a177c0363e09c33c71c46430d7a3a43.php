<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_257f8af107cd3dd8b6250e7cc86ac14b28072a6d96f75e9e1a19c0fe43429989 extends Twig_Template
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
        $__internal_ec84f1ba7d60991fc96c2e6d0c54374614f55b0778d780438c1232805596bd15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec84f1ba7d60991fc96c2e6d0c54374614f55b0778d780438c1232805596bd15->enter($__internal_ec84f1ba7d60991fc96c2e6d0c54374614f55b0778d780438c1232805596bd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec84f1ba7d60991fc96c2e6d0c54374614f55b0778d780438c1232805596bd15->leave($__internal_ec84f1ba7d60991fc96c2e6d0c54374614f55b0778d780438c1232805596bd15_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3379596f1ed1035ce7066eca814e638569b271cf4419d6bd1c232c8fb71d99bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3379596f1ed1035ce7066eca814e638569b271cf4419d6bd1c232c8fb71d99bd->enter($__internal_3379596f1ed1035ce7066eca814e638569b271cf4419d6bd1c232c8fb71d99bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3379596f1ed1035ce7066eca814e638569b271cf4419d6bd1c232c8fb71d99bd->leave($__internal_3379596f1ed1035ce7066eca814e638569b271cf4419d6bd1c232c8fb71d99bd_prof);

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
