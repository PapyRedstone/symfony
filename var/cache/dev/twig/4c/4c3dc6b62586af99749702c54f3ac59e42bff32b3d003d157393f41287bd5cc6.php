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
        $__internal_b622a3a47e3eab0615370c48bc17b0044fdf73f71b77432a40828cbe98bc1ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b622a3a47e3eab0615370c48bc17b0044fdf73f71b77432a40828cbe98bc1ac0->enter($__internal_b622a3a47e3eab0615370c48bc17b0044fdf73f71b77432a40828cbe98bc1ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b622a3a47e3eab0615370c48bc17b0044fdf73f71b77432a40828cbe98bc1ac0->leave($__internal_b622a3a47e3eab0615370c48bc17b0044fdf73f71b77432a40828cbe98bc1ac0_prof);

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
