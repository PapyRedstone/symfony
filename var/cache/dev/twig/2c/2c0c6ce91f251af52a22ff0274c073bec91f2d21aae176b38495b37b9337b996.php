<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3b3e3ab11f36e90f40ec7fd694db2f9c13abb04dd01e82a37a6e9fa6d144ff22 extends Twig_Template
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
        $__internal_dd1d1bee8e4cb3ea057e734f5ec7833f3e70626777a13c6617a89e21eeb273c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1d1bee8e4cb3ea057e734f5ec7833f3e70626777a13c6617a89e21eeb273c5->enter($__internal_dd1d1bee8e4cb3ea057e734f5ec7833f3e70626777a13c6617a89e21eeb273c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_dd1d1bee8e4cb3ea057e734f5ec7833f3e70626777a13c6617a89e21eeb273c5->leave($__internal_dd1d1bee8e4cb3ea057e734f5ec7833f3e70626777a13c6617a89e21eeb273c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
