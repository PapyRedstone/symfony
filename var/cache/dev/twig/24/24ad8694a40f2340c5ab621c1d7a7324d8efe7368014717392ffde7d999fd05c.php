<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4133937cc9720442645f1b742e7676e5fd2ec0011e7ce2b2603aed4db6436f59 extends Twig_Template
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
        $__internal_25a6cf83b91dcbdb99dcd0cda6823fd270a9497632632e9535f88fa01bc02540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a6cf83b91dcbdb99dcd0cda6823fd270a9497632632e9535f88fa01bc02540->enter($__internal_25a6cf83b91dcbdb99dcd0cda6823fd270a9497632632e9535f88fa01bc02540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_25a6cf83b91dcbdb99dcd0cda6823fd270a9497632632e9535f88fa01bc02540->leave($__internal_25a6cf83b91dcbdb99dcd0cda6823fd270a9497632632e9535f88fa01bc02540_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}