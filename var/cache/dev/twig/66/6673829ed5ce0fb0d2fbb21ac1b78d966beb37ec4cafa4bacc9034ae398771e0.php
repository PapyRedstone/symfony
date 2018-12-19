<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3a4f47f06cc4850114b6cad279ec819b6d39bbd243894e7c04ecf34e7b1d3dee extends Twig_Template
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
        $__internal_cb9d8264aa3f86507d894ed044a6ed9bbb23618e93df57a4ad9dade7395bb92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9d8264aa3f86507d894ed044a6ed9bbb23618e93df57a4ad9dade7395bb92f->enter($__internal_cb9d8264aa3f86507d894ed044a6ed9bbb23618e93df57a4ad9dade7395bb92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_cb9d8264aa3f86507d894ed044a6ed9bbb23618e93df57a4ad9dade7395bb92f->leave($__internal_cb9d8264aa3f86507d894ed044a6ed9bbb23618e93df57a4ad9dade7395bb92f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
