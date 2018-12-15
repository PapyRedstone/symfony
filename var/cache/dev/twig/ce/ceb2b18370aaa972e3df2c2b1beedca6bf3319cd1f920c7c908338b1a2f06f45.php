<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_1860ab2e49a4bce78f3015e075186c8f6fe82dd5652e47bacb317d770ab6cd93 extends Twig_Template
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
        $__internal_a45b65598c599543ce32686b78e0e1038f7158addc176b52ac33e3b6ffb19b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45b65598c599543ce32686b78e0e1038f7158addc176b52ac33e3b6ffb19b4b->enter($__internal_a45b65598c599543ce32686b78e0e1038f7158addc176b52ac33e3b6ffb19b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a45b65598c599543ce32686b78e0e1038f7158addc176b52ac33e3b6ffb19b4b->leave($__internal_a45b65598c599543ce32686b78e0e1038f7158addc176b52ac33e3b6ffb19b4b_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "BackOfficeBundle:Default:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
