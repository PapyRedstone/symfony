<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_26b9392de537d0fb50c53ffdbf4bac1fdac3ff02fb7a93b6484b5ed040cf7b10 extends Twig_Template
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
        $__internal_a1b5f8a422901ab92ae476133356072a8ed618e415fd24fb7c8f8283fdb937cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b5f8a422901ab92ae476133356072a8ed618e415fd24fb7c8f8283fdb937cf->enter($__internal_a1b5f8a422901ab92ae476133356072a8ed618e415fd24fb7c8f8283fdb937cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a1b5f8a422901ab92ae476133356072a8ed618e415fd24fb7c8f8283fdb937cf->leave($__internal_a1b5f8a422901ab92ae476133356072a8ed618e415fd24fb7c8f8283fdb937cf_prof);

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
", "@Framework/Form/form.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
