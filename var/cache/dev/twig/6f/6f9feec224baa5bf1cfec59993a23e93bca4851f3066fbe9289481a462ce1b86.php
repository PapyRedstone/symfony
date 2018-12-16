<?php

/* FrontOfficeBundle::base.html.twig */
class __TwigTemplate_9c408a8326c5d83cfa11d00f852c7470bb56894087049ab1e257b66c4114314c extends Twig_Template
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
        $__internal_77db800569a6b59411511b21537e56db8b7f614863597ab49e8b378475304a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77db800569a6b59411511b21537e56db8b7f614863597ab49e8b378475304a14->enter($__internal_77db800569a6b59411511b21537e56db8b7f614863597ab49e8b378475304a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle::base.html.twig"));

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
        
        $__internal_77db800569a6b59411511b21537e56db8b7f614863597ab49e8b378475304a14->leave($__internal_77db800569a6b59411511b21537e56db8b7f614863597ab49e8b378475304a14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ff8a57e191c803ce0c2b53c22779d0ff216cfc88200537d7eb4790a05f1714a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff8a57e191c803ce0c2b53c22779d0ff216cfc88200537d7eb4790a05f1714a->enter($__internal_8ff8a57e191c803ce0c2b53c22779d0ff216cfc88200537d7eb4790a05f1714a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PROJET SYMF";
        
        $__internal_8ff8a57e191c803ce0c2b53c22779d0ff216cfc88200537d7eb4790a05f1714a->leave($__internal_8ff8a57e191c803ce0c2b53c22779d0ff216cfc88200537d7eb4790a05f1714a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6d96e7d40d9cdbb3a7b0fc0fd2420b66763c737d9077e80a380680329590e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d96e7d40d9cdbb3a7b0fc0fd2420b66763c737d9077e80a380680329590e7e->enter($__internal_b6d96e7d40d9cdbb3a7b0fc0fd2420b66763c737d9077e80a380680329590e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b6d96e7d40d9cdbb3a7b0fc0fd2420b66763c737d9077e80a380680329590e7e->leave($__internal_b6d96e7d40d9cdbb3a7b0fc0fd2420b66763c737d9077e80a380680329590e7e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e1e9c9aa5fbd40979f990761c7d7abe26544b3185c4cf117415e3e7e6663ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1e9c9aa5fbd40979f990761c7d7abe26544b3185c4cf117415e3e7e6663ce2->enter($__internal_9e1e9c9aa5fbd40979f990761c7d7abe26544b3185c4cf117415e3e7e6663ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e1e9c9aa5fbd40979f990761c7d7abe26544b3185c4cf117415e3e7e6663ce2->leave($__internal_9e1e9c9aa5fbd40979f990761c7d7abe26544b3185c4cf117415e3e7e6663ce2_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bd7677eaf713971b62d130402aa995a2f54b85446aa597f2c96e80ba5462681f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7677eaf713971b62d130402aa995a2f54b85446aa597f2c96e80ba5462681f->enter($__internal_bd7677eaf713971b62d130402aa995a2f54b85446aa597f2c96e80ba5462681f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bd7677eaf713971b62d130402aa995a2f54b85446aa597f2c96e80ba5462681f->leave($__internal_bd7677eaf713971b62d130402aa995a2f54b85446aa597f2c96e80ba5462681f_prof);

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
", "FrontOfficeBundle::base.html.twig", "/home/alex/Documents/symfony/symfony/src/FrontOfficeBundle/Resources/views/base.html.twig");
    }
}
