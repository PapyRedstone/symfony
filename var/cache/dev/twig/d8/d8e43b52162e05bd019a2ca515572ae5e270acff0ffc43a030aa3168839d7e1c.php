<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ca1a136e16166ff5bb78fd42352259b0bd66162e2ca859c77181440cb3aac0b7 extends Twig_Template
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
        $__internal_99062ea8b82007a325464df19da5eda52e4a3d9e53f8692b9b9941d2358a428d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99062ea8b82007a325464df19da5eda52e4a3d9e53f8692b9b9941d2358a428d->enter($__internal_99062ea8b82007a325464df19da5eda52e4a3d9e53f8692b9b9941d2358a428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_99062ea8b82007a325464df19da5eda52e4a3d9e53f8692b9b9941d2358a428d->leave($__internal_99062ea8b82007a325464df19da5eda52e4a3d9e53f8692b9b9941d2358a428d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
