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
        $__internal_ba05f61be5f3929ba912a719dbcc529fe4e40291476d9569e5860943e0bce830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba05f61be5f3929ba912a719dbcc529fe4e40291476d9569e5860943e0bce830->enter($__internal_ba05f61be5f3929ba912a719dbcc529fe4e40291476d9569e5860943e0bce830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ba05f61be5f3929ba912a719dbcc529fe4e40291476d9569e5860943e0bce830->leave($__internal_ba05f61be5f3929ba912a719dbcc529fe4e40291476d9569e5860943e0bce830_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e5fe3d01763f7f98788211eef7037c05d1862e15e652fda9d75e8caea760508 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5fe3d01763f7f98788211eef7037c05d1862e15e652fda9d75e8caea760508->enter($__internal_0e5fe3d01763f7f98788211eef7037c05d1862e15e652fda9d75e8caea760508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_0e5fe3d01763f7f98788211eef7037c05d1862e15e652fda9d75e8caea760508->leave($__internal_0e5fe3d01763f7f98788211eef7037c05d1862e15e652fda9d75e8caea760508_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92631b9450f839d5b85c7d0291400b61e210ee2885e54db417e57c6e59620548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92631b9450f839d5b85c7d0291400b61e210ee2885e54db417e57c6e59620548->enter($__internal_92631b9450f839d5b85c7d0291400b61e210ee2885e54db417e57c6e59620548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_92631b9450f839d5b85c7d0291400b61e210ee2885e54db417e57c6e59620548->leave($__internal_92631b9450f839d5b85c7d0291400b61e210ee2885e54db417e57c6e59620548_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbfdcb8cfc69be794044e52a0a3e97a99c6b10401833a5c692cd1b282d7e5e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfdcb8cfc69be794044e52a0a3e97a99c6b10401833a5c692cd1b282d7e5e53->enter($__internal_dbfdcb8cfc69be794044e52a0a3e97a99c6b10401833a5c692cd1b282d7e5e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dbfdcb8cfc69be794044e52a0a3e97a99c6b10401833a5c692cd1b282d7e5e53->leave($__internal_dbfdcb8cfc69be794044e52a0a3e97a99c6b10401833a5c692cd1b282d7e5e53_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4cc3cf7d3f61fa1062ea01c318f11800567244b09f58d2d81f78aec61599ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cc3cf7d3f61fa1062ea01c318f11800567244b09f58d2d81f78aec61599ac0->enter($__internal_e4cc3cf7d3f61fa1062ea01c318f11800567244b09f58d2d81f78aec61599ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e4cc3cf7d3f61fa1062ea01c318f11800567244b09f58d2d81f78aec61599ac0->leave($__internal_e4cc3cf7d3f61fa1062ea01c318f11800567244b09f58d2d81f78aec61599ac0_prof);

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
