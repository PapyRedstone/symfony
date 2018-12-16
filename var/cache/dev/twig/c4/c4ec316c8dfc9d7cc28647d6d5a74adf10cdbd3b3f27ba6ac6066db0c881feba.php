<?php

/* :societe:show.html.twig */
class __TwigTemplate_6fa868a6540d0d3bee4eb36cd5b97045a6992f375564c29097a49b2987d38528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":societe:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_782c452138e8e3ace23ceecbd69452359609aff08bccc93539f43ddeff52b841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782c452138e8e3ace23ceecbd69452359609aff08bccc93539f43ddeff52b841->enter($__internal_782c452138e8e3ace23ceecbd69452359609aff08bccc93539f43ddeff52b841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":societe:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_782c452138e8e3ace23ceecbd69452359609aff08bccc93539f43ddeff52b841->leave($__internal_782c452138e8e3ace23ceecbd69452359609aff08bccc93539f43ddeff52b841_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_956536c761387793109254dbd6916bfc63ce20a506a2cc46cb91a201a3716693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956536c761387793109254dbd6916bfc63ce20a506a2cc46cb91a201a3716693->enter($__internal_956536c761387793109254dbd6916bfc63ce20a506a2cc46cb91a201a3716693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Societe</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Societe</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "societe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("back_office_societe_edit", array("id" => $this->getAttribute(($context["societe"] ?? $this->getContext($context, "societe")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_956536c761387793109254dbd6916bfc63ce20a506a2cc46cb91a201a3716693->leave($__internal_956536c761387793109254dbd6916bfc63ce20a506a2cc46cb91a201a3716693_prof);

    }

    public function getTemplateName()
    {
        return ":societe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Societe</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ societe.id }}</td>
            </tr>
            <tr>
                <th>Societe</th>
                <td>{{ societe.societe }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ societe.adresse }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('back_office_societe_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('back_office_societe_edit', { 'id': societe.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":societe:show.html.twig", "/home/alex/Documents/symfony/symfony/app/Resources/views/societe/show.html.twig");
    }
}
