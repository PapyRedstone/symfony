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
        $__internal_da31e49769c44a1ee0a540fc407fe79c27ce1fd8f893e2b5255042511be46746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da31e49769c44a1ee0a540fc407fe79c27ce1fd8f893e2b5255042511be46746->enter($__internal_da31e49769c44a1ee0a540fc407fe79c27ce1fd8f893e2b5255042511be46746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_da31e49769c44a1ee0a540fc407fe79c27ce1fd8f893e2b5255042511be46746->leave($__internal_da31e49769c44a1ee0a540fc407fe79c27ce1fd8f893e2b5255042511be46746_prof);

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
