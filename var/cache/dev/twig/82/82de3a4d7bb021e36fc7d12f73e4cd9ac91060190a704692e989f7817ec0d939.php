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
        $__internal_841afa55529573bfebb09d4af75696abdf5d6510205a0a9630c92c09cfac425d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841afa55529573bfebb09d4af75696abdf5d6510205a0a9630c92c09cfac425d->enter($__internal_841afa55529573bfebb09d4af75696abdf5d6510205a0a9630c92c09cfac425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_841afa55529573bfebb09d4af75696abdf5d6510205a0a9630c92c09cfac425d->leave($__internal_841afa55529573bfebb09d4af75696abdf5d6510205a0a9630c92c09cfac425d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f77c17cd4c705cc54f858faf0591114722b7dd6c95b8ceb9a4ee2484c6c6006d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77c17cd4c705cc54f858faf0591114722b7dd6c95b8ceb9a4ee2484c6c6006d->enter($__internal_f77c17cd4c705cc54f858faf0591114722b7dd6c95b8ceb9a4ee2484c6c6006d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f77c17cd4c705cc54f858faf0591114722b7dd6c95b8ceb9a4ee2484c6c6006d->leave($__internal_f77c17cd4c705cc54f858faf0591114722b7dd6c95b8ceb9a4ee2484c6c6006d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85c64835b1bc2bd2647235314bb2cd612f4bbf29ef94aca3a9ddb4a0b4029acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c64835b1bc2bd2647235314bb2cd612f4bbf29ef94aca3a9ddb4a0b4029acf->enter($__internal_85c64835b1bc2bd2647235314bb2cd612f4bbf29ef94aca3a9ddb4a0b4029acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85c64835b1bc2bd2647235314bb2cd612f4bbf29ef94aca3a9ddb4a0b4029acf->leave($__internal_85c64835b1bc2bd2647235314bb2cd612f4bbf29ef94aca3a9ddb4a0b4029acf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f02be22e8d9a1ceb0910acdf3d27b9e3ae6bf8b5752bc52a460f62b3bab71224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02be22e8d9a1ceb0910acdf3d27b9e3ae6bf8b5752bc52a460f62b3bab71224->enter($__internal_f02be22e8d9a1ceb0910acdf3d27b9e3ae6bf8b5752bc52a460f62b3bab71224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f02be22e8d9a1ceb0910acdf3d27b9e3ae6bf8b5752bc52a460f62b3bab71224->leave($__internal_f02be22e8d9a1ceb0910acdf3d27b9e3ae6bf8b5752bc52a460f62b3bab71224_prof);

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
