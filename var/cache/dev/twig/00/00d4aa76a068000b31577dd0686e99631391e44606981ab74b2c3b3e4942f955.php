<?php

/* MarmiWildBundle:Default:index.html.twig */
class __TwigTemplate_32d60e5a8e71143f32049d035122251505c168685dfa289a4c7b03c9027bd3cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MarmiWildBundle:Default:index.html.twig", 1);
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
        $__internal_74bb296cc88aa32576fa631980c5619342c7c72554e17d48ec173947653fe3df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bb296cc88aa32576fa631980c5619342c7c72554e17d48ec173947653fe3df->enter($__internal_74bb296cc88aa32576fa631980c5619342c7c72554e17d48ec173947653fe3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarmiWildBundle:Default:index.html.twig"));

        $__internal_38002e75b308dd5000da2b8028c8202d3957169a03b0bacf4230af3515c5f997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38002e75b308dd5000da2b8028c8202d3957169a03b0bacf4230af3515c5f997->enter($__internal_38002e75b308dd5000da2b8028c8202d3957169a03b0bacf4230af3515c5f997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarmiWildBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74bb296cc88aa32576fa631980c5619342c7c72554e17d48ec173947653fe3df->leave($__internal_74bb296cc88aa32576fa631980c5619342c7c72554e17d48ec173947653fe3df_prof);

        
        $__internal_38002e75b308dd5000da2b8028c8202d3957169a03b0bacf4230af3515c5f997->leave($__internal_38002e75b308dd5000da2b8028c8202d3957169a03b0bacf4230af3515c5f997_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_928fc856a3cb15819cdd09cb88d4da075c7f2e004c0ec531a1d670d7601e5faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_928fc856a3cb15819cdd09cb88d4da075c7f2e004c0ec531a1d670d7601e5faf->enter($__internal_928fc856a3cb15819cdd09cb88d4da075c7f2e004c0ec531a1d670d7601e5faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6bc9c5999d24cd9a66a56f2445d1125fa9eed05e33d9264e77d548ee76fe9547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc9c5999d24cd9a66a56f2445d1125fa9eed05e33d9264e77d548ee76fe9547->enter($__internal_6bc9c5999d24cd9a66a56f2445d1125fa9eed05e33d9264e77d548ee76fe9547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6bc9c5999d24cd9a66a56f2445d1125fa9eed05e33d9264e77d548ee76fe9547->leave($__internal_6bc9c5999d24cd9a66a56f2445d1125fa9eed05e33d9264e77d548ee76fe9547_prof);

        
        $__internal_928fc856a3cb15819cdd09cb88d4da075c7f2e004c0ec531a1d670d7601e5faf->leave($__internal_928fc856a3cb15819cdd09cb88d4da075c7f2e004c0ec531a1d670d7601e5faf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_901982d64e959b3ae46ceb30aac794402d047e25973c7c4339baac237addb1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901982d64e959b3ae46ceb30aac794402d047e25973c7c4339baac237addb1f6->enter($__internal_901982d64e959b3ae46ceb30aac794402d047e25973c7c4339baac237addb1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b442958f9f40b4c6ca80eb444e17e46cb25514580b0d8af97c6e3114bc685bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b442958f9f40b4c6ca80eb444e17e46cb25514580b0d8af97c6e3114bc685bf5->enter($__internal_b442958f9f40b4c6ca80eb444e17e46cb25514580b0d8af97c6e3114bc685bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div class=\"row\">
    <div class=\"col s8 offset-s2\">
        <form>
            <div class=\"input-field\">
                <input id=\"search\" type=\"search\" required>
                <label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>
                <i class=\"material-icons\">close</i>
            </div>
        </form>
    </div>
</div>
    <div class=\"row\">

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recipes"] ?? $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 22
            echo "       <div class=\"col s4\">
        <div class=\"card\">
            <div class=\"card-image waves-effect waves-block waves-light\">
                <img class=\"activator\" src=\"\">
            </div>
            <div class=\"card-content\">
                <span class=\"card-title activator grey-text text-darken-4\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">more_vert</i></span>
                <p><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marmi_wild_edit", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating btn waves-effect waves-light red\" title=\"Edit recipe\"><i class=\"material-icons\">edit</i></a>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marmi_wild_delete", array("id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-floating btn waves-effect waves-light red\" title=\"Delete recipe\"><i class=\"material-icons\">delete</i></a></p>
            </div>
            <div class=\"card-reveal\">
                <span class=\"card-title grey-text text-darken-4\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "<i class=\"material-icons right\">close</i></span>
                <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "time", array()), "html", null, true);
            echo " minutes</p>
                <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "quantity", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "ingredients", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "steps", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
       </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    </div>


";
        
        $__internal_b442958f9f40b4c6ca80eb444e17e46cb25514580b0d8af97c6e3114bc685bf5->leave($__internal_b442958f9f40b4c6ca80eb444e17e46cb25514580b0d8af97c6e3114bc685bf5_prof);

        
        $__internal_901982d64e959b3ae46ceb30aac794402d047e25973c7c4339baac237addb1f6->leave($__internal_901982d64e959b3ae46ceb30aac794402d047e25973c7c4339baac237addb1f6_prof);

    }

    public function getTemplateName()
    {
        return "MarmiWildBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 41,  127 => 36,  121 => 35,  117 => 34,  113 => 33,  107 => 30,  103 => 29,  99 => 28,  91 => 22,  87 => 21,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"col s8 offset-s2\">
        <form>
            <div class=\"input-field\">
                <input id=\"search\" type=\"search\" required>
                <label class=\"label-icon\" for=\"search\"><i class=\"material-icons\">search</i></label>
                <i class=\"material-icons\">close</i>
            </div>
        </form>
    </div>
</div>
    <div class=\"row\">

        {% for recipe in recipes %}
       <div class=\"col s4\">
        <div class=\"card\">
            <div class=\"card-image waves-effect waves-block waves-light\">
                <img class=\"activator\" src=\"\">
            </div>
            <div class=\"card-content\">
                <span class=\"card-title activator grey-text text-darken-4\">{{ recipe.name }}<i class=\"material-icons right\">more_vert</i></span>
                <p><a href=\"{{ path('marmi_wild_edit', {'id' : recipe.id}) }}\" class=\"btn-floating btn waves-effect waves-light red\" title=\"Edit recipe\"><i class=\"material-icons\">edit</i></a>
                <a href=\"{{ path('marmi_wild_delete', {'id' : recipe.id}) }}\" class=\"btn-floating btn waves-effect waves-light red\" title=\"Delete recipe\"><i class=\"material-icons\">delete</i></a></p>
            </div>
            <div class=\"card-reveal\">
                <span class=\"card-title grey-text text-darken-4\">{{ recipe.name }}<i class=\"material-icons right\">close</i></span>
                <p>{{ recipe.time }} minutes</p>
                <p>{{ recipe.quantity }} {{ recipe.ingredients }}</p>
                <p>{{ recipe.steps }}</p>
            </div>
        </div>
       </div>
        {% endfor %}

    </div>


{% endblock body %}
", "MarmiWildBundle:Default:index.html.twig", "/home/wilder/Apache/Bdx0217PHP_Final_Checkpoint/final/src/MarmiWildBundle/Resources/views/Default/index.html.twig");
    }
}
