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
        $__internal_f00c6ccdd816a9570841b3b09dc8272d8c4cc3615a819bdc18eba2a7d52a4dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00c6ccdd816a9570841b3b09dc8272d8c4cc3615a819bdc18eba2a7d52a4dd8->enter($__internal_f00c6ccdd816a9570841b3b09dc8272d8c4cc3615a819bdc18eba2a7d52a4dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f00c6ccdd816a9570841b3b09dc8272d8c4cc3615a819bdc18eba2a7d52a4dd8->leave($__internal_f00c6ccdd816a9570841b3b09dc8272d8c4cc3615a819bdc18eba2a7d52a4dd8_prof);

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
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
