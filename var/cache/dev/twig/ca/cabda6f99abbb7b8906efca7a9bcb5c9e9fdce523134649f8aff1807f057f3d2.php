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
        $__internal_fcc015f2fc442d1a89ccb4df938aa0341e50c0b2585e7952b71b79ed1442f67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc015f2fc442d1a89ccb4df938aa0341e50c0b2585e7952b71b79ed1442f67e->enter($__internal_fcc015f2fc442d1a89ccb4df938aa0341e50c0b2585e7952b71b79ed1442f67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_910d9cbb5538c96435a13028b385aa1fbb35d2a6fa1daee4c9d1bc18317d54ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910d9cbb5538c96435a13028b385aa1fbb35d2a6fa1daee4c9d1bc18317d54ed->enter($__internal_910d9cbb5538c96435a13028b385aa1fbb35d2a6fa1daee4c9d1bc18317d54ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcc015f2fc442d1a89ccb4df938aa0341e50c0b2585e7952b71b79ed1442f67e->leave($__internal_fcc015f2fc442d1a89ccb4df938aa0341e50c0b2585e7952b71b79ed1442f67e_prof);

        
        $__internal_910d9cbb5538c96435a13028b385aa1fbb35d2a6fa1daee4c9d1bc18317d54ed->leave($__internal_910d9cbb5538c96435a13028b385aa1fbb35d2a6fa1daee4c9d1bc18317d54ed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e181bbbfbd9c37e1061ef97c0e0817d3565055e95438ceccd86f06bc5e2e971e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e181bbbfbd9c37e1061ef97c0e0817d3565055e95438ceccd86f06bc5e2e971e->enter($__internal_e181bbbfbd9c37e1061ef97c0e0817d3565055e95438ceccd86f06bc5e2e971e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79d0afbb33ebd03aeb59070e5ba7bdc4fcc1207a90b52c6b0416b448d2a4caea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d0afbb33ebd03aeb59070e5ba7bdc4fcc1207a90b52c6b0416b448d2a4caea->enter($__internal_79d0afbb33ebd03aeb59070e5ba7bdc4fcc1207a90b52c6b0416b448d2a4caea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_79d0afbb33ebd03aeb59070e5ba7bdc4fcc1207a90b52c6b0416b448d2a4caea->leave($__internal_79d0afbb33ebd03aeb59070e5ba7bdc4fcc1207a90b52c6b0416b448d2a4caea_prof);

        
        $__internal_e181bbbfbd9c37e1061ef97c0e0817d3565055e95438ceccd86f06bc5e2e971e->leave($__internal_e181bbbfbd9c37e1061ef97c0e0817d3565055e95438ceccd86f06bc5e2e971e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5be88423cd2683627260a8ce59b7295e4d0794dd2144d3f34cd1315195d04ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5be88423cd2683627260a8ce59b7295e4d0794dd2144d3f34cd1315195d04ef->enter($__internal_b5be88423cd2683627260a8ce59b7295e4d0794dd2144d3f34cd1315195d04ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8e7435aac06ba3642dbe62686b23f062a96aa62e9ac2306e18f040e6f9edfc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e7435aac06ba3642dbe62686b23f062a96aa62e9ac2306e18f040e6f9edfc6->enter($__internal_f8e7435aac06ba3642dbe62686b23f062a96aa62e9ac2306e18f040e6f9edfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f8e7435aac06ba3642dbe62686b23f062a96aa62e9ac2306e18f040e6f9edfc6->leave($__internal_f8e7435aac06ba3642dbe62686b23f062a96aa62e9ac2306e18f040e6f9edfc6_prof);

        
        $__internal_b5be88423cd2683627260a8ce59b7295e4d0794dd2144d3f34cd1315195d04ef->leave($__internal_b5be88423cd2683627260a8ce59b7295e4d0794dd2144d3f34cd1315195d04ef_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3dc56c8ced9de9e703d38a928685e86838c5caf12c5842d7e9aa7d1ce5bc3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3dc56c8ced9de9e703d38a928685e86838c5caf12c5842d7e9aa7d1ce5bc3b2->enter($__internal_d3dc56c8ced9de9e703d38a928685e86838c5caf12c5842d7e9aa7d1ce5bc3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_667044ee4e599d7697a92b23e116942cc4222f6beafca8f3d53651fa45017b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_667044ee4e599d7697a92b23e116942cc4222f6beafca8f3d53651fa45017b57->enter($__internal_667044ee4e599d7697a92b23e116942cc4222f6beafca8f3d53651fa45017b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_667044ee4e599d7697a92b23e116942cc4222f6beafca8f3d53651fa45017b57->leave($__internal_667044ee4e599d7697a92b23e116942cc4222f6beafca8f3d53651fa45017b57_prof);

        
        $__internal_d3dc56c8ced9de9e703d38a928685e86838c5caf12c5842d7e9aa7d1ce5bc3b2->leave($__internal_d3dc56c8ced9de9e703d38a928685e86838c5caf12c5842d7e9aa7d1ce5bc3b2_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/wilder/Apache/Bdx0217PHP_Final_Checkpoint/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
