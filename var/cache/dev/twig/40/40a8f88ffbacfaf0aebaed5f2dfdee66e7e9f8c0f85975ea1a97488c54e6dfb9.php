<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d947916898ab9277f8eba690d4460ea9d932bed9290e8ea0dc04a7d62e296e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d947916898ab9277f8eba690d4460ea9d932bed9290e8ea0dc04a7d62e296e12->enter($__internal_d947916898ab9277f8eba690d4460ea9d932bed9290e8ea0dc04a7d62e296e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6a95525bc4714cd41e11987a9fecbe5002284b8f43cee1ef95741b9ff6b936a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a95525bc4714cd41e11987a9fecbe5002284b8f43cee1ef95741b9ff6b936a->enter($__internal_b6a95525bc4714cd41e11987a9fecbe5002284b8f43cee1ef95741b9ff6b936a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d947916898ab9277f8eba690d4460ea9d932bed9290e8ea0dc04a7d62e296e12->leave($__internal_d947916898ab9277f8eba690d4460ea9d932bed9290e8ea0dc04a7d62e296e12_prof);

        
        $__internal_b6a95525bc4714cd41e11987a9fecbe5002284b8f43cee1ef95741b9ff6b936a->leave($__internal_b6a95525bc4714cd41e11987a9fecbe5002284b8f43cee1ef95741b9ff6b936a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df48c56cf6444f513d4494ed165dcbe3a1f9c0aa5b5b6c28ba53b5f800b71901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df48c56cf6444f513d4494ed165dcbe3a1f9c0aa5b5b6c28ba53b5f800b71901->enter($__internal_df48c56cf6444f513d4494ed165dcbe3a1f9c0aa5b5b6c28ba53b5f800b71901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b3d2dee1210b9d60fa783e176a55d1d1377451033c98152747262b787974dc39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d2dee1210b9d60fa783e176a55d1d1377451033c98152747262b787974dc39->enter($__internal_b3d2dee1210b9d60fa783e176a55d1d1377451033c98152747262b787974dc39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b3d2dee1210b9d60fa783e176a55d1d1377451033c98152747262b787974dc39->leave($__internal_b3d2dee1210b9d60fa783e176a55d1d1377451033c98152747262b787974dc39_prof);

        
        $__internal_df48c56cf6444f513d4494ed165dcbe3a1f9c0aa5b5b6c28ba53b5f800b71901->leave($__internal_df48c56cf6444f513d4494ed165dcbe3a1f9c0aa5b5b6c28ba53b5f800b71901_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_87ce9371cebdd36e2f51c890386e13a64a6608d1a9ca9a16a217a29b5ec0fe09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ce9371cebdd36e2f51c890386e13a64a6608d1a9ca9a16a217a29b5ec0fe09->enter($__internal_87ce9371cebdd36e2f51c890386e13a64a6608d1a9ca9a16a217a29b5ec0fe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9de61ee558231796253575ec796db90457ffa2cd4eec23cce7ac01834bd97598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de61ee558231796253575ec796db90457ffa2cd4eec23cce7ac01834bd97598->enter($__internal_9de61ee558231796253575ec796db90457ffa2cd4eec23cce7ac01834bd97598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9de61ee558231796253575ec796db90457ffa2cd4eec23cce7ac01834bd97598->leave($__internal_9de61ee558231796253575ec796db90457ffa2cd4eec23cce7ac01834bd97598_prof);

        
        $__internal_87ce9371cebdd36e2f51c890386e13a64a6608d1a9ca9a16a217a29b5ec0fe09->leave($__internal_87ce9371cebdd36e2f51c890386e13a64a6608d1a9ca9a16a217a29b5ec0fe09_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63ca5acc511ff0dd40f7afc565b271d6fb83141113c4edf17649379e07ef9c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63ca5acc511ff0dd40f7afc565b271d6fb83141113c4edf17649379e07ef9c1e->enter($__internal_63ca5acc511ff0dd40f7afc565b271d6fb83141113c4edf17649379e07ef9c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77cdb5f178e7e5a7fca3dd192b1c0674f9d7d525a6ab9b486e00d9f12e4da7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cdb5f178e7e5a7fca3dd192b1c0674f9d7d525a6ab9b486e00d9f12e4da7c1->enter($__internal_77cdb5f178e7e5a7fca3dd192b1c0674f9d7d525a6ab9b486e00d9f12e4da7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_77cdb5f178e7e5a7fca3dd192b1c0674f9d7d525a6ab9b486e00d9f12e4da7c1->leave($__internal_77cdb5f178e7e5a7fca3dd192b1c0674f9d7d525a6ab9b486e00d9f12e4da7c1_prof);

        
        $__internal_63ca5acc511ff0dd40f7afc565b271d6fb83141113c4edf17649379e07ef9c1e->leave($__internal_63ca5acc511ff0dd40f7afc565b271d6fb83141113c4edf17649379e07ef9c1e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
