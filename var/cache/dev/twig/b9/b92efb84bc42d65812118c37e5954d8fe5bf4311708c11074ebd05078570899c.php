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
        $__internal_d2450229e55ea41f7e41fe5c45b5719104a5cffa24b8a1be4f837c6f5337dab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2450229e55ea41f7e41fe5c45b5719104a5cffa24b8a1be4f837c6f5337dab1->enter($__internal_d2450229e55ea41f7e41fe5c45b5719104a5cffa24b8a1be4f837c6f5337dab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:form.html.twig"));

        $__internal_8ff69937fc69c72b9e51e53aa47a5aa1681b1c35ec4a4350a6531aadcaa498d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff69937fc69c72b9e51e53aa47a5aa1681b1c35ec4a4350a6531aadcaa498d6->enter($__internal_8ff69937fc69c72b9e51e53aa47a5aa1681b1c35ec4a4350a6531aadcaa498d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Recette:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2450229e55ea41f7e41fe5c45b5719104a5cffa24b8a1be4f837c6f5337dab1->leave($__internal_d2450229e55ea41f7e41fe5c45b5719104a5cffa24b8a1be4f837c6f5337dab1_prof);

        
        $__internal_8ff69937fc69c72b9e51e53aa47a5aa1681b1c35ec4a4350a6531aadcaa498d6->leave($__internal_8ff69937fc69c72b9e51e53aa47a5aa1681b1c35ec4a4350a6531aadcaa498d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e853d76687afae15fb19ce8e115a4792c85d996811577df0ded962ed0d7898c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e853d76687afae15fb19ce8e115a4792c85d996811577df0ded962ed0d7898c7->enter($__internal_e853d76687afae15fb19ce8e115a4792c85d996811577df0ded962ed0d7898c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c767eddd7836feb17c5182018ec59da7d08270dc186cc63c625bb6f98751b8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c767eddd7836feb17c5182018ec59da7d08270dc186cc63c625bb6f98751b8b->enter($__internal_9c767eddd7836feb17c5182018ec59da7d08270dc186cc63c625bb6f98751b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["ingredients"] ?? $this->getContext($context, "ingredients")), "nom", array()), 'row');
            echo "</li>
            <li>";
            // line 15
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["ingredients"] ?? $this->getContext($context, "ingredients")), "quantite", array()), 'row');
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9c767eddd7836feb17c5182018ec59da7d08270dc186cc63c625bb6f98751b8b->leave($__internal_9c767eddd7836feb17c5182018ec59da7d08270dc186cc63c625bb6f98751b8b_prof);

        
        $__internal_e853d76687afae15fb19ce8e115a4792c85d996811577df0ded962ed0d7898c7->leave($__internal_e853d76687afae15fb19ce8e115a4792c85d996811577df0ded962ed0d7898c7_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3578d163e25be97729d2fbae2e32e6d417a082aa1540108fd0f2c5d85ff25c85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3578d163e25be97729d2fbae2e32e6d417a082aa1540108fd0f2c5d85ff25c85->enter($__internal_3578d163e25be97729d2fbae2e32e6d417a082aa1540108fd0f2c5d85ff25c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7aac69d1b86f220c8cf8d0960db114b20d4d05c7c6bda176be4e109ff4c9ae20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aac69d1b86f220c8cf8d0960db114b20d4d05c7c6bda176be4e109ff4c9ae20->enter($__internal_7aac69d1b86f220c8cf8d0960db114b20d4d05c7c6bda176be4e109ff4c9ae20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript/recetteCollection.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7aac69d1b86f220c8cf8d0960db114b20d4d05c7c6bda176be4e109ff4c9ae20->leave($__internal_7aac69d1b86f220c8cf8d0960db114b20d4d05c7c6bda176be4e109ff4c9ae20_prof);

        
        $__internal_3578d163e25be97729d2fbae2e32e6d417a082aa1540108fd0f2c5d85ff25c85->leave($__internal_3578d163e25be97729d2fbae2e32e6d417a082aa1540108fd0f2c5d85ff25c85_prof);

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
        return array (  128 => 24,  123 => 23,  114 => 22,  102 => 19,  98 => 17,  90 => 15,  85 => 14,  81 => 13,  77 => 12,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
            <li>{{ form_row(ingredients.nom) }}</li>
            <li>{{ form_row(ingredients.quantite) }}</li>
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
