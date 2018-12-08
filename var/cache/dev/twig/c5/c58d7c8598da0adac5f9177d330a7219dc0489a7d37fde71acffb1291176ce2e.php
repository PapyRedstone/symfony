<?php

/* FrontOfficeBundle:User:profil.html.twig */
class __TwigTemplate_81da948e18bf32ac1449c38c8d7a6b9465b5ab83dfb514c625b65421728f4243 extends Twig_Template
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
        $__internal_a1061dc218a2eca1fabe7aabfa4358373eb3a7135a9af1b851964789f6ac3752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1061dc218a2eca1fabe7aabfa4358373eb3a7135a9af1b851964789f6ac3752->enter($__internal_a1061dc218a2eca1fabe7aabfa4358373eb3a7135a9af1b851964789f6ac3752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontOfficeBundle:User:profil.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["user"] ?? $this->getContext($context, "user")));
        echo "
";
        
        $__internal_a1061dc218a2eca1fabe7aabfa4358373eb3a7135a9af1b851964789f6ac3752->leave($__internal_a1061dc218a2eca1fabe7aabfa4358373eb3a7135a9af1b851964789f6ac3752_prof);

    }

    public function getTemplateName()
    {
        return "FrontOfficeBundle:User:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{dump(user)}}
", "FrontOfficeBundle:User:profil.html.twig", "/var/www/html/symfony/src/FrontOfficeBundle/Resources/views/User/profil.html.twig");
    }
}
