<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b71c5ebdf6ef34780df0e86230da4b00d06de304332916481c09e30e49b94299 extends Twig_Template
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
        $__internal_3654a7f461fb4a7f4dccb50ca4c7a0bfee3b22d34df735a9d5826570b88f7f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3654a7f461fb4a7f4dccb50ca4c7a0bfee3b22d34df735a9d5826570b88f7f6c->enter($__internal_3654a7f461fb4a7f4dccb50ca4c7a0bfee3b22d34df735a9d5826570b88f7f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_3654a7f461fb4a7f4dccb50ca4c7a0bfee3b22d34df735a9d5826570b88f7f6c->leave($__internal_3654a7f461fb4a7f4dccb50ca4c7a0bfee3b22d34df735a9d5826570b88f7f6c_prof);

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
", "@Framework/Form/attributes.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
