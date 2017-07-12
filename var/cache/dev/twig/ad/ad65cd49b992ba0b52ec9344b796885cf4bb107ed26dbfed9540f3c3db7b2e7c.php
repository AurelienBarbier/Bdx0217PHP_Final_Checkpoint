<?php

/* MarmiWildBundle:Default:add.html.twig */
class __TwigTemplate_0f1cbefb39f3c6dd897408915b3169b66613cafece480dd8a68840cec2a58ca2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MarmiWildBundle:Default:add.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e5cd1559d4ec616f9c5546fecab4c44f90d3bfa9e61b4aa142d1a5b136369a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5cd1559d4ec616f9c5546fecab4c44f90d3bfa9e61b4aa142d1a5b136369a2->enter($__internal_7e5cd1559d4ec616f9c5546fecab4c44f90d3bfa9e61b4aa142d1a5b136369a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarmiWildBundle:Default:add.html.twig"));

        $__internal_65e8a1c14cd7b0bc8760bb7071e3ee46ee5b5cf5a431d0ed204e128c7bd8f64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e8a1c14cd7b0bc8760bb7071e3ee46ee5b5cf5a431d0ed204e128c7bd8f64a->enter($__internal_65e8a1c14cd7b0bc8760bb7071e3ee46ee5b5cf5a431d0ed204e128c7bd8f64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarmiWildBundle:Default:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5cd1559d4ec616f9c5546fecab4c44f90d3bfa9e61b4aa142d1a5b136369a2->leave($__internal_7e5cd1559d4ec616f9c5546fecab4c44f90d3bfa9e61b4aa142d1a5b136369a2_prof);

        
        $__internal_65e8a1c14cd7b0bc8760bb7071e3ee46ee5b5cf5a431d0ed204e128c7bd8f64a->leave($__internal_65e8a1c14cd7b0bc8760bb7071e3ee46ee5b5cf5a431d0ed204e128c7bd8f64a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7814d510f96b1a3496841e568f52df2dd811fcabb01b23404ecd8a3a22128009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7814d510f96b1a3496841e568f52df2dd811fcabb01b23404ecd8a3a22128009->enter($__internal_7814d510f96b1a3496841e568f52df2dd811fcabb01b23404ecd8a3a22128009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c8ab46dbe5652a13b250ddc5c671888e062626ffea9cdedee1943c42af0797bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ab46dbe5652a13b250ddc5c671888e062626ffea9cdedee1943c42af0797bf->enter($__internal_c8ab46dbe5652a13b250ddc5c671888e062626ffea9cdedee1943c42af0797bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_c8ab46dbe5652a13b250ddc5c671888e062626ffea9cdedee1943c42af0797bf->leave($__internal_c8ab46dbe5652a13b250ddc5c671888e062626ffea9cdedee1943c42af0797bf_prof);

        
        $__internal_7814d510f96b1a3496841e568f52df2dd811fcabb01b23404ecd8a3a22128009->leave($__internal_7814d510f96b1a3496841e568f52df2dd811fcabb01b23404ecd8a3a22128009_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d618f928f8d42f41e7720491c227ccfcd90f09c506846c2f4dfb7cf061d11e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d618f928f8d42f41e7720491c227ccfcd90f09c506846c2f4dfb7cf061d11e40->enter($__internal_d618f928f8d42f41e7720491c227ccfcd90f09c506846c2f4dfb7cf061d11e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26e9ae909a176f59d7de4f52325049daf78dab5547a643def6f7291441710494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e9ae909a176f59d7de4f52325049daf78dab5547a643def6f7291441710494->enter($__internal_26e9ae909a176f59d7de4f52325049daf78dab5547a643def6f7291441710494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"row\">
        <div class=\"col s8 m12 offset-s2 offset-m1\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"input-field col s12 m4\">
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                </div>
                <div class=\"col s12 m4\">
                    <div class=\"input-field inline\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'label');
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12 m8\" id=\"text\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ingredients", array()), 'label');
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ingredients", array()), 'widget');
        echo "
                </div>
                <div class=\"input-field col s12 m4\" id=\"text\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'label');
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quantity", array()), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12 m10\" id=\"text\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "steps", array()), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "steps", array()), 'widget');
        echo "
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s12 m4 offset-m6\">
                    <button class=\"btn waves-effect waves-light right\" id=\"submit\" type=\"submit\" name=\"submit\">Envoyer
                        <i class=\"material-icons right\">send</i>
                    </button>
                </div>
            </div>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_26e9ae909a176f59d7de4f52325049daf78dab5547a643def6f7291441710494->leave($__internal_26e9ae909a176f59d7de4f52325049daf78dab5547a643def6f7291441710494_prof);

        
        $__internal_d618f928f8d42f41e7720491c227ccfcd90f09c506846c2f4dfb7cf061d11e40->leave($__internal_d618f928f8d42f41e7720491c227ccfcd90f09c506846c2f4dfb7cf061d11e40_prof);

    }

    public function getTemplateName()
    {
        return "MarmiWildBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 48,  133 => 37,  129 => 36,  121 => 31,  117 => 30,  111 => 27,  107 => 26,  98 => 20,  94 => 19,  87 => 15,  83 => 14,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}

    <div class=\"row\">
        <div class=\"col s8 m12 offset-s2 offset-m1\">
            {{ form_start(form) }}
            <div class=\"row\">
                <div class=\"input-field col s12 m4\">
                    {{ form_label(form.name) }}
                    {{ form_widget(form.name) }}
                </div>
                <div class=\"col s12 m4\">
                    <div class=\"input-field inline\">
                        {{ form_label(form.time) }}
                        {{ form_widget(form.time) }}
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12 m8\" id=\"text\">
                    {{ form_label(form.ingredients) }}
                    {{ form_widget(form.ingredients) }}
                </div>
                <div class=\"input-field col s12 m4\" id=\"text\">
                    {{ form_label(form.quantity) }}
                    {{ form_widget(form.quantity) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"input-field col s12 m10\" id=\"text\">
                    {{ form_label(form.steps) }}
                    {{ form_widget(form.steps) }}
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col s12 m4 offset-m6\">
                    <button class=\"btn waves-effect waves-light right\" id=\"submit\" type=\"submit\" name=\"submit\">Envoyer
                        <i class=\"material-icons right\">send</i>
                    </button>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    </div>

{% endblock body %}", "MarmiWildBundle:Default:add.html.twig", "/home/wilder/Apache/Bdx0217PHP_Final_Checkpoint/final/src/MarmiWildBundle/Resources/views/Default/add.html.twig");
    }
}
