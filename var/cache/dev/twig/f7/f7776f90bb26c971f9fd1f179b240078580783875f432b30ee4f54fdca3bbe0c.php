<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e221dc7f0431995de97ca8f18007c0d130cf551645df09fc1c866f19ca1db3cd extends Twig_Template
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
        $__internal_1dd24e2a4d904f81f5ad60e1db606bd65c51bab29a8245c3ecd877eae3372f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd24e2a4d904f81f5ad60e1db606bd65c51bab29a8245c3ecd877eae3372f2c->enter($__internal_1dd24e2a4d904f81f5ad60e1db606bd65c51bab29a8245c3ecd877eae3372f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1dd24e2a4d904f81f5ad60e1db606bd65c51bab29a8245c3ecd877eae3372f2c->leave($__internal_1dd24e2a4d904f81f5ad60e1db606bd65c51bab29a8245c3ecd877eae3372f2c_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
