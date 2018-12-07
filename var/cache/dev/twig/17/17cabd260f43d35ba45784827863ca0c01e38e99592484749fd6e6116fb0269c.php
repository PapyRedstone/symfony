<?php

/* FrontOfficeBundle:User:profil.html.twig */
class __TwigTemplate_a70805872af7376537426e38c5925819fb91a0e7bc4656c680f278fa17b495a1 extends Twig_Template
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
        $__internal_ebe1075309f7f0a1638e2c622d055a4fb24cd1405aacc31056241e6ba123f663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe1075309f7f0a1638e2c622d055a4fb24cd1405aacc31056241e6ba123f663->enter($__internal_ebe1075309f7f0a1638e2c622d055a4fb24cd1405aacc31056241e6ba123f663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:profil.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_ebe1075309f7f0a1638e2c622d055a4fb24cd1405aacc31056241e6ba123f663->leave($__internal_ebe1075309f7f0a1638e2c622d055a4fb24cd1405aacc31056241e6ba123f663_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:profil.html.twig";
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
        return new Twig_Source("{{id}}
", "FrontOfficeBundle:User:profil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
