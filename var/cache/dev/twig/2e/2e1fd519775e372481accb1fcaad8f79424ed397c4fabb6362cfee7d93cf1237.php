<?php

/* CuisinonsBundle:Default:login.html.twig */
class __TwigTemplate_88a8518c54ce23d8b66528ff9fc77736a7acc23dbf49ed38df3811372047e3ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CuisinonsBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_900a6c852568c6f4399ba75048b85c1f05ca4902341672f49a7de426d018ab3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900a6c852568c6f4399ba75048b85c1f05ca4902341672f49a7de426d018ab3b->enter($__internal_900a6c852568c6f4399ba75048b85c1f05ca4902341672f49a7de426d018ab3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Default:login.html.twig"));

        $__internal_0a25aa453231c425f4fa8914e6642c8324f91761b00e6a6ce076cc6053d0ebad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a25aa453231c425f4fa8914e6642c8324f91761b00e6a6ce076cc6053d0ebad->enter($__internal_0a25aa453231c425f4fa8914e6642c8324f91761b00e6a6ce076cc6053d0ebad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CuisinonsBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_900a6c852568c6f4399ba75048b85c1f05ca4902341672f49a7de426d018ab3b->leave($__internal_900a6c852568c6f4399ba75048b85c1f05ca4902341672f49a7de426d018ab3b_prof);

        
        $__internal_0a25aa453231c425f4fa8914e6642c8324f91761b00e6a6ce076cc6053d0ebad->leave($__internal_0a25aa453231c425f4fa8914e6642c8324f91761b00e6a6ce076cc6053d0ebad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_064634d9eb323f676588d9d9fcc2a7921417fb53ed4f847dc64714e36945f8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064634d9eb323f676588d9d9fcc2a7921417fb53ed4f847dc64714e36945f8f8->enter($__internal_064634d9eb323f676588d9d9fcc2a7921417fb53ed4f847dc64714e36945f8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8a2d9cad2529f800cc4e60f6e2219c2d2ac88b90830ad62a2efda5fbb096f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a2d9cad2529f800cc4e60f6e2219c2d2ac88b90830ad62a2efda5fbb096f72->enter($__internal_c8a2d9cad2529f800cc4e60f6e2219c2d2ac88b90830ad62a2efda5fbb096f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "
    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button type=\"submit\">login</button>
    </form>

";
        
        $__internal_c8a2d9cad2529f800cc4e60f6e2219c2d2ac88b90830ad62a2efda5fbb096f72->leave($__internal_c8a2d9cad2529f800cc4e60f6e2219c2d2ac88b90830ad62a2efda5fbb096f72_prof);

        
        $__internal_064634d9eb323f676588d9d9fcc2a7921417fb53ed4f847dc64714e36945f8f8->leave($__internal_064634d9eb323f676588d9d9fcc2a7921417fb53ed4f847dc64714e36945f8f8_prof);

    }

    public function getTemplateName()
    {
        return "CuisinonsBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <form action=\"{{ path('cuisinons_login') }}\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Password</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button type=\"submit\">login</button>
    </form>

{% endblock %}", "CuisinonsBundle:Default:login.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/src/CuisinonsBundle/Resources/views/Default/login.html.twig");
    }
}
