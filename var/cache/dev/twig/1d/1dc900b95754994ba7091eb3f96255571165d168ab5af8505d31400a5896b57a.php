<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e1306f60cb0e0f8e3506486c7ca69e24a1315d63966ec6032fc5ba29bf1b007a extends Twig_Template
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
        $__internal_ecca0d206eeef97cdbfd87c3f64736bf3278f7d4cab5128c51416fcf98f86698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecca0d206eeef97cdbfd87c3f64736bf3278f7d4cab5128c51416fcf98f86698->enter($__internal_ecca0d206eeef97cdbfd87c3f64736bf3278f7d4cab5128c51416fcf98f86698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ecca0d206eeef97cdbfd87c3f64736bf3278f7d4cab5128c51416fcf98f86698->leave($__internal_ecca0d206eeef97cdbfd87c3f64736bf3278f7d4cab5128c51416fcf98f86698_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
