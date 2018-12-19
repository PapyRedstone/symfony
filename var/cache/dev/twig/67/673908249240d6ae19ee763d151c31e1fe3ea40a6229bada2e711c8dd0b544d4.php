<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_67642c25b4e5043e6eb7cae1b4ba1aa6d94eb7f1114f0a8ef4a740165cb195e1 extends Twig_Template
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
        $__internal_8d4eca58879701caf9c71688a9b85baeb8fb7d563e4ded3d4ef9125cf0582d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4eca58879701caf9c71688a9b85baeb8fb7d563e4ded3d4ef9125cf0582d92->enter($__internal_8d4eca58879701caf9c71688a9b85baeb8fb7d563e4ded3d4ef9125cf0582d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_8d4eca58879701caf9c71688a9b85baeb8fb7d563e4ded3d4ef9125cf0582d92->leave($__internal_8d4eca58879701caf9c71688a9b85baeb8fb7d563e4ded3d4ef9125cf0582d92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
