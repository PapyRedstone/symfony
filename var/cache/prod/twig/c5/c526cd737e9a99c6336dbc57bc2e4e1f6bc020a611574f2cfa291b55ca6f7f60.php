<?php

/* FrontOfficeBundle:User:addDay.html.twig */
class __TwigTemplate_2efd68ebfe41f76c04f5e5013e4395d5c9b08a1233fb770473f11834f461970a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontOfficeBundle::base.html.twig", "FrontOfficeBundle:User:addDay.html.twig", 1);
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
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
<button type=\"submit\" value=\"Ajouter\" type=\"button\" class=\"btn btn-success\">Ajouter</button>
";
        // line 8
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_month", array("idMonth" => ($context["idMonth"] ?? null), "idUser" => ($context["idUser"] ?? null))), "html", null, true);
        echo "\"> <button type=\"submit\" value=\"Back\" type=\"button\" class=\"btn btn-primary\">Return</button></a>

";
        // line 12
        if (array_key_exists("message", $context)) {
            // line 13
            echo " ";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
 ";
        }
        // line 15
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:addDay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  55 => 13,  53 => 12,  48 => 10,  43 => 8,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FrontOfficeBundle:User:addDay.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/addDay.html.twig");
    }
}
