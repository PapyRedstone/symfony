<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5c9a0ac364ec62e47b0e6908a27e711ba57d9347bdf43cb64b589a288db74e3d extends Twig_Template
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
        $__internal_181d699f1a3127e185a000583dafa2a9d38cdd2c44682d3fdb2de5cbc44f7859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181d699f1a3127e185a000583dafa2a9d38cdd2c44682d3fdb2de5cbc44f7859->enter($__internal_181d699f1a3127e185a000583dafa2a9d38cdd2c44682d3fdb2de5cbc44f7859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_181d699f1a3127e185a000583dafa2a9d38cdd2c44682d3fdb2de5cbc44f7859->leave($__internal_181d699f1a3127e185a000583dafa2a9d38cdd2c44682d3fdb2de5cbc44f7859_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}