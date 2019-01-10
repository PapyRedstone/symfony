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
        $__internal_94c490bf4b03dd6ab04ff89f1d99bfdf3e4d2a841d95eabe68099124c29a83f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c490bf4b03dd6ab04ff89f1d99bfdf3e4d2a841d95eabe68099124c29a83f8->enter($__internal_94c490bf4b03dd6ab04ff89f1d99bfdf3e4d2a841d95eabe68099124c29a83f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_94c490bf4b03dd6ab04ff89f1d99bfdf3e4d2a841d95eabe68099124c29a83f8->leave($__internal_94c490bf4b03dd6ab04ff89f1d99bfdf3e4d2a841d95eabe68099124c29a83f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e3ac79b7e03c350edfbb47ceb55ebbe721172b2dc1ba266f110dea818945f61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3ac79b7e03c350edfbb47ceb55ebbe721172b2dc1ba266f110dea818945f61->enter($__internal_1e3ac79b7e03c350edfbb47ceb55ebbe721172b2dc1ba266f110dea818945f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_1e3ac79b7e03c350edfbb47ceb55ebbe721172b2dc1ba266f110dea818945f61->leave($__internal_1e3ac79b7e03c350edfbb47ceb55ebbe721172b2dc1ba266f110dea818945f61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2bf8da41422f006ca279576237b9f37a64a571896a00674413b561b8d35a851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bf8da41422f006ca279576237b9f37a64a571896a00674413b561b8d35a851->enter($__internal_d2bf8da41422f006ca279576237b9f37a64a571896a00674413b561b8d35a851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d2bf8da41422f006ca279576237b9f37a64a571896a00674413b561b8d35a851->leave($__internal_d2bf8da41422f006ca279576237b9f37a64a571896a00674413b561b8d35a851_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab8876e46a58b90138736e499d02ce86554bddd86f28b240f94f25a9cfd4ded8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8876e46a58b90138736e499d02ce86554bddd86f28b240f94f25a9cfd4ded8->enter($__internal_ab8876e46a58b90138736e499d02ce86554bddd86f28b240f94f25a9cfd4ded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab8876e46a58b90138736e499d02ce86554bddd86f28b240f94f25a9cfd4ded8->leave($__internal_ab8876e46a58b90138736e499d02ce86554bddd86f28b240f94f25a9cfd4ded8_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c9f1472c6a599dd2e74c8c7e475c48ac3677c76ff4e37c63a4bbe9d3cf82c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9f1472c6a599dd2e74c8c7e475c48ac3677c76ff4e37c63a4bbe9d3cf82c8b->enter($__internal_1c9f1472c6a599dd2e74c8c7e475c48ac3677c76ff4e37c63a4bbe9d3cf82c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1c9f1472c6a599dd2e74c8c7e475c48ac3677c76ff4e37c63a4bbe9d3cf82c8b->leave($__internal_1c9f1472c6a599dd2e74c8c7e475c48ac3677c76ff4e37c63a4bbe9d3cf82c8b_prof);

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
