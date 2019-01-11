<?php

/* BackOfficeBundle:Deplacement:detail.html.twig */
class __TwigTemplate_7009ccd6613d221bc902b37b04efa57c6efe17f3df7a35599a2a96a9c1f43f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Deplacement:detail.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackOfficeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5daddaf182ac0a499000c244b1ed126f5a7497043d669b635e85acbade2c708d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5daddaf182ac0a499000c244b1ed126f5a7497043d669b635e85acbade2c708d->enter($__internal_5daddaf182ac0a499000c244b1ed126f5a7497043d669b635e85acbade2c708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Deplacement:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5daddaf182ac0a499000c244b1ed126f5a7497043d669b635e85acbade2c708d->leave($__internal_5daddaf182ac0a499000c244b1ed126f5a7497043d669b635e85acbade2c708d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e80e56eee1c9c204e6cfacfff14176224c42f9cd5c82b8535605d6a778332e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80e56eee1c9c204e6cfacfff14176224c42f9cd5c82b8535605d6a778332e4d->enter($__internal_e80e56eee1c9c204e6cfacfff14176224c42f9cd5c82b8535605d6a778332e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Deplacement detailed list</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Mois</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "mois", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Annee</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "annee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de validation</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "dateValidation", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "dateValidation", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de création</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "created", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de mise à jour</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["month"] ?? $this->getContext($context, "month")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 35
        if ((($context["idUser"] ?? $this->getContext($context, "idUser")) == 1)) {
            // line 36
            echo "
    ";
            // line 37
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
            echo "
        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            echo "
        <button type=\"submit\" value=\"Save\" class=\"btn btn-success\"> Save </button>
    ";
            // line 40
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
            echo "

    ";
        }
        // line 43
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_show", array("id" => ($context["idUser"] ?? $this->getContext($context, "idUser")))), "html", null, true);
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>

  ";
        
        $__internal_e80e56eee1c9c204e6cfacfff14176224c42f9cd5c82b8535605d6a778332e4d->leave($__internal_e80e56eee1c9c204e6cfacfff14176224c42f9cd5c82b8535605d6a778332e4d_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Deplacement:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  122 => 43,  116 => 40,  111 => 38,  107 => 37,  104 => 36,  102 => 35,  91 => 30,  80 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BackOfficeBundle::base.html.twig' %}

{% block body %}
    <h2 class=\"blue\">Deplacement detailed list</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>{{ month.id }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Mois</th>
                <td>{{ month.mois }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Annee</th>
                <td>{{ month.annee }}</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de validation</th>
                <td>{% if month.dateValidation %} {{ month.dateValidation| date('Y-m-d H:i:s')}} {% endif %}</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de création</th>
                <td>{% if month.created %} {{ month.created| date('Y-m-d H:i:s')}} {% endif %}</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de mise à jour</th>
                <td>{% if month.updated %}{{ month.updated| date('Y-m-d H:i:s')}} {% endif %}</td>
            </tr>
        </tbody>
    </table>

    {% if idUser == 1 %}

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <button type=\"submit\" value=\"Save\" class=\"btn btn-success\"> Save </button>
    {{form_end(form) }}

    {% endif %}

    <ul>
        <li>
            <a href=\"{{ path('back_office_deplacement_show',{id:idUser}) }}\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>

  {% endblock %}
", "BackOfficeBundle:Deplacement:detail.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Deplacement/detail.html.twig");
    }
}
