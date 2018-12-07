<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_15da27b6631d8d9442ef3b8cbac72afbf3335b7defc22add87c353f0d08db3d9 extends Twig_Template
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
        $__internal_f8af0029f588c2f817026c39feb990c59b5f42e793a7e39dac6c53a6d18eab0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8af0029f588c2f817026c39feb990c59b5f42e793a7e39dac6c53a6d18eab0f->enter($__internal_f8af0029f588c2f817026c39feb990c59b5f42e793a7e39dac6c53a6d18eab0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_f8af0029f588c2f817026c39feb990c59b5f42e793a7e39dac6c53a6d18eab0f->leave($__internal_f8af0029f588c2f817026c39feb990c59b5f42e793a7e39dac6c53a6d18eab0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
