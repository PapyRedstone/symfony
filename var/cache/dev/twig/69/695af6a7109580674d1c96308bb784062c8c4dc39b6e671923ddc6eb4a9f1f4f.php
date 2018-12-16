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
        $__internal_be80ee84ea472779e6d1241cf0b87cb64d9936d7e6a16fd09fb5d5c3a5b64870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be80ee84ea472779e6d1241cf0b87cb64d9936d7e6a16fd09fb5d5c3a5b64870->enter($__internal_be80ee84ea472779e6d1241cf0b87cb64d9936d7e6a16fd09fb5d5c3a5b64870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be80ee84ea472779e6d1241cf0b87cb64d9936d7e6a16fd09fb5d5c3a5b64870->leave($__internal_be80ee84ea472779e6d1241cf0b87cb64d9936d7e6a16fd09fb5d5c3a5b64870_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a63f46c49bfe3e75a0b9001a89c73966f1bf077d7d750dd1d9ef5c38fc7ae14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a63f46c49bfe3e75a0b9001a89c73966f1bf077d7d750dd1d9ef5c38fc7ae14->enter($__internal_5a63f46c49bfe3e75a0b9001a89c73966f1bf077d7d750dd1d9ef5c38fc7ae14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<table class=\"table table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\" colspan=\"2\">Date</th>
      <th scope=\"col\">Utilisation du vélo</th>
      <th scope=\"col\">Aller-retour ?</th>
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
                echo "      ";
                if (($this->getAttribute($context["day"], "jour", array()) == $context["i"])) {
                    // line 21
                    echo "      <td> Oui </td>
      ";
                }
                // line 23
                echo "
      <td> Oui </td>
      <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "nb_km", array()), "html", null, true);
                echo " KM</td>
      <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "montant", array()), "html", null, true);
                echo " €</td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <tr>
      <th colspan=\"2\"> Sous-Total </th>
      <th colspan=\"2\"></th>
      ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["addition"] ?? $this->getContext($context, "addition")));
        echo "
    </tr>
  </tbody>

";
        
        $__internal_5a63f46c49bfe3e75a0b9001a89c73966f1bf077d7d750dd1d9ef5c38fc7ae14->leave($__internal_5a63f46c49bfe3e75a0b9001a89c73966f1bf077d7d750dd1d9ef5c38fc7ae14_prof);

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
        return array (  107 => 33,  102 => 30,  95 => 28,  87 => 26,  83 => 25,  79 => 23,  75 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontOfficeBundle::base.html.twig\" %}

{% block body %}
<table class=\"table table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\" colspan=\"2\">Date</th>
      <th scope=\"col\">Utilisation du vélo</th>
      <th scope=\"col\">Aller-retour ?</th>
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
      <td> Oui </td>
      {% endif %}

      <td> Oui </td>
      <td>{{ day.nb_km }} KM</td>
      <td>{{ day.montant }} €</td>
      {% endfor %}
    </tr>
    {% endfor %}
    <tr>
      <th colspan=\"2\"> Sous-Total </th>
      <th colspan=\"2\"></th>
      {{dump(addition)}}
    </tr>
  </tbody>

{% endblock body %}
", "FrontOfficeBundle:User:show.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/show.html.twig");
    }
}
