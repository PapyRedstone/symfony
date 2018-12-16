<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_1765fe9cb6e73c87199437c1cebf1a52cfeedeeda655b58b70879a19315ed69f extends Twig_Template
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
        $__internal_f4c4abc2dc9f73fd20e4814142b7a02f2a7ee9778557a5bbd63835ff68dc4a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c4abc2dc9f73fd20e4814142b7a02f2a7ee9778557a5bbd63835ff68dc4a4f->enter($__internal_f4c4abc2dc9f73fd20e4814142b7a02f2a7ee9778557a5bbd63835ff68dc4a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f4c4abc2dc9f73fd20e4814142b7a02f2a7ee9778557a5bbd63835ff68dc4a4f->leave($__internal_f4c4abc2dc9f73fd20e4814142b7a02f2a7ee9778557a5bbd63835ff68dc4a4f_prof);

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
", "@Framework/Form/hidden_row.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
