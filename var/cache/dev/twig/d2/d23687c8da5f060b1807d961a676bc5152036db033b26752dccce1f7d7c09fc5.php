<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d8e3ebd57ed11cfbefad7987a121942b8bc0ddbcfc89aa8f9df1d498b47a6e5c extends Twig_Template
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
        $__internal_bf7273921740a500acd8d3479862d0804418f1cc600062e69c8a0700acbf2e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7273921740a500acd8d3479862d0804418f1cc600062e69c8a0700acbf2e90->enter($__internal_bf7273921740a500acd8d3479862d0804418f1cc600062e69c8a0700acbf2e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bf7273921740a500acd8d3479862d0804418f1cc600062e69c8a0700acbf2e90->leave($__internal_bf7273921740a500acd8d3479862d0804418f1cc600062e69c8a0700acbf2e90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
