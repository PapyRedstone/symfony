<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_470ece86f7caa8f71cfabe7f1a0afc9d30e3b59eaf777e04bfa5602338541ae2 extends Twig_Template
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
        $__internal_6255d37f4a2cff5104de720de5e478d9428c1c231d18a6b39556ecedf1c119ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6255d37f4a2cff5104de720de5e478d9428c1c231d18a6b39556ecedf1c119ff->enter($__internal_6255d37f4a2cff5104de720de5e478d9428c1c231d18a6b39556ecedf1c119ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_6255d37f4a2cff5104de720de5e478d9428c1c231d18a6b39556ecedf1c119ff->leave($__internal_6255d37f4a2cff5104de720de5e478d9428c1c231d18a6b39556ecedf1c119ff_prof);

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
