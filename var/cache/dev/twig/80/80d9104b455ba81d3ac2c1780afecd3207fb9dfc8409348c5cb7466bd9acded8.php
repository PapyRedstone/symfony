<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_14006793ff0e0fc11971a0eb9ccd995c1b59242fb07f6c2c641d8b3cbcf95cac extends Twig_Template
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
        $__internal_f4ecb8f972bf75dd57713b0df53db701a03c1fde10b4f5b8af43a88c736e531d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ecb8f972bf75dd57713b0df53db701a03c1fde10b4f5b8af43a88c736e531d->enter($__internal_f4ecb8f972bf75dd57713b0df53db701a03c1fde10b4f5b8af43a88c736e531d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f4ecb8f972bf75dd57713b0df53db701a03c1fde10b4f5b8af43a88c736e531d->leave($__internal_f4ecb8f972bf75dd57713b0df53db701a03c1fde10b4f5b8af43a88c736e531d_prof);

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
