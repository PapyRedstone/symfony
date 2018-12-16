<?php

/* :service:new.html.twig */
class __TwigTemplate_ad9ca547da8ad3b7d8f5e08c3c3a1f0403001286a77855beed8c7368018f5fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":service:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fd5a5a04fa415782e8c6a5a9cdab64045e28af3cd9deb400dab67a16354ef50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd5a5a04fa415782e8c6a5a9cdab64045e28af3cd9deb400dab67a16354ef50->enter($__internal_2fd5a5a04fa415782e8c6a5a9cdab64045e28af3cd9deb400dab67a16354ef50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd5a5a04fa415782e8c6a5a9cdab64045e28af3cd9deb400dab67a16354ef50->leave($__internal_2fd5a5a04fa415782e8c6a5a9cdab64045e28af3cd9deb400dab67a16354ef50_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_261d34e84d9ab0e54baaf65d12d13aed578236527ae1043c33e8a2444a48cd6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261d34e84d9ab0e54baaf65d12d13aed578236527ae1043c33e8a2444a48cd6b->enter($__internal_261d34e84d9ab0e54baaf65d12d13aed578236527ae1043c33e8a2444a48cd6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Service creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_service_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_261d34e84d9ab0e54baaf65d12d13aed578236527ae1043c33e8a2444a48cd6b->leave($__internal_261d34e84d9ab0e54baaf65d12d13aed578236527ae1043c33e8a2444a48cd6b_prof);

    }

    public function getTemplateName()
    {
        return ":service:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Service creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('back_office_service_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":service:new.html.twig", "/var/www/html/symfony/app/Resources/views/service/new.html.twig");
    }
}
