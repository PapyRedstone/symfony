<?php

/* BackOfficeBundle:Deplacement:show.html.twig */
class __TwigTemplate_a03838ab6d10f858340c5d5a727f179193490152e0b515a3b1a73513ad771399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BackOfficeBundle::base.html.twig", "BackOfficeBundle:Deplacement:show.html.twig", 1);
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
        echo "    <h2 class=\"blue\">Deplacement list</h2>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th scope=\"col\">Année</th>
                <th scope=\"col\">Mois</th>
                <th scope=\"col\">Validé ?</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "annee", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "mois", array()), "html", null, true);
            echo "</td>
                ";
            // line 19
            if (($this->getAttribute($context["month"], "validation", array()) == 1)) {
                // line 20
                echo "                  <td>Oui</td>
                ";
            }
            // line 22
            echo "                ";
            if (($this->getAttribute($context["month"], "validation", array()) == 0)) {
                // line 23
                echo "                  <td>Non</td>
                ";
            }
            // line 25
            echo "                ";
            if ((($context["id"] ?? null) != 1)) {
                // line 26
                echo "                <td>
                    <a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_detail", array("idUser" => ($context["id"] ?? null), "idMonth" => $this->getAttribute($context["month"], "id", array()))), "html", null, true);
                echo "\" class=\"badge badge-primary\"> Detail </a>
                </td>
                ";
            }
            // line 30
            echo "                ";
            if ((($context["id"] ?? null) == 1)) {
                // line 31
                echo "                <td>
                    <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_detail", array("idUser" => ($context["id"] ?? null), "idMonth" => $this->getAttribute($context["month"], "id", array()))), "html", null, true);
                echo "\" class=\"badge badge-primary\"> Change state </a>
                </td>
                ";
            }
            // line 35
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_index");
        echo "\" class=\"badge badge-primary\">Back</a>
        </li>
    </ul>

";
    }

    public function getTemplateName()
    {
        return "BackOfficeBundle:Deplacement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 42,  103 => 37,  96 => 35,  90 => 32,  87 => 31,  84 => 30,  78 => 27,  75 => 26,  72 => 25,  68 => 23,  65 => 22,  61 => 20,  59 => 19,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackOfficeBundle:Deplacement:show.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Deplacement/show.html.twig");
    }
}
