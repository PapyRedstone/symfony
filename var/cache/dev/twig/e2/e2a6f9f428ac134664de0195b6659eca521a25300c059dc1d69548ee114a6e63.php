<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5f4dc92f2127384f284401d3085a92727435e9569da5aa900436f96ed0d7b9d8 extends Twig_Template
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
        $__internal_643ddce97a1c46c9ccce9ddfc4465ca136d4d731c6f4e2629cdfae856f9ee7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643ddce97a1c46c9ccce9ddfc4465ca136d4d731c6f4e2629cdfae856f9ee7ba->enter($__internal_643ddce97a1c46c9ccce9ddfc4465ca136d4d731c6f4e2629cdfae856f9ee7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_643ddce97a1c46c9ccce9ddfc4465ca136d4d731c6f4e2629cdfae856f9ee7ba->leave($__internal_643ddce97a1c46c9ccce9ddfc4465ca136d4d731c6f4e2629cdfae856f9ee7ba_prof);

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
", "@Framework/Form/form_rest.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
