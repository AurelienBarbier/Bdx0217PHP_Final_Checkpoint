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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87f4fe73b57b8627276484c36f3e0fecf6befe760f70c6becc8d359b823b6e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f4fe73b57b8627276484c36f3e0fecf6befe760f70c6becc8d359b823b6e24->enter($__internal_87f4fe73b57b8627276484c36f3e0fecf6befe760f70c6becc8d359b823b6e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Default:index.html.twig"));

        $__internal_16f52503930f938e46ec2b4173a6badfc2b8d8e81b469feaa3f5cdd8b55194ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f52503930f938e46ec2b4173a6badfc2b8d8e81b469feaa3f5cdd8b55194ef->enter($__internal_16f52503930f938e46ec2b4173a6badfc2b8d8e81b469feaa3f5cdd8b55194ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f4fe73b57b8627276484c36f3e0fecf6befe760f70c6becc8d359b823b6e24->leave($__internal_87f4fe73b57b8627276484c36f3e0fecf6befe760f70c6becc8d359b823b6e24_prof);

        
        $__internal_16f52503930f938e46ec2b4173a6badfc2b8d8e81b469feaa3f5cdd8b55194ef->leave($__internal_16f52503930f938e46ec2b4173a6badfc2b8d8e81b469feaa3f5cdd8b55194ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9fcb89a97094d948cb301716ca5444a4839553b31dbb30bb7cb5f9ee2c5ad2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fcb89a97094d948cb301716ca5444a4839553b31dbb30bb7cb5f9ee2c5ad2f->enter($__internal_c9fcb89a97094d948cb301716ca5444a4839553b31dbb30bb7cb5f9ee2c5ad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cb7f14545bfb63046febc751ae010024bef2d450eeb14c6a61bb7bf69740558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb7f14545bfb63046febc751ae010024bef2d450eeb14c6a61bb7bf69740558->enter($__internal_2cb7f14545bfb63046febc751ae010024bef2d450eeb14c6a61bb7bf69740558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recettes"] ?? $this->getContext($context, "recettes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 6
            echo "            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    ";
            // line 8
            if ($this->getAttribute($context["recette"], "image", array())) {
                // line 9
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["recette"], "image", array()))), "html", null, true);
                echo "\" alt=\"\">
                    ";
            }
            // line 11
            echo "                    <div class=\"caption\">
                        <h3>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["recette"], "nom", array()), "html", null, true);
            echo "</h3>
                        <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["recette"], "description", array()), "html", null, true);
            echo "</p>
                        <p>Nombre de personne : ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["recette"], "nbPersonne", array()), "html", null, true);
            echo "</p>
                        <p>Difficulté : ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["recette"], "difficulte", array()), "html", null, true);
            echo "</p>
                        <p>Créée le : ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["recette"], "createdAt", array()), "j/m/Y"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["recette"], "user", array()), "username", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"page-header\">
                <h3>Les recettes de la semaine</h3>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"page-header\">
                <h3>Les recettes les + difficiles</h3>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"page-header\">
                <h3>Les recettes les + appréciées</h3>
            </div>
        </div>
    </div>
";
        
        $__internal_2cb7f14545bfb63046febc751ae010024bef2d450eeb14c6a61bb7bf69740558->leave($__internal_2cb7f14545bfb63046febc751ae010024bef2d450eeb14c6a61bb7bf69740558_prof);

        
        $__internal_c9fcb89a97094d948cb301716ca5444a4839553b31dbb30bb7cb5f9ee2c5ad2f->leave($__internal_c9fcb89a97094d948cb301716ca5444a4839553b31dbb30bb7cb5f9ee2c5ad2f_prof);

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
        return array (  100 => 21,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  68 => 11,  62 => 9,  60 => 8,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
    <div class=\"row\">
        {% for recette in recettes %}
            <div class=\"col-sm-6 col-md-4\">
                <div class=\"thumbnail\">
                    {% if recette.image %}
                        <img src=\"{{ asset('uploads/'~recette.image) }}\" alt=\"\">
                    {% endif %}
                    <div class=\"caption\">
                        <h3>{{ recette.nom }}</h3>
                        <p>{{ recette.description }}</p>
                        <p>Nombre de personne : {{ recette.nbPersonne }}</p>
                        <p>Difficulté : {{ recette.difficulte }}</p>
                        <p>Créée le : {{ recette.createdAt|date('j/m/Y') }} par {{ recette.user.username }}</p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"page-header\">
                <h3>Les recettes de la semaine</h3>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"page-header\">
                <h3>Les recettes les + difficiles</h3>
            </div>
        </div>
        <div class=\"col-sm-4\">
            <div class=\"page-header\">
                <h3>Les recettes les + appréciées</h3>
            </div>
        </div>
    </div>
{% endblock %}
", "CuisinonsBundle:Default:index.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Default/index.html.twig");
    }
}
