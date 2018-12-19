<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6cdd897426f1abb52c3ffa2d00e083549893439ff80e0281f8ced25cbaeb1d9c extends Twig_Template
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
        $__internal_8f766bf422d9ad0c2e66f836a91cabf4fb475a8ed235287d68b26e03a1e59e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f766bf422d9ad0c2e66f836a91cabf4fb475a8ed235287d68b26e03a1e59e25->enter($__internal_8f766bf422d9ad0c2e66f836a91cabf4fb475a8ed235287d68b26e03a1e59e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8f766bf422d9ad0c2e66f836a91cabf4fb475a8ed235287d68b26e03a1e59e25->leave($__internal_8f766bf422d9ad0c2e66f836a91cabf4fb475a8ed235287d68b26e03a1e59e25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
