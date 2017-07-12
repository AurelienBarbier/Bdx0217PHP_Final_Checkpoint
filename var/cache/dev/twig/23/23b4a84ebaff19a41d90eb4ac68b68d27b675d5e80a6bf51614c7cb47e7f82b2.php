<?php

/* CuisinonsBundle:Default:index.html.twig */
class __TwigTemplate_bc28a0cc693ec37e6840405f9208da61b0febfdb931fe92befbe39ee91cfbfdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CuisinonsBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff64ab2ec4d2e7f6f94a68e24c9172cb0e89f61f9ab1ea212e76438a8c4fa087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff64ab2ec4d2e7f6f94a68e24c9172cb0e89f61f9ab1ea212e76438a8c4fa087->enter($__internal_ff64ab2ec4d2e7f6f94a68e24c9172cb0e89f61f9ab1ea212e76438a8c4fa087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Default:index.html.twig"));

        $__internal_dada219e6996485d098afb69090878fa15ed0fc25ecd5ce23b1215a9b91d82ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dada219e6996485d098afb69090878fa15ed0fc25ecd5ce23b1215a9b91d82ca->enter($__internal_dada219e6996485d098afb69090878fa15ed0fc25ecd5ce23b1215a9b91d82ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff64ab2ec4d2e7f6f94a68e24c9172cb0e89f61f9ab1ea212e76438a8c4fa087->leave($__internal_ff64ab2ec4d2e7f6f94a68e24c9172cb0e89f61f9ab1ea212e76438a8c4fa087_prof);

        
        $__internal_dada219e6996485d098afb69090878fa15ed0fc25ecd5ce23b1215a9b91d82ca->leave($__internal_dada219e6996485d098afb69090878fa15ed0fc25ecd5ce23b1215a9b91d82ca_prof);

    }

    public function getTemplateName()
    {
        return "CuisinonsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
", "CuisinonsBundle:Default:index.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Default/index.html.twig");
    }
}
