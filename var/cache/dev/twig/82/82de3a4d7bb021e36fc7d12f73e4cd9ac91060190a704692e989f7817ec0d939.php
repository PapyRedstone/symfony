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
        $__internal_f3e4b51f683606d46c50f8160116cde98ca85166b5198426b34d64e6184123bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e4b51f683606d46c50f8160116cde98ca85166b5198426b34d64e6184123bf->enter($__internal_f3e4b51f683606d46c50f8160116cde98ca85166b5198426b34d64e6184123bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3e4b51f683606d46c50f8160116cde98ca85166b5198426b34d64e6184123bf->leave($__internal_f3e4b51f683606d46c50f8160116cde98ca85166b5198426b34d64e6184123bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0d2dd5e8f885f2b791857a37479cee64413d2c54c1c70b6ec60fdd1f63708273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2dd5e8f885f2b791857a37479cee64413d2c54c1c70b6ec60fdd1f63708273->enter($__internal_0d2dd5e8f885f2b791857a37479cee64413d2c54c1c70b6ec60fdd1f63708273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0d2dd5e8f885f2b791857a37479cee64413d2c54c1c70b6ec60fdd1f63708273->leave($__internal_0d2dd5e8f885f2b791857a37479cee64413d2c54c1c70b6ec60fdd1f63708273_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43947fc316c201e0368513adca3013de42c8d99652392219def0022927c4df3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43947fc316c201e0368513adca3013de42c8d99652392219def0022927c4df3f->enter($__internal_43947fc316c201e0368513adca3013de42c8d99652392219def0022927c4df3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_43947fc316c201e0368513adca3013de42c8d99652392219def0022927c4df3f->leave($__internal_43947fc316c201e0368513adca3013de42c8d99652392219def0022927c4df3f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23c1a8e4b11113cdd3578a7d0a7f74623e6d1e72809150017111f10558615f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23c1a8e4b11113cdd3578a7d0a7f74623e6d1e72809150017111f10558615f4->enter($__internal_b23c1a8e4b11113cdd3578a7d0a7f74623e6d1e72809150017111f10558615f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b23c1a8e4b11113cdd3578a7d0a7f74623e6d1e72809150017111f10558615f4->leave($__internal_b23c1a8e4b11113cdd3578a7d0a7f74623e6d1e72809150017111f10558615f4_prof);

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
