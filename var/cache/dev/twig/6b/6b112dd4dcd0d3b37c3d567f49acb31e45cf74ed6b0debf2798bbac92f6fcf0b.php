<?php

/* BackOfficeBundle:Stats:index.html.twig */
class __TwigTemplate_9211183d88d8362f25487733dd3edd9151f20a18f37169342f096d40b099cff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Stats:index.html.twig", 1);
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
        $__internal_16bd9dae7a94b4841598e1788762d59320d43553c6872a95ee3ed9185d728269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16bd9dae7a94b4841598e1788762d59320d43553c6872a95ee3ed9185d728269->enter($__internal_16bd9dae7a94b4841598e1788762d59320d43553c6872a95ee3ed9185d728269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackOfficeBundle:Stats:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16bd9dae7a94b4841598e1788762d59320d43553c6872a95ee3ed9185d728269->leave($__internal_16bd9dae7a94b4841598e1788762d59320d43553c6872a95ee3ed9185d728269_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71e7be10bf0a3228d363d07d2afff0368436c8b60a623b12f9f20c255daf6810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e7be10bf0a3228d363d07d2afff0368436c8b60a623b12f9f20c255daf6810->enter($__internal_71e7be10bf0a3228d363d07d2afff0368436c8b60a623b12f9f20c255daf6810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"blue\">Stats</h2>

    <h3 class=\"blue\">Nombre d'utilisateurs par ville</h3>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">User</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["number"] ?? $this->getContext($context, "number")));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["num"], "ville", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["num"], "nbre_user", array()), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>

    <h3 class=\"blue\">Nombre de km par société </h3>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Societe</th>
                <th scope=\"col\">KM</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["kilometers"] ?? $this->getContext($context, "kilometers")));
        foreach ($context['_seq'] as $context["_key"] => $context["kilom"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["kilom"], "societe", array()), "html", null, true);
            echo "</td>
                ";
            // line 38
            if ($this->getAttribute($context["kilom"], "nbre_km", array())) {
                // line 39
                echo "                <td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["kilom"], "nbre_km", array()), "html", null, true);
                echo " </td>
                ";
            }
            // line 41
            echo "                ";
            if (($this->getAttribute($context["kilom"], "nbre_km", array()) == null)) {
                // line 42
                echo "                <td> 0 </td>
                ";
            }
            // line 44
            echo "            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kilom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>

    <h3 class=\"blue\">Nombre d'utilisateurs par société</h3>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Societe</th>
                <th scope=\"col\">User</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 60
            echo "            <tr>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "societe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nbre_user", array()), "html", null, true);
            echo "</td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </tbody>
    </table>

    <h3 class=\"blue\">Nombre de km par mois par utilisateurs par société sur l'année en cours</h3>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">User</th>
                <th scope=\"col\">Mois</th>
                <th scope=\"col\">KM</th>
            </tr>
        </thead>
        <tbody>
          ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lasts"] ?? $this->getContext($context, "lasts")));
        foreach ($context['_seq'] as $context["_key"] => $context["last"]) {
            // line 80
            echo "            <tr>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["last"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["last"], "mois", array()), "html", null, true);
            echo "</td>
                ";
            // line 83
            if ($this->getAttribute($context["last"], "km", array())) {
                // line 84
                echo "                <td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["last"], "km", array()), "html", null, true);
                echo " </td>
                ";
            }
            // line 86
            echo "                ";
            if (($this->getAttribute($context["last"], "km", array()) == null)) {
                // line 87
                echo "                <td> 0 </td>
                ";
            }
            // line 89
            echo "           </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['last'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </tbody>
    </table>

";
        
        $__internal_71e7be10bf0a3228d363d07d2afff0368436c8b60a623b12f9f20c255daf6810->leave($__internal_71e7be10bf0a3228d363d07d2afff0368436c8b60a623b12f9f20c255daf6810_prof);

    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Stats:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 91,  203 => 89,  199 => 87,  196 => 86,  190 => 84,  188 => 83,  184 => 82,  180 => 81,  177 => 80,  173 => 79,  157 => 65,  148 => 62,  144 => 61,  141 => 60,  137 => 59,  122 => 46,  115 => 44,  111 => 42,  108 => 41,  102 => 39,  100 => 38,  96 => 37,  93 => 36,  89 => 35,  74 => 22,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h2 class=\"blue\">Stats</h2>

    <h3 class=\"blue\">Nombre d'utilisateurs par ville</h3>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Ville</th>
                <th scope=\"col\">User</th>
            </tr>
        </thead>
        <tbody>
          {% for num in number %}
            <tr>
                <td>{{ num.ville }}</td>
                <td>{{ num.nbre_user}}</td>
            </tr>
          {% endfor %}
        </tbody>
    </table>

    <h3 class=\"blue\">Nombre de km par société </h3>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Societe</th>
                <th scope=\"col\">KM</th>
            </tr>
        </thead>
        <tbody>
          {% for kilom in kilometers %}
            <tr>
                <td>{{ kilom.societe }}</td>
                {% if kilom.nbre_km %}
                <td> {{ kilom.nbre_km }} </td>
                {% endif %}
                {% if kilom.nbre_km == null %}
                <td> 0 </td>
                {% endif %}
            </tr>
          {% endfor %}
        </tbody>
    </table>

    <h3 class=\"blue\">Nombre d'utilisateurs par société</h3>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Societe</th>
                <th scope=\"col\">User</th>
            </tr>
        </thead>
        <tbody>
          {% for user in users %}
            <tr>
                <td>{{ user.societe }}</td>
                <td>{{ user.nbre_user }}</td>
            </tr>
          {% endfor %}
        </tbody>
    </table>

    <h3 class=\"blue\">Nombre de km par mois par utilisateurs par société sur l'année en cours</h3>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">User</th>
                <th scope=\"col\">Mois</th>
                <th scope=\"col\">KM</th>
            </tr>
        </thead>
        <tbody>
          {% for last in lasts %}
            <tr>
                <td>{{ last.nom }}</td>
                <td>{{ last.mois }}</td>
                {% if last.km %}
                <td> {{ last.km }} </td>
                {% endif %}
                {% if last.km == null %}
                <td> 0 </td>
                {% endif %}
           </tr>
          {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "BackOfficeBundle:Stats:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Stats/index.html.twig");
    }
}
