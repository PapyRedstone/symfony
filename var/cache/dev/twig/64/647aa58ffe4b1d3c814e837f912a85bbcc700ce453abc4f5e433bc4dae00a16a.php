<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_a083bfbcb727a5d6e8ef87a6769380b21d0c26a53f953c1c0691bc4b21db5f26 extends Twig_Template
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
        $__internal_527cd9557e0bfccf1e05ccf4a5793ec9892dc3c22d73ff8c2cc5c54bb2a41aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527cd9557e0bfccf1e05ccf4a5793ec9892dc3c22d73ff8c2cc5c54bb2a41aa8->enter($__internal_527cd9557e0bfccf1e05ccf4a5793ec9892dc3c22d73ff8c2cc5c54bb2a41aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_527cd9557e0bfccf1e05ccf4a5793ec9892dc3c22d73ff8c2cc5c54bb2a41aa8->leave($__internal_527cd9557e0bfccf1e05ccf4a5793ec9892dc3c22d73ff8c2cc5c54bb2a41aa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
