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
        $__internal_ba18e5c4eff9b513af877a586b52fd7107c3f375c94cf2ffa7545f1648b23e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba18e5c4eff9b513af877a586b52fd7107c3f375c94cf2ffa7545f1648b23e8f->enter($__internal_ba18e5c4eff9b513af877a586b52fd7107c3f375c94cf2ffa7545f1648b23e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_ba18e5c4eff9b513af877a586b52fd7107c3f375c94cf2ffa7545f1648b23e8f->leave($__internal_ba18e5c4eff9b513af877a586b52fd7107c3f375c94cf2ffa7545f1648b23e8f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a398730b5fc8483b5105c7905c62a75c241da3d21d2c6ca98a985ceb4bc9241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a398730b5fc8483b5105c7905c62a75c241da3d21d2c6ca98a985ceb4bc9241->enter($__internal_9a398730b5fc8483b5105c7905c62a75c241da3d21d2c6ca98a985ceb4bc9241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_9a398730b5fc8483b5105c7905c62a75c241da3d21d2c6ca98a985ceb4bc9241->leave($__internal_9a398730b5fc8483b5105c7905c62a75c241da3d21d2c6ca98a985ceb4bc9241_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_afd257fbb92c4b802db484b90475fcbe8ac655bb7f94877e5e79b42beeec59d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd257fbb92c4b802db484b90475fcbe8ac655bb7f94877e5e79b42beeec59d9->enter($__internal_afd257fbb92c4b802db484b90475fcbe8ac655bb7f94877e5e79b42beeec59d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_afd257fbb92c4b802db484b90475fcbe8ac655bb7f94877e5e79b42beeec59d9->leave($__internal_afd257fbb92c4b802db484b90475fcbe8ac655bb7f94877e5e79b42beeec59d9_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_fce67f1dc8078c8de5e852b9070864677deec357406f59063d970e8782baa7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce67f1dc8078c8de5e852b9070864677deec357406f59063d970e8782baa7eb->enter($__internal_fce67f1dc8078c8de5e852b9070864677deec357406f59063d970e8782baa7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fce67f1dc8078c8de5e852b9070864677deec357406f59063d970e8782baa7eb->leave($__internal_fce67f1dc8078c8de5e852b9070864677deec357406f59063d970e8782baa7eb_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb8e1cf614aea61356dc145eac92964c44eefce76b28f5bac21a3c761e60721c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8e1cf614aea61356dc145eac92964c44eefce76b28f5bac21a3c761e60721c->enter($__internal_bb8e1cf614aea61356dc145eac92964c44eefce76b28f5bac21a3c761e60721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bb8e1cf614aea61356dc145eac92964c44eefce76b28f5bac21a3c761e60721c->leave($__internal_bb8e1cf614aea61356dc145eac92964c44eefce76b28f5bac21a3c761e60721c_prof);

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
