<?php

/* CuisinonsBundle:Recette:edit.html.twig */
class __TwigTemplate_c4608a31810839aa76acc0528d2c7b36e7b0b80ce2d5cf06270ab3fee4c68130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CuisinonsBundle:Recette:form.html.twig", "CuisinonsBundle:Recette:edit.html.twig", 1);
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
        $__internal_6b79e04f2bc1ddf1a453ac5caafa0bd910d0188018090ce1474c950308ee931c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b79e04f2bc1ddf1a453ac5caafa0bd910d0188018090ce1474c950308ee931c->enter($__internal_6b79e04f2bc1ddf1a453ac5caafa0bd910d0188018090ce1474c950308ee931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:edit.html.twig"));

        $__internal_ab382756ea511f8aee8e18113dfbb3402831a9bf3d5920d14355a117f9ba2b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab382756ea511f8aee8e18113dfbb3402831a9bf3d5920d14355a117f9ba2b8b->enter($__internal_ab382756ea511f8aee8e18113dfbb3402831a9bf3d5920d14355a117f9ba2b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b79e04f2bc1ddf1a453ac5caafa0bd910d0188018090ce1474c950308ee931c->leave($__internal_6b79e04f2bc1ddf1a453ac5caafa0bd910d0188018090ce1474c950308ee931c_prof);

        
        $__internal_ab382756ea511f8aee8e18113dfbb3402831a9bf3d5920d14355a117f9ba2b8b->leave($__internal_ab382756ea511f8aee8e18113dfbb3402831a9bf3d5920d14355a117f9ba2b8b_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_174c46339c8a85c8194a5dd94021859be6321443d571a12a8c5b8921ec0b3aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174c46339c8a85c8194a5dd94021859be6321443d571a12a8c5b8921ec0b3aeb->enter($__internal_174c46339c8a85c8194a5dd94021859be6321443d571a12a8c5b8921ec0b3aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_a6e634fdda4478b93f00df3b1d33c2330836f888b0442d34b33115c211c4dc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e634fdda4478b93f00df3b1d33c2330836f888b0442d34b33115c211c4dc56->enter($__internal_a6e634fdda4478b93f00df3b1d33c2330836f888b0442d34b33115c211c4dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_a6e634fdda4478b93f00df3b1d33c2330836f888b0442d34b33115c211c4dc56->leave($__internal_a6e634fdda4478b93f00df3b1d33c2330836f888b0442d34b33115c211c4dc56_prof);

        
        $__internal_174c46339c8a85c8194a5dd94021859be6321443d571a12a8c5b8921ec0b3aeb->leave($__internal_174c46339c8a85c8194a5dd94021859be6321443d571a12a8c5b8921ec0b3aeb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_13491fc464635433b4047e94ecf113d2bad58dcb43edd189d0b878f94b46a470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13491fc464635433b4047e94ecf113d2bad58dcb43edd189d0b878f94b46a470->enter($__internal_13491fc464635433b4047e94ecf113d2bad58dcb43edd189d0b878f94b46a470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a672649811d66f8dfe4db53f620ad0514951ea925f9e062ec36a5f23b891967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a672649811d66f8dfe4db53f620ad0514951ea925f9e062ec36a5f23b891967->enter($__internal_0a672649811d66f8dfe4db53f620ad0514951ea925f9e062ec36a5f23b891967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"page-header\">
        <h2>Modification recette ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recette"] ?? $this->getContext($context, "recette")), "nom", array()), "html", null, true);
        echo "</h2>
    </div>

    ";
        // line 10
        if ($this->getAttribute(($context["recette"] ?? $this->getContext($context, "recette")), "image", array())) {
            // line 11
            echo "        <div class=\"row\">
            <div class=\"col-xs-6 col-md-3\">
                <img class=\"img-responsive\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute(($context["recette"] ?? $this->getContext($context, "recette")), "image", array()))), "html", null, true);
            echo "\" alt=\"\">
            </div>
        </div>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_0a672649811d66f8dfe4db53f620ad0514951ea925f9e062ec36a5f23b891967->leave($__internal_0a672649811d66f8dfe4db53f620ad0514951ea925f9e062ec36a5f23b891967_prof);

        
        $__internal_13491fc464635433b4047e94ecf113d2bad58dcb43edd189d0b878f94b46a470->leave($__internal_13491fc464635433b4047e94ecf113d2bad58dcb43edd189d0b878f94b46a470_prof);

    }

    public function getTemplateName()
    {
        return "CuisinonsBundle:Recette:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  89 => 17,  82 => 13,  78 => 11,  76 => 10,  70 => 7,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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
        <h2>Modification recette {{ recette.nom }}</h2>
    </div>

    {% if recette.image %}
        <div class=\"row\">
            <div class=\"col-xs-6 col-md-3\">
                <img class=\"img-responsive\" src=\"{{ asset('uploads/'~recette.image) }}\" alt=\"\">
            </div>
        </div>
    {% endif %}

    {{ parent() }}
{% endblock %}", "CuisinonsBundle:Recette:edit.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Recette/edit.html.twig");
    }
}
