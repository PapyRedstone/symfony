<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f1971072a857bf356b5ecb76130aa172ae8b4c03e65a71c1501a808b8a4f856f extends Twig_Template
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
        $__internal_78ce94a0b02ee5b31ac8b6912a0afe1fe7d3cf31053aad9928032b1010e31ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78ce94a0b02ee5b31ac8b6912a0afe1fe7d3cf31053aad9928032b1010e31ff1->enter($__internal_78ce94a0b02ee5b31ac8b6912a0afe1fe7d3cf31053aad9928032b1010e31ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_78ce94a0b02ee5b31ac8b6912a0afe1fe7d3cf31053aad9928032b1010e31ff1->leave($__internal_78ce94a0b02ee5b31ac8b6912a0afe1fe7d3cf31053aad9928032b1010e31ff1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
