<?php

/* FrontOfficeBundle::base.html.twig */
class __TwigTemplate_da736a426f8feccd5de10e0222c0fcd2e7dc676b41d190019604c01768414fb3 extends Twig_Template
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
        $__internal_5e0dabb88c6a106b7ae335692f0c86b047ca90fa4b2fac5b54bc65b7d09e0da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0dabb88c6a106b7ae335692f0c86b047ca90fa4b2fac5b54bc65b7d09e0da1->enter($__internal_5e0dabb88c6a106b7ae335692f0c86b047ca90fa4b2fac5b54bc65b7d09e0da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::base.html.twig"));

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
        
        $__internal_5e0dabb88c6a106b7ae335692f0c86b047ca90fa4b2fac5b54bc65b7d09e0da1->leave($__internal_5e0dabb88c6a106b7ae335692f0c86b047ca90fa4b2fac5b54bc65b7d09e0da1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_712dd6258ed19a6518fd78eb1b476a13fec819994fd50f9d3a3863c3028b646d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_712dd6258ed19a6518fd78eb1b476a13fec819994fd50f9d3a3863c3028b646d->enter($__internal_712dd6258ed19a6518fd78eb1b476a13fec819994fd50f9d3a3863c3028b646d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "TP SYMF";
        
        $__internal_712dd6258ed19a6518fd78eb1b476a13fec819994fd50f9d3a3863c3028b646d->leave($__internal_712dd6258ed19a6518fd78eb1b476a13fec819994fd50f9d3a3863c3028b646d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac9d553604d10d68e930e5f7ff3f4888fc3d361a8a89c4f43e716607aa0b1fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9d553604d10d68e930e5f7ff3f4888fc3d361a8a89c4f43e716607aa0b1fde->enter($__internal_ac9d553604d10d68e930e5f7ff3f4888fc3d361a8a89c4f43e716607aa0b1fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ac9d553604d10d68e930e5f7ff3f4888fc3d361a8a89c4f43e716607aa0b1fde->leave($__internal_ac9d553604d10d68e930e5f7ff3f4888fc3d361a8a89c4f43e716607aa0b1fde_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4a268f91448d7d6550e241fccb11314a2d2817fd157cc6bc6d5e952164e6893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a268f91448d7d6550e241fccb11314a2d2817fd157cc6bc6d5e952164e6893->enter($__internal_e4a268f91448d7d6550e241fccb11314a2d2817fd157cc6bc6d5e952164e6893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e4a268f91448d7d6550e241fccb11314a2d2817fd157cc6bc6d5e952164e6893->leave($__internal_e4a268f91448d7d6550e241fccb11314a2d2817fd157cc6bc6d5e952164e6893_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42b5a8ea2ef3b6f917a205a9b6500d6489628be8fd9df1f21290ed47dad6e41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b5a8ea2ef3b6f917a205a9b6500d6489628be8fd9df1f21290ed47dad6e41e->enter($__internal_42b5a8ea2ef3b6f917a205a9b6500d6489628be8fd9df1f21290ed47dad6e41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_42b5a8ea2ef3b6f917a205a9b6500d6489628be8fd9df1f21290ed47dad6e41e->leave($__internal_42b5a8ea2ef3b6f917a205a9b6500d6489628be8fd9df1f21290ed47dad6e41e_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle::base.html.twig";
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
  <title>{% block title %}TP SYMF{% endblock %}</title>
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
", "FrontOfficeBundle::base.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/base.html.twig");
    }
}
