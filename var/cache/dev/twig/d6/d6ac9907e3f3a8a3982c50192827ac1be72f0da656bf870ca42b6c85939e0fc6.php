<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_73bf0d9798725a946cd60ebd6dd05a648552825031ce88a55fb6107c29ebd37f extends Twig_Template
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
        $__internal_413e28a2fca0fc2329ffa684ccd30d69e7f97847bc275d72f6c3e51780b7c7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413e28a2fca0fc2329ffa684ccd30d69e7f97847bc275d72f6c3e51780b7c7ef->enter($__internal_413e28a2fca0fc2329ffa684ccd30d69e7f97847bc275d72f6c3e51780b7c7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_413e28a2fca0fc2329ffa684ccd30d69e7f97847bc275d72f6c3e51780b7c7ef->leave($__internal_413e28a2fca0fc2329ffa684ccd30d69e7f97847bc275d72f6c3e51780b7c7ef_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
