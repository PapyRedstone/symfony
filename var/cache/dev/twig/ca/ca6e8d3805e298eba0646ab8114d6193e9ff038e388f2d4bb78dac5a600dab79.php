<?php

/* base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9c60b2c0da18ee34dba791c75f07b11116dde3f161ef5a1ab832af294e53d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c60b2c0da18ee34dba791c75f07b11116dde3f161ef5a1ab832af294e53d38->enter($__internal_e9c60b2c0da18ee34dba791c75f07b11116dde3f161ef5a1ab832af294e53d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e9c60b2c0da18ee34dba791c75f07b11116dde3f161ef5a1ab832af294e53d38->leave($__internal_e9c60b2c0da18ee34dba791c75f07b11116dde3f161ef5a1ab832af294e53d38_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_375de0d409c1c2777fdb5f726e326d24cc6b83aded7282977708a94d66133db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375de0d409c1c2777fdb5f726e326d24cc6b83aded7282977708a94d66133db4->enter($__internal_375de0d409c1c2777fdb5f726e326d24cc6b83aded7282977708a94d66133db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_375de0d409c1c2777fdb5f726e326d24cc6b83aded7282977708a94d66133db4->leave($__internal_375de0d409c1c2777fdb5f726e326d24cc6b83aded7282977708a94d66133db4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0887c3ce25536025eb253b2e10ec6e30b925c4f59e2fcae652f8285d6dbf62b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0887c3ce25536025eb253b2e10ec6e30b925c4f59e2fcae652f8285d6dbf62b5->enter($__internal_0887c3ce25536025eb253b2e10ec6e30b925c4f59e2fcae652f8285d6dbf62b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0887c3ce25536025eb253b2e10ec6e30b925c4f59e2fcae652f8285d6dbf62b5->leave($__internal_0887c3ce25536025eb253b2e10ec6e30b925c4f59e2fcae652f8285d6dbf62b5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e4431f43adf2aa79a4a2130d3a66e4a20e1410ccf64b40cce05485e8b1d4a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4431f43adf2aa79a4a2130d3a66e4a20e1410ccf64b40cce05485e8b1d4a65->enter($__internal_4e4431f43adf2aa79a4a2130d3a66e4a20e1410ccf64b40cce05485e8b1d4a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e4431f43adf2aa79a4a2130d3a66e4a20e1410ccf64b40cce05485e8b1d4a65->leave($__internal_4e4431f43adf2aa79a4a2130d3a66e4a20e1410ccf64b40cce05485e8b1d4a65_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f57a2f9e1860f03f38315b21ec30bc8c419baadec415f1a7168c0d0ff0337c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f57a2f9e1860f03f38315b21ec30bc8c419baadec415f1a7168c0d0ff0337c5->enter($__internal_0f57a2f9e1860f03f38315b21ec30bc8c419baadec415f1a7168c0d0ff0337c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0f57a2f9e1860f03f38315b21ec30bc8c419baadec415f1a7168c0d0ff0337c5->leave($__internal_0f57a2f9e1860f03f38315b21ec30bc8c419baadec415f1a7168c0d0ff0337c5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/base.html.twig");
    }
}
