<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_af5eac1ae479e2311e99bf4d78f1f94d65c3ec2f08a648848f783af6ec5c7bca extends Twig_Template
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
        $__internal_f94cbd45d98c3eaae500ee4916cdd0f703a51d18c38ee05289340699c807584c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f94cbd45d98c3eaae500ee4916cdd0f703a51d18c38ee05289340699c807584c->enter($__internal_f94cbd45d98c3eaae500ee4916cdd0f703a51d18c38ee05289340699c807584c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f94cbd45d98c3eaae500ee4916cdd0f703a51d18c38ee05289340699c807584c->leave($__internal_f94cbd45d98c3eaae500ee4916cdd0f703a51d18c38ee05289340699c807584c_prof);

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
", "@Framework/Form/container_attributes.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
