<?php

/* WebServiceBundle:Default:index.html.twig */
class __TwigTemplate_4fd216aba9cfc3554e07313041c5f8dfbf1e2bba1c7293d770f24c02d8790ed1 extends Twig_Template
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
        $__internal_4f18ed2d90cc787c6489a8f8c982d6351eaf41c3b3213048be2877ce7c9a3f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f18ed2d90cc787c6489a8f8c982d6351eaf41c3b3213048be2877ce7c9a3f47->enter($__internal_4f18ed2d90cc787c6489a8f8c982d6351eaf41c3b3213048be2877ce7c9a3f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebServiceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_4f18ed2d90cc787c6489a8f8c982d6351eaf41c3b3213048be2877ce7c9a3f47->leave($__internal_4f18ed2d90cc787c6489a8f8c982d6351eaf41c3b3213048be2877ce7c9a3f47_prof);

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
        return new Twig_Source("Hello World!
", "WebServiceBundle:Default:index.html.twig", "/home/alex/Documents/symfony/symfony/src/WebServiceBundle/Resources/views/Default/index.html.twig");
    }
}
