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
        $__internal_4fdc1fe9acce4f3c72fa0408904ea4c11d1a98d5c27aa1103999b0308854e4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdc1fe9acce4f3c72fa0408904ea4c11d1a98d5c27aa1103999b0308854e4a0->enter($__internal_4fdc1fe9acce4f3c72fa0408904ea4c11d1a98d5c27aa1103999b0308854e4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_4fdc1fe9acce4f3c72fa0408904ea4c11d1a98d5c27aa1103999b0308854e4a0->leave($__internal_4fdc1fe9acce4f3c72fa0408904ea4c11d1a98d5c27aa1103999b0308854e4a0_prof);

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
