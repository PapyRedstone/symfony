<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_23cde055bde38cbcb927550d6c4305a41067ee673f21311459a8b1d4f5fa6355 extends Twig_Template
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
        $__internal_a54693e71ec8c79b5b3f76a320f6be094dbe94ce8cb7373ac461ab3aac26e5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a54693e71ec8c79b5b3f76a320f6be094dbe94ce8cb7373ac461ab3aac26e5a4->enter($__internal_a54693e71ec8c79b5b3f76a320f6be094dbe94ce8cb7373ac461ab3aac26e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a54693e71ec8c79b5b3f76a320f6be094dbe94ce8cb7373ac461ab3aac26e5a4->leave($__internal_a54693e71ec8c79b5b3f76a320f6be094dbe94ce8cb7373ac461ab3aac26e5a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
