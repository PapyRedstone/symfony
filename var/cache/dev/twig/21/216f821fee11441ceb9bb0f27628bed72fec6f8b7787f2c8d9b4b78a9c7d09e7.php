<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbc52713541d035994e8865cb299655a6527c2d9a87235596b02f0d9ec8ee303 extends Twig_Template
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
        $__internal_16973bcded9568eb8c608b4ac02cf85229c261cf2fc05f8c4a13ec3e08f9f42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16973bcded9568eb8c608b4ac02cf85229c261cf2fc05f8c4a13ec3e08f9f42f->enter($__internal_16973bcded9568eb8c608b4ac02cf85229c261cf2fc05f8c4a13ec3e08f9f42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_16973bcded9568eb8c608b4ac02cf85229c261cf2fc05f8c4a13ec3e08f9f42f->leave($__internal_16973bcded9568eb8c608b4ac02cf85229c261cf2fc05f8c4a13ec3e08f9f42f_prof);

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
", "@Framework/Form/form_rows.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
