<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_4e8637446423aba56d7fc0d6879a078733fedd707c46e9175427c08cf07c5b4e extends Twig_Template
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
        $__internal_0ebb72faf7a8ce9e635ce555ead1ed104ff57f5df9aad688175505c6780ff1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebb72faf7a8ce9e635ce555ead1ed104ff57f5df9aad688175505c6780ff1ef->enter($__internal_0ebb72faf7a8ce9e635ce555ead1ed104ff57f5df9aad688175505c6780ff1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0ebb72faf7a8ce9e635ce555ead1ed104ff57f5df9aad688175505c6780ff1ef->leave($__internal_0ebb72faf7a8ce9e635ce555ead1ed104ff57f5df9aad688175505c6780ff1ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
