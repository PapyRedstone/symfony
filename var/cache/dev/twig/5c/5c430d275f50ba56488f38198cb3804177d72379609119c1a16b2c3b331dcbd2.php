<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_04ecfcd29a5ed1fb6ec66a0598937a60715dcb682e2af11c5ab86e647441efc6 extends Twig_Template
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
        $__internal_92ae84640c204d41647407e40dd36d84ca91112505e7fd21842f1723aca1e4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ae84640c204d41647407e40dd36d84ca91112505e7fd21842f1723aca1e4c2->enter($__internal_92ae84640c204d41647407e40dd36d84ca91112505e7fd21842f1723aca1e4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_92ae84640c204d41647407e40dd36d84ca91112505e7fd21842f1723aca1e4c2->leave($__internal_92ae84640c204d41647407e40dd36d84ca91112505e7fd21842f1723aca1e4c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
