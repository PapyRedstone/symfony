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
        $__internal_b5abc01dd196c2b79a478d38ec78bdc74915b83fb873b56605abf3e41016d9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5abc01dd196c2b79a478d38ec78bdc74915b83fb873b56605abf3e41016d9d2->enter($__internal_b5abc01dd196c2b79a478d38ec78bdc74915b83fb873b56605abf3e41016d9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebServiceBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World! FROM API
";
        
        $__internal_b5abc01dd196c2b79a478d38ec78bdc74915b83fb873b56605abf3e41016d9d2->leave($__internal_b5abc01dd196c2b79a478d38ec78bdc74915b83fb873b56605abf3e41016d9d2_prof);

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
