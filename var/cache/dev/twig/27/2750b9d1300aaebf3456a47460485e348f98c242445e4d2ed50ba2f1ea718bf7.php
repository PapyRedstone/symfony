<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2c228ff89ea824f8304342d91829e435e76584699d9c13838ab48d152ab6eba3 extends Twig_Template
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
        $__internal_162f3a0c0f82b52f03cf6084b724f2f936776f5495ce8eaa160a1ba2fc531521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162f3a0c0f82b52f03cf6084b724f2f936776f5495ce8eaa160a1ba2fc531521->enter($__internal_162f3a0c0f82b52f03cf6084b724f2f936776f5495ce8eaa160a1ba2fc531521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_162f3a0c0f82b52f03cf6084b724f2f936776f5495ce8eaa160a1ba2fc531521->leave($__internal_162f3a0c0f82b52f03cf6084b724f2f936776f5495ce8eaa160a1ba2fc531521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
