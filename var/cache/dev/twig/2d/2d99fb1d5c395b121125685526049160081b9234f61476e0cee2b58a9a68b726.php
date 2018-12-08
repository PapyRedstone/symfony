<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f5a196df2e5708557a5e7834275555f40ae4fddc3fe4fd62de61dfe3d4224757 extends Twig_Template
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
        $__internal_28e9f92ca0fa3cd3e1fba0ae0a3975fd2998ef1626e49c42e46cbfa834ef9b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e9f92ca0fa3cd3e1fba0ae0a3975fd2998ef1626e49c42e46cbfa834ef9b62->enter($__internal_28e9f92ca0fa3cd3e1fba0ae0a3975fd2998ef1626e49c42e46cbfa834ef9b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_28e9f92ca0fa3cd3e1fba0ae0a3975fd2998ef1626e49c42e46cbfa834ef9b62->leave($__internal_28e9f92ca0fa3cd3e1fba0ae0a3975fd2998ef1626e49c42e46cbfa834ef9b62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
