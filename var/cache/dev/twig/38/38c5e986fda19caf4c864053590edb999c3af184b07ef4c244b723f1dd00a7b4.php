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
        $__internal_47191fce5c3e1e64975d1f7bf4ca9222170f35e67aa8775693b7bc9761f0b92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47191fce5c3e1e64975d1f7bf4ca9222170f35e67aa8775693b7bc9761f0b92b->enter($__internal_47191fce5c3e1e64975d1f7bf4ca9222170f35e67aa8775693b7bc9761f0b92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_47191fce5c3e1e64975d1f7bf4ca9222170f35e67aa8775693b7bc9761f0b92b->leave($__internal_47191fce5c3e1e64975d1f7bf4ca9222170f35e67aa8775693b7bc9761f0b92b_prof);

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
