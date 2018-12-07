<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_21bf25ba5435be42c4214c332fa4f6345b62dcb0fc9dc2637a285e56e4474213 extends Twig_Template
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
        $__internal_ad116bcff2d2f5143c2ec4a2c05c180a6614d97a2a4c9e7d8fa8acc009ea3e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad116bcff2d2f5143c2ec4a2c05c180a6614d97a2a4c9e7d8fa8acc009ea3e71->enter($__internal_ad116bcff2d2f5143c2ec4a2c05c180a6614d97a2a4c9e7d8fa8acc009ea3e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ad116bcff2d2f5143c2ec4a2c05c180a6614d97a2a4c9e7d8fa8acc009ea3e71->leave($__internal_ad116bcff2d2f5143c2ec4a2c05c180a6614d97a2a4c9e7d8fa8acc009ea3e71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
