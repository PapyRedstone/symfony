<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d9ffae65641b2646830901a5f86c06bf780d0129aa15524b0693f8abf9d9bfc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_12ec325059e28effe5793bcd44d0cd2cabcb8d6a149ae17b0f099ea4d67e0c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ec325059e28effe5793bcd44d0cd2cabcb8d6a149ae17b0f099ea4d67e0c1e->enter($__internal_12ec325059e28effe5793bcd44d0cd2cabcb8d6a149ae17b0f099ea4d67e0c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ec325059e28effe5793bcd44d0cd2cabcb8d6a149ae17b0f099ea4d67e0c1e->leave($__internal_12ec325059e28effe5793bcd44d0cd2cabcb8d6a149ae17b0f099ea4d67e0c1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb17c8c54e3fec854532622b0eeca123cffa42d630d8f8e1b47d1efd17c7bb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb17c8c54e3fec854532622b0eeca123cffa42d630d8f8e1b47d1efd17c7bb96->enter($__internal_bb17c8c54e3fec854532622b0eeca123cffa42d630d8f8e1b47d1efd17c7bb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bb17c8c54e3fec854532622b0eeca123cffa42d630d8f8e1b47d1efd17c7bb96->leave($__internal_bb17c8c54e3fec854532622b0eeca123cffa42d630d8f8e1b47d1efd17c7bb96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_79dc256cfb8eaaf9307acfb0361a37a5505e9023a77b0c45f648a838b7a9beb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dc256cfb8eaaf9307acfb0361a37a5505e9023a77b0c45f648a838b7a9beb9->enter($__internal_79dc256cfb8eaaf9307acfb0361a37a5505e9023a77b0c45f648a838b7a9beb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_79dc256cfb8eaaf9307acfb0361a37a5505e9023a77b0c45f648a838b7a9beb9->leave($__internal_79dc256cfb8eaaf9307acfb0361a37a5505e9023a77b0c45f648a838b7a9beb9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/etdfrm1/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
