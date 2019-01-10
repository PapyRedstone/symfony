<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_69ed11d4a074f073ddb835f15f96839f0457ea2c244b68bceb26708f124b0a2d extends Twig_Template
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
        $__internal_e0e82e7906d32d8f67be7999da1d7e2058431c1d93bc2e7fb24eae79dae7ce79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e82e7906d32d8f67be7999da1d7e2058431c1d93bc2e7fb24eae79dae7ce79->enter($__internal_e0e82e7906d32d8f67be7999da1d7e2058431c1d93bc2e7fb24eae79dae7ce79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e0e82e7906d32d8f67be7999da1d7e2058431c1d93bc2e7fb24eae79dae7ce79->leave($__internal_e0e82e7906d32d8f67be7999da1d7e2058431c1d93bc2e7fb24eae79dae7ce79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
