<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8d67977294521cbdd573d9313957690af5053ba214b11d6e5fc83ba4955bbfb4 extends Twig_Template
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
        $__internal_13aefec5e199db5428c784d4e807f3f2f31b9ffb68be0a73b8e3196c8e07891f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13aefec5e199db5428c784d4e807f3f2f31b9ffb68be0a73b8e3196c8e07891f->enter($__internal_13aefec5e199db5428c784d4e807f3f2f31b9ffb68be0a73b8e3196c8e07891f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_13aefec5e199db5428c784d4e807f3f2f31b9ffb68be0a73b8e3196c8e07891f->leave($__internal_13aefec5e199db5428c784d4e807f3f2f31b9ffb68be0a73b8e3196c8e07891f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
