<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4ed0120d80bb5f27d50d28207e423cd733a35014cfe394fcaf80475c1b7ee151 extends Twig_Template
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
        $__internal_b39b996d1d0f05e748f11a79a23df7b2146039f95d0bf44fb2e656994fde1b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b39b996d1d0f05e748f11a79a23df7b2146039f95d0bf44fb2e656994fde1b65->enter($__internal_b39b996d1d0f05e748f11a79a23df7b2146039f95d0bf44fb2e656994fde1b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b39b996d1d0f05e748f11a79a23df7b2146039f95d0bf44fb2e656994fde1b65->leave($__internal_b39b996d1d0f05e748f11a79a23df7b2146039f95d0bf44fb2e656994fde1b65_prof);

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