<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_de4e6a2f3e909fc770ea70adc1fa0c2a11c66a2901c501bd973393230476d3d6 extends Twig_Template
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
        $__internal_f0114a8a6658f8ecd56b3d84d5d7aaf9fef88eb085746bfb2ed54ccfb811b3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0114a8a6658f8ecd56b3d84d5d7aaf9fef88eb085746bfb2ed54ccfb811b3ea->enter($__internal_f0114a8a6658f8ecd56b3d84d5d7aaf9fef88eb085746bfb2ed54ccfb811b3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f0114a8a6658f8ecd56b3d84d5d7aaf9fef88eb085746bfb2ed54ccfb811b3ea->leave($__internal_f0114a8a6658f8ecd56b3d84d5d7aaf9fef88eb085746bfb2ed54ccfb811b3ea_prof);

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
