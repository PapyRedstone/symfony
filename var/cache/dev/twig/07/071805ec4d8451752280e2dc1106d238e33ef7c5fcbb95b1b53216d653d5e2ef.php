<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_340bb3b776888f5bc15c71b262b3bfe03c9a3f21e6d23cb4c4db392a133802df extends Twig_Template
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
        $__internal_3efe9ffe8a6d0a950a4e3db92dcffca4d752ec2e7623b377a3870fc5eccf1468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3efe9ffe8a6d0a950a4e3db92dcffca4d752ec2e7623b377a3870fc5eccf1468->enter($__internal_3efe9ffe8a6d0a950a4e3db92dcffca4d752ec2e7623b377a3870fc5eccf1468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3efe9ffe8a6d0a950a4e3db92dcffca4d752ec2e7623b377a3870fc5eccf1468->leave($__internal_3efe9ffe8a6d0a950a4e3db92dcffca4d752ec2e7623b377a3870fc5eccf1468_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
