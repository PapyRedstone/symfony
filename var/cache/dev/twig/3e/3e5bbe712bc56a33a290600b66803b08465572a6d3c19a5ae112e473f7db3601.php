<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5d397d226577eb5b321503a85aad5fcd58238d9a8c20fa92b217b33f79b36cfa extends Twig_Template
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
        $__internal_812f1ab7a5bd20864e01a554ef78398d3fdb43bdeb287a1bcc1664f1cfe48955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812f1ab7a5bd20864e01a554ef78398d3fdb43bdeb287a1bcc1664f1cfe48955->enter($__internal_812f1ab7a5bd20864e01a554ef78398d3fdb43bdeb287a1bcc1664f1cfe48955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_812f1ab7a5bd20864e01a554ef78398d3fdb43bdeb287a1bcc1664f1cfe48955->leave($__internal_812f1ab7a5bd20864e01a554ef78398d3fdb43bdeb287a1bcc1664f1cfe48955_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
