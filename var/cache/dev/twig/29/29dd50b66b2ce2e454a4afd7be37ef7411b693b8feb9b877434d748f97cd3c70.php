<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_884b5b12c30174f72c33b0bb530f05bea55a71bfeddf2fa8331e41adb8bb8327 extends Twig_Template
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
        $__internal_f2672bfa02a5f04eb959fd8609d31fb523e313fbccf20d309cb4e5b05b5c61fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2672bfa02a5f04eb959fd8609d31fb523e313fbccf20d309cb4e5b05b5c61fe->enter($__internal_f2672bfa02a5f04eb959fd8609d31fb523e313fbccf20d309cb4e5b05b5c61fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f2672bfa02a5f04eb959fd8609d31fb523e313fbccf20d309cb4e5b05b5c61fe->leave($__internal_f2672bfa02a5f04eb959fd8609d31fb523e313fbccf20d309cb4e5b05b5c61fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
