<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8e83c2e45d457da6b21fac7dff5734ebccf927df869d50871bfefff9c5d646a4 extends Twig_Template
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
        $__internal_1097467b7c2523488371c79655c23ed693bd913b7b30da8e8e9400536c0542f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1097467b7c2523488371c79655c23ed693bd913b7b30da8e8e9400536c0542f2->enter($__internal_1097467b7c2523488371c79655c23ed693bd913b7b30da8e8e9400536c0542f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1097467b7c2523488371c79655c23ed693bd913b7b30da8e8e9400536c0542f2->leave($__internal_1097467b7c2523488371c79655c23ed693bd913b7b30da8e8e9400536c0542f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
