<?php

/* BackOfficeBundle::base.html.twig */
class __TwigTemplate_b083bccb8a8549accce1a3fbb776c51fdbc98b8ffcc0b925792b21fc2159bffa extends Twig_Template
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
        $__internal_4424f1bc7bbac0483816de2b2796b8c8cfeb630962cbdee8e334ba81e12e3ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4424f1bc7bbac0483816de2b2796b8c8cfeb630962cbdee8e334ba81e12e3ce2->enter($__internal_4424f1bc7bbac0483816de2b2796b8c8cfeb630962cbdee8e334ba81e12e3ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::base.html.twig"));

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
        
        $__internal_4424f1bc7bbac0483816de2b2796b8c8cfeb630962cbdee8e334ba81e12e3ce2->leave($__internal_4424f1bc7bbac0483816de2b2796b8c8cfeb630962cbdee8e334ba81e12e3ce2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1899ab75e099a75d625e66fa1cee434a28e88e9f44f1ca73b1f5ce9127d1a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1899ab75e099a75d625e66fa1cee434a28e88e9f44f1ca73b1f5ce9127d1a2d->enter($__internal_e1899ab75e099a75d625e66fa1cee434a28e88e9f44f1ca73b1f5ce9127d1a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_e1899ab75e099a75d625e66fa1cee434a28e88e9f44f1ca73b1f5ce9127d1a2d->leave($__internal_e1899ab75e099a75d625e66fa1cee434a28e88e9f44f1ca73b1f5ce9127d1a2d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_494cdd860640f4c02544a7c562a44b54255c82fa75ed3e18ca78ad0ca9c47d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494cdd860640f4c02544a7c562a44b54255c82fa75ed3e18ca78ad0ca9c47d11->enter($__internal_494cdd860640f4c02544a7c562a44b54255c82fa75ed3e18ca78ad0ca9c47d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_494cdd860640f4c02544a7c562a44b54255c82fa75ed3e18ca78ad0ca9c47d11->leave($__internal_494cdd860640f4c02544a7c562a44b54255c82fa75ed3e18ca78ad0ca9c47d11_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b2180a0674e954ec81f99dd89c45451d7d812c35009c285e080e7eb8ef00f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2180a0674e954ec81f99dd89c45451d7d812c35009c285e080e7eb8ef00f30->enter($__internal_3b2180a0674e954ec81f99dd89c45451d7d812c35009c285e080e7eb8ef00f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b2180a0674e954ec81f99dd89c45451d7d812c35009c285e080e7eb8ef00f30->leave($__internal_3b2180a0674e954ec81f99dd89c45451d7d812c35009c285e080e7eb8ef00f30_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7286a8e7187e3e05cea3fa1c696482627a284b5a345164f1f0fdee641d95c63a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7286a8e7187e3e05cea3fa1c696482627a284b5a345164f1f0fdee641d95c63a->enter($__internal_7286a8e7187e3e05cea3fa1c696482627a284b5a345164f1f0fdee641d95c63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7286a8e7187e3e05cea3fa1c696482627a284b5a345164f1f0fdee641d95c63a->leave($__internal_7286a8e7187e3e05cea3fa1c696482627a284b5a345164f1f0fdee641d95c63a_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle::base.html.twig";
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
", "BackOfficeBundle::base.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/base.html.twig");
    }
}
