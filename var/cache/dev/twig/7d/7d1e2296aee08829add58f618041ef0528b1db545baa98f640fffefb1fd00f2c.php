<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f232cd106f7e0a877780cc17dc358208350060e7244f2bf8686360e5b2fe22db extends Twig_Template
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
        $__internal_515653ac2cb30ae3f9ea91763e242699af8174d2e141e3c312fbf9bb00cce15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_515653ac2cb30ae3f9ea91763e242699af8174d2e141e3c312fbf9bb00cce15f->enter($__internal_515653ac2cb30ae3f9ea91763e242699af8174d2e141e3c312fbf9bb00cce15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_515653ac2cb30ae3f9ea91763e242699af8174d2e141e3c312fbf9bb00cce15f->leave($__internal_515653ac2cb30ae3f9ea91763e242699af8174d2e141e3c312fbf9bb00cce15f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90dda19407722b07a11b80724a9c2682e89884f93629f4a3040e78d784c89f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90dda19407722b07a11b80724a9c2682e89884f93629f4a3040e78d784c89f66->enter($__internal_90dda19407722b07a11b80724a9c2682e89884f93629f4a3040e78d784c89f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_90dda19407722b07a11b80724a9c2682e89884f93629f4a3040e78d784c89f66->leave($__internal_90dda19407722b07a11b80724a9c2682e89884f93629f4a3040e78d784c89f66_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_16719b04bd45dc6951ff1b6ad9540bdf3d1d6b156ddaa8245dc37f6ab17cdcc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16719b04bd45dc6951ff1b6ad9540bdf3d1d6b156ddaa8245dc37f6ab17cdcc0->enter($__internal_16719b04bd45dc6951ff1b6ad9540bdf3d1d6b156ddaa8245dc37f6ab17cdcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_16719b04bd45dc6951ff1b6ad9540bdf3d1d6b156ddaa8245dc37f6ab17cdcc0->leave($__internal_16719b04bd45dc6951ff1b6ad9540bdf3d1d6b156ddaa8245dc37f6ab17cdcc0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba7c182c746b1e0af0f64e0da8f4da2903294996f9c63b8eac928b92381cc0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7c182c746b1e0af0f64e0da8f4da2903294996f9c63b8eac928b92381cc0dd->enter($__internal_ba7c182c746b1e0af0f64e0da8f4da2903294996f9c63b8eac928b92381cc0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ba7c182c746b1e0af0f64e0da8f4da2903294996f9c63b8eac928b92381cc0dd->leave($__internal_ba7c182c746b1e0af0f64e0da8f4da2903294996f9c63b8eac928b92381cc0dd_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
