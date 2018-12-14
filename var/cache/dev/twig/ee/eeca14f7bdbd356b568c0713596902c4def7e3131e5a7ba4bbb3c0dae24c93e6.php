<?php

/* ::base.html.twig */
class __TwigTemplate_d301063d802787e943c2b927ce92ac3be584975b3c2c904d6c4fdb722262f711 extends Twig_Template
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
        $__internal_2ee94e1e6aa7624ffd240e12ef5296cc5e21e741a037839721054c2455de03d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee94e1e6aa7624ffd240e12ef5296cc5e21e741a037839721054c2455de03d0->enter($__internal_2ee94e1e6aa7624ffd240e12ef5296cc5e21e741a037839721054c2455de03d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2ee94e1e6aa7624ffd240e12ef5296cc5e21e741a037839721054c2455de03d0->leave($__internal_2ee94e1e6aa7624ffd240e12ef5296cc5e21e741a037839721054c2455de03d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c39d3dc01a4f75909a7ec870f04544a9cf0de335ebebeec550ec417a7fa9051b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39d3dc01a4f75909a7ec870f04544a9cf0de335ebebeec550ec417a7fa9051b->enter($__internal_c39d3dc01a4f75909a7ec870f04544a9cf0de335ebebeec550ec417a7fa9051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c39d3dc01a4f75909a7ec870f04544a9cf0de335ebebeec550ec417a7fa9051b->leave($__internal_c39d3dc01a4f75909a7ec870f04544a9cf0de335ebebeec550ec417a7fa9051b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e601c93d8d7f8c45ec0212b02e3889cbee9d200b4084d6fa0f2e5c611bad22e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e601c93d8d7f8c45ec0212b02e3889cbee9d200b4084d6fa0f2e5c611bad22e2->enter($__internal_e601c93d8d7f8c45ec0212b02e3889cbee9d200b4084d6fa0f2e5c611bad22e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e601c93d8d7f8c45ec0212b02e3889cbee9d200b4084d6fa0f2e5c611bad22e2->leave($__internal_e601c93d8d7f8c45ec0212b02e3889cbee9d200b4084d6fa0f2e5c611bad22e2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ba69feb0c30e8e649bf694a71c73de8c650250d25fc157b5fa6b31e0f60cd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba69feb0c30e8e649bf694a71c73de8c650250d25fc157b5fa6b31e0f60cd49->enter($__internal_7ba69feb0c30e8e649bf694a71c73de8c650250d25fc157b5fa6b31e0f60cd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ba69feb0c30e8e649bf694a71c73de8c650250d25fc157b5fa6b31e0f60cd49->leave($__internal_7ba69feb0c30e8e649bf694a71c73de8c650250d25fc157b5fa6b31e0f60cd49_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2681f36220ddd2eafedef81de2ea5946a0790c39c3bb7e1ee50d28ac5ccfe494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2681f36220ddd2eafedef81de2ea5946a0790c39c3bb7e1ee50d28ac5ccfe494->enter($__internal_2681f36220ddd2eafedef81de2ea5946a0790c39c3bb7e1ee50d28ac5ccfe494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2681f36220ddd2eafedef81de2ea5946a0790c39c3bb7e1ee50d28ac5ccfe494->leave($__internal_2681f36220ddd2eafedef81de2ea5946a0790c39c3bb7e1ee50d28ac5ccfe494_prof);

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
