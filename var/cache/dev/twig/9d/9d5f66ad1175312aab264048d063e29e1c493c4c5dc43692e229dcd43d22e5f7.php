<?php

/* ::base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
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
        $__internal_ee4c9e1899cf624f7c54ca119e82ec6534961d96ddbb883e47e34f556e06b8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4c9e1899cf624f7c54ca119e82ec6534961d96ddbb883e47e34f556e06b8c8->enter($__internal_ee4c9e1899cf624f7c54ca119e82ec6534961d96ddbb883e47e34f556e06b8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ee4c9e1899cf624f7c54ca119e82ec6534961d96ddbb883e47e34f556e06b8c8->leave($__internal_ee4c9e1899cf624f7c54ca119e82ec6534961d96ddbb883e47e34f556e06b8c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7896ec270d1544432f2c0dbf5cd4aca47daa3620ce0d76722a4866713cb3d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7896ec270d1544432f2c0dbf5cd4aca47daa3620ce0d76722a4866713cb3d65->enter($__internal_b7896ec270d1544432f2c0dbf5cd4aca47daa3620ce0d76722a4866713cb3d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b7896ec270d1544432f2c0dbf5cd4aca47daa3620ce0d76722a4866713cb3d65->leave($__internal_b7896ec270d1544432f2c0dbf5cd4aca47daa3620ce0d76722a4866713cb3d65_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2520baf5474b63cbca7c0e83d066f45eab5fb31b49a2dca1fd374d7d20c7558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2520baf5474b63cbca7c0e83d066f45eab5fb31b49a2dca1fd374d7d20c7558->enter($__internal_e2520baf5474b63cbca7c0e83d066f45eab5fb31b49a2dca1fd374d7d20c7558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2520baf5474b63cbca7c0e83d066f45eab5fb31b49a2dca1fd374d7d20c7558->leave($__internal_e2520baf5474b63cbca7c0e83d066f45eab5fb31b49a2dca1fd374d7d20c7558_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d6a2d97712d47a393881896eb309abcd8b3598a8429f6fe23adb91fe2bfbb9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6a2d97712d47a393881896eb309abcd8b3598a8429f6fe23adb91fe2bfbb9f->enter($__internal_1d6a2d97712d47a393881896eb309abcd8b3598a8429f6fe23adb91fe2bfbb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d6a2d97712d47a393881896eb309abcd8b3598a8429f6fe23adb91fe2bfbb9f->leave($__internal_1d6a2d97712d47a393881896eb309abcd8b3598a8429f6fe23adb91fe2bfbb9f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7beee901b46e2f4a10e19294615e4a634b7f3510ccde49d77e27ae44bbee173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7beee901b46e2f4a10e19294615e4a634b7f3510ccde49d77e27ae44bbee173->enter($__internal_d7beee901b46e2f4a10e19294615e4a634b7f3510ccde49d77e27ae44bbee173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d7beee901b46e2f4a10e19294615e4a634b7f3510ccde49d77e27ae44bbee173->leave($__internal_d7beee901b46e2f4a10e19294615e4a634b7f3510ccde49d77e27ae44bbee173_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/symfony/app/Resources/views/base.html.twig");
    }
}
