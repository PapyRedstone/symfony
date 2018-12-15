<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_655e5bdd45d8e0748aa4bd2dc7a2093659cb972a29b17fbf3a251e3829ef448f extends Twig_Template
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
        $__internal_e74d2b0cb00482baf3a20d4495d9911111c552394ee0c7ce81bbb65d61d25389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74d2b0cb00482baf3a20d4495d9911111c552394ee0c7ce81bbb65d61d25389->enter($__internal_e74d2b0cb00482baf3a20d4495d9911111c552394ee0c7ce81bbb65d61d25389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_e74d2b0cb00482baf3a20d4495d9911111c552394ee0c7ce81bbb65d61d25389->leave($__internal_e74d2b0cb00482baf3a20d4495d9911111c552394ee0c7ce81bbb65d61d25389_prof);

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
", "FrontOfficeBundle:Default:index.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
