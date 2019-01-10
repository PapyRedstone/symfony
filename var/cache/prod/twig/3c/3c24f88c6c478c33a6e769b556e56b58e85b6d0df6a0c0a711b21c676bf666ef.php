<?php

/* BackOfficeBundle::base.html.twig */
class __TwigTemplate_7fc787ef4338c66acaf712177824f74ab2c74882eb94f92f2cdd833d5d88f442 extends Twig_Template
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
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
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
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark\">
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_homepage");
        echo "\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_user_index");
        echo "\">User</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_index");
        echo "\">Societe</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_index");
        echo "\">Service</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_stats_index");
        echo "\">Statistiques</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_index");
        echo "\">Deplacement</a>
          </li>
        </ul>
      </div>
    </nav>
    ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    <footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                Footer
            </div>
        </div>
    </div>
</footer>
</body>
  </body>
  </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "PROJET SYMF - BackOffice";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  132 => 40,  127 => 39,  122 => 6,  116 => 5,  100 => 41,  97 => 40,  95 => 39,  87 => 34,  81 => 31,  75 => 28,  69 => 25,  63 => 22,  57 => 19,  44 => 9,  40 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackOfficeBundle::base.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/base.html.twig");
    }
}
