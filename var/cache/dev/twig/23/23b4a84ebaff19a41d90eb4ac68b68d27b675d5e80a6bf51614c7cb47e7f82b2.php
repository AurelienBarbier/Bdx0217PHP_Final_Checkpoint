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
        $__internal_12a2d50b51d7b35c8bf7ff6c20a6e80249d08fa0b9e4503a50aeba1122ceccbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a2d50b51d7b35c8bf7ff6c20a6e80249d08fa0b9e4503a50aeba1122ceccbc->enter($__internal_12a2d50b51d7b35c8bf7ff6c20a6e80249d08fa0b9e4503a50aeba1122ceccbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Default:index.html.twig"));

        $__internal_5d93d0f5c91c7e991066ecd74d56f6a4148de6a1c7ab681e617f03c477bc5ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d93d0f5c91c7e991066ecd74d56f6a4148de6a1c7ab681e617f03c477bc5ddf->enter($__internal_5d93d0f5c91c7e991066ecd74d56f6a4148de6a1c7ab681e617f03c477bc5ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a2d50b51d7b35c8bf7ff6c20a6e80249d08fa0b9e4503a50aeba1122ceccbc->leave($__internal_12a2d50b51d7b35c8bf7ff6c20a6e80249d08fa0b9e4503a50aeba1122ceccbc_prof);

        
        $__internal_5d93d0f5c91c7e991066ecd74d56f6a4148de6a1c7ab681e617f03c477bc5ddf->leave($__internal_5d93d0f5c91c7e991066ecd74d56f6a4148de6a1c7ab681e617f03c477bc5ddf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87c75478c2defb80464e909e84ad2943739fe066e1238390df08e8bf99181fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87c75478c2defb80464e909e84ad2943739fe066e1238390df08e8bf99181fee->enter($__internal_87c75478c2defb80464e909e84ad2943739fe066e1238390df08e8bf99181fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e82e86d1e81460dcd88145019696ad661eb8b4e5aa72b4a6022b995b3f38e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e82e86d1e81460dcd88145019696ad661eb8b4e5aa72b4a6022b995b3f38e20->enter($__internal_8e82e86d1e81460dcd88145019696ad661eb8b4e5aa72b4a6022b995b3f38e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "recettes", array()));
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
        
        $__internal_8e82e86d1e81460dcd88145019696ad661eb8b4e5aa72b4a6022b995b3f38e20->leave($__internal_8e82e86d1e81460dcd88145019696ad661eb8b4e5aa72b4a6022b995b3f38e20_prof);

        
        $__internal_87c75478c2defb80464e909e84ad2943739fe066e1238390df08e8bf99181fee->leave($__internal_87c75478c2defb80464e909e84ad2943739fe066e1238390df08e8bf99181fee_prof);

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
        {% for recette in app.user.recettes %}
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
