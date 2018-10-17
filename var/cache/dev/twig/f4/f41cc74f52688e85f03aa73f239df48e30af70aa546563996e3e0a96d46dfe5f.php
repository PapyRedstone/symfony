<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f5a4e4e47a61dbc596b8a5cf6c4251cf9809cbaa7fe0192c935bf3aa4bd7f2e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b936a23062dc114e8502a54bb4844099f89d96076c698f788eb0754f4385ad85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b936a23062dc114e8502a54bb4844099f89d96076c698f788eb0754f4385ad85->enter($__internal_b936a23062dc114e8502a54bb4844099f89d96076c698f788eb0754f4385ad85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b936a23062dc114e8502a54bb4844099f89d96076c698f788eb0754f4385ad85->leave($__internal_b936a23062dc114e8502a54bb4844099f89d96076c698f788eb0754f4385ad85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e891962f32f4982ee507a2fb27ac800b22aa320311e981d07f0b7cf0141ad089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e891962f32f4982ee507a2fb27ac800b22aa320311e981d07f0b7cf0141ad089->enter($__internal_e891962f32f4982ee507a2fb27ac800b22aa320311e981d07f0b7cf0141ad089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e891962f32f4982ee507a2fb27ac800b22aa320311e981d07f0b7cf0141ad089->leave($__internal_e891962f32f4982ee507a2fb27ac800b22aa320311e981d07f0b7cf0141ad089_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7428276271c02a3d0e05b829e5cdb1ecc3e4ea979f7e6d1b238e1f40e540769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7428276271c02a3d0e05b829e5cdb1ecc3e4ea979f7e6d1b238e1f40e540769->enter($__internal_b7428276271c02a3d0e05b829e5cdb1ecc3e4ea979f7e6d1b238e1f40e540769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b7428276271c02a3d0e05b829e5cdb1ecc3e4ea979f7e6d1b238e1f40e540769->leave($__internal_b7428276271c02a3d0e05b829e5cdb1ecc3e4ea979f7e6d1b238e1f40e540769_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ba9b4cac10aef10e5a825eec78410e63afafe21722a8bb89cb6cad84623d1d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba9b4cac10aef10e5a825eec78410e63afafe21722a8bb89cb6cad84623d1d8->enter($__internal_0ba9b4cac10aef10e5a825eec78410e63afafe21722a8bb89cb6cad84623d1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0ba9b4cac10aef10e5a825eec78410e63afafe21722a8bb89cb6cad84623d1d8->leave($__internal_0ba9b4cac10aef10e5a825eec78410e63afafe21722a8bb89cb6cad84623d1d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/etdfrm1/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
