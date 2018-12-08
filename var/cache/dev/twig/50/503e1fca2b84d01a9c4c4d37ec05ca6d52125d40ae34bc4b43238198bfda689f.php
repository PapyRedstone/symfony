<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7dbf3db3bb7bed2a3f4feef7501c2394c961991fa14539e0d0c8dba0b6de77c extends Twig_Template
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
        $__internal_ee3a80e44d91dc060deab8fe6f42ad0d0ee87f7f118d974d6ddff5dc6b11518c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3a80e44d91dc060deab8fe6f42ad0d0ee87f7f118d974d6ddff5dc6b11518c->enter($__internal_ee3a80e44d91dc060deab8fe6f42ad0d0ee87f7f118d974d6ddff5dc6b11518c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ee3a80e44d91dc060deab8fe6f42ad0d0ee87f7f118d974d6ddff5dc6b11518c->leave($__internal_ee3a80e44d91dc060deab8fe6f42ad0d0ee87f7f118d974d6ddff5dc6b11518c_prof);

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
