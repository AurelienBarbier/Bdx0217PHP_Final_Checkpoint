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
        $__internal_a8c5e99793bf5f8c6eb8c4823c284f5475c6a8fad234e38df7c6c0297f2a3cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c5e99793bf5f8c6eb8c4823c284f5475c6a8fad234e38df7c6c0297f2a3cf0->enter($__internal_a8c5e99793bf5f8c6eb8c4823c284f5475c6a8fad234e38df7c6c0297f2a3cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_39ec00c4631c461c2e2b23367d1f21f21f2281b93391ce10116d30500717b723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ec00c4631c461c2e2b23367d1f21f21f2281b93391ce10116d30500717b723->enter($__internal_39ec00c4631c461c2e2b23367d1f21f21f2281b93391ce10116d30500717b723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c5e99793bf5f8c6eb8c4823c284f5475c6a8fad234e38df7c6c0297f2a3cf0->leave($__internal_a8c5e99793bf5f8c6eb8c4823c284f5475c6a8fad234e38df7c6c0297f2a3cf0_prof);

        
        $__internal_39ec00c4631c461c2e2b23367d1f21f21f2281b93391ce10116d30500717b723->leave($__internal_39ec00c4631c461c2e2b23367d1f21f21f2281b93391ce10116d30500717b723_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_166632f0dfb0a7172293067ef4b4b6e30f4ca30d06effd21151512d9518b0cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166632f0dfb0a7172293067ef4b4b6e30f4ca30d06effd21151512d9518b0cae->enter($__internal_166632f0dfb0a7172293067ef4b4b6e30f4ca30d06effd21151512d9518b0cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_67dd380f55231bb3fd0df509348f07913ef9a78c3b55c195cdba870b65f8d8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67dd380f55231bb3fd0df509348f07913ef9a78c3b55c195cdba870b65f8d8ad->enter($__internal_67dd380f55231bb3fd0df509348f07913ef9a78c3b55c195cdba870b65f8d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_67dd380f55231bb3fd0df509348f07913ef9a78c3b55c195cdba870b65f8d8ad->leave($__internal_67dd380f55231bb3fd0df509348f07913ef9a78c3b55c195cdba870b65f8d8ad_prof);

        
        $__internal_166632f0dfb0a7172293067ef4b4b6e30f4ca30d06effd21151512d9518b0cae->leave($__internal_166632f0dfb0a7172293067ef4b4b6e30f4ca30d06effd21151512d9518b0cae_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95345e2c91b1b4ea27c039a27a35f3d9d52835292b78fccd5412815949c7265c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95345e2c91b1b4ea27c039a27a35f3d9d52835292b78fccd5412815949c7265c->enter($__internal_95345e2c91b1b4ea27c039a27a35f3d9d52835292b78fccd5412815949c7265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_311995127a97cb82e9e932fa4a3c55aff3268e3a0255e1bc40b28ace2fcfec46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311995127a97cb82e9e932fa4a3c55aff3268e3a0255e1bc40b28ace2fcfec46->enter($__internal_311995127a97cb82e9e932fa4a3c55aff3268e3a0255e1bc40b28ace2fcfec46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_311995127a97cb82e9e932fa4a3c55aff3268e3a0255e1bc40b28ace2fcfec46->leave($__internal_311995127a97cb82e9e932fa4a3c55aff3268e3a0255e1bc40b28ace2fcfec46_prof);

        
        $__internal_95345e2c91b1b4ea27c039a27a35f3d9d52835292b78fccd5412815949c7265c->leave($__internal_95345e2c91b1b4ea27c039a27a35f3d9d52835292b78fccd5412815949c7265c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6133d3e78ca0719a7d4eef1304deea8707f2929b9f47f1a67f2324493aba745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6133d3e78ca0719a7d4eef1304deea8707f2929b9f47f1a67f2324493aba745->enter($__internal_f6133d3e78ca0719a7d4eef1304deea8707f2929b9f47f1a67f2324493aba745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f2906fcede5761b7f5ce61ce1bb23f8401cc36431b95fa335acaa035bea90c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2906fcede5761b7f5ce61ce1bb23f8401cc36431b95fa335acaa035bea90c6f->enter($__internal_f2906fcede5761b7f5ce61ce1bb23f8401cc36431b95fa335acaa035bea90c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f2906fcede5761b7f5ce61ce1bb23f8401cc36431b95fa335acaa035bea90c6f->leave($__internal_f2906fcede5761b7f5ce61ce1bb23f8401cc36431b95fa335acaa035bea90c6f_prof);

        
        $__internal_f6133d3e78ca0719a7d4eef1304deea8707f2929b9f47f1a67f2324493aba745->leave($__internal_f6133d3e78ca0719a7d4eef1304deea8707f2929b9f47f1a67f2324493aba745_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/wilder/Apache/Bdx0217PHP_Final_Checkpoint/final/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
