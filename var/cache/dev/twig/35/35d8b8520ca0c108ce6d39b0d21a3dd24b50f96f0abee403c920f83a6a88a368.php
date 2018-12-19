<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1765fe9cb6e73c87199437c1cebf1a52cfeedeeda655b58b70879a19315ed69f extends Twig_Template
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
        $__internal_1db407c8726cb87628c433d169e84f042898c29dff1d0f5eb480184297d23337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db407c8726cb87628c433d169e84f042898c29dff1d0f5eb480184297d23337->enter($__internal_1db407c8726cb87628c433d169e84f042898c29dff1d0f5eb480184297d23337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1db407c8726cb87628c433d169e84f042898c29dff1d0f5eb480184297d23337->leave($__internal_1db407c8726cb87628c433d169e84f042898c29dff1d0f5eb480184297d23337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
