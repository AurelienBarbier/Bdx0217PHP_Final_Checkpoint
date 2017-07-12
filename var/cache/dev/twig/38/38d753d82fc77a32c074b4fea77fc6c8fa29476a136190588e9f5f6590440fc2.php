<?php

/* CuisinonsBundle:Recette:add.html.twig */
class __TwigTemplate_b625d323db5bdb255c6305dedf55e239039769736353f9a2c6459453671d0872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CuisinonsBundle:Recette:form.html.twig", "CuisinonsBundle:Recette:add.html.twig", 1);
        $this->blocks = array(
            'carousel' => array($this, 'block_carousel'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CuisinonsBundle:Recette:form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be36edcc64fa0ad586b614092776858488b7fe37071ceb009846dbc3baba21c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be36edcc64fa0ad586b614092776858488b7fe37071ceb009846dbc3baba21c1->enter($__internal_be36edcc64fa0ad586b614092776858488b7fe37071ceb009846dbc3baba21c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:add.html.twig"));

        $__internal_21123e0650b6bc5e91447720960c98a14f122ae8937f03833e7b9470dfa415b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21123e0650b6bc5e91447720960c98a14f122ae8937f03833e7b9470dfa415b6->enter($__internal_21123e0650b6bc5e91447720960c98a14f122ae8937f03833e7b9470dfa415b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be36edcc64fa0ad586b614092776858488b7fe37071ceb009846dbc3baba21c1->leave($__internal_be36edcc64fa0ad586b614092776858488b7fe37071ceb009846dbc3baba21c1_prof);

        
        $__internal_21123e0650b6bc5e91447720960c98a14f122ae8937f03833e7b9470dfa415b6->leave($__internal_21123e0650b6bc5e91447720960c98a14f122ae8937f03833e7b9470dfa415b6_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_d236f3d46b368373696a27196841206812b5104d6adf54655ee519dbb5c226f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d236f3d46b368373696a27196841206812b5104d6adf54655ee519dbb5c226f9->enter($__internal_d236f3d46b368373696a27196841206812b5104d6adf54655ee519dbb5c226f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_b1ac28bfd0c902ac59b95836a9e19d47456b04e62683a9a3bca85338ea117c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ac28bfd0c902ac59b95836a9e19d47456b04e62683a9a3bca85338ea117c30->enter($__internal_b1ac28bfd0c902ac59b95836a9e19d47456b04e62683a9a3bca85338ea117c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_b1ac28bfd0c902ac59b95836a9e19d47456b04e62683a9a3bca85338ea117c30->leave($__internal_b1ac28bfd0c902ac59b95836a9e19d47456b04e62683a9a3bca85338ea117c30_prof);

        
        $__internal_d236f3d46b368373696a27196841206812b5104d6adf54655ee519dbb5c226f9->leave($__internal_d236f3d46b368373696a27196841206812b5104d6adf54655ee519dbb5c226f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba5a4bb48476ba3c7b73f9c71f8eaa54f77cc5a6a5edf7a78b4edc97cabc6f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5a4bb48476ba3c7b73f9c71f8eaa54f77cc5a6a5edf7a78b4edc97cabc6f1f->enter($__internal_ba5a4bb48476ba3c7b73f9c71f8eaa54f77cc5a6a5edf7a78b4edc97cabc6f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d787b6808160492f69aaf4ae9264e6cc1713f8adf5b1152a4c8ee7807b75d257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d787b6808160492f69aaf4ae9264e6cc1713f8adf5b1152a4c8ee7807b75d257->enter($__internal_d787b6808160492f69aaf4ae9264e6cc1713f8adf5b1152a4c8ee7807b75d257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"page-header\">
        <h2>Nouvelle recette</h2>
    </div>

    ";
        // line 10
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_d787b6808160492f69aaf4ae9264e6cc1713f8adf5b1152a4c8ee7807b75d257->leave($__internal_d787b6808160492f69aaf4ae9264e6cc1713f8adf5b1152a4c8ee7807b75d257_prof);

        
        $__internal_ba5a4bb48476ba3c7b73f9c71f8eaa54f77cc5a6a5edf7a78b4edc97cabc6f1f->leave($__internal_ba5a4bb48476ba3c7b73f9c71f8eaa54f77cc5a6a5edf7a78b4edc97cabc6f1f_prof);

    }

    public function getTemplateName()
    {
        return "CuisinonsBundle:Recette:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CuisinonsBundle:Recette:form.html.twig' %}

{% block carousel %}{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <h2>Nouvelle recette</h2>
    </div>

    {{ parent() }}
{% endblock %}", "CuisinonsBundle:Recette:add.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Recette/add.html.twig");
    }
}
