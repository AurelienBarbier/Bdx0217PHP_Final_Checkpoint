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
        $__internal_72ef409cf0a700ed6b4e916904ac061c48e1707e3b3472c54970719c57f7dce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ef409cf0a700ed6b4e916904ac061c48e1707e3b3472c54970719c57f7dce5->enter($__internal_72ef409cf0a700ed6b4e916904ac061c48e1707e3b3472c54970719c57f7dce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:list.html.twig"));

        $__internal_db3813d9ecbcc84aae0de9081e866ee32dfc4175aea50a265ef2739945ec5cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3813d9ecbcc84aae0de9081e866ee32dfc4175aea50a265ef2739945ec5cfd->enter($__internal_db3813d9ecbcc84aae0de9081e866ee32dfc4175aea50a265ef2739945ec5cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72ef409cf0a700ed6b4e916904ac061c48e1707e3b3472c54970719c57f7dce5->leave($__internal_72ef409cf0a700ed6b4e916904ac061c48e1707e3b3472c54970719c57f7dce5_prof);

        
        $__internal_db3813d9ecbcc84aae0de9081e866ee32dfc4175aea50a265ef2739945ec5cfd->leave($__internal_db3813d9ecbcc84aae0de9081e866ee32dfc4175aea50a265ef2739945ec5cfd_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_1e6e011b1aa64ce4e6fdf4be6a631247c1ed9a9df8f7e2016f8052a0d1f59ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6e011b1aa64ce4e6fdf4be6a631247c1ed9a9df8f7e2016f8052a0d1f59ad7->enter($__internal_1e6e011b1aa64ce4e6fdf4be6a631247c1ed9a9df8f7e2016f8052a0d1f59ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_5254e6f44975c6ffb5a173216fba840edafbd24ec03c89bdfc8bb8042dd11433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5254e6f44975c6ffb5a173216fba840edafbd24ec03c89bdfc8bb8042dd11433->enter($__internal_5254e6f44975c6ffb5a173216fba840edafbd24ec03c89bdfc8bb8042dd11433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_5254e6f44975c6ffb5a173216fba840edafbd24ec03c89bdfc8bb8042dd11433->leave($__internal_5254e6f44975c6ffb5a173216fba840edafbd24ec03c89bdfc8bb8042dd11433_prof);

        
        $__internal_1e6e011b1aa64ce4e6fdf4be6a631247c1ed9a9df8f7e2016f8052a0d1f59ad7->leave($__internal_1e6e011b1aa64ce4e6fdf4be6a631247c1ed9a9df8f7e2016f8052a0d1f59ad7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d660e0608afb1bd1abbe15eaca6d46291d4ee0b0079cb19a7af213bb5cb224c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d660e0608afb1bd1abbe15eaca6d46291d4ee0b0079cb19a7af213bb5cb224c4->enter($__internal_d660e0608afb1bd1abbe15eaca6d46291d4ee0b0079cb19a7af213bb5cb224c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f91f6c57d13d8534ade9eab055742a1235b7d420dd8c83bdda7db9d2d3cf2a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91f6c57d13d8534ade9eab055742a1235b7d420dd8c83bdda7db9d2d3cf2a58->enter($__internal_f91f6c57d13d8534ade9eab055742a1235b7d420dd8c83bdda7db9d2d3cf2a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <p>Nombre de personne : ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["recette"], "nbPersonne", array()), "html", null, true);
            echo "</p>
                        <p>Difficulté : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["recette"], "difficulte", array()), "html", null, true);
            echo "</p>
                        <p>Créée le : ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["recette"], "createdAt", array()), "j/m/Y"), "html", null, true);
            echo "</p>
                        <p>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_recette_edit", array("id" => $this->getAttribute($context["recette"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\" role=\"button\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Modifier</a>
                            <a href=\"";
            // line 31
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
        // line 37
        echo "    </div>
";
        
        $__internal_f91f6c57d13d8534ade9eab055742a1235b7d420dd8c83bdda7db9d2d3cf2a58->leave($__internal_f91f6c57d13d8534ade9eab055742a1235b7d420dd8c83bdda7db9d2d3cf2a58_prof);

        
        $__internal_d660e0608afb1bd1abbe15eaca6d46291d4ee0b0079cb19a7af213bb5cb224c4->leave($__internal_d660e0608afb1bd1abbe15eaca6d46291d4ee0b0079cb19a7af213bb5cb224c4_prof);

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
        return array (  139 => 37,  127 => 31,  123 => 30,  118 => 28,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  99 => 23,  93 => 21,  91 => 20,  87 => 18,  83 => 17,  74 => 11,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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
                        <p>Nombre de personne : {{ recette.nbPersonne }}</p>
                        <p>Difficulté : {{ recette.difficulte }}</p>
                        <p>Créée le : {{ recette.createdAt|date('j/m/Y') }}</p>
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
