<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_51e111d5245a1a3fdb99fdecf81b6fef2bf158dd6fd91323380540be2bfc4c14 extends Twig_Template
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
        $__internal_dad2d5f38113795a3ce63e645763565f4796c19cfd0eda60fdbedeaf4b486e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad2d5f38113795a3ce63e645763565f4796c19cfd0eda60fdbedeaf4b486e52->enter($__internal_dad2d5f38113795a3ce63e645763565f4796c19cfd0eda60fdbedeaf4b486e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dad2d5f38113795a3ce63e645763565f4796c19cfd0eda60fdbedeaf4b486e52->leave($__internal_dad2d5f38113795a3ce63e645763565f4796c19cfd0eda60fdbedeaf4b486e52_prof);

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
