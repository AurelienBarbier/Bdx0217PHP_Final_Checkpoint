<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fd20506c9ec5b9da170836dff92722a31d3d2b8f88fc5c526541b79f29ec129e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd20506c9ec5b9da170836dff92722a31d3d2b8f88fc5c526541b79f29ec129e->enter($__internal_fd20506c9ec5b9da170836dff92722a31d3d2b8f88fc5c526541b79f29ec129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_38519235d424388d7dae403ad85c21d108d6379379067f14361d98c9eb8676c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38519235d424388d7dae403ad85c21d108d6379379067f14361d98c9eb8676c7->enter($__internal_38519235d424388d7dae403ad85c21d108d6379379067f14361d98c9eb8676c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd20506c9ec5b9da170836dff92722a31d3d2b8f88fc5c526541b79f29ec129e->leave($__internal_fd20506c9ec5b9da170836dff92722a31d3d2b8f88fc5c526541b79f29ec129e_prof);

        
        $__internal_38519235d424388d7dae403ad85c21d108d6379379067f14361d98c9eb8676c7->leave($__internal_38519235d424388d7dae403ad85c21d108d6379379067f14361d98c9eb8676c7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea777a54bd1225f6d1f0960f92ffae5c583d43e049424bd5f9925bef8972a6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea777a54bd1225f6d1f0960f92ffae5c583d43e049424bd5f9925bef8972a6c4->enter($__internal_ea777a54bd1225f6d1f0960f92ffae5c583d43e049424bd5f9925bef8972a6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f35a270deaa42237418309a14f3ad40a73dbfe4298e964caa049cffb3e42011c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35a270deaa42237418309a14f3ad40a73dbfe4298e964caa049cffb3e42011c->enter($__internal_f35a270deaa42237418309a14f3ad40a73dbfe4298e964caa049cffb3e42011c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f35a270deaa42237418309a14f3ad40a73dbfe4298e964caa049cffb3e42011c->leave($__internal_f35a270deaa42237418309a14f3ad40a73dbfe4298e964caa049cffb3e42011c_prof);

        
        $__internal_ea777a54bd1225f6d1f0960f92ffae5c583d43e049424bd5f9925bef8972a6c4->leave($__internal_ea777a54bd1225f6d1f0960f92ffae5c583d43e049424bd5f9925bef8972a6c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2216e73642703e239c6b85e163d38a6659236af8ee37c34ac36a54f1c73e7940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2216e73642703e239c6b85e163d38a6659236af8ee37c34ac36a54f1c73e7940->enter($__internal_2216e73642703e239c6b85e163d38a6659236af8ee37c34ac36a54f1c73e7940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2fab4b0f9fb59ed29e8dd625ab9e1f486623af21bdfd8935c23f1a600e564f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fab4b0f9fb59ed29e8dd625ab9e1f486623af21bdfd8935c23f1a600e564f1b->enter($__internal_2fab4b0f9fb59ed29e8dd625ab9e1f486623af21bdfd8935c23f1a600e564f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fab4b0f9fb59ed29e8dd625ab9e1f486623af21bdfd8935c23f1a600e564f1b->leave($__internal_2fab4b0f9fb59ed29e8dd625ab9e1f486623af21bdfd8935c23f1a600e564f1b_prof);

        
        $__internal_2216e73642703e239c6b85e163d38a6659236af8ee37c34ac36a54f1c73e7940->leave($__internal_2216e73642703e239c6b85e163d38a6659236af8ee37c34ac36a54f1c73e7940_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87b010e5ce2f1e753ba6049370f608461682ae7553b3752d3c00831503744d9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b010e5ce2f1e753ba6049370f608461682ae7553b3752d3c00831503744d9d->enter($__internal_87b010e5ce2f1e753ba6049370f608461682ae7553b3752d3c00831503744d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d75eaa2510d20f2d7beb877ca1171ae13aee4860f16b4478ee252518db9e6f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75eaa2510d20f2d7beb877ca1171ae13aee4860f16b4478ee252518db9e6f0a->enter($__internal_d75eaa2510d20f2d7beb877ca1171ae13aee4860f16b4478ee252518db9e6f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d75eaa2510d20f2d7beb877ca1171ae13aee4860f16b4478ee252518db9e6f0a->leave($__internal_d75eaa2510d20f2d7beb877ca1171ae13aee4860f16b4478ee252518db9e6f0a_prof);

        
        $__internal_87b010e5ce2f1e753ba6049370f608461682ae7553b3752d3c00831503744d9d->leave($__internal_87b010e5ce2f1e753ba6049370f608461682ae7553b3752d3c00831503744d9d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
