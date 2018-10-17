<?php

/* ::base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_ed88a5344d83678c96945dfb31a182cca4fb302c742b85b3636c7f432092ac67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed88a5344d83678c96945dfb31a182cca4fb302c742b85b3636c7f432092ac67->enter($__internal_ed88a5344d83678c96945dfb31a182cca4fb302c742b85b3636c7f432092ac67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ed88a5344d83678c96945dfb31a182cca4fb302c742b85b3636c7f432092ac67->leave($__internal_ed88a5344d83678c96945dfb31a182cca4fb302c742b85b3636c7f432092ac67_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37473767e260f6bd074cd2cd7e25e0d90a8a8f0d7c797c0ba812990da91c0084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37473767e260f6bd074cd2cd7e25e0d90a8a8f0d7c797c0ba812990da91c0084->enter($__internal_37473767e260f6bd074cd2cd7e25e0d90a8a8f0d7c797c0ba812990da91c0084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_37473767e260f6bd074cd2cd7e25e0d90a8a8f0d7c797c0ba812990da91c0084->leave($__internal_37473767e260f6bd074cd2cd7e25e0d90a8a8f0d7c797c0ba812990da91c0084_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd36b8ab23af095e604d0bd283068086c0acb6b0c4f8f32b9329b085dd35c2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd36b8ab23af095e604d0bd283068086c0acb6b0c4f8f32b9329b085dd35c2a9->enter($__internal_cd36b8ab23af095e604d0bd283068086c0acb6b0c4f8f32b9329b085dd35c2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd36b8ab23af095e604d0bd283068086c0acb6b0c4f8f32b9329b085dd35c2a9->leave($__internal_cd36b8ab23af095e604d0bd283068086c0acb6b0c4f8f32b9329b085dd35c2a9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_121e959761571ed2b1b0c04f02f1d2f0a7a51fe25b0a00408788cbbd69793fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121e959761571ed2b1b0c04f02f1d2f0a7a51fe25b0a00408788cbbd69793fbe->enter($__internal_121e959761571ed2b1b0c04f02f1d2f0a7a51fe25b0a00408788cbbd69793fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_121e959761571ed2b1b0c04f02f1d2f0a7a51fe25b0a00408788cbbd69793fbe->leave($__internal_121e959761571ed2b1b0c04f02f1d2f0a7a51fe25b0a00408788cbbd69793fbe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87ff0a9b20f0031992916644a1696e63b2bcc0d83c441df0287dcb7e20bacdd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ff0a9b20f0031992916644a1696e63b2bcc0d83c441df0287dcb7e20bacdd6->enter($__internal_87ff0a9b20f0031992916644a1696e63b2bcc0d83c441df0287dcb7e20bacdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87ff0a9b20f0031992916644a1696e63b2bcc0d83c441df0287dcb7e20bacdd6->leave($__internal_87ff0a9b20f0031992916644a1696e63b2bcc0d83c441df0287dcb7e20bacdd6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "/home/etdfrm1/www/symfony/app/Resources/views/base.html.twig");
    }
}
