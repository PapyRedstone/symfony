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
        $__internal_dc1d668aa57c528a8d7e3693c84e44e261f47e0f5fbb7876aba9084a0636c0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1d668aa57c528a8d7e3693c84e44e261f47e0f5fbb7876aba9084a0636c0dc->enter($__internal_dc1d668aa57c528a8d7e3693c84e44e261f47e0f5fbb7876aba9084a0636c0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_dc1d668aa57c528a8d7e3693c84e44e261f47e0f5fbb7876aba9084a0636c0dc->leave($__internal_dc1d668aa57c528a8d7e3693c84e44e261f47e0f5fbb7876aba9084a0636c0dc_prof);

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
