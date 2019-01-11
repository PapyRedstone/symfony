<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a3f3a44d2e764084f86dbe9d9a3eae62384da0322b720456a52bb3e5e2534743 extends Twig_Template
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
        $__internal_88f2b0cfbcde15765eae9d8b9859b2b55505c32e342503ed1ebc2305f6c5f8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f2b0cfbcde15765eae9d8b9859b2b55505c32e342503ed1ebc2305f6c5f8b7->enter($__internal_88f2b0cfbcde15765eae9d8b9859b2b55505c32e342503ed1ebc2305f6c5f8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_88f2b0cfbcde15765eae9d8b9859b2b55505c32e342503ed1ebc2305f6c5f8b7->leave($__internal_88f2b0cfbcde15765eae9d8b9859b2b55505c32e342503ed1ebc2305f6c5f8b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
