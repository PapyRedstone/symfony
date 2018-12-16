<?php

/* BackOfficeBundle:Default:index.html.twig */
class __TwigTemplate_e591eb60fac8f6aac70ccd36b5a8eaaf5984fdd4a89c11e894f88108582ce470 extends Twig_Template
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
        $__internal_0006e05abd77bd188cb45a479c23a4fdf7c72f0eab27c150b82d67595eac998f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0006e05abd77bd188cb45a479c23a4fdf7c72f0eab27c150b82d67595eac998f->enter($__internal_0006e05abd77bd188cb45a479c23a4fdf7c72f0eab27c150b82d67595eac998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World! 52
";
        
        $__internal_0006e05abd77bd188cb45a479c23a4fdf7c72f0eab27c150b82d67595eac998f->leave($__internal_0006e05abd77bd188cb45a479c23a4fdf7c72f0eab27c150b82d67595eac998f_prof);

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
        return new Twig_Source("Hello World! 52
", "BackOfficeBundle:Default:index.html.twig", "/home/alex/Documents/symfony/symfony/src/BackOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
