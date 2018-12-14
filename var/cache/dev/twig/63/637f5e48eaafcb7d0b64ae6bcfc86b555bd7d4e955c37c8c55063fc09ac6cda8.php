<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1f210136884aed4899e08d9ea9254aa406487a6a092c2826b1571bafa75cda91 extends Twig_Template
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
        $__internal_a1a1f4b4cf1ebbf43d0e1bb0c8dbb7ed2f94a99090f774405ac642acc324678c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a1f4b4cf1ebbf43d0e1bb0c8dbb7ed2f94a99090f774405ac642acc324678c->enter($__internal_a1a1f4b4cf1ebbf43d0e1bb0c8dbb7ed2f94a99090f774405ac642acc324678c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a1a1f4b4cf1ebbf43d0e1bb0c8dbb7ed2f94a99090f774405ac642acc324678c->leave($__internal_a1a1f4b4cf1ebbf43d0e1bb0c8dbb7ed2f94a99090f774405ac642acc324678c_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
