<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6f19f83aee21c410daeb549be94c2bc5abd6e1bdf6bbf6c37be2f734ba5d76e4 extends Twig_Template
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
        $__internal_8b84a256a3481d7537f719c6e257ed6375dfa1664ec7fe9f0fdfee85278ac6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b84a256a3481d7537f719c6e257ed6375dfa1664ec7fe9f0fdfee85278ac6f1->enter($__internal_8b84a256a3481d7537f719c6e257ed6375dfa1664ec7fe9f0fdfee85278ac6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8b84a256a3481d7537f719c6e257ed6375dfa1664ec7fe9f0fdfee85278ac6f1->leave($__internal_8b84a256a3481d7537f719c6e257ed6375dfa1664ec7fe9f0fdfee85278ac6f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
