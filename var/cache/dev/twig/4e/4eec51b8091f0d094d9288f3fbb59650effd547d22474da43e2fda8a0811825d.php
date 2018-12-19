<?php

/* WebServiceBundle:Default:index.html.twig */
class __TwigTemplate_49ab1c007741220227ac1a49f6a20c06410c7cf35072ce48a4f3b9fabc7da43c extends Twig_Template
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
        $__internal_fda92b6933a9d0a28b27d3512586198d1dfbb2c190116aeb231932fe67afc019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda92b6933a9d0a28b27d3512586198d1dfbb2c190116aeb231932fe67afc019->enter($__internal_fda92b6933a9d0a28b27d3512586198d1dfbb2c190116aeb231932fe67afc019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebServiceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World! FROM API
";
        
        $__internal_fda92b6933a9d0a28b27d3512586198d1dfbb2c190116aeb231932fe67afc019->leave($__internal_fda92b6933a9d0a28b27d3512586198d1dfbb2c190116aeb231932fe67afc019_prof);

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
", "WebServiceBundle:Default:index.html.twig", "/var/www/html/symfony/src/WebServiceBundle/Resources/views/Default/index.html.twig");
    }
}
