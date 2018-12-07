<?php

/* base.html.twig */
class __TwigTemplate_e2d21215726556d7a2b9206e83e6061cc251f39bee62896aecdbb35410598892 extends Twig_Template
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
        $__internal_fb63cd9331b2789452162a6ecce1af1dba52d11638c4133851a1c7629d008996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb63cd9331b2789452162a6ecce1af1dba52d11638c4133851a1c7629d008996->enter($__internal_fb63cd9331b2789452162a6ecce1af1dba52d11638c4133851a1c7629d008996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fb63cd9331b2789452162a6ecce1af1dba52d11638c4133851a1c7629d008996->leave($__internal_fb63cd9331b2789452162a6ecce1af1dba52d11638c4133851a1c7629d008996_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9f29df1ec3f1853f6233141b86a30ec60cccb220479736a56b32c1a77df470c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f29df1ec3f1853f6233141b86a30ec60cccb220479736a56b32c1a77df470c->enter($__internal_b9f29df1ec3f1853f6233141b86a30ec60cccb220479736a56b32c1a77df470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b9f29df1ec3f1853f6233141b86a30ec60cccb220479736a56b32c1a77df470c->leave($__internal_b9f29df1ec3f1853f6233141b86a30ec60cccb220479736a56b32c1a77df470c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1cce44f2b496eae18b8f5cf72407b1598ecbbe218c2f84fc454f7cef7a15c405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cce44f2b496eae18b8f5cf72407b1598ecbbe218c2f84fc454f7cef7a15c405->enter($__internal_1cce44f2b496eae18b8f5cf72407b1598ecbbe218c2f84fc454f7cef7a15c405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1cce44f2b496eae18b8f5cf72407b1598ecbbe218c2f84fc454f7cef7a15c405->leave($__internal_1cce44f2b496eae18b8f5cf72407b1598ecbbe218c2f84fc454f7cef7a15c405_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc3a0f1a94fb9780eb89e564cbcec743140bb48fdd1ea87f7de889f031d30086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3a0f1a94fb9780eb89e564cbcec743140bb48fdd1ea87f7de889f031d30086->enter($__internal_dc3a0f1a94fb9780eb89e564cbcec743140bb48fdd1ea87f7de889f031d30086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc3a0f1a94fb9780eb89e564cbcec743140bb48fdd1ea87f7de889f031d30086->leave($__internal_dc3a0f1a94fb9780eb89e564cbcec743140bb48fdd1ea87f7de889f031d30086_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce5430d7c5deeca17ca268107a287e3292702ac149224cf92e5fd44cfbd332b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5430d7c5deeca17ca268107a287e3292702ac149224cf92e5fd44cfbd332b9->enter($__internal_ce5430d7c5deeca17ca268107a287e3292702ac149224cf92e5fd44cfbd332b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce5430d7c5deeca17ca268107a287e3292702ac149224cf92e5fd44cfbd332b9->leave($__internal_ce5430d7c5deeca17ca268107a287e3292702ac149224cf92e5fd44cfbd332b9_prof);

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
", "base.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/base.html.twig");
    }
}
