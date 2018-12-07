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
        $__internal_55bbcfe8916958fe9dea2aacc567f567031a8cd4bd87a106fc791336bbc9bbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bbcfe8916958fe9dea2aacc567f567031a8cd4bd87a106fc791336bbc9bbd4->enter($__internal_55bbcfe8916958fe9dea2aacc567f567031a8cd4bd87a106fc791336bbc9bbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_55bbcfe8916958fe9dea2aacc567f567031a8cd4bd87a106fc791336bbc9bbd4->leave($__internal_55bbcfe8916958fe9dea2aacc567f567031a8cd4bd87a106fc791336bbc9bbd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_320fdcac0a2f5e7547c7c6a2b0160072de3fdf9d09c9a7d476dc39199ee41aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320fdcac0a2f5e7547c7c6a2b0160072de3fdf9d09c9a7d476dc39199ee41aaf->enter($__internal_320fdcac0a2f5e7547c7c6a2b0160072de3fdf9d09c9a7d476dc39199ee41aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_320fdcac0a2f5e7547c7c6a2b0160072de3fdf9d09c9a7d476dc39199ee41aaf->leave($__internal_320fdcac0a2f5e7547c7c6a2b0160072de3fdf9d09c9a7d476dc39199ee41aaf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6418d926cb3f71683cca9a99512213e2c806fcd53a0dbd84972d66a0d1b81a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6418d926cb3f71683cca9a99512213e2c806fcd53a0dbd84972d66a0d1b81a7f->enter($__internal_6418d926cb3f71683cca9a99512213e2c806fcd53a0dbd84972d66a0d1b81a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6418d926cb3f71683cca9a99512213e2c806fcd53a0dbd84972d66a0d1b81a7f->leave($__internal_6418d926cb3f71683cca9a99512213e2c806fcd53a0dbd84972d66a0d1b81a7f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b09d1b78fd0fac3be8a8baf702437e54ffa64301c7de6187c3aeb57d6faca29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b09d1b78fd0fac3be8a8baf702437e54ffa64301c7de6187c3aeb57d6faca29->enter($__internal_8b09d1b78fd0fac3be8a8baf702437e54ffa64301c7de6187c3aeb57d6faca29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b09d1b78fd0fac3be8a8baf702437e54ffa64301c7de6187c3aeb57d6faca29->leave($__internal_8b09d1b78fd0fac3be8a8baf702437e54ffa64301c7de6187c3aeb57d6faca29_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df07ba17b2c27176e2f023d28154db510d552b75dc6b2cd02d47fe0aae9bd7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df07ba17b2c27176e2f023d28154db510d552b75dc6b2cd02d47fe0aae9bd7fa->enter($__internal_df07ba17b2c27176e2f023d28154db510d552b75dc6b2cd02d47fe0aae9bd7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df07ba17b2c27176e2f023d28154db510d552b75dc6b2cd02d47fe0aae9bd7fa->leave($__internal_df07ba17b2c27176e2f023d28154db510d552b75dc6b2cd02d47fe0aae9bd7fa_prof);

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
", "::base.html.twig", "/var/www/html/symfony/app/Resources/views/base.html.twig");
    }
}
