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
        $__internal_de6289f26b5a0f4fee9a4f8c4abecaae1cc2a03203426afd14259aa7dfa1ec72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de6289f26b5a0f4fee9a4f8c4abecaae1cc2a03203426afd14259aa7dfa1ec72->enter($__internal_de6289f26b5a0f4fee9a4f8c4abecaae1cc2a03203426afd14259aa7dfa1ec72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_de6289f26b5a0f4fee9a4f8c4abecaae1cc2a03203426afd14259aa7dfa1ec72->leave($__internal_de6289f26b5a0f4fee9a4f8c4abecaae1cc2a03203426afd14259aa7dfa1ec72_prof);

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
