<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7c5fcd7b35705cec9952c5d6841ebd1667802989e595ee7646c93bff6af1dc02 extends Twig_Template
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
        $__internal_aff50ba61cbf08cc798ffb5250193b965ff13a3d5ea3ae2261266541f1181d05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff50ba61cbf08cc798ffb5250193b965ff13a3d5ea3ae2261266541f1181d05->enter($__internal_aff50ba61cbf08cc798ffb5250193b965ff13a3d5ea3ae2261266541f1181d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_aff50ba61cbf08cc798ffb5250193b965ff13a3d5ea3ae2261266541f1181d05->leave($__internal_aff50ba61cbf08cc798ffb5250193b965ff13a3d5ea3ae2261266541f1181d05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
