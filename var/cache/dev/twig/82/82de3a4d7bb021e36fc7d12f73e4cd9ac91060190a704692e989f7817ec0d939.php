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
        $__internal_e34050b30a40355b095f52cb4f88bd278588d0291ffd9c932fccb6c8bb30cb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34050b30a40355b095f52cb4f88bd278588d0291ffd9c932fccb6c8bb30cb60->enter($__internal_e34050b30a40355b095f52cb4f88bd278588d0291ffd9c932fccb6c8bb30cb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34050b30a40355b095f52cb4f88bd278588d0291ffd9c932fccb6c8bb30cb60->leave($__internal_e34050b30a40355b095f52cb4f88bd278588d0291ffd9c932fccb6c8bb30cb60_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b8c024e27e1dc46d388e69fefc83f96feff1bc852d8abb3e3f2da627d092162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8c024e27e1dc46d388e69fefc83f96feff1bc852d8abb3e3f2da627d092162->enter($__internal_6b8c024e27e1dc46d388e69fefc83f96feff1bc852d8abb3e3f2da627d092162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6b8c024e27e1dc46d388e69fefc83f96feff1bc852d8abb3e3f2da627d092162->leave($__internal_6b8c024e27e1dc46d388e69fefc83f96feff1bc852d8abb3e3f2da627d092162_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc928eb0c217a877daef54d0cbacb43eec73d9b2b54b44890dc1a6837e3fcd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc928eb0c217a877daef54d0cbacb43eec73d9b2b54b44890dc1a6837e3fcd98->enter($__internal_cc928eb0c217a877daef54d0cbacb43eec73d9b2b54b44890dc1a6837e3fcd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc928eb0c217a877daef54d0cbacb43eec73d9b2b54b44890dc1a6837e3fcd98->leave($__internal_cc928eb0c217a877daef54d0cbacb43eec73d9b2b54b44890dc1a6837e3fcd98_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3969edb5a3ea9de3e80c81321170eab357f5ead54d80917e21cd16a7fe76b744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3969edb5a3ea9de3e80c81321170eab357f5ead54d80917e21cd16a7fe76b744->enter($__internal_3969edb5a3ea9de3e80c81321170eab357f5ead54d80917e21cd16a7fe76b744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3969edb5a3ea9de3e80c81321170eab357f5ead54d80917e21cd16a7fe76b744->leave($__internal_3969edb5a3ea9de3e80c81321170eab357f5ead54d80917e21cd16a7fe76b744_prof);

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
