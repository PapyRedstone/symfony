<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8252a854c6421daa99114018856cdbaa9f1b2e0859374192c401a423a0469d3d extends Twig_Template
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
        $__internal_ec47b3c71dbde101f9ef2ebe9c9172f134d07bd5e4291ae8616c8fd399ec5d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec47b3c71dbde101f9ef2ebe9c9172f134d07bd5e4291ae8616c8fd399ec5d0a->enter($__internal_ec47b3c71dbde101f9ef2ebe9c9172f134d07bd5e4291ae8616c8fd399ec5d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ec47b3c71dbde101f9ef2ebe9c9172f134d07bd5e4291ae8616c8fd399ec5d0a->leave($__internal_ec47b3c71dbde101f9ef2ebe9c9172f134d07bd5e4291ae8616c8fd399ec5d0a_prof);

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
