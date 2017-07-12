<?php

/* CuisinonsBundle:Recette:list.html.twig */
class __TwigTemplate_01b9efa197f132b4afacbd1938af1a5e724afbc7665320eccdfbf3c810557481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CuisinonsBundle:Recette:list.html.twig", 1);
        $this->blocks = array(
            'carousel' => array($this, 'block_carousel'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d536f2461031b78ee34864aee4533bafca6471743a55c1c0479ced8f42fe90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d536f2461031b78ee34864aee4533bafca6471743a55c1c0479ced8f42fe90e->enter($__internal_9d536f2461031b78ee34864aee4533bafca6471743a55c1c0479ced8f42fe90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:list.html.twig"));

        $__internal_4d0bfedea1d8ce71f0efd3bd1a863406b95df50a3bc6ba2b73ed449983f2a6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d0bfedea1d8ce71f0efd3bd1a863406b95df50a3bc6ba2b73ed449983f2a6aa->enter($__internal_4d0bfedea1d8ce71f0efd3bd1a863406b95df50a3bc6ba2b73ed449983f2a6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d536f2461031b78ee34864aee4533bafca6471743a55c1c0479ced8f42fe90e->leave($__internal_9d536f2461031b78ee34864aee4533bafca6471743a55c1c0479ced8f42fe90e_prof);

        
        $__internal_4d0bfedea1d8ce71f0efd3bd1a863406b95df50a3bc6ba2b73ed449983f2a6aa->leave($__internal_4d0bfedea1d8ce71f0efd3bd1a863406b95df50a3bc6ba2b73ed449983f2a6aa_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_4c2b6725176458c27b026278fdc60f7725c460e2ca8dba5b0b1baef2cd3a072c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2b6725176458c27b026278fdc60f7725c460e2ca8dba5b0b1baef2cd3a072c->enter($__internal_4c2b6725176458c27b026278fdc60f7725c460e2ca8dba5b0b1baef2cd3a072c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_4fb79c1fc2c6501c0d619dd474433a0a81780a9d2eb7d096e82dd17953817d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb79c1fc2c6501c0d619dd474433a0a81780a9d2eb7d096e82dd17953817d70->enter($__internal_4fb79c1fc2c6501c0d619dd474433a0a81780a9d2eb7d096e82dd17953817d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_4fb79c1fc2c6501c0d619dd474433a0a81780a9d2eb7d096e82dd17953817d70->leave($__internal_4fb79c1fc2c6501c0d619dd474433a0a81780a9d2eb7d096e82dd17953817d70_prof);

        
        $__internal_4c2b6725176458c27b026278fdc60f7725c460e2ca8dba5b0b1baef2cd3a072c->leave($__internal_4c2b6725176458c27b026278fdc60f7725c460e2ca8dba5b0b1baef2cd3a072c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe8dba300e8f43b19561147c07dac879ffd64ea19f43664ae3d7d5d3ab5f34a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe8dba300e8f43b19561147c07dac879ffd64ea19f43664ae3d7d5d3ab5f34a3->enter($__internal_fe8dba300e8f43b19561147c07dac879ffd64ea19f43664ae3d7d5d3ab5f34a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05c771eb4b1bef686b89749ff3ad5e8422a0691ca83013f1fa136d6c149a044e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c771eb4b1bef686b89749ff3ad5e8422a0691ca83013f1fa136d6c149a044e->enter($__internal_05c771eb4b1bef686b89749ff3ad5e8422a0691ca83013f1fa136d6c149a044e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"page-header\">
        <h2>Mes recettes</h2>
    </div>

    <div class=\"text-right\">
        <a class=\"btn btn-info btn-lg\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_recette_add");
        echo "\" role=\"button\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Créer une recette</a>
    </div>

    <br>

    <div class=\"row\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "recettes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 18
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    ";
            // line 20
            if ($this->getAttribute($context["recette"], "image", array())) {
                // line 21
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["recette"], "image", array()))), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 23
            echo "                    <div class=\"caption\">
                        <h3>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["recette"], "nom", array()), "html", null, true);
            echo "</h3>
                        <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["recette"], "description", array()), "html", null, true);
            echo "</p>
                        <p>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_recette_edit", array("id" => $this->getAttribute($context["recette"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Modifier</a>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_recette_delete", array("id" => $this->getAttribute($context["recette"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Supprimer</a>
                        </p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
";
        
        $__internal_05c771eb4b1bef686b89749ff3ad5e8422a0691ca83013f1fa136d6c149a044e->leave($__internal_05c771eb4b1bef686b89749ff3ad5e8422a0691ca83013f1fa136d6c149a044e_prof);

        
        $__internal_fe8dba300e8f43b19561147c07dac879ffd64ea19f43664ae3d7d5d3ab5f34a3->leave($__internal_fe8dba300e8f43b19561147c07dac879ffd64ea19f43664ae3d7d5d3ab5f34a3_prof);

    }

    public function getTemplateName()
    {
        return "CuisinonsBundle:Recette:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 34,  115 => 28,  111 => 27,  106 => 25,  102 => 24,  99 => 23,  93 => 21,  91 => 20,  87 => 18,  83 => 17,  74 => 11,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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

{% block carousel %}{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <h2>Mes recettes</h2>
    </div>

    <div class=\"text-right\">
        <a class=\"btn btn-info btn-lg\" href=\"{{ path('cuisinons_recette_add') }}\" role=\"button\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Créer une recette</a>
    </div>

    <br>

    <div class=\"row\">
        {% for recette in app.user.recettes %}
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    {% if recette.image %}
                        <img src=\"{{ asset('uploads/'~recette.image) }}\" alt=\"\">
                    {% endif %}
                    <div class=\"caption\">
                        <h3>{{ recette.nom }}</h3>
                        <p>{{ recette.description }}</p>
                        <p>
                            <a href=\"{{ path('cuisinons_recette_edit', {'id' : recette.id}) }}\" class=\"btn btn-primary\" role=\"button\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Modifier</a>
                            <a href=\"{{ path('cuisinons_recette_delete', {'id' : recette.id}) }}\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Supprimer</a>
                        </p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}", "CuisinonsBundle:Recette:list.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Recette/list.html.twig");
    }
}
