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
        $__internal_66dfc1e17dddc6f9a4c9951b23dc4efc35b9b0e77f9450e61ce5ea651e1dd3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66dfc1e17dddc6f9a4c9951b23dc4efc35b9b0e77f9450e61ce5ea651e1dd3d2->enter($__internal_66dfc1e17dddc6f9a4c9951b23dc4efc35b9b0e77f9450e61ce5ea651e1dd3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:edit.html.twig"));

        $__internal_8b06537c5c9814be5eb484489d998d766767737f2f0c6eb14b820a80fcca56b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b06537c5c9814be5eb484489d998d766767737f2f0c6eb14b820a80fcca56b1->enter($__internal_8b06537c5c9814be5eb484489d998d766767737f2f0c6eb14b820a80fcca56b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66dfc1e17dddc6f9a4c9951b23dc4efc35b9b0e77f9450e61ce5ea651e1dd3d2->leave($__internal_66dfc1e17dddc6f9a4c9951b23dc4efc35b9b0e77f9450e61ce5ea651e1dd3d2_prof);

        
        $__internal_8b06537c5c9814be5eb484489d998d766767737f2f0c6eb14b820a80fcca56b1->leave($__internal_8b06537c5c9814be5eb484489d998d766767737f2f0c6eb14b820a80fcca56b1_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_c2c305bde1469c4d46a41facea78ea43691d676980d345cbe44b14c781f7a5ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c305bde1469c4d46a41facea78ea43691d676980d345cbe44b14c781f7a5ba->enter($__internal_c2c305bde1469c4d46a41facea78ea43691d676980d345cbe44b14c781f7a5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_b97c10a3237b392d9d1db7d83c02ab29e0a3ce2078cbbad1f1356cec0889ee6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97c10a3237b392d9d1db7d83c02ab29e0a3ce2078cbbad1f1356cec0889ee6d->enter($__internal_b97c10a3237b392d9d1db7d83c02ab29e0a3ce2078cbbad1f1356cec0889ee6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_b97c10a3237b392d9d1db7d83c02ab29e0a3ce2078cbbad1f1356cec0889ee6d->leave($__internal_b97c10a3237b392d9d1db7d83c02ab29e0a3ce2078cbbad1f1356cec0889ee6d_prof);

        
        $__internal_c2c305bde1469c4d46a41facea78ea43691d676980d345cbe44b14c781f7a5ba->leave($__internal_c2c305bde1469c4d46a41facea78ea43691d676980d345cbe44b14c781f7a5ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_31de17773c872247e3d9e9d6b9258c478d12b95676f71022dc0ebc92e05ac1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31de17773c872247e3d9e9d6b9258c478d12b95676f71022dc0ebc92e05ac1d9->enter($__internal_31de17773c872247e3d9e9d6b9258c478d12b95676f71022dc0ebc92e05ac1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d068d1b40b0d05d67ec4ad3b4d773c0fbc4a86d397b243eba7ac533937faf3fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d068d1b40b0d05d67ec4ad3b4d773c0fbc4a86d397b243eba7ac533937faf3fc->enter($__internal_d068d1b40b0d05d67ec4ad3b4d773c0fbc4a86d397b243eba7ac533937faf3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"page-header\">
        <h2>Modification recette ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recette"] ?? $this->getContext($context, "recette")), "nom", array()), "html", null, true);
        echo "</h2>
    </div>

    ";
        // line 10
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_d068d1b40b0d05d67ec4ad3b4d773c0fbc4a86d397b243eba7ac533937faf3fc->leave($__internal_d068d1b40b0d05d67ec4ad3b4d773c0fbc4a86d397b243eba7ac533937faf3fc_prof);

        
        $__internal_31de17773c872247e3d9e9d6b9258c478d12b95676f71022dc0ebc92e05ac1d9->leave($__internal_31de17773c872247e3d9e9d6b9258c478d12b95676f71022dc0ebc92e05ac1d9_prof);

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
        return array (  76 => 10,  70 => 7,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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

    {{ parent() }}
{% endblock %}", "CuisinonsBundle:Recette:edit.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Recette/edit.html.twig");
    }
}
