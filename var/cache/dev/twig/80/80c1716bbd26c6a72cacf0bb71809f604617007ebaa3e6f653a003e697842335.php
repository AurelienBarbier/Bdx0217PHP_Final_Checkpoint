<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_14ab2d7c696c7d32414ade94c06ef05d852ea5ec6e8abab7c33d8ddb1d0e29cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f22fb04b3bd0d81770bece53489a21253d77b620a867541df75e5d017d40bc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22fb04b3bd0d81770bece53489a21253d77b620a867541df75e5d017d40bc94->enter($__internal_f22fb04b3bd0d81770bece53489a21253d77b620a867541df75e5d017d40bc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c23acb86d2b0a80bd20ec15fa4e45bf49d16ed257556dc77fdb5d4504e4a1a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23acb86d2b0a80bd20ec15fa4e45bf49d16ed257556dc77fdb5d4504e4a1a32->enter($__internal_c23acb86d2b0a80bd20ec15fa4e45bf49d16ed257556dc77fdb5d4504e4a1a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f22fb04b3bd0d81770bece53489a21253d77b620a867541df75e5d017d40bc94->leave($__internal_f22fb04b3bd0d81770bece53489a21253d77b620a867541df75e5d017d40bc94_prof);

        
        $__internal_c23acb86d2b0a80bd20ec15fa4e45bf49d16ed257556dc77fdb5d4504e4a1a32->leave($__internal_c23acb86d2b0a80bd20ec15fa4e45bf49d16ed257556dc77fdb5d4504e4a1a32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f83eb12e259e7deda9147a593bfa2a108826994932f7d72103b88c0f5e8a514f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83eb12e259e7deda9147a593bfa2a108826994932f7d72103b88c0f5e8a514f->enter($__internal_f83eb12e259e7deda9147a593bfa2a108826994932f7d72103b88c0f5e8a514f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6b9f2778173d1c9419679a51c59ff93c215d8de2374af43fffededba3e4d220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b9f2778173d1c9419679a51c59ff93c215d8de2374af43fffededba3e4d220->enter($__internal_c6b9f2778173d1c9419679a51c59ff93c215d8de2374af43fffededba3e4d220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c6b9f2778173d1c9419679a51c59ff93c215d8de2374af43fffededba3e4d220->leave($__internal_c6b9f2778173d1c9419679a51c59ff93c215d8de2374af43fffededba3e4d220_prof);

        
        $__internal_f83eb12e259e7deda9147a593bfa2a108826994932f7d72103b88c0f5e8a514f->leave($__internal_f83eb12e259e7deda9147a593bfa2a108826994932f7d72103b88c0f5e8a514f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
