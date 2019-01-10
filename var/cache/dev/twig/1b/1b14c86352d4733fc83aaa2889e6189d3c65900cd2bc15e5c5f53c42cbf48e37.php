<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9126654a18495fa426239db2160570a92b18340f09b6a42e621bc0c8d7842f45 extends Twig_Template
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
        $__internal_b4e8a304be1df7f17abd34598ad946a0c430c1e7010ccd9c0ea3acb4f52b759f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e8a304be1df7f17abd34598ad946a0c430c1e7010ccd9c0ea3acb4f52b759f->enter($__internal_b4e8a304be1df7f17abd34598ad946a0c430c1e7010ccd9c0ea3acb4f52b759f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b4e8a304be1df7f17abd34598ad946a0c430c1e7010ccd9c0ea3acb4f52b759f->leave($__internal_b4e8a304be1df7f17abd34598ad946a0c430c1e7010ccd9c0ea3acb4f52b759f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
