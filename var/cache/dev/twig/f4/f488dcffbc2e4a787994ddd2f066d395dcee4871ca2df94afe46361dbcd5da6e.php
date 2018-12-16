<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_621b4e6ebccb3a2e605a7cec5f7c4e0cd5607317224561cd494470a891e83043 extends Twig_Template
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
        $__internal_29e7b7a184750f18b7147486fc8b89f7fa3eafcd6d0d3a07817b0195b3fbb9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e7b7a184750f18b7147486fc8b89f7fa3eafcd6d0d3a07817b0195b3fbb9f7->enter($__internal_29e7b7a184750f18b7147486fc8b89f7fa3eafcd6d0d3a07817b0195b3fbb9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_29e7b7a184750f18b7147486fc8b89f7fa3eafcd6d0d3a07817b0195b3fbb9f7->leave($__internal_29e7b7a184750f18b7147486fc8b89f7fa3eafcd6d0d3a07817b0195b3fbb9f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
