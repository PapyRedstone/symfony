<?php

/* WebServiceBundle:Default:index.html.twig */
class __TwigTemplate_c6b4bc6ca7c6437b630caec76508a94625519c0f7b92e6a7eb39c039631a9f72 extends Twig_Template
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
        $__internal_dce5b4560f5066d9af07f70d315c3aebead595286e89f5fb80600bf6b9110d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce5b4560f5066d9af07f70d315c3aebead595286e89f5fb80600bf6b9110d1e->enter($__internal_dce5b4560f5066d9af07f70d315c3aebead595286e89f5fb80600bf6b9110d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebServiceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World! FROM API
";
        
        $__internal_dce5b4560f5066d9af07f70d315c3aebead595286e89f5fb80600bf6b9110d1e->leave($__internal_dce5b4560f5066d9af07f70d315c3aebead595286e89f5fb80600bf6b9110d1e_prof);

    }

    public function getTemplateName()
    {
        return "WebServiceBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World! FROM API
", "WebServiceBundle:Default:index.html.twig", "/home/alex/Documents/symfony/symfony/src/WebServiceBundle/Resources/views/Default/index.html.twig");
    }
}
