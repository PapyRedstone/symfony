<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_af9f2ea9777ee535006a18130e3b24850d2b3db54841f27a9f62f761ba469b09 extends Twig_Template
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
        $__internal_99c81398b42d8d084fa58f9b1b4f5bc1a4bd92d880fc580ff978b046604442e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c81398b42d8d084fa58f9b1b4f5bc1a4bd92d880fc580ff978b046604442e0->enter($__internal_99c81398b42d8d084fa58f9b1b4f5bc1a4bd92d880fc580ff978b046604442e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_99c81398b42d8d084fa58f9b1b4f5bc1a4bd92d880fc580ff978b046604442e0->leave($__internal_99c81398b42d8d084fa58f9b1b4f5bc1a4bd92d880fc580ff978b046604442e0_prof);

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
