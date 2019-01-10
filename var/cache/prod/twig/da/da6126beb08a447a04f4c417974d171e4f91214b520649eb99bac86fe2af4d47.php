<?php

/* BackOfficeBundle:Deplacement:detail.html.twig */
class __TwigTemplate_4854a410ff14236b60f9c6d98d8aea31532329c523e3e42b5955b21c2fd2ac86 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h2 class=\"blue\">Deplacement detailed list</h2>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th scope=\"col\">Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["month"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Mois</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["month"] ?? null), "mois", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Annee</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["month"] ?? null), "annee", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de validation</th>
                <td>";
        // line 22
        if ($this->getAttribute(($context["month"] ?? null), "dateValidation", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["month"] ?? null), "dateValidation", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de création</th>
                <td>";
        // line 26
        if ($this->getAttribute(($context["month"] ?? null), "created", array())) {
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["month"] ?? null), "created", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
            <tr>
                <th scope=\"col\">Date de mise à jour</th>
                <td>";
        // line 30
        if ($this->getAttribute(($context["month"] ?? null), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["month"] ?? null), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            echo " ";
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    ";
        // line 35
        if ((($context["idUser"] ?? null) == 1)) {
            // line 36
            echo "
    ";
            // line 37
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
        ";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
        <button type=\"submit\" value=\"Save\" class=\"btn btn-success\"> Save </button>
    ";
            // line 40
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

    ";
        }
        // line 43
        echo "
    <ul>
        <li>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_deplacement_show", array("id" => ($context["idUser"] ?? null))), "html", null, true);
        echo "\" class=\"badge badge-primary\">Back to the list</a>
        </li>
    </ul>

  ";
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
        return array (  118 => 46,  113 => 43,  107 => 40,  102 => 38,  98 => 37,  95 => 36,  93 => 35,  82 => 30,  71 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "BackOfficeBundle:Deplacement:detail.html.twig", "/var/www/html/symfony/src/BackOfficeBundle/Resources/views/Deplacement/detail.html.twig");
    }
}
