<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_41f3b4a1655e728eff6261b2120637265c18b47c2cc5a022a9b52268819b00c3 extends Twig_Template
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
        $__internal_480306e491ff645a3a33525a38f1dd3415b9cecf4dc05ec95b15ecfd6d0bde9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480306e491ff645a3a33525a38f1dd3415b9cecf4dc05ec95b15ecfd6d0bde9d->enter($__internal_480306e491ff645a3a33525a38f1dd3415b9cecf4dc05ec95b15ecfd6d0bde9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_480306e491ff645a3a33525a38f1dd3415b9cecf4dc05ec95b15ecfd6d0bde9d->leave($__internal_480306e491ff645a3a33525a38f1dd3415b9cecf4dc05ec95b15ecfd6d0bde9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
