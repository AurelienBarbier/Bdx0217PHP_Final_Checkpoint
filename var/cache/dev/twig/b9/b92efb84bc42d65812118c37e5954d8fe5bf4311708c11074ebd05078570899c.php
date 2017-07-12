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
        $__internal_89ee4b106c5d983e170945e8fa3e1a28b98e2b7a2696834c5d393f481b563fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ee4b106c5d983e170945e8fa3e1a28b98e2b7a2696834c5d393f481b563fc8->enter($__internal_89ee4b106c5d983e170945e8fa3e1a28b98e2b7a2696834c5d393f481b563fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:form.html.twig"));

        $__internal_ca3fddf20f9ec95d82338b962b3884849566cb22c0416ccb89d5b22bb86de655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3fddf20f9ec95d82338b962b3884849566cb22c0416ccb89d5b22bb86de655->enter($__internal_ca3fddf20f9ec95d82338b962b3884849566cb22c0416ccb89d5b22bb86de655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ee4b106c5d983e170945e8fa3e1a28b98e2b7a2696834c5d393f481b563fc8->leave($__internal_89ee4b106c5d983e170945e8fa3e1a28b98e2b7a2696834c5d393f481b563fc8_prof);

        
        $__internal_ca3fddf20f9ec95d82338b962b3884849566cb22c0416ccb89d5b22bb86de655->leave($__internal_ca3fddf20f9ec95d82338b962b3884849566cb22c0416ccb89d5b22bb86de655_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09fbb285ad43412bf79ec335e36541c6e5f0c58e90f3421b95566671ee405eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09fbb285ad43412bf79ec335e36541c6e5f0c58e90f3421b95566671ee405eb7->enter($__internal_09fbb285ad43412bf79ec335e36541c6e5f0c58e90f3421b95566671ee405eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df0a02e18cd0dbc16ee9e294594de4a0e7fec25001bbcdd6572438f629d303dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0a02e18cd0dbc16ee9e294594de4a0e7fec25001bbcdd6572438f629d303dc->enter($__internal_df0a02e18cd0dbc16ee9e294594de4a0e7fec25001bbcdd6572438f629d303dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"text-right\">
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn-primary btn-lg")));
        echo "
    </div>
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_df0a02e18cd0dbc16ee9e294594de4a0e7fec25001bbcdd6572438f629d303dc->leave($__internal_df0a02e18cd0dbc16ee9e294594de4a0e7fec25001bbcdd6572438f629d303dc_prof);

        
        $__internal_09fbb285ad43412bf79ec335e36541c6e5f0c58e90f3421b95566671ee405eb7->leave($__internal_09fbb285ad43412bf79ec335e36541c6e5f0c58e90f3421b95566671ee405eb7_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2003763a55f7c835dbd642fdfcccc0ebcb568adfe0fc1d7a3399562f05f012f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2003763a55f7c835dbd642fdfcccc0ebcb568adfe0fc1d7a3399562f05f012f->enter($__internal_e2003763a55f7c835dbd642fdfcccc0ebcb568adfe0fc1d7a3399562f05f012f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4ad8ed1b33ae86c7049f7e06723f0923657e0c662717d40280c582c63f15e713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad8ed1b33ae86c7049f7e06723f0923657e0c662717d40280c582c63f15e713->enter($__internal_4ad8ed1b33ae86c7049f7e06723f0923657e0c662717d40280c582c63f15e713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript/recetteCollection.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4ad8ed1b33ae86c7049f7e06723f0923657e0c662717d40280c582c63f15e713->leave($__internal_4ad8ed1b33ae86c7049f7e06723f0923657e0c662717d40280c582c63f15e713_prof);

        
        $__internal_e2003763a55f7c835dbd642fdfcccc0ebcb568adfe0fc1d7a3399562f05f012f->leave($__internal_e2003763a55f7c835dbd642fdfcccc0ebcb568adfe0fc1d7a3399562f05f012f_prof);

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
        return array (  131 => 25,  126 => 24,  117 => 23,  105 => 20,  100 => 18,  96 => 16,  85 => 14,  81 => 13,  77 => 12,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"text-right\">
        {{ form_row(form.submit, {'attr' : {'class' : 'btn-primary btn-lg'}}) }}
    </div>
    {{ form_end(form) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('javascript/recetteCollection.js') }}\"></script>
{% endblock %}", "CuisinonsBundle:Recette:form.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Recette/form.html.twig");
    }
}
