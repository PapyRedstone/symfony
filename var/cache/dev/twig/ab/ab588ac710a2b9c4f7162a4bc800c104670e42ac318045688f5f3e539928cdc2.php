<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eafcbdeefd905f8110ae7893e793eec82c3e00d2c70f441e7e14729e66647293 extends Twig_Template
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
        $__internal_d8e78d56c6a689a2f279d244124032f1104476c01807cbb6c40078aa4ea50552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e78d56c6a689a2f279d244124032f1104476c01807cbb6c40078aa4ea50552->enter($__internal_d8e78d56c6a689a2f279d244124032f1104476c01807cbb6c40078aa4ea50552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8e78d56c6a689a2f279d244124032f1104476c01807cbb6c40078aa4ea50552->leave($__internal_d8e78d56c6a689a2f279d244124032f1104476c01807cbb6c40078aa4ea50552_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db8fc2dde40879783be0701194040f61630720b728ad64590328a9bec71e9445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8fc2dde40879783be0701194040f61630720b728ad64590328a9bec71e9445->enter($__internal_db8fc2dde40879783be0701194040f61630720b728ad64590328a9bec71e9445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_db8fc2dde40879783be0701194040f61630720b728ad64590328a9bec71e9445->leave($__internal_db8fc2dde40879783be0701194040f61630720b728ad64590328a9bec71e9445_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2f335e6fa997e8c6d02463412f90edc6d0e6308953206d55eba2d10f4fbc791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f335e6fa997e8c6d02463412f90edc6d0e6308953206d55eba2d10f4fbc791->enter($__internal_e2f335e6fa997e8c6d02463412f90edc6d0e6308953206d55eba2d10f4fbc791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e2f335e6fa997e8c6d02463412f90edc6d0e6308953206d55eba2d10f4fbc791->leave($__internal_e2f335e6fa997e8c6d02463412f90edc6d0e6308953206d55eba2d10f4fbc791_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
