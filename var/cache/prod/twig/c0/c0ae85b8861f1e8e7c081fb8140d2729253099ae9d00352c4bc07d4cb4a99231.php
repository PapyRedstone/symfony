<?php

/* FrontOfficeBundle:User:show.html.twig */
class __TwigTemplate_9161e06698e2977e5b2cf80a9d3c65f17103265ca36f0c896a3e8169ed8df66b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbdays"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "    <tr>
      <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["monthdays"] ?? null), ($context["i"] - 1), array(), "array"), "html", null, true);
            echo "</td>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</td>
      ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["days"] ?? null));
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_day", array("idDay" => $this->getAttribute($context["day"], "id", array()), "idMonth" => ($context["idMonth"] ?? null), "idUser" => ($context["idUser"] ?? null))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["addition"] ?? null), "sumKM", array()), "html", null, true);
        echo "</th>
      <th>Total Montant : ";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["addition"] ?? null), "sumMontant", array()), 2, ".", ""), "html", null, true);
        echo "</th>
    </tr>
  </tbody>

 <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("add_day", array("idMonth" => ($context["idMonth"] ?? null), "idUser" => ($context["idUser"] ?? null))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Add Day</button></a>
 <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_main_page", array("id" => ($context["idUser"] ?? null))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

";
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
        return array (  127 => 43,  123 => 42,  116 => 38,  112 => 37,  107 => 34,  100 => 32,  94 => 31,  89 => 29,  85 => 28,  80 => 27,  76 => 25,  73 => 24,  69 => 22,  66 => 21,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  48 => 16,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontOfficeBundle:User:show.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/show.html.twig");
    }
}
