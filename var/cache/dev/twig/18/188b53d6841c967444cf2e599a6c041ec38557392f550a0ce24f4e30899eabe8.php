<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_79bfab8df894d72ef0c9d378b1326c78f38ea0826f0fe8f589959335acee2344 extends Twig_Template
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
        $__internal_1bdcf56eaa780e540726f5d85d3401658dc2743fce5133d34a523b000f8e5733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdcf56eaa780e540726f5d85d3401658dc2743fce5133d34a523b000f8e5733->enter($__internal_1bdcf56eaa780e540726f5d85d3401658dc2743fce5133d34a523b000f8e5733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1bdcf56eaa780e540726f5d85d3401658dc2743fce5133d34a523b000f8e5733->leave($__internal_1bdcf56eaa780e540726f5d85d3401658dc2743fce5133d34a523b000f8e5733_prof);

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
", "@Framework/Form/choice_options.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
