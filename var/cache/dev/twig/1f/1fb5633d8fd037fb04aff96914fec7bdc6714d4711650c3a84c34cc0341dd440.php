<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_aacdb3ce835ec3a01cbe53001c34bef3cb44bf2fd5c1612feb6db0af6f673d5e extends Twig_Template
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
        $__internal_5dbc831441c789464b7ed06f2d9dae5dc05c7d626c4c8acd21f78858cfe4224a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbc831441c789464b7ed06f2d9dae5dc05c7d626c4c8acd21f78858cfe4224a->enter($__internal_5dbc831441c789464b7ed06f2d9dae5dc05c7d626c4c8acd21f78858cfe4224a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5dbc831441c789464b7ed06f2d9dae5dc05c7d626c4c8acd21f78858cfe4224a->leave($__internal_5dbc831441c789464b7ed06f2d9dae5dc05c7d626c4c8acd21f78858cfe4224a_prof);

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
", "@Framework/Form/integer_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
