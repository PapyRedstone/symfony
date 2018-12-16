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
        $__internal_8caeef1df829d695974009021d3604aefea64299489914912c353b4c0b888a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8caeef1df829d695974009021d3604aefea64299489914912c353b4c0b888a8b->enter($__internal_8caeef1df829d695974009021d3604aefea64299489914912c353b4c0b888a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::base.html.twig"));

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
        
        $__internal_8caeef1df829d695974009021d3604aefea64299489914912c353b4c0b888a8b->leave($__internal_8caeef1df829d695974009021d3604aefea64299489914912c353b4c0b888a8b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db048a870187511a426822421a366e56b0f74856d15638471612035740fc72a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db048a870187511a426822421a366e56b0f74856d15638471612035740fc72a5->enter($__internal_db048a870187511a426822421a366e56b0f74856d15638471612035740fc72a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_db048a870187511a426822421a366e56b0f74856d15638471612035740fc72a5->leave($__internal_db048a870187511a426822421a366e56b0f74856d15638471612035740fc72a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1dfe56d539b91509a965f22441e12f97aaaac28282dd1114412d5b94ce42e4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfe56d539b91509a965f22441e12f97aaaac28282dd1114412d5b94ce42e4d7->enter($__internal_1dfe56d539b91509a965f22441e12f97aaaac28282dd1114412d5b94ce42e4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1dfe56d539b91509a965f22441e12f97aaaac28282dd1114412d5b94ce42e4d7->leave($__internal_1dfe56d539b91509a965f22441e12f97aaaac28282dd1114412d5b94ce42e4d7_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_f52f645028b04bfe6e0ce5817176cdd61d7b03bcf78e9d60c91143b87284fa73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52f645028b04bfe6e0ce5817176cdd61d7b03bcf78e9d60c91143b87284fa73->enter($__internal_f52f645028b04bfe6e0ce5817176cdd61d7b03bcf78e9d60c91143b87284fa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f52f645028b04bfe6e0ce5817176cdd61d7b03bcf78e9d60c91143b87284fa73->leave($__internal_f52f645028b04bfe6e0ce5817176cdd61d7b03bcf78e9d60c91143b87284fa73_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fd611fbe79783a914252157fc3d6a268c24081b9c1a9ef6e084fe97cb6bb912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd611fbe79783a914252157fc3d6a268c24081b9c1a9ef6e084fe97cb6bb912->enter($__internal_2fd611fbe79783a914252157fc3d6a268c24081b9c1a9ef6e084fe97cb6bb912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2fd611fbe79783a914252157fc3d6a268c24081b9c1a9ef6e084fe97cb6bb912->leave($__internal_2fd611fbe79783a914252157fc3d6a268c24081b9c1a9ef6e084fe97cb6bb912_prof);

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
