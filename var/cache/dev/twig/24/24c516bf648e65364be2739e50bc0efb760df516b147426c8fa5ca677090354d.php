<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8a4a3f2c14d662d33f979ae3736b1b09272c14d24be0e88eea3bf9a747fb080e extends Twig_Template
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
        $__internal_02a582b3ecc6586675481a29e68a4ad6ed2ec451071c6afc4ff15247d1f8c463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a582b3ecc6586675481a29e68a4ad6ed2ec451071c6afc4ff15247d1f8c463->enter($__internal_02a582b3ecc6586675481a29e68a4ad6ed2ec451071c6afc4ff15247d1f8c463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_02a582b3ecc6586675481a29e68a4ad6ed2ec451071c6afc4ff15247d1f8c463->leave($__internal_02a582b3ecc6586675481a29e68a4ad6ed2ec451071c6afc4ff15247d1f8c463_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
