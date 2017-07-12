<?php

/* MarmiWildBundle:Default:edit.html.twig */
class __TwigTemplate_b4286aa5bae703e8e3f4d39e605a2716e05264bc01dccade8600f5111561a538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MarmiWildBundle:Default:add.html.twig", "MarmiWildBundle:Default:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MarmiWildBundle:Default:add.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74909ca0d225905452588e921947c2cabed1686b975fc78c9ec44e181989f7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74909ca0d225905452588e921947c2cabed1686b975fc78c9ec44e181989f7e7->enter($__internal_74909ca0d225905452588e921947c2cabed1686b975fc78c9ec44e181989f7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarmiWildBundle:Default:edit.html.twig"));

        $__internal_c0f915d770ceff7b70e918c021e93e7daac0bd97e0ed3acb9f1d351f6dfb2615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f915d770ceff7b70e918c021e93e7daac0bd97e0ed3acb9f1d351f6dfb2615->enter($__internal_c0f915d770ceff7b70e918c021e93e7daac0bd97e0ed3acb9f1d351f6dfb2615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MarmiWildBundle:Default:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74909ca0d225905452588e921947c2cabed1686b975fc78c9ec44e181989f7e7->leave($__internal_74909ca0d225905452588e921947c2cabed1686b975fc78c9ec44e181989f7e7_prof);

        
        $__internal_c0f915d770ceff7b70e918c021e93e7daac0bd97e0ed3acb9f1d351f6dfb2615->leave($__internal_c0f915d770ceff7b70e918c021e93e7daac0bd97e0ed3acb9f1d351f6dfb2615_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47fc1bb1d7aeab35a78ae43abbc3b9d4cfd71fd94dde8301d4df5a2a0a627110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fc1bb1d7aeab35a78ae43abbc3b9d4cfd71fd94dde8301d4df5a2a0a627110->enter($__internal_47fc1bb1d7aeab35a78ae43abbc3b9d4cfd71fd94dde8301d4df5a2a0a627110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61235a3c16ae1257379daaa2ce910f934d77f6decf71de2e1b83adaaaead8699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61235a3c16ae1257379daaa2ce910f934d77f6decf71de2e1b83adaaaead8699->enter($__internal_61235a3c16ae1257379daaa2ce910f934d77f6decf71de2e1b83adaaaead8699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Modification de ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["recipe"] ?? $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</h1>


    ";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_61235a3c16ae1257379daaa2ce910f934d77f6decf71de2e1b83adaaaead8699->leave($__internal_61235a3c16ae1257379daaa2ce910f934d77f6decf71de2e1b83adaaaead8699_prof);

        
        $__internal_47fc1bb1d7aeab35a78ae43abbc3b9d4cfd71fd94dde8301d4df5a2a0a627110->leave($__internal_47fc1bb1d7aeab35a78ae43abbc3b9d4cfd71fd94dde8301d4df5a2a0a627110_prof);

    }

    public function getTemplateName()
    {
        return "MarmiWildBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MarmiWildBundle:Default:add.html.twig' %}

{% block body %}
    <h1>Modification de {{ recipe.name }}</h1>


    {{ parent() }}
{% endblock %}", "MarmiWildBundle:Default:edit.html.twig", "/home/wilder/Apache/Bdx0217PHP_Final_Checkpoint/final/src/MarmiWildBundle/Resources/views/Default/edit.html.twig");
    }
}
