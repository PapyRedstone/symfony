<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_bfa0cdf522f1af4508ca35c44886bbb5c41259b7ca6d323f84a899863483a03f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a70b395e89924fa0a16eff863924386ae86bac96b9836d431bfcc18793ad9f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70b395e89924fa0a16eff863924386ae86bac96b9836d431bfcc18793ad9f02->enter($__internal_a70b395e89924fa0a16eff863924386ae86bac96b9836d431bfcc18793ad9f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World! as
";
        
        $__internal_a70b395e89924fa0a16eff863924386ae86bac96b9836d431bfcc18793ad9f02->leave($__internal_a70b395e89924fa0a16eff863924386ae86bac96b9836d431bfcc18793ad9f02_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World! as
", "FrontOfficeBundle:Default:index.html.twig", "/home/alex/Documents/symfony/symfony/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
