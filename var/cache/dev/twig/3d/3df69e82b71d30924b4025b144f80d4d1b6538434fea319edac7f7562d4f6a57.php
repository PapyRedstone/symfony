<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4637bdf881b03616502cff663e952e1de11fb13ee777e5412be7d6c409e8894f extends Twig_Template
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
        $__internal_81585bb35f5acdf64cbb5d680fd8d8e53d2b63300ca82e1300922b40597e67c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81585bb35f5acdf64cbb5d680fd8d8e53d2b63300ca82e1300922b40597e67c7->enter($__internal_81585bb35f5acdf64cbb5d680fd8d8e53d2b63300ca82e1300922b40597e67c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_81585bb35f5acdf64cbb5d680fd8d8e53d2b63300ca82e1300922b40597e67c7->leave($__internal_81585bb35f5acdf64cbb5d680fd8d8e53d2b63300ca82e1300922b40597e67c7_prof);

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
", "@Framework/Form/submit_widget.html.php", "/home/etdfrm1/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
