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
        $__internal_7f1932e780a9d46adc72792e855b9d70806b0ebe900f4e9ec5a866e53274bb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1932e780a9d46adc72792e855b9d70806b0ebe900f4e9ec5a866e53274bb1c->enter($__internal_7f1932e780a9d46adc72792e855b9d70806b0ebe900f4e9ec5a866e53274bb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7f1932e780a9d46adc72792e855b9d70806b0ebe900f4e9ec5a866e53274bb1c->leave($__internal_7f1932e780a9d46adc72792e855b9d70806b0ebe900f4e9ec5a866e53274bb1c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e5994cf166e6a35ce14a1548ba62555f30db6e0c1b50df4a5f9c7461b09420f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5994cf166e6a35ce14a1548ba62555f30db6e0c1b50df4a5f9c7461b09420f->enter($__internal_8e5994cf166e6a35ce14a1548ba62555f30db6e0c1b50df4a5f9c7461b09420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_8e5994cf166e6a35ce14a1548ba62555f30db6e0c1b50df4a5f9c7461b09420f->leave($__internal_8e5994cf166e6a35ce14a1548ba62555f30db6e0c1b50df4a5f9c7461b09420f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28e268485c763919561e504a352a40d23f4c71be327ea50401bba5ae1e9d4421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e268485c763919561e504a352a40d23f4c71be327ea50401bba5ae1e9d4421->enter($__internal_28e268485c763919561e504a352a40d23f4c71be327ea50401bba5ae1e9d4421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_28e268485c763919561e504a352a40d23f4c71be327ea50401bba5ae1e9d4421->leave($__internal_28e268485c763919561e504a352a40d23f4c71be327ea50401bba5ae1e9d4421_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bd8d9ec3127a9cfc22ec24d9b7cbf7cbc2b791063508253b787be0b8b6d7347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd8d9ec3127a9cfc22ec24d9b7cbf7cbc2b791063508253b787be0b8b6d7347->enter($__internal_6bd8d9ec3127a9cfc22ec24d9b7cbf7cbc2b791063508253b787be0b8b6d7347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6bd8d9ec3127a9cfc22ec24d9b7cbf7cbc2b791063508253b787be0b8b6d7347->leave($__internal_6bd8d9ec3127a9cfc22ec24d9b7cbf7cbc2b791063508253b787be0b8b6d7347_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e674b9b333b31db9301ee168ad762eaa01e394fdf2df6a28b2a0540a42b5bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e674b9b333b31db9301ee168ad762eaa01e394fdf2df6a28b2a0540a42b5bd8->enter($__internal_7e674b9b333b31db9301ee168ad762eaa01e394fdf2df6a28b2a0540a42b5bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7e674b9b333b31db9301ee168ad762eaa01e394fdf2df6a28b2a0540a42b5bd8->leave($__internal_7e674b9b333b31db9301ee168ad762eaa01e394fdf2df6a28b2a0540a42b5bd8_prof);

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
