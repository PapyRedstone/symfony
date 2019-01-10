<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6ce527fea886f55aa4a8daaea75875b0cb26e8b14b9954b3400de749febbb1e2 extends Twig_Template
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
        $__internal_853db1e8d16508b4f9116a6795dc5cf9fd3cb5e88799be5c0c2e519002cb1a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853db1e8d16508b4f9116a6795dc5cf9fd3cb5e88799be5c0c2e519002cb1a14->enter($__internal_853db1e8d16508b4f9116a6795dc5cf9fd3cb5e88799be5c0c2e519002cb1a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_853db1e8d16508b4f9116a6795dc5cf9fd3cb5e88799be5c0c2e519002cb1a14->leave($__internal_853db1e8d16508b4f9116a6795dc5cf9fd3cb5e88799be5c0c2e519002cb1a14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
