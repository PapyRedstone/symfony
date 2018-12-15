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
        $__internal_f4bafdc5d7df550ed359ad9ba0c4be07b51243b7ea47b5e1454aa0db79692624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bafdc5d7df550ed359ad9ba0c4be07b51243b7ea47b5e1454aa0db79692624->enter($__internal_f4bafdc5d7df550ed359ad9ba0c4be07b51243b7ea47b5e1454aa0db79692624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f4bafdc5d7df550ed359ad9ba0c4be07b51243b7ea47b5e1454aa0db79692624->leave($__internal_f4bafdc5d7df550ed359ad9ba0c4be07b51243b7ea47b5e1454aa0db79692624_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ca6dfe88f48d8e13d4ae41b8d0a5d0eb9d5a639c16dbe34951a1703f139d460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca6dfe88f48d8e13d4ae41b8d0a5d0eb9d5a639c16dbe34951a1703f139d460->enter($__internal_0ca6dfe88f48d8e13d4ae41b8d0a5d0eb9d5a639c16dbe34951a1703f139d460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ca6dfe88f48d8e13d4ae41b8d0a5d0eb9d5a639c16dbe34951a1703f139d460->leave($__internal_0ca6dfe88f48d8e13d4ae41b8d0a5d0eb9d5a639c16dbe34951a1703f139d460_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3b932f88e5e93540a2c846759c93bfe4a2a099b662b995458f9fef32d7487ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b932f88e5e93540a2c846759c93bfe4a2a099b662b995458f9fef32d7487ed->enter($__internal_d3b932f88e5e93540a2c846759c93bfe4a2a099b662b995458f9fef32d7487ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3b932f88e5e93540a2c846759c93bfe4a2a099b662b995458f9fef32d7487ed->leave($__internal_d3b932f88e5e93540a2c846759c93bfe4a2a099b662b995458f9fef32d7487ed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2ce36ace0eea82b941ecac0a1b47b315e6d310ea85778036e12a471417f5bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ce36ace0eea82b941ecac0a1b47b315e6d310ea85778036e12a471417f5bf2->enter($__internal_c2ce36ace0eea82b941ecac0a1b47b315e6d310ea85778036e12a471417f5bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2ce36ace0eea82b941ecac0a1b47b315e6d310ea85778036e12a471417f5bf2->leave($__internal_c2ce36ace0eea82b941ecac0a1b47b315e6d310ea85778036e12a471417f5bf2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98effeceb1d057d13e3b235ff4902e57c341335d1a33376454db9dbb7acc99a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98effeceb1d057d13e3b235ff4902e57c341335d1a33376454db9dbb7acc99a4->enter($__internal_98effeceb1d057d13e3b235ff4902e57c341335d1a33376454db9dbb7acc99a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_98effeceb1d057d13e3b235ff4902e57c341335d1a33376454db9dbb7acc99a4->leave($__internal_98effeceb1d057d13e3b235ff4902e57c341335d1a33376454db9dbb7acc99a4_prof);

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
