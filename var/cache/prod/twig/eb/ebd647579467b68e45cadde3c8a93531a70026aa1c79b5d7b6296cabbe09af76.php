<?php

/* FrontOfficeBundle:User:profil.html.twig */
class __TwigTemplate_328b0e70c99088dc753170d8e13be75ba3f24e3b5fc88797a61d8522cb1bcf68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:profil.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "nom", array()), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "prenom", array()), "html", null, true);
        echo "
<table>
  <tr>
    <th> Mois </th>
    <th> Annee </th>
    <th> ID </th>
  </tr>
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
            // line 13
            echo "  <tr>
    <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["month"], "mois", array()), "F"), "html", null, true);
            echo "</td>
    <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "annee", array()), "html", null, true);
            echo "</td>
    <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_movement", array("idMonth" => $this->getAttribute($context["month"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["month"], "id", array()), "html", null, true);
            echo "</a></td>

  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  60 => 16,  56 => 15,  52 => 14,  49 => 13,  45 => 12,  35 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontOfficeBundle:User:profil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
