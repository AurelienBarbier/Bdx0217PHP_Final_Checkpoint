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
        $__internal_c7fe629d6323eaf7d0c2a345e6b256423f471e015186434676f59c3d512032cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fe629d6323eaf7d0c2a345e6b256423f471e015186434676f59c3d512032cb->enter($__internal_c7fe629d6323eaf7d0c2a345e6b256423f471e015186434676f59c3d512032cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:list.html.twig"));

        $__internal_2d3414477f48a6fd495022cb6f94a78708f1769a8f50e0fecb1f74779c712041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3414477f48a6fd495022cb6f94a78708f1769a8f50e0fecb1f74779c712041->enter($__internal_2d3414477f48a6fd495022cb6f94a78708f1769a8f50e0fecb1f74779c712041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7fe629d6323eaf7d0c2a345e6b256423f471e015186434676f59c3d512032cb->leave($__internal_c7fe629d6323eaf7d0c2a345e6b256423f471e015186434676f59c3d512032cb_prof);

        
        $__internal_2d3414477f48a6fd495022cb6f94a78708f1769a8f50e0fecb1f74779c712041->leave($__internal_2d3414477f48a6fd495022cb6f94a78708f1769a8f50e0fecb1f74779c712041_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_c28358c6b618af4aad7a384ba2c601cf481cae227f2e0d65e92871d1faf8b51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28358c6b618af4aad7a384ba2c601cf481cae227f2e0d65e92871d1faf8b51b->enter($__internal_c28358c6b618af4aad7a384ba2c601cf481cae227f2e0d65e92871d1faf8b51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_f29380fe8d6829626b319938624e56833784f9cfe56f28d46c276fe316600e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29380fe8d6829626b319938624e56833784f9cfe56f28d46c276fe316600e2d->enter($__internal_f29380fe8d6829626b319938624e56833784f9cfe56f28d46c276fe316600e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_f29380fe8d6829626b319938624e56833784f9cfe56f28d46c276fe316600e2d->leave($__internal_f29380fe8d6829626b319938624e56833784f9cfe56f28d46c276fe316600e2d_prof);

        
        $__internal_c28358c6b618af4aad7a384ba2c601cf481cae227f2e0d65e92871d1faf8b51b->leave($__internal_c28358c6b618af4aad7a384ba2c601cf481cae227f2e0d65e92871d1faf8b51b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa992425c489192622f455a2f862c9780a638a790123d932354f020c98d32a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa992425c489192622f455a2f862c9780a638a790123d932354f020c98d32a16->enter($__internal_aa992425c489192622f455a2f862c9780a638a790123d932354f020c98d32a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cc47a75a36b6d5047e1f17a1f22b709090330e87796f0925373332e0aef6239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc47a75a36b6d5047e1f17a1f22b709090330e87796f0925373332e0aef6239->enter($__internal_0cc47a75a36b6d5047e1f17a1f22b709090330e87796f0925373332e0aef6239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <a href=\"#\" class=\"btn btn-primary\" role=\"button\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Modifier</a>
                            <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Supprimer</a>
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
        
        $__internal_0cc47a75a36b6d5047e1f17a1f22b709090330e87796f0925373332e0aef6239->leave($__internal_0cc47a75a36b6d5047e1f17a1f22b709090330e87796f0925373332e0aef6239_prof);

        
        $__internal_aa992425c489192622f455a2f862c9780a638a790123d932354f020c98d32a16->leave($__internal_aa992425c489192622f455a2f862c9780a638a790123d932354f020c98d32a16_prof);

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
        return array (  121 => 34,  106 => 25,  102 => 24,  99 => 23,  93 => 21,  91 => 20,  87 => 18,  83 => 17,  74 => 11,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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
                            <a href=\"#\" class=\"btn btn-primary\" role=\"button\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span> Modifier</a>
                            <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span> Supprimer</a>
                        </p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}", "CuisinonsBundle:Recette:list.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Recette/list.html.twig");
    }
}
