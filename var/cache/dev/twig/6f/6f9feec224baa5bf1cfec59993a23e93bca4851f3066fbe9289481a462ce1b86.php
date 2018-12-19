<?php

/* FrontOfficeBundle::base.html.twig */
class __TwigTemplate_9c408a8326c5d83cfa11d00f852c7470bb56894087049ab1e257b66c4114314c extends Twig_Template
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
        $__internal_bf9c42de566801ecb1cd4cf170d20e79eb1b84e1e9d02b562c8ee154871ef4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9c42de566801ecb1cd4cf170d20e79eb1b84e1e9d02b562c8ee154871ef4bd->enter($__internal_bf9c42de566801ecb1cd4cf170d20e79eb1b84e1e9d02b562c8ee154871ef4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::base.html.twig"));

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
        
        $__internal_bf9c42de566801ecb1cd4cf170d20e79eb1b84e1e9d02b562c8ee154871ef4bd->leave($__internal_bf9c42de566801ecb1cd4cf170d20e79eb1b84e1e9d02b562c8ee154871ef4bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa98df7e8467098d66aab8966911c8d32f9fdc88e4c87215b09f2f66e689eb1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa98df7e8467098d66aab8966911c8d32f9fdc88e4c87215b09f2f66e689eb1a->enter($__internal_aa98df7e8467098d66aab8966911c8d32f9fdc88e4c87215b09f2f66e689eb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_aa98df7e8467098d66aab8966911c8d32f9fdc88e4c87215b09f2f66e689eb1a->leave($__internal_aa98df7e8467098d66aab8966911c8d32f9fdc88e4c87215b09f2f66e689eb1a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f94c786f9384659806f1e5b71565d00c14d2810ce3d76e036484814333f84df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f94c786f9384659806f1e5b71565d00c14d2810ce3d76e036484814333f84df->enter($__internal_8f94c786f9384659806f1e5b71565d00c14d2810ce3d76e036484814333f84df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8f94c786f9384659806f1e5b71565d00c14d2810ce3d76e036484814333f84df->leave($__internal_8f94c786f9384659806f1e5b71565d00c14d2810ce3d76e036484814333f84df_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_383921b52a9dcdbb701baf160c4ddedd80b04b0b26bee8c842ecc189338e7b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383921b52a9dcdbb701baf160c4ddedd80b04b0b26bee8c842ecc189338e7b4d->enter($__internal_383921b52a9dcdbb701baf160c4ddedd80b04b0b26bee8c842ecc189338e7b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_383921b52a9dcdbb701baf160c4ddedd80b04b0b26bee8c842ecc189338e7b4d->leave($__internal_383921b52a9dcdbb701baf160c4ddedd80b04b0b26bee8c842ecc189338e7b4d_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c45b413192ae30b4e7236531744b7ca2e043515b908e19aa875a42b8623a090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c45b413192ae30b4e7236531744b7ca2e043515b908e19aa875a42b8623a090->enter($__internal_3c45b413192ae30b4e7236531744b7ca2e043515b908e19aa875a42b8623a090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3c45b413192ae30b4e7236531744b7ca2e043515b908e19aa875a42b8623a090->leave($__internal_3c45b413192ae30b4e7236531744b7ca2e043515b908e19aa875a42b8623a090_prof);

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
", "FrontOfficeBundle::base.html.twig", "/home/alex/Documents/symfony/symfony/src/FrontOfficeBundle/Resources/views/base.html.twig");
    }
}
