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
        $__internal_fa6aaae362fe3896f51516d8fb57eada0097846f5986ccf7f28b386c3093e104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6aaae362fe3896f51516d8fb57eada0097846f5986ccf7f28b386c3093e104->enter($__internal_fa6aaae362fe3896f51516d8fb57eada0097846f5986ccf7f28b386c3093e104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_fa6aaae362fe3896f51516d8fb57eada0097846f5986ccf7f28b386c3093e104->leave($__internal_fa6aaae362fe3896f51516d8fb57eada0097846f5986ccf7f28b386c3093e104_prof);

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
