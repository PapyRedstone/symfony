<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fe527007acf5d27a058d7cc714e187ad085376dff826d0e7e109bf7efeaf0710 extends Twig_Template
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
        $__internal_5bb2e340fbcce20c16283e153f3b6e5a00944e589d6d9aa08dce003352bbd1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb2e340fbcce20c16283e153f3b6e5a00944e589d6d9aa08dce003352bbd1bb->enter($__internal_5bb2e340fbcce20c16283e153f3b6e5a00944e589d6d9aa08dce003352bbd1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5bb2e340fbcce20c16283e153f3b6e5a00944e589d6d9aa08dce003352bbd1bb->leave($__internal_5bb2e340fbcce20c16283e153f3b6e5a00944e589d6d9aa08dce003352bbd1bb_prof);

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
", "@Framework/Form/form_end.html.php", "/home/etdfrm1/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}