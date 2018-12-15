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
        $__internal_7b5bd3feb5041daf34e30928be9e1f151b6f138f039f4962c22c1724fbadc0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5bd3feb5041daf34e30928be9e1f151b6f138f039f4962c22c1724fbadc0f0->enter($__internal_7b5bd3feb5041daf34e30928be9e1f151b6f138f039f4962c22c1724fbadc0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::base.html.twig"));

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
        
        $__internal_7b5bd3feb5041daf34e30928be9e1f151b6f138f039f4962c22c1724fbadc0f0->leave($__internal_7b5bd3feb5041daf34e30928be9e1f151b6f138f039f4962c22c1724fbadc0f0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c0824f437e2d0e46e50c1dacad7ced523d43b547ca7f89ab0e4b9276e7e549f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0824f437e2d0e46e50c1dacad7ced523d43b547ca7f89ab0e4b9276e7e549f->enter($__internal_8c0824f437e2d0e46e50c1dacad7ced523d43b547ca7f89ab0e4b9276e7e549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_8c0824f437e2d0e46e50c1dacad7ced523d43b547ca7f89ab0e4b9276e7e549f->leave($__internal_8c0824f437e2d0e46e50c1dacad7ced523d43b547ca7f89ab0e4b9276e7e549f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e28c5e15d3e66f22a8ef13c7f1aedc01bcc3ef15e777cdb730d26a697fd3956a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28c5e15d3e66f22a8ef13c7f1aedc01bcc3ef15e777cdb730d26a697fd3956a->enter($__internal_e28c5e15d3e66f22a8ef13c7f1aedc01bcc3ef15e777cdb730d26a697fd3956a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e28c5e15d3e66f22a8ef13c7f1aedc01bcc3ef15e777cdb730d26a697fd3956a->leave($__internal_e28c5e15d3e66f22a8ef13c7f1aedc01bcc3ef15e777cdb730d26a697fd3956a_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2ebf8c31e6f95e3af2e70295fe19cc8323762dca6c93a33f1ad80aa867adac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2ebf8c31e6f95e3af2e70295fe19cc8323762dca6c93a33f1ad80aa867adac->enter($__internal_1b2ebf8c31e6f95e3af2e70295fe19cc8323762dca6c93a33f1ad80aa867adac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b2ebf8c31e6f95e3af2e70295fe19cc8323762dca6c93a33f1ad80aa867adac->leave($__internal_1b2ebf8c31e6f95e3af2e70295fe19cc8323762dca6c93a33f1ad80aa867adac_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4716db581002c20a70aa8335ed614781fbdc87cd4203808e61cb1e3b8cfb813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4716db581002c20a70aa8335ed614781fbdc87cd4203808e61cb1e3b8cfb813->enter($__internal_d4716db581002c20a70aa8335ed614781fbdc87cd4203808e61cb1e3b8cfb813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d4716db581002c20a70aa8335ed614781fbdc87cd4203808e61cb1e3b8cfb813->leave($__internal_d4716db581002c20a70aa8335ed614781fbdc87cd4203808e61cb1e3b8cfb813_prof);

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
", "FrontOfficeBundle::base.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/base.html.twig");
    }
}
