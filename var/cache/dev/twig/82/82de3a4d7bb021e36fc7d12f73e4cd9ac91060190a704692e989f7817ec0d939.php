<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a36317c0576be5d305eb4569f1521eea3ad153744af7174557154d2e09e46743 extends Twig_Template
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
        $__internal_6ecbaf1fc6db935c3b20fc97ca51b1e690a800c24db9783b524a3f335fd2c769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecbaf1fc6db935c3b20fc97ca51b1e690a800c24db9783b524a3f335fd2c769->enter($__internal_6ecbaf1fc6db935c3b20fc97ca51b1e690a800c24db9783b524a3f335fd2c769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ecbaf1fc6db935c3b20fc97ca51b1e690a800c24db9783b524a3f335fd2c769->leave($__internal_6ecbaf1fc6db935c3b20fc97ca51b1e690a800c24db9783b524a3f335fd2c769_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e21a4e409a5da85aa70829d3ea428d589b346049b015ac2692a3b2e28bd8ad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21a4e409a5da85aa70829d3ea428d589b346049b015ac2692a3b2e28bd8ad7f->enter($__internal_e21a4e409a5da85aa70829d3ea428d589b346049b015ac2692a3b2e28bd8ad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e21a4e409a5da85aa70829d3ea428d589b346049b015ac2692a3b2e28bd8ad7f->leave($__internal_e21a4e409a5da85aa70829d3ea428d589b346049b015ac2692a3b2e28bd8ad7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e84c5e1ce011771a5683357da95d5a97b22c138883147aaa6c69a1c6a0f2c152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84c5e1ce011771a5683357da95d5a97b22c138883147aaa6c69a1c6a0f2c152->enter($__internal_e84c5e1ce011771a5683357da95d5a97b22c138883147aaa6c69a1c6a0f2c152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e84c5e1ce011771a5683357da95d5a97b22c138883147aaa6c69a1c6a0f2c152->leave($__internal_e84c5e1ce011771a5683357da95d5a97b22c138883147aaa6c69a1c6a0f2c152_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_06577d6b0bb0aaf2f00b64f446eb15430ead13cff6854c89e2cb3fdd1aacb4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06577d6b0bb0aaf2f00b64f446eb15430ead13cff6854c89e2cb3fdd1aacb4f8->enter($__internal_06577d6b0bb0aaf2f00b64f446eb15430ead13cff6854c89e2cb3fdd1aacb4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_06577d6b0bb0aaf2f00b64f446eb15430ead13cff6854c89e2cb3fdd1aacb4f8->leave($__internal_06577d6b0bb0aaf2f00b64f446eb15430ead13cff6854c89e2cb3fdd1aacb4f8_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
