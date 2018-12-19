<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_0bdfd9cbfaeb3855aadcce7b158f9fb6baa0def14a5dc43678d7ca52638fc105 extends Twig_Template
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
        $__internal_0a51ca8828b75549a72b1067a02aa69acc7bf3a059393cd7aa3523e64d781c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a51ca8828b75549a72b1067a02aa69acc7bf3a059393cd7aa3523e64d781c18->enter($__internal_0a51ca8828b75549a72b1067a02aa69acc7bf3a059393cd7aa3523e64d781c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_0a51ca8828b75549a72b1067a02aa69acc7bf3a059393cd7aa3523e64d781c18->leave($__internal_0a51ca8828b75549a72b1067a02aa69acc7bf3a059393cd7aa3523e64d781c18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
