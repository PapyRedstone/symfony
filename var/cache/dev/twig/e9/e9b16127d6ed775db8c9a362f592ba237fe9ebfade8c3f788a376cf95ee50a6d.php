<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_459766a1e8f95d03e9fe28a221657f6f4fa0852589b24391a96ca38494865693 extends Twig_Template
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
        $__internal_8345a61d71521a39ef1e5428f7d32540e15a083c3b0f4cfcb0edc1f816c9a052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8345a61d71521a39ef1e5428f7d32540e15a083c3b0f4cfcb0edc1f816c9a052->enter($__internal_8345a61d71521a39ef1e5428f7d32540e15a083c3b0f4cfcb0edc1f816c9a052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8345a61d71521a39ef1e5428f7d32540e15a083c3b0f4cfcb0edc1f816c9a052->leave($__internal_8345a61d71521a39ef1e5428f7d32540e15a083c3b0f4cfcb0edc1f816c9a052_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
