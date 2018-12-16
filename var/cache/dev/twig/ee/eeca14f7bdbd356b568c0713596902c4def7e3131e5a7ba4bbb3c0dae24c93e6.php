<?php

/* base.html.twig */
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
        $__internal_77fced0154829548b8b930908cb557b0fb41fb93250fb4efdda229fbf0b985fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fced0154829548b8b930908cb557b0fb41fb93250fb4efdda229fbf0b985fa->enter($__internal_77fced0154829548b8b930908cb557b0fb41fb93250fb4efdda229fbf0b985fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_77fced0154829548b8b930908cb557b0fb41fb93250fb4efdda229fbf0b985fa->leave($__internal_77fced0154829548b8b930908cb557b0fb41fb93250fb4efdda229fbf0b985fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0500d419781a9edf788d6f7b0d6e86ffb1486b702f9cb65aa42b3b84b025cab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0500d419781a9edf788d6f7b0d6e86ffb1486b702f9cb65aa42b3b84b025cab9->enter($__internal_0500d419781a9edf788d6f7b0d6e86ffb1486b702f9cb65aa42b3b84b025cab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_0500d419781a9edf788d6f7b0d6e86ffb1486b702f9cb65aa42b3b84b025cab9->leave($__internal_0500d419781a9edf788d6f7b0d6e86ffb1486b702f9cb65aa42b3b84b025cab9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fa94baeffc8c0f88b21ac0c509c36915f1d840a255dcac9727c3b650e60d21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa94baeffc8c0f88b21ac0c509c36915f1d840a255dcac9727c3b650e60d21d->enter($__internal_6fa94baeffc8c0f88b21ac0c509c36915f1d840a255dcac9727c3b650e60d21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6fa94baeffc8c0f88b21ac0c509c36915f1d840a255dcac9727c3b650e60d21d->leave($__internal_6fa94baeffc8c0f88b21ac0c509c36915f1d840a255dcac9727c3b650e60d21d_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_998f16659f35e656ca9f13dc822e991fb654809f05ac72f33b2dba59eca62abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998f16659f35e656ca9f13dc822e991fb654809f05ac72f33b2dba59eca62abf->enter($__internal_998f16659f35e656ca9f13dc822e991fb654809f05ac72f33b2dba59eca62abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_998f16659f35e656ca9f13dc822e991fb654809f05ac72f33b2dba59eca62abf->leave($__internal_998f16659f35e656ca9f13dc822e991fb654809f05ac72f33b2dba59eca62abf_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2e4512823f95b95a63432d239595b008012d59470258befcd2e7d76754d9e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e4512823f95b95a63432d239595b008012d59470258befcd2e7d76754d9e56->enter($__internal_a2e4512823f95b95a63432d239595b008012d59470258befcd2e7d76754d9e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2e4512823f95b95a63432d239595b008012d59470258befcd2e7d76754d9e56->leave($__internal_a2e4512823f95b95a63432d239595b008012d59470258befcd2e7d76754d9e56_prof);

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
", "base.html.twig", "/var/www/html/symfony/app/Resources/views/base.html.twig");
    }
}
