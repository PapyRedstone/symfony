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
        $__internal_dcf9687a488faee3332d949871e0bf5ebcadbbb843949fbbbd75a74081b99dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcf9687a488faee3332d949871e0bf5ebcadbbb843949fbbbd75a74081b99dad->enter($__internal_dcf9687a488faee3332d949871e0bf5ebcadbbb843949fbbbd75a74081b99dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::base.html.twig"));

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
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
  <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

</head>
<body>
  ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "</body>
</html>
";
        
        $__internal_dcf9687a488faee3332d949871e0bf5ebcadbbb843949fbbbd75a74081b99dad->leave($__internal_dcf9687a488faee3332d949871e0bf5ebcadbbb843949fbbbd75a74081b99dad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95ea96510b597ac6c828897280e49f4770aba28cabea295da8be1d662bb4ea5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ea96510b597ac6c828897280e49f4770aba28cabea295da8be1d662bb4ea5f->enter($__internal_95ea96510b597ac6c828897280e49f4770aba28cabea295da8be1d662bb4ea5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF - FrontOffice ";
        
        $__internal_95ea96510b597ac6c828897280e49f4770aba28cabea295da8be1d662bb4ea5f->leave($__internal_95ea96510b597ac6c828897280e49f4770aba28cabea295da8be1d662bb4ea5f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8799dfe7182a5480d6e43a2f274c1e87dfb224a16867872f3f04c120095ea0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8799dfe7182a5480d6e43a2f274c1e87dfb224a16867872f3f04c120095ea0e0->enter($__internal_8799dfe7182a5480d6e43a2f274c1e87dfb224a16867872f3f04c120095ea0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8799dfe7182a5480d6e43a2f274c1e87dfb224a16867872f3f04c120095ea0e0->leave($__internal_8799dfe7182a5480d6e43a2f274c1e87dfb224a16867872f3f04c120095ea0e0_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ee13d33f49d9abebd2f7ce437d7ff25cd6f9b300ac3d7ed3caf334a0017802b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee13d33f49d9abebd2f7ce437d7ff25cd6f9b300ac3d7ed3caf334a0017802b->enter($__internal_7ee13d33f49d9abebd2f7ce437d7ff25cd6f9b300ac3d7ed3caf334a0017802b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7ee13d33f49d9abebd2f7ce437d7ff25cd6f9b300ac3d7ed3caf334a0017802b->leave($__internal_7ee13d33f49d9abebd2f7ce437d7ff25cd6f9b300ac3d7ed3caf334a0017802b_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21024e45a624827791430340d57e3273fd213d4c4b4be1249f8ee96b65cb1492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21024e45a624827791430340d57e3273fd213d4c4b4be1249f8ee96b65cb1492->enter($__internal_21024e45a624827791430340d57e3273fd213d4c4b4be1249f8ee96b65cb1492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_21024e45a624827791430340d57e3273fd213d4c4b4be1249f8ee96b65cb1492->leave($__internal_21024e45a624827791430340d57e3273fd213d4c4b4be1249f8ee96b65cb1492_prof);

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
        return array (  104 => 16,  93 => 15,  82 => 6,  70 => 5,  61 => 17,  58 => 16,  56 => 15,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
  <title>{% block title %}PROJET SYMF - FrontOffice {% endblock %}</title>
  {% block stylesheets %}{% endblock %}
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('style/style.css') }}\" />
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  <link rel=\"stylesheet\" href=\"{{ asset('style/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
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
