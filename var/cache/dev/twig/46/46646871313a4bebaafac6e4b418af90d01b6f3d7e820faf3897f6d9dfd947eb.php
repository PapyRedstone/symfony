<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a448e84a75f4f924d753cc94cbf46c7d0a437178061c93b24e2cf30494cf9f17 extends Twig_Template
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
        $__internal_f376d7fc3c8c48dfc9c7f4df16cc8e281993bf8f5632f5b9f7d90e61b4c6ff47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f376d7fc3c8c48dfc9c7f4df16cc8e281993bf8f5632f5b9f7d90e61b4c6ff47->enter($__internal_f376d7fc3c8c48dfc9c7f4df16cc8e281993bf8f5632f5b9f7d90e61b4c6ff47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f376d7fc3c8c48dfc9c7f4df16cc8e281993bf8f5632f5b9f7d90e61b4c6ff47->leave($__internal_f376d7fc3c8c48dfc9c7f4df16cc8e281993bf8f5632f5b9f7d90e61b4c6ff47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
