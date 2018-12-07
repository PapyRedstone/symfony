<?php

/* FrontOfficeBundle:User:profil.html.twig */
class __TwigTemplate_dbee6ba092517fcb5c4e34f73e35f549a719f0b4ac7101c1151a96a31dca1fda extends Twig_Template
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
        $__internal_aa039179f6da8dfda076d7e768a896536d016bf4d1ad52fc2c037e1e9c90f9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa039179f6da8dfda076d7e768a896536d016bf4d1ad52fc2c037e1e9c90f9f9->enter($__internal_aa039179f6da8dfda076d7e768a896536d016bf4d1ad52fc2c037e1e9c90f9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:profil.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "
";
        
        $__internal_aa039179f6da8dfda076d7e768a896536d016bf4d1ad52fc2c037e1e9c90f9f9->leave($__internal_aa039179f6da8dfda076d7e768a896536d016bf4d1ad52fc2c037e1e9c90f9f9_prof);

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
", "FrontOfficeBundle:User:profil.html.twig", "/home/alex/Documents/symfony/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
