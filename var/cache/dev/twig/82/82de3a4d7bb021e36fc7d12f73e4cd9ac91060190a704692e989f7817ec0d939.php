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
        $__internal_42bd9df1c552c17b41c40f75a09165338fc132035272fcad1d596a850f346a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bd9df1c552c17b41c40f75a09165338fc132035272fcad1d596a850f346a6f->enter($__internal_42bd9df1c552c17b41c40f75a09165338fc132035272fcad1d596a850f346a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42bd9df1c552c17b41c40f75a09165338fc132035272fcad1d596a850f346a6f->leave($__internal_42bd9df1c552c17b41c40f75a09165338fc132035272fcad1d596a850f346a6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da5fad678c6e310b9e1639dc60ba8aad933ac910056b64f416c6536a3f1528b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5fad678c6e310b9e1639dc60ba8aad933ac910056b64f416c6536a3f1528b9->enter($__internal_da5fad678c6e310b9e1639dc60ba8aad933ac910056b64f416c6536a3f1528b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_da5fad678c6e310b9e1639dc60ba8aad933ac910056b64f416c6536a3f1528b9->leave($__internal_da5fad678c6e310b9e1639dc60ba8aad933ac910056b64f416c6536a3f1528b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c97bf3fc9fc5de3e61018d41a3564f4d741d3fa5cf98ff9532f8cdfa4da319f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c97bf3fc9fc5de3e61018d41a3564f4d741d3fa5cf98ff9532f8cdfa4da319f->enter($__internal_8c97bf3fc9fc5de3e61018d41a3564f4d741d3fa5cf98ff9532f8cdfa4da319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c97bf3fc9fc5de3e61018d41a3564f4d741d3fa5cf98ff9532f8cdfa4da319f->leave($__internal_8c97bf3fc9fc5de3e61018d41a3564f4d741d3fa5cf98ff9532f8cdfa4da319f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7f70ceac2220f28896f993363e14b68840ad9f1cbc7d300ab48c92f8e29df5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7f70ceac2220f28896f993363e14b68840ad9f1cbc7d300ab48c92f8e29df5d->enter($__internal_b7f70ceac2220f28896f993363e14b68840ad9f1cbc7d300ab48c92f8e29df5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b7f70ceac2220f28896f993363e14b68840ad9f1cbc7d300ab48c92f8e29df5d->leave($__internal_b7f70ceac2220f28896f993363e14b68840ad9f1cbc7d300ab48c92f8e29df5d_prof);

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
