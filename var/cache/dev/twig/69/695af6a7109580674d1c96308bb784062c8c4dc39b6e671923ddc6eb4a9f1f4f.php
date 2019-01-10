<?php

/* FrontOfficeBundle:User:show.html.twig */
class __TwigTemplate_1b6fb8868e8ed684c4a44bd212d12b926826ada3c934dedf77ba003d5547479c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontOfficeBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9049c6b087eba4fc4e66d37b75ee5a3f34bc329a95c9e8f8ce94d338b8f50633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9049c6b087eba4fc4e66d37b75ee5a3f34bc329a95c9e8f8ce94d338b8f50633->enter($__internal_9049c6b087eba4fc4e66d37b75ee5a3f34bc329a95c9e8f8ce94d338b8f50633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9049c6b087eba4fc4e66d37b75ee5a3f34bc329a95c9e8f8ce94d338b8f50633->leave($__internal_9049c6b087eba4fc4e66d37b75ee5a3f34bc329a95c9e8f8ce94d338b8f50633_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eddcac2539f0560c84b46cb327e6bab5edbe4c305bee6681cd2e1dbf01cd09a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eddcac2539f0560c84b46cb327e6bab5edbe4c305bee6681cd2e1dbf01cd09a->enter($__internal_6eddcac2539f0560c84b46cb327e6bab5edbe4c305bee6681cd2e1dbf01cd09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<table class=\"table table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\" colspan=\"2\">Date</th>
      <th scope=\"col\">Utilisation du vélo</th>
      <th scope=\"col\">Nb Kilomètres en vélo</th>
      <th scope=\"col\">Indémnisation</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbdays"] ?? $this->getContext($context, "nbdays"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "    <tr>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monthdays"] ?? $this->getContext($context, "monthdays")), ($context["i"] - 1), array(), "array"), "html", null, true);
            echo "</td>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
      ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["days"] ?? $this->getContext($context, "days")));
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 20
                echo "        ";
                if (($this->getAttribute($context["day"], "jour", array()) == $context["i"])) {
                    // line 21
                    echo "         ";
                    if (($this->getAttribute($context["day"], "type_deplacement_id", array()) == 1)) {
                        // line 22
                        echo "            <td> Oui </td>
         ";
                    }
                    // line 24
                    echo "         ";
                    if (($this->getAttribute($context["day"], "type_deplacement_id", array()) != 1)) {
                        // line 25
                        echo "            <td> Non </td>
         ";
                    }
                    // line 27
                    echo "            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "nb_km", array()), "html", null, true);
                    echo " KM</td>
            <td>";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "montant", array()), "html", null, true);
                    echo " €</td>
            <td> <a href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_day", array("idDay" => $this->getAttribute($context["day"], "id", array()), "idMonth" => ($context["idMonth"] ?? $this->getContext($context, "idMonth")), "idUser" => ($context["idUser"] ?? $this->getContext($context, "idUser")))), "html", null, true);
                    echo "\" class=\"badge badge-secondary\"> Edit </a> </td>
        ";
                }
                // line 31
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    <tr>
      <th colspan=\"2\"> Sous-Total </th>
      <th colspan=\"1\"></th>
      <th>Total KM : ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["addition"] ?? $this->getContext($context, "addition")), "sumKM", array()), "html", null, true);
        echo "</th>
      <th>Total Montant : ";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["addition"] ?? $this->getContext($context, "addition")), "sumMontant", array()), 2, ".", ""), "html", null, true);
        echo "</th>
    </tr>
  </tbody>

 <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_day", array("idMonth" => ($context["idMonth"] ?? $this->getContext($context, "idMonth")), "idUser" => ($context["idUser"] ?? $this->getContext($context, "idUser")))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Add Day</button></a>
 <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_main_page", array("id" => ($context["idUser"] ?? $this->getContext($context, "idUser")))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

";
        
        $__internal_6eddcac2539f0560c84b46cb327e6bab5edbe4c305bee6681cd2e1dbf01cd09a->leave($__internal_6eddcac2539f0560c84b46cb327e6bab5edbe4c305bee6681cd2e1dbf01cd09a_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 43,  132 => 42,  125 => 38,  121 => 37,  116 => 34,  109 => 32,  103 => 31,  98 => 29,  94 => 28,  89 => 27,  85 => 25,  82 => 24,  78 => 22,  75 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FrontOfficeBundle::base.html.twig' %}

{% block body %}

<table class=\"table table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\" colspan=\"2\">Date</th>
      <th scope=\"col\">Utilisation du vélo</th>
      <th scope=\"col\">Nb Kilomètres en vélo</th>
      <th scope=\"col\">Indémnisation</th>
    </tr>
  </thead>
  <tbody>
    {% for i in 1..nbdays %}
    <tr>
      <td>{{monthdays[i-1]}}</td>
      <td>{{i}}</td>
      {% for day in days %}
        {% if day.jour == i %}
         {% if day.type_deplacement_id == 1 %}
            <td> Oui </td>
         {% endif %}
         {% if day.type_deplacement_id != 1 %}
            <td> Non </td>
         {% endif %}
            <td>{{ day.nb_km }} KM</td>
            <td>{{ day.montant }} €</td>
            <td> <a href=\"{{path('edit_day',{idDay:day.id,idMonth:idMonth,idUser:idUser})}}\" class=\"badge badge-secondary\"> Edit </a> </td>
        {% endif %}
      {% endfor %}
    </tr>
    {% endfor %}
    <tr>
      <th colspan=\"2\"> Sous-Total </th>
      <th colspan=\"1\"></th>
      <th>Total KM : {{addition.sumKM}}</th>
      <th>Total Montant : {{addition.sumMontant|number_format(2,'.','')}}</th>
    </tr>
  </tbody>

 <a href=\"{{path('add_day',{idMonth:idMonth,idUser:idUser})}}\"> <button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Add Day</button></a>
 <a href=\"{{path('user_main_page',{id:idUser})}}\"> <button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

{% endblock body %}
", "FrontOfficeBundle:User:show.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/show.html.twig");
    }
}
