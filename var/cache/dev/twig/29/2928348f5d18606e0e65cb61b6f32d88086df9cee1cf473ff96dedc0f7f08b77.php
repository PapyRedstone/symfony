<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2e99b5af32b3d3b3a6b3520510125d04d4e0cbc6b8b0712bc3099a84358cd998 extends Twig_Template
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
        $__internal_9df99f16528b2810def1d27501137ca1c3edf980d7f6c97bee95484cab455c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df99f16528b2810def1d27501137ca1c3edf980d7f6c97bee95484cab455c72->enter($__internal_9df99f16528b2810def1d27501137ca1c3edf980d7f6c97bee95484cab455c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_9df99f16528b2810def1d27501137ca1c3edf980d7f6c97bee95484cab455c72->leave($__internal_9df99f16528b2810def1d27501137ca1c3edf980d7f6c97bee95484cab455c72_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
