<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5389b482a82e312ad5d6d8ae6e0f7253d77174e10b8f4acfd216e8e2e0b1092f extends Twig_Template
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
        $__internal_8c95cb2bbe3dba71aef2f3f1fdd18c6ce4acea8b5f3f5521023bcb25ea2f791b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c95cb2bbe3dba71aef2f3f1fdd18c6ce4acea8b5f3f5521023bcb25ea2f791b->enter($__internal_8c95cb2bbe3dba71aef2f3f1fdd18c6ce4acea8b5f3f5521023bcb25ea2f791b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8c95cb2bbe3dba71aef2f3f1fdd18c6ce4acea8b5f3f5521023bcb25ea2f791b->leave($__internal_8c95cb2bbe3dba71aef2f3f1fdd18c6ce4acea8b5f3f5521023bcb25ea2f791b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
