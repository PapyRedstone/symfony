<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8e41228b15f55a01040d3a787479e9e90d35eda2e2bf5d24b1bd2282e91e01d0 extends Twig_Template
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
        $__internal_de90b9ad45b1c7adbce5a9ce0795821e0a0893c8464e2db64fca9e0273ee25e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de90b9ad45b1c7adbce5a9ce0795821e0a0893c8464e2db64fca9e0273ee25e6->enter($__internal_de90b9ad45b1c7adbce5a9ce0795821e0a0893c8464e2db64fca9e0273ee25e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_de90b9ad45b1c7adbce5a9ce0795821e0a0893c8464e2db64fca9e0273ee25e6->leave($__internal_de90b9ad45b1c7adbce5a9ce0795821e0a0893c8464e2db64fca9e0273ee25e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
