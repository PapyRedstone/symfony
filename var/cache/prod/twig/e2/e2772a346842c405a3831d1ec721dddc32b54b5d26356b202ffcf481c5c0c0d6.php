<?php

/* BackOfficeBundle:Stats:index.html.twig */
class __TwigTemplate_5e17d05908e0d2a91320845361f7bff0765fc5ccd8676f3fb1e327d836a6d700 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["number"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["kilometers"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["lasts"] ?? null));
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
        return array (  201 => 91,  194 => 89,  190 => 87,  187 => 86,  181 => 84,  179 => 83,  175 => 82,  171 => 81,  168 => 80,  164 => 79,  148 => 65,  139 => 62,  135 => 61,  132 => 60,  128 => 59,  113 => 46,  106 => 44,  102 => 42,  99 => 41,  93 => 39,  91 => 38,  87 => 37,  84 => 36,  80 => 35,  65 => 22,  56 => 19,  52 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackOfficeBundle:Stats:index.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Stats/index.html.twig");
    }
}
