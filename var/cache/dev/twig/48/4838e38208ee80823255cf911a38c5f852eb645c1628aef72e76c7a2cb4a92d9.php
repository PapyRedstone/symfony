<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_2da45f97a84d85b0b6ee9270749c93c70145fefeb3a1488987b8cb967c5eeb8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da45f97a84d85b0b6ee9270749c93c70145fefeb3a1488987b8cb967c5eeb8e->enter($__internal_2da45f97a84d85b0b6ee9270749c93c70145fefeb3a1488987b8cb967c5eeb8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_2da45f97a84d85b0b6ee9270749c93c70145fefeb3a1488987b8cb967c5eeb8e->leave($__internal_2da45f97a84d85b0b6ee9270749c93c70145fefeb3a1488987b8cb967c5eeb8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
