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
        $__internal_e4d20772e288e9c5032fb3fd11c240dfb21719977f2ae64b48b3a85539a6427c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d20772e288e9c5032fb3fd11c240dfb21719977f2ae64b48b3a85539a6427c->enter($__internal_e4d20772e288e9c5032fb3fd11c240dfb21719977f2ae64b48b3a85539a6427c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e4d20772e288e9c5032fb3fd11c240dfb21719977f2ae64b48b3a85539a6427c->leave($__internal_e4d20772e288e9c5032fb3fd11c240dfb21719977f2ae64b48b3a85539a6427c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aeb89cd3b2e5757a72034410606fece2055286c480d81abd3bce8822ab46bc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb89cd3b2e5757a72034410606fece2055286c480d81abd3bce8822ab46bc19->enter($__internal_aeb89cd3b2e5757a72034410606fece2055286c480d81abd3bce8822ab46bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_aeb89cd3b2e5757a72034410606fece2055286c480d81abd3bce8822ab46bc19->leave($__internal_aeb89cd3b2e5757a72034410606fece2055286c480d81abd3bce8822ab46bc19_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0118f2653f2f4e7334cc9bb14d4d30d3b438218f332e183a28491af8e6b5fa32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0118f2653f2f4e7334cc9bb14d4d30d3b438218f332e183a28491af8e6b5fa32->enter($__internal_0118f2653f2f4e7334cc9bb14d4d30d3b438218f332e183a28491af8e6b5fa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0118f2653f2f4e7334cc9bb14d4d30d3b438218f332e183a28491af8e6b5fa32->leave($__internal_0118f2653f2f4e7334cc9bb14d4d30d3b438218f332e183a28491af8e6b5fa32_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_774eede3524034897e6ec2e0551d167d3a1d777a6a2800ceeacd7b224af74895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774eede3524034897e6ec2e0551d167d3a1d777a6a2800ceeacd7b224af74895->enter($__internal_774eede3524034897e6ec2e0551d167d3a1d777a6a2800ceeacd7b224af74895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_774eede3524034897e6ec2e0551d167d3a1d777a6a2800ceeacd7b224af74895->leave($__internal_774eede3524034897e6ec2e0551d167d3a1d777a6a2800ceeacd7b224af74895_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83a1ad7564ef47011eb443ee59c8fe314fba7c90185c1e3f921edc8df467e8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a1ad7564ef47011eb443ee59c8fe314fba7c90185c1e3f921edc8df467e8b3->enter($__internal_83a1ad7564ef47011eb443ee59c8fe314fba7c90185c1e3f921edc8df467e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83a1ad7564ef47011eb443ee59c8fe314fba7c90185c1e3f921edc8df467e8b3->leave($__internal_83a1ad7564ef47011eb443ee59c8fe314fba7c90185c1e3f921edc8df467e8b3_prof);

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
", "::base.html.twig", "/var/www/html/symfony/app/Resources/views/base.html.twig");
    }
}
