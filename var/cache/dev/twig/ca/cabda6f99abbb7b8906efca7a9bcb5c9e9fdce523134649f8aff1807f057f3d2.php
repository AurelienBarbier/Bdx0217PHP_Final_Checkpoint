<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48a511e3daeaa4ae7de2cee2ac83d70c714b43d2c5d9c48cea434ba85f747df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48a511e3daeaa4ae7de2cee2ac83d70c714b43d2c5d9c48cea434ba85f747df7->enter($__internal_48a511e3daeaa4ae7de2cee2ac83d70c714b43d2c5d9c48cea434ba85f747df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b7bfb1e121db27b77bb67e49129103dc96e308b236ca4f6eee521f1e30004598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bfb1e121db27b77bb67e49129103dc96e308b236ca4f6eee521f1e30004598->enter($__internal_b7bfb1e121db27b77bb67e49129103dc96e308b236ca4f6eee521f1e30004598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a511e3daeaa4ae7de2cee2ac83d70c714b43d2c5d9c48cea434ba85f747df7->leave($__internal_48a511e3daeaa4ae7de2cee2ac83d70c714b43d2c5d9c48cea434ba85f747df7_prof);

        
        $__internal_b7bfb1e121db27b77bb67e49129103dc96e308b236ca4f6eee521f1e30004598->leave($__internal_b7bfb1e121db27b77bb67e49129103dc96e308b236ca4f6eee521f1e30004598_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e4143e8bc37cae73c1173c6ac1646a99a00a7a62e708052abf70bd9914320afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4143e8bc37cae73c1173c6ac1646a99a00a7a62e708052abf70bd9914320afe->enter($__internal_e4143e8bc37cae73c1173c6ac1646a99a00a7a62e708052abf70bd9914320afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f006e818896eb548f554d51cdb04c638a382353a6eb643fed342c31e70a3e9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f006e818896eb548f554d51cdb04c638a382353a6eb643fed342c31e70a3e9ac->enter($__internal_f006e818896eb548f554d51cdb04c638a382353a6eb643fed342c31e70a3e9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f006e818896eb548f554d51cdb04c638a382353a6eb643fed342c31e70a3e9ac->leave($__internal_f006e818896eb548f554d51cdb04c638a382353a6eb643fed342c31e70a3e9ac_prof);

        
        $__internal_e4143e8bc37cae73c1173c6ac1646a99a00a7a62e708052abf70bd9914320afe->leave($__internal_e4143e8bc37cae73c1173c6ac1646a99a00a7a62e708052abf70bd9914320afe_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2fdd12106bd3b2f3f2ba34060cb0c465cf459a1cd4201b3b8f372d4c644598dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdd12106bd3b2f3f2ba34060cb0c465cf459a1cd4201b3b8f372d4c644598dc->enter($__internal_2fdd12106bd3b2f3f2ba34060cb0c465cf459a1cd4201b3b8f372d4c644598dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7674ddebf2b386cce6d274d267a60fde712f0c242c1d3a738ef7e52cb5c1674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7674ddebf2b386cce6d274d267a60fde712f0c242c1d3a738ef7e52cb5c1674->enter($__internal_a7674ddebf2b386cce6d274d267a60fde712f0c242c1d3a738ef7e52cb5c1674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a7674ddebf2b386cce6d274d267a60fde712f0c242c1d3a738ef7e52cb5c1674->leave($__internal_a7674ddebf2b386cce6d274d267a60fde712f0c242c1d3a738ef7e52cb5c1674_prof);

        
        $__internal_2fdd12106bd3b2f3f2ba34060cb0c465cf459a1cd4201b3b8f372d4c644598dc->leave($__internal_2fdd12106bd3b2f3f2ba34060cb0c465cf459a1cd4201b3b8f372d4c644598dc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0df1ab03d37c724f8f69cda2c461c1d0fd5303f88f75489725c444581ba9b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0df1ab03d37c724f8f69cda2c461c1d0fd5303f88f75489725c444581ba9b03->enter($__internal_a0df1ab03d37c724f8f69cda2c461c1d0fd5303f88f75489725c444581ba9b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2573c162daa8c8094d09b96ba536c2f230bcae930eda917df679491865f3227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2573c162daa8c8094d09b96ba536c2f230bcae930eda917df679491865f3227->enter($__internal_d2573c162daa8c8094d09b96ba536c2f230bcae930eda917df679491865f3227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d2573c162daa8c8094d09b96ba536c2f230bcae930eda917df679491865f3227->leave($__internal_d2573c162daa8c8094d09b96ba536c2f230bcae930eda917df679491865f3227_prof);

        
        $__internal_a0df1ab03d37c724f8f69cda2c461c1d0fd5303f88f75489725c444581ba9b03->leave($__internal_a0df1ab03d37c724f8f69cda2c461c1d0fd5303f88f75489725c444581ba9b03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
