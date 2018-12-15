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
        $__internal_14042c7d3948aa87ace363db716d06880b35b3cb1d2f2c859580ffc0d5f78269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14042c7d3948aa87ace363db716d06880b35b3cb1d2f2c859580ffc0d5f78269->enter($__internal_14042c7d3948aa87ace363db716d06880b35b3cb1d2f2c859580ffc0d5f78269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14042c7d3948aa87ace363db716d06880b35b3cb1d2f2c859580ffc0d5f78269->leave($__internal_14042c7d3948aa87ace363db716d06880b35b3cb1d2f2c859580ffc0d5f78269_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4758b211624e1ef27cfd87d9b633ef1a603062111ca01ba3c58b6ad6605fdc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4758b211624e1ef27cfd87d9b633ef1a603062111ca01ba3c58b6ad6605fdc2->enter($__internal_d4758b211624e1ef27cfd87d9b633ef1a603062111ca01ba3c58b6ad6605fdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d4758b211624e1ef27cfd87d9b633ef1a603062111ca01ba3c58b6ad6605fdc2->leave($__internal_d4758b211624e1ef27cfd87d9b633ef1a603062111ca01ba3c58b6ad6605fdc2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93e305be05e5625560d38be55914a2d3f59d9dfa43b31337486ce492a712a92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e305be05e5625560d38be55914a2d3f59d9dfa43b31337486ce492a712a92d->enter($__internal_93e305be05e5625560d38be55914a2d3f59d9dfa43b31337486ce492a712a92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_93e305be05e5625560d38be55914a2d3f59d9dfa43b31337486ce492a712a92d->leave($__internal_93e305be05e5625560d38be55914a2d3f59d9dfa43b31337486ce492a712a92d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8fdb1e378f4a006453f4ae1a14ccfbaf93e68344beb1a1699b954205777e4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fdb1e378f4a006453f4ae1a14ccfbaf93e68344beb1a1699b954205777e4a6->enter($__internal_e8fdb1e378f4a006453f4ae1a14ccfbaf93e68344beb1a1699b954205777e4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e8fdb1e378f4a006453f4ae1a14ccfbaf93e68344beb1a1699b954205777e4a6->leave($__internal_e8fdb1e378f4a006453f4ae1a14ccfbaf93e68344beb1a1699b954205777e4a6_prof);

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
