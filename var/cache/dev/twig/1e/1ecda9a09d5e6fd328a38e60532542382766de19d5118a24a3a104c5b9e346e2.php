<?php

/* base.html.twig */
class __TwigTemplate_6ff320d80c8165428a9343a3088f936e03bd2c21be9710d945bbd84bd9a3e521 extends Twig_Template
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
        $__internal_68e39ed5ea14749b229135704ded557668b50bef39d17f3506f398290deedbb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e39ed5ea14749b229135704ded557668b50bef39d17f3506f398290deedbb7->enter($__internal_68e39ed5ea14749b229135704ded557668b50bef39d17f3506f398290deedbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/style.css"), "html", null, true);
        echo "\" />
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
  <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

</head>
<body>
    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "</body>
  </html>
";
        
        $__internal_68e39ed5ea14749b229135704ded557668b50bef39d17f3506f398290deedbb7->leave($__internal_68e39ed5ea14749b229135704ded557668b50bef39d17f3506f398290deedbb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_040e5cfe4757ad440798ae9a25c0b8b9014fa461383f498d2754d1727e7b77e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040e5cfe4757ad440798ae9a25c0b8b9014fa461383f498d2754d1727e7b77e5->enter($__internal_040e5cfe4757ad440798ae9a25c0b8b9014fa461383f498d2754d1727e7b77e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_040e5cfe4757ad440798ae9a25c0b8b9014fa461383f498d2754d1727e7b77e5->leave($__internal_040e5cfe4757ad440798ae9a25c0b8b9014fa461383f498d2754d1727e7b77e5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc4ee2efaf6b9ad19a20d776edc2dad060d6ce4278893e3013e47a00f8e3ec21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4ee2efaf6b9ad19a20d776edc2dad060d6ce4278893e3013e47a00f8e3ec21->enter($__internal_cc4ee2efaf6b9ad19a20d776edc2dad060d6ce4278893e3013e47a00f8e3ec21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cc4ee2efaf6b9ad19a20d776edc2dad060d6ce4278893e3013e47a00f8e3ec21->leave($__internal_cc4ee2efaf6b9ad19a20d776edc2dad060d6ce4278893e3013e47a00f8e3ec21_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_60969583268ec317f194ff375608c9796d2e6dc9b094ac145d075843814042b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60969583268ec317f194ff375608c9796d2e6dc9b094ac145d075843814042b5->enter($__internal_60969583268ec317f194ff375608c9796d2e6dc9b094ac145d075843814042b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_60969583268ec317f194ff375608c9796d2e6dc9b094ac145d075843814042b5->leave($__internal_60969583268ec317f194ff375608c9796d2e6dc9b094ac145d075843814042b5_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f33e08b5725ff13f78d642334b25a4bd59ea83797cef373244124cb761f2393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f33e08b5725ff13f78d642334b25a4bd59ea83797cef373244124cb761f2393->enter($__internal_8f33e08b5725ff13f78d642334b25a4bd59ea83797cef373244124cb761f2393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8f33e08b5725ff13f78d642334b25a4bd59ea83797cef373244124cb761f2393->leave($__internal_8f33e08b5725ff13f78d642334b25a4bd59ea83797cef373244124cb761f2393_prof);

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
        return array (  100 => 15,  89 => 14,  78 => 6,  66 => 5,  57 => 16,  54 => 15,  52 => 14,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
  <title>{% block title %}PROJET SYMF{% endblock %}</title>
  {% block stylesheets %}{% endblock %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('style/style.css') }}\" />
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
  <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

</head>
<body>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</body>
  </html>
", "base.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/base.html.twig");
    }
}
