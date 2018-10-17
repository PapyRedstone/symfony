<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_49a4ea83cd9929f096bd921d0dd89c07a2dbacd5e100f04cceaf96110aced5f7 extends Twig_Template
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
        $__internal_06e3f4e188e8b8c3b834ac8abf85e52ab0a458c0dcae5816789656741214aeca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e3f4e188e8b8c3b834ac8abf85e52ab0a458c0dcae5816789656741214aeca->enter($__internal_06e3f4e188e8b8c3b834ac8abf85e52ab0a458c0dcae5816789656741214aeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_06e3f4e188e8b8c3b834ac8abf85e52ab0a458c0dcae5816789656741214aeca->leave($__internal_06e3f4e188e8b8c3b834ac8abf85e52ab0a458c0dcae5816789656741214aeca_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
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
", "FrontOfficeBundle:Default:index.html.twig", "/home/etdfrm1/www/symfony/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
