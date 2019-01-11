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
        $__internal_8ea72b39e97bfc10dfacb5d93c50bd83d4cc77a69b1925c2ecc2099e5cda3d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ea72b39e97bfc10dfacb5d93c50bd83d4cc77a69b1925c2ecc2099e5cda3d1e->enter($__internal_8ea72b39e97bfc10dfacb5d93c50bd83d4cc77a69b1925c2ecc2099e5cda3d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8ea72b39e97bfc10dfacb5d93c50bd83d4cc77a69b1925c2ecc2099e5cda3d1e->leave($__internal_8ea72b39e97bfc10dfacb5d93c50bd83d4cc77a69b1925c2ecc2099e5cda3d1e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c05a2c0e77a57432352880d825b2fb48d0b7e6d9f020bf915898e61a840bcd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c05a2c0e77a57432352880d825b2fb48d0b7e6d9f020bf915898e61a840bcd4->enter($__internal_6c05a2c0e77a57432352880d825b2fb48d0b7e6d9f020bf915898e61a840bcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_6c05a2c0e77a57432352880d825b2fb48d0b7e6d9f020bf915898e61a840bcd4->leave($__internal_6c05a2c0e77a57432352880d825b2fb48d0b7e6d9f020bf915898e61a840bcd4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9b0e90061c663b8ca24ca977e6204c172c9f8bf4ad1d0399cb1385067681124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b0e90061c663b8ca24ca977e6204c172c9f8bf4ad1d0399cb1385067681124->enter($__internal_a9b0e90061c663b8ca24ca977e6204c172c9f8bf4ad1d0399cb1385067681124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a9b0e90061c663b8ca24ca977e6204c172c9f8bf4ad1d0399cb1385067681124->leave($__internal_a9b0e90061c663b8ca24ca977e6204c172c9f8bf4ad1d0399cb1385067681124_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0f8e8f98e38f385e923ff0027780472d90d49fce5cf47f7b9f0ae5af7a3c3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f8e8f98e38f385e923ff0027780472d90d49fce5cf47f7b9f0ae5af7a3c3e0->enter($__internal_d0f8e8f98e38f385e923ff0027780472d90d49fce5cf47f7b9f0ae5af7a3c3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d0f8e8f98e38f385e923ff0027780472d90d49fce5cf47f7b9f0ae5af7a3c3e0->leave($__internal_d0f8e8f98e38f385e923ff0027780472d90d49fce5cf47f7b9f0ae5af7a3c3e0_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_470dd41d3cea5db1d13da54f741772811df21c0e5cdc77fe240bba771e6b0b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470dd41d3cea5db1d13da54f741772811df21c0e5cdc77fe240bba771e6b0b9a->enter($__internal_470dd41d3cea5db1d13da54f741772811df21c0e5cdc77fe240bba771e6b0b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_470dd41d3cea5db1d13da54f741772811df21c0e5cdc77fe240bba771e6b0b9a->leave($__internal_470dd41d3cea5db1d13da54f741772811df21c0e5cdc77fe240bba771e6b0b9a_prof);

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
