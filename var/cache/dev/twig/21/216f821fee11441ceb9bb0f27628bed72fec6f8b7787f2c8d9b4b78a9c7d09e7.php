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
        $__internal_afeb42f953f2046159ee196e7fc8a997b208a12eab3bd6b5c4e6c6448bed954d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afeb42f953f2046159ee196e7fc8a997b208a12eab3bd6b5c4e6c6448bed954d->enter($__internal_afeb42f953f2046159ee196e7fc8a997b208a12eab3bd6b5c4e6c6448bed954d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_afeb42f953f2046159ee196e7fc8a997b208a12eab3bd6b5c4e6c6448bed954d->leave($__internal_afeb42f953f2046159ee196e7fc8a997b208a12eab3bd6b5c4e6c6448bed954d_prof);

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
