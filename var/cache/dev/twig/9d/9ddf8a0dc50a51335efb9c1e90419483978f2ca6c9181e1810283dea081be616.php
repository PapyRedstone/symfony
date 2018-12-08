<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5c39970d0f62eebec53d6d8a047872f68deb9b53c68121b1736044beb2a3c477 extends Twig_Template
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
        $__internal_baad84044e37b5b6fbee5f2d9d1e7366c475127124eb9923f9b27bfaed87db69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baad84044e37b5b6fbee5f2d9d1e7366c475127124eb9923f9b27bfaed87db69->enter($__internal_baad84044e37b5b6fbee5f2d9d1e7366c475127124eb9923f9b27bfaed87db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_baad84044e37b5b6fbee5f2d9d1e7366c475127124eb9923f9b27bfaed87db69->leave($__internal_baad84044e37b5b6fbee5f2d9d1e7366c475127124eb9923f9b27bfaed87db69_prof);

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
