<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fea3a793720e7e3ca582497db3bcbbd044a3fdefbfd6759e0bc06bfffe26ad1b extends Twig_Template
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
        $__internal_c97a00a51875f84516f99de036de6a6d2d40784bbc3118a79c4bbb8898080721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97a00a51875f84516f99de036de6a6d2d40784bbc3118a79c4bbb8898080721->enter($__internal_c97a00a51875f84516f99de036de6a6d2d40784bbc3118a79c4bbb8898080721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c97a00a51875f84516f99de036de6a6d2d40784bbc3118a79c4bbb8898080721->leave($__internal_c97a00a51875f84516f99de036de6a6d2d40784bbc3118a79c4bbb8898080721_prof);

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
