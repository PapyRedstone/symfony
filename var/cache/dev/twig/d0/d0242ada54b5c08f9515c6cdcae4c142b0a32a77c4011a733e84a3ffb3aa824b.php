<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_aa0f9e102620f524227ed560377f715cd90a8dd072b73c438f1593724c12c6c0 extends Twig_Template
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
        $__internal_a97573db612621fcb7a4054badb36cc4f7dc4d89b4410ffad4e91011ffa7c387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97573db612621fcb7a4054badb36cc4f7dc4d89b4410ffad4e91011ffa7c387->enter($__internal_a97573db612621fcb7a4054badb36cc4f7dc4d89b4410ffad4e91011ffa7c387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a97573db612621fcb7a4054badb36cc4f7dc4d89b4410ffad4e91011ffa7c387->leave($__internal_a97573db612621fcb7a4054badb36cc4f7dc4d89b4410ffad4e91011ffa7c387_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
