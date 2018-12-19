<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_5f6c6a28fa4f8090cba09b3b8f3edcba060db22576ff2d29d0e7f1a50eeefd8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eea077ae6f00c986fcb033acac379a2b72443b87522e2ee9f104dca6b86a3b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea077ae6f00c986fcb033acac379a2b72443b87522e2ee9f104dca6b86a3b23->enter($__internal_eea077ae6f00c986fcb033acac379a2b72443b87522e2ee9f104dca6b86a3b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_eea077ae6f00c986fcb033acac379a2b72443b87522e2ee9f104dca6b86a3b23->leave($__internal_eea077ae6f00c986fcb033acac379a2b72443b87522e2ee9f104dca6b86a3b23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
