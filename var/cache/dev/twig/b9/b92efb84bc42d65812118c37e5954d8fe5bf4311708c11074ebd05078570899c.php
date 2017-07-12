<?php

/* CuisinonsBundle:Recette:form.html.twig */
class __TwigTemplate_c5626329fc69f36243fa7e376747270fe8d7aa480de2dd71c69ddeb12e8b6747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CuisinonsBundle:Recette:form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6eb53661979ca3ffa2963e238d82ed8839413cc88e1d679e798d8476d880630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6eb53661979ca3ffa2963e238d82ed8839413cc88e1d679e798d8476d880630->enter($__internal_d6eb53661979ca3ffa2963e238d82ed8839413cc88e1d679e798d8476d880630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:form.html.twig"));

        $__internal_75d1773c921ec7a95dbab766d1853e0e803916e712d82afb0f6885fc576ac8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d1773c921ec7a95dbab766d1853e0e803916e712d82afb0f6885fc576ac8c1->enter($__internal_75d1773c921ec7a95dbab766d1853e0e803916e712d82afb0f6885fc576ac8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6eb53661979ca3ffa2963e238d82ed8839413cc88e1d679e798d8476d880630->leave($__internal_d6eb53661979ca3ffa2963e238d82ed8839413cc88e1d679e798d8476d880630_prof);

        
        $__internal_75d1773c921ec7a95dbab766d1853e0e803916e712d82afb0f6885fc576ac8c1->leave($__internal_75d1773c921ec7a95dbab766d1853e0e803916e712d82afb0f6885fc576ac8c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebe2e7002cda1054ec135e5c66c317c61bf81037816d50556b3228b51c3b2016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe2e7002cda1054ec135e5c66c317c61bf81037816d50556b3228b51c3b2016->enter($__internal_ebe2e7002cda1054ec135e5c66c317c61bf81037816d50556b3228b51c3b2016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_001df1a1e45346fdbb968b0b23720440834969ee6d1e2bf74ef05c3e0e1000ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_001df1a1e45346fdbb968b0b23720440834969ee6d1e2bf74ef05c3e0e1000ec->enter($__internal_001df1a1e45346fdbb968b0b23720440834969ee6d1e2bf74ef05c3e0e1000ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'row');
        echo "
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'row');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "temps", array()), 'row');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "difficulte", array()), 'row');
        echo "

    <h3>Ingrédients</h3>
    <ul class=\"ingredients\" data-prototype=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ingredients", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ingredients", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 14
            echo "            <li>";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ingredient"], "nom", array()), 'row');
            echo " ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ingredient"], "quantite", array()), 'row');
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>

    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_001df1a1e45346fdbb968b0b23720440834969ee6d1e2bf74ef05c3e0e1000ec->leave($__internal_001df1a1e45346fdbb968b0b23720440834969ee6d1e2bf74ef05c3e0e1000ec_prof);

        
        $__internal_ebe2e7002cda1054ec135e5c66c317c61bf81037816d50556b3228b51c3b2016->leave($__internal_ebe2e7002cda1054ec135e5c66c317c61bf81037816d50556b3228b51c3b2016_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a2ce806bf5255c0d7b5c9c2017825d6597e1835fadc64f6d06522fa3afb4842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2ce806bf5255c0d7b5c9c2017825d6597e1835fadc64f6d06522fa3afb4842->enter($__internal_7a2ce806bf5255c0d7b5c9c2017825d6597e1835fadc64f6d06522fa3afb4842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3a2d28281fa9db68ed9826c558add1078384d8ec014116f90aa495a24a0e2cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2d28281fa9db68ed9826c558add1078384d8ec014116f90aa495a24a0e2cd6->enter($__internal_3a2d28281fa9db68ed9826c558add1078384d8ec014116f90aa495a24a0e2cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript/recetteCollection.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3a2d28281fa9db68ed9826c558add1078384d8ec014116f90aa495a24a0e2cd6->leave($__internal_3a2d28281fa9db68ed9826c558add1078384d8ec014116f90aa495a24a0e2cd6_prof);

        
        $__internal_7a2ce806bf5255c0d7b5c9c2017825d6597e1835fadc64f6d06522fa3afb4842->leave($__internal_7a2ce806bf5255c0d7b5c9c2017825d6597e1835fadc64f6d06522fa3afb4842_prof);

    }

    public function getTemplateName()
    {
        return "CuisinonsBundle:Recette:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 23,  121 => 22,  112 => 21,  100 => 18,  96 => 16,  85 => 14,  81 => 13,  77 => 12,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {{ form_start(form) }}
    {{ form_row(form.image) }}
    {{ form_row(form.nom) }}
    {{ form_row(form.description) }}
    {{ form_row(form.temps) }}
    {{ form_row(form.difficulte) }}

    <h3>Ingrédients</h3>
    <ul class=\"ingredients\" data-prototype=\"{{ form_widget(form.ingredients.vars.prototype)|e('html_attr') }}\">
        {% for ingredient in form.ingredients %}
            <li>{{ form_row(ingredient.nom) }} {{ form_row(ingredient.quantite) }}</li>
        {% endfor %}
    </ul>

    {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('javascript/recetteCollection.js') }}\"></script>
{% endblock %}", "CuisinonsBundle:Recette:form.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Recette/form.html.twig");
    }
}
