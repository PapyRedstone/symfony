<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf98befa34d6fd83c86761236c260b9a9d3e7c2c68dd45d3cce13b4178408a30 extends Twig_Template
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
        $__internal_f8ba7e37a79a7900d45ef4aee7ab43c05870f835073f5f418eaace5851a7a1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ba7e37a79a7900d45ef4aee7ab43c05870f835073f5f418eaace5851a7a1fc->enter($__internal_f8ba7e37a79a7900d45ef4aee7ab43c05870f835073f5f418eaace5851a7a1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f8ba7e37a79a7900d45ef4aee7ab43c05870f835073f5f418eaace5851a7a1fc->leave($__internal_f8ba7e37a79a7900d45ef4aee7ab43c05870f835073f5f418eaace5851a7a1fc_prof);

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
