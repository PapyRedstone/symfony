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
        $__internal_c7565d23269a35e796cbbc6b1677aeeffc952be430c2600c45a057d26fbf6bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7565d23269a35e796cbbc6b1677aeeffc952be430c2600c45a057d26fbf6bae->enter($__internal_c7565d23269a35e796cbbc6b1677aeeffc952be430c2600c45a057d26fbf6bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c7565d23269a35e796cbbc6b1677aeeffc952be430c2600c45a057d26fbf6bae->leave($__internal_c7565d23269a35e796cbbc6b1677aeeffc952be430c2600c45a057d26fbf6bae_prof);

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
