<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_1906a180034b40a561599953f6182eb6c017eccc9756fc438f2425bdc27ac7b1 extends Twig_Template
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
        $__internal_96d41fb9c4f2a73cb329805437897aa2e2986d2bdf2a969ad738415ed957b988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d41fb9c4f2a73cb329805437897aa2e2986d2bdf2a969ad738415ed957b988->enter($__internal_96d41fb9c4f2a73cb329805437897aa2e2986d2bdf2a969ad738415ed957b988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_96d41fb9c4f2a73cb329805437897aa2e2986d2bdf2a969ad738415ed957b988->leave($__internal_96d41fb9c4f2a73cb329805437897aa2e2986d2bdf2a969ad738415ed957b988_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
