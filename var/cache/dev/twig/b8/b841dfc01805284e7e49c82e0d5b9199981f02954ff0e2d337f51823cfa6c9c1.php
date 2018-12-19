<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1a49b08a743798c8cc0ee7ac94780aa9375a86aaa65bacae5a2819396b32c668 extends Twig_Template
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
        $__internal_fb64f582906de4dd72529d132c61c7c14a7cde9db06d24494d1c2f50deabb288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb64f582906de4dd72529d132c61c7c14a7cde9db06d24494d1c2f50deabb288->enter($__internal_fb64f582906de4dd72529d132c61c7c14a7cde9db06d24494d1c2f50deabb288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fb64f582906de4dd72529d132c61c7c14a7cde9db06d24494d1c2f50deabb288->leave($__internal_fb64f582906de4dd72529d132c61c7c14a7cde9db06d24494d1c2f50deabb288_prof);

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
