<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_67a3d0fd025a23df0173604c8eb1260e001e403a3bfb9668a6f5ab34a0083e05 extends Twig_Template
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
        $__internal_42f1c8ac645a9392050e7fde9ef56a62c3f20c7ead5970f6021ddea9de6b4b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f1c8ac645a9392050e7fde9ef56a62c3f20c7ead5970f6021ddea9de6b4b43->enter($__internal_42f1c8ac645a9392050e7fde9ef56a62c3f20c7ead5970f6021ddea9de6b4b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_42f1c8ac645a9392050e7fde9ef56a62c3f20c7ead5970f6021ddea9de6b4b43->leave($__internal_42f1c8ac645a9392050e7fde9ef56a62c3f20c7ead5970f6021ddea9de6b4b43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/alex/Documents/symfony/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}