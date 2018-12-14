<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_53baf6e3b0e402a2e2cc59d1c5a4dbe9bc15f0898ffe339995a272febeb10a70 extends Twig_Template
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
        $__internal_a9be85e2e57cc4e110055693b4b680145ab2a83cd8a1b59a1259a7b8bda63796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9be85e2e57cc4e110055693b4b680145ab2a83cd8a1b59a1259a7b8bda63796->enter($__internal_a9be85e2e57cc4e110055693b4b680145ab2a83cd8a1b59a1259a7b8bda63796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a9be85e2e57cc4e110055693b4b680145ab2a83cd8a1b59a1259a7b8bda63796->leave($__internal_a9be85e2e57cc4e110055693b4b680145ab2a83cd8a1b59a1259a7b8bda63796_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
