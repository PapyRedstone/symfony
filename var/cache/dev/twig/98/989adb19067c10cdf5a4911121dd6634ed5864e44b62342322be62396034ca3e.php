<?php

/* BackOfficeBundle::base.html.twig */
class __TwigTemplate_b083bccb8a8549accce1a3fbb776c51fdbc98b8ffcc0b925792b21fc2159bffa extends Twig_Template
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
        $__internal_b4268acf04d3cc685348e534e8fd45c281942db4bcb605c2a604cbbc25d16b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4268acf04d3cc685348e534e8fd45c281942db4bcb605c2a604cbbc25d16b89->enter($__internal_b4268acf04d3cc685348e534e8fd45c281942db4bcb605c2a604cbbc25d16b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle::base.html.twig"));

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
        
        $__internal_b4268acf04d3cc685348e534e8fd45c281942db4bcb605c2a604cbbc25d16b89->leave($__internal_b4268acf04d3cc685348e534e8fd45c281942db4bcb605c2a604cbbc25d16b89_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cbf8838cf81435fc0eaecf04652583de2bede88e82ca5ee69ca0667dd947049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbf8838cf81435fc0eaecf04652583de2bede88e82ca5ee69ca0667dd947049->enter($__internal_2cbf8838cf81435fc0eaecf04652583de2bede88e82ca5ee69ca0667dd947049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF - BackOffice";
        
        $__internal_2cbf8838cf81435fc0eaecf04652583de2bede88e82ca5ee69ca0667dd947049->leave($__internal_2cbf8838cf81435fc0eaecf04652583de2bede88e82ca5ee69ca0667dd947049_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c7363e381e26e785fb0b47e61a31e9570a57a69ba5673c69c41c80a6b5ac345e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7363e381e26e785fb0b47e61a31e9570a57a69ba5673c69c41c80a6b5ac345e->enter($__internal_c7363e381e26e785fb0b47e61a31e9570a57a69ba5673c69c41c80a6b5ac345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c7363e381e26e785fb0b47e61a31e9570a57a69ba5673c69c41c80a6b5ac345e->leave($__internal_c7363e381e26e785fb0b47e61a31e9570a57a69ba5673c69c41c80a6b5ac345e_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_be39b8b7594f7d6680042511b1fd38c2bcedbedc9d8ceebd1e8a1c7421e2e0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be39b8b7594f7d6680042511b1fd38c2bcedbedc9d8ceebd1e8a1c7421e2e0be->enter($__internal_be39b8b7594f7d6680042511b1fd38c2bcedbedc9d8ceebd1e8a1c7421e2e0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be39b8b7594f7d6680042511b1fd38c2bcedbedc9d8ceebd1e8a1c7421e2e0be->leave($__internal_be39b8b7594f7d6680042511b1fd38c2bcedbedc9d8ceebd1e8a1c7421e2e0be_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7809bc255674a67520f474eb681c2e026ca863ece32d739bc6ee97bf489c696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7809bc255674a67520f474eb681c2e026ca863ece32d739bc6ee97bf489c696->enter($__internal_c7809bc255674a67520f474eb681c2e026ca863ece32d739bc6ee97bf489c696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c7809bc255674a67520f474eb681c2e026ca863ece32d739bc6ee97bf489c696->leave($__internal_c7809bc255674a67520f474eb681c2e026ca863ece32d739bc6ee97bf489c696_prof);

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
        return array (  156 => 40,  145 => 39,  134 => 6,  122 => 5,  103 => 41,  100 => 40,  98 => 39,  90 => 34,  84 => 31,  78 => 28,  72 => 25,  66 => 22,  60 => 19,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
    <title>{% block title %}PROJET SYMF - BackOffice{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('style/style.css') }}\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('style/font-awesome-4.7.0/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
    <script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>

  </head>
  <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark\">
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{path('back_office_homepage')}}\"><i class=\"fa fa-home\"></i></a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{path('back_office_user_index')}}\">User</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{path('back_office_societe_index')}}\">Societe</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{path('back_office_service_index')}}\">Service</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{path('back_office_stats_index')}}\">Statistiques</a>
          </li>
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{path('back_office_deplacement_index')}}\">Deplacement</a>
          </li>
        </ul>
      </div>
    </nav>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
    <footer class=\"footer\">
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
", "BackOfficeBundle::base.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/base.html.twig");
    }
}
