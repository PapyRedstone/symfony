<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b07e46fbab6e3248060ff90543cdffd6f6a1d4fa5702a6041c2a9f107df8af71 extends Twig_Template
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
        $__internal_d7c98cd5b267ecc689e32e1d5a977fab27147cc9b276a658e2583a89fa6afd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c98cd5b267ecc689e32e1d5a977fab27147cc9b276a658e2583a89fa6afd37->enter($__internal_d7c98cd5b267ecc689e32e1d5a977fab27147cc9b276a658e2583a89fa6afd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d7c98cd5b267ecc689e32e1d5a977fab27147cc9b276a658e2583a89fa6afd37->leave($__internal_d7c98cd5b267ecc689e32e1d5a977fab27147cc9b276a658e2583a89fa6afd37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
