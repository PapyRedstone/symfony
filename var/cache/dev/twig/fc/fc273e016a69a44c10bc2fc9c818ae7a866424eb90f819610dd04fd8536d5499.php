<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5e0cc3ecdee72d30bccd8a9cb4b67e269489df0230a2cdc9b529fdb210f6a649 extends Twig_Template
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
        $__internal_b2a14c5ed09c809a809f7f59847c7028d196be3cc9c4c933cb7a999775e66b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a14c5ed09c809a809f7f59847c7028d196be3cc9c4c933cb7a999775e66b7d->enter($__internal_b2a14c5ed09c809a809f7f59847c7028d196be3cc9c4c933cb7a999775e66b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b2a14c5ed09c809a809f7f59847c7028d196be3cc9c4c933cb7a999775e66b7d->leave($__internal_b2a14c5ed09c809a809f7f59847c7028d196be3cc9c4c933cb7a999775e66b7d_prof);

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
", "@Framework/Form/form_enctype.html.php", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
