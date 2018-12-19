<?php

/* BackOfficeBundle::base.html.twig */
class __TwigTemplate_adca0bfe72072906911cc95799d4bb0c6ef35e4e12dd894abec927156c84b41a extends Twig_Template
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
        $__internal_dd337158de819b9a1c797a8ab5218f65a5424ef59fc27084c0fb8a5815017de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd337158de819b9a1c797a8ab5218f65a5424ef59fc27084c0fb8a5815017de0->enter($__internal_dd337158de819b9a1c797a8ab5218f65a5424ef59fc27084c0fb8a5815017de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::base.html.twig"));

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
        
        $__internal_dd337158de819b9a1c797a8ab5218f65a5424ef59fc27084c0fb8a5815017de0->leave($__internal_dd337158de819b9a1c797a8ab5218f65a5424ef59fc27084c0fb8a5815017de0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf60bc0bd5a0d2d9a090ffd194b333d034151d3619ae65ca5f14b94ca653940c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf60bc0bd5a0d2d9a090ffd194b333d034151d3619ae65ca5f14b94ca653940c->enter($__internal_bf60bc0bd5a0d2d9a090ffd194b333d034151d3619ae65ca5f14b94ca653940c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_bf60bc0bd5a0d2d9a090ffd194b333d034151d3619ae65ca5f14b94ca653940c->leave($__internal_bf60bc0bd5a0d2d9a090ffd194b333d034151d3619ae65ca5f14b94ca653940c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6dca9790675fa746033501225fbd62885bd14ca5ee377246f923963781f188b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dca9790675fa746033501225fbd62885bd14ca5ee377246f923963781f188b0->enter($__internal_6dca9790675fa746033501225fbd62885bd14ca5ee377246f923963781f188b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6dca9790675fa746033501225fbd62885bd14ca5ee377246f923963781f188b0->leave($__internal_6dca9790675fa746033501225fbd62885bd14ca5ee377246f923963781f188b0_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f6ca1a5e8f115dd68c899d17f48f57c440881b5f72cac08650ed7811e3a5d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f6ca1a5e8f115dd68c899d17f48f57c440881b5f72cac08650ed7811e3a5d4->enter($__internal_c6f6ca1a5e8f115dd68c899d17f48f57c440881b5f72cac08650ed7811e3a5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6f6ca1a5e8f115dd68c899d17f48f57c440881b5f72cac08650ed7811e3a5d4->leave($__internal_c6f6ca1a5e8f115dd68c899d17f48f57c440881b5f72cac08650ed7811e3a5d4_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8bb1ab71f3a45ac9a599de7de64725f4bbda32838c0bcf27999fe117569cdac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb1ab71f3a45ac9a599de7de64725f4bbda32838c0bcf27999fe117569cdac4->enter($__internal_8bb1ab71f3a45ac9a599de7de64725f4bbda32838c0bcf27999fe117569cdac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8bb1ab71f3a45ac9a599de7de64725f4bbda32838c0bcf27999fe117569cdac4->leave($__internal_8bb1ab71f3a45ac9a599de7de64725f4bbda32838c0bcf27999fe117569cdac4_prof);

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
", "BackOfficeBundle::base.html.twig", "/home/alex/Documents/symfony/symfony/src/BackOfficeBundle/Resources/views/base.html.twig");
    }
}
