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
        $__internal_09ca52ff23491f2400a805b73b8befd9ab1fcc4d282b7c4ca98a26ef3d1b0adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ca52ff23491f2400a805b73b8befd9ab1fcc4d282b7c4ca98a26ef3d1b0adb->enter($__internal_09ca52ff23491f2400a805b73b8befd9ab1fcc4d282b7c4ca98a26ef3d1b0adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:form.html.twig"));

        $__internal_5a4bc9361f5c1e89d226ef0fbdf3bf57e5473d110ff53c18cc20671a842b59c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4bc9361f5c1e89d226ef0fbdf3bf57e5473d110ff53c18cc20671a842b59c0->enter($__internal_5a4bc9361f5c1e89d226ef0fbdf3bf57e5473d110ff53c18cc20671a842b59c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09ca52ff23491f2400a805b73b8befd9ab1fcc4d282b7c4ca98a26ef3d1b0adb->leave($__internal_09ca52ff23491f2400a805b73b8befd9ab1fcc4d282b7c4ca98a26ef3d1b0adb_prof);

        
        $__internal_5a4bc9361f5c1e89d226ef0fbdf3bf57e5473d110ff53c18cc20671a842b59c0->leave($__internal_5a4bc9361f5c1e89d226ef0fbdf3bf57e5473d110ff53c18cc20671a842b59c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_29f32ac910364e848c5d1c18fbf854d09f1cfe679927317ee57ae47ac293d58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f32ac910364e848c5d1c18fbf854d09f1cfe679927317ee57ae47ac293d58d->enter($__internal_29f32ac910364e848c5d1c18fbf854d09f1cfe679927317ee57ae47ac293d58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfe2e3338c96e0f90d9ddfa3585593c9b23705d6c099558037f380de61e1281c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe2e3338c96e0f90d9ddfa3585593c9b23705d6c099558037f380de61e1281c->enter($__internal_dfe2e3338c96e0f90d9ddfa3585593c9b23705d6c099558037f380de61e1281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbPersonne", array()), 'row');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "difficulte", array()), 'row');
        echo "

    <h3>Ingrédients</h3>
    <ul class=\"ingredients\" data-prototype=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ingredients", array()), "vars", array()), "prototype", array()), 'widget'), "html_attr");
        echo "\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ingredients", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 15
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
        // line 17
        echo "    </ul>
    <div class=\"text-right\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'row', array("attr" => array("class" => "btn-primary btn-lg")));
        echo "
    </div>
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_dfe2e3338c96e0f90d9ddfa3585593c9b23705d6c099558037f380de61e1281c->leave($__internal_dfe2e3338c96e0f90d9ddfa3585593c9b23705d6c099558037f380de61e1281c_prof);

        
        $__internal_29f32ac910364e848c5d1c18fbf854d09f1cfe679927317ee57ae47ac293d58d->leave($__internal_29f32ac910364e848c5d1c18fbf854d09f1cfe679927317ee57ae47ac293d58d_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d25b6fceea105763ce68e8c251053dd325d7ff7d2eeb912473691a0dbb6f83a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25b6fceea105763ce68e8c251053dd325d7ff7d2eeb912473691a0dbb6f83a3->enter($__internal_d25b6fceea105763ce68e8c251053dd325d7ff7d2eeb912473691a0dbb6f83a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5d057ab1485a4ff6c7c5d14176acefbbb13f3ca4140727f64c8b77c3eaa775e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d057ab1485a4ff6c7c5d14176acefbbb13f3ca4140727f64c8b77c3eaa775e0->enter($__internal_5d057ab1485a4ff6c7c5d14176acefbbb13f3ca4140727f64c8b77c3eaa775e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript/recetteCollection.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5d057ab1485a4ff6c7c5d14176acefbbb13f3ca4140727f64c8b77c3eaa775e0->leave($__internal_5d057ab1485a4ff6c7c5d14176acefbbb13f3ca4140727f64c8b77c3eaa775e0_prof);

        
        $__internal_d25b6fceea105763ce68e8c251053dd325d7ff7d2eeb912473691a0dbb6f83a3->leave($__internal_d25b6fceea105763ce68e8c251053dd325d7ff7d2eeb912473691a0dbb6f83a3_prof);

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
        return array (  135 => 26,  130 => 25,  121 => 24,  109 => 21,  104 => 19,  100 => 17,  89 => 15,  85 => 14,  81 => 13,  75 => 10,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
    {{ form_row(form.nbPersonne) }}
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
