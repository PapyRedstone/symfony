<?php

/* FrontOfficeBundle:Default:index.html.twig */
class __TwigTemplate_655e5bdd45d8e0748aa4bd2dc7a2093659cb972a29b17fbf3a251e3829ef448f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdf795a57d43b6af6496e8ac3214e19d4c352522008da387a6f5c2a32cf3e2ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf795a57d43b6af6496e8ac3214e19d4c352522008da387a6f5c2a32cf3e2ac->enter($__internal_cdf795a57d43b6af6496e8ac3214e19d4c352522008da387a6f5c2a32cf3e2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf795a57d43b6af6496e8ac3214e19d4c352522008da387a6f5c2a32cf3e2ac->leave($__internal_cdf795a57d43b6af6496e8ac3214e19d4c352522008da387a6f5c2a32cf3e2ac_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontOfficeBundle::base.html.twig\" %}
", "FrontOfficeBundle:Default:index.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/Default/index.html.twig");
    }
}
