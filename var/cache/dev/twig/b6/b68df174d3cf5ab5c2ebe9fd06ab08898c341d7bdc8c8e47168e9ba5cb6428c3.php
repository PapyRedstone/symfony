<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9196e4ed7aebace85bdc8468e0ca53f850cc2bd2d9a266995fe66eb4151d6df3 extends Twig_Template
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
        $__internal_9fb121d36d8320f5aef6bd9e74b1c70007f8c58b9c6bf0543709e99b77eccb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb121d36d8320f5aef6bd9e74b1c70007f8c58b9c6bf0543709e99b77eccb4c->enter($__internal_9fb121d36d8320f5aef6bd9e74b1c70007f8c58b9c6bf0543709e99b77eccb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9fb121d36d8320f5aef6bd9e74b1c70007f8c58b9c6bf0543709e99b77eccb4c->leave($__internal_9fb121d36d8320f5aef6bd9e74b1c70007f8c58b9c6bf0543709e99b77eccb4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
