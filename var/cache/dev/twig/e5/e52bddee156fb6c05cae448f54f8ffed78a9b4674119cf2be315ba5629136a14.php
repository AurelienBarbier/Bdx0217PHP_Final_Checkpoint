<?php

/* ::base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecba4de77a3d1cf2ea0c15f60ece1e769f3288311fca57d2eefa052be6fe32c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecba4de77a3d1cf2ea0c15f60ece1e769f3288311fca57d2eefa052be6fe32c1->enter($__internal_ecba4de77a3d1cf2ea0c15f60ece1e769f3288311fca57d2eefa052be6fe32c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_340f374be122186950986aa01e03c3c262fe70396948d58cffbfb917be55b48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340f374be122186950986aa01e03c3c262fe70396948d58cffbfb917be55b48d->enter($__internal_340f374be122186950986aa01e03c3c262fe70396948d58cffbfb917be55b48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_ecba4de77a3d1cf2ea0c15f60ece1e769f3288311fca57d2eefa052be6fe32c1->leave($__internal_ecba4de77a3d1cf2ea0c15f60ece1e769f3288311fca57d2eefa052be6fe32c1_prof);

        
        $__internal_340f374be122186950986aa01e03c3c262fe70396948d58cffbfb917be55b48d->leave($__internal_340f374be122186950986aa01e03c3c262fe70396948d58cffbfb917be55b48d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a1226f10222d88dcf6d2b4890495ee2e7c024b58833ab8b3530fd1f1f05c751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a1226f10222d88dcf6d2b4890495ee2e7c024b58833ab8b3530fd1f1f05c751->enter($__internal_2a1226f10222d88dcf6d2b4890495ee2e7c024b58833ab8b3530fd1f1f05c751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7ff99a2a0cc96cafa45c8ef913bd41c513b609a3f397c32d348756f5484e045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ff99a2a0cc96cafa45c8ef913bd41c513b609a3f397c32d348756f5484e045->enter($__internal_c7ff99a2a0cc96cafa45c8ef913bd41c513b609a3f397c32d348756f5484e045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cuisinons";
        
        $__internal_c7ff99a2a0cc96cafa45c8ef913bd41c513b609a3f397c32d348756f5484e045->leave($__internal_c7ff99a2a0cc96cafa45c8ef913bd41c513b609a3f397c32d348756f5484e045_prof);

        
        $__internal_2a1226f10222d88dcf6d2b4890495ee2e7c024b58833ab8b3530fd1f1f05c751->leave($__internal_2a1226f10222d88dcf6d2b4890495ee2e7c024b58833ab8b3530fd1f1f05c751_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7cf2451f7ad95b458789d49b7bf5b6b3c83fc84f6c1197fe88fefa998c8b21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7cf2451f7ad95b458789d49b7bf5b6b3c83fc84f6c1197fe88fefa998c8b21f->enter($__internal_a7cf2451f7ad95b458789d49b7bf5b6b3c83fc84f6c1197fe88fefa998c8b21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bb310936478dcf8c840f081faa9a0d2e33966c64941f6da7ec66b3e44292de28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb310936478dcf8c840f081faa9a0d2e33966c64941f6da7ec66b3e44292de28->enter($__internal_bb310936478dcf8c840f081faa9a0d2e33966c64941f6da7ec66b3e44292de28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        ";
        
        $__internal_bb310936478dcf8c840f081faa9a0d2e33966c64941f6da7ec66b3e44292de28->leave($__internal_bb310936478dcf8c840f081faa9a0d2e33966c64941f6da7ec66b3e44292de28_prof);

        
        $__internal_a7cf2451f7ad95b458789d49b7bf5b6b3c83fc84f6c1197fe88fefa998c8b21f->leave($__internal_a7cf2451f7ad95b458789d49b7bf5b6b3c83fc84f6c1197fe88fefa998c8b21f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f830db8bff716cf60ada4f93da0e5e152e34d64a20bcd64329d6c83558edc76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f830db8bff716cf60ada4f93da0e5e152e34d64a20bcd64329d6c83558edc76f->enter($__internal_f830db8bff716cf60ada4f93da0e5e152e34d64a20bcd64329d6c83558edc76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9f62d715304d9566887c1df4f720b2bd489908e6ddcc65a68167a5276aef0e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f62d715304d9566887c1df4f720b2bd489908e6ddcc65a68167a5276aef0e5->enter($__internal_c9f62d715304d9566887c1df4f720b2bd489908e6ddcc65a68167a5276aef0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c9f62d715304d9566887c1df4f720b2bd489908e6ddcc65a68167a5276aef0e5->leave($__internal_c9f62d715304d9566887c1df4f720b2bd489908e6ddcc65a68167a5276aef0e5_prof);

        
        $__internal_f830db8bff716cf60ada4f93da0e5e152e34d64a20bcd64329d6c83558edc76f->leave($__internal_f830db8bff716cf60ada4f93da0e5e152e34d64a20bcd64329d6c83558edc76f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e49c017977812a6bf7b0967d954b4772fa9d00a283822ff94ccf88d808e71f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49c017977812a6bf7b0967d954b4772fa9d00a283822ff94ccf88d808e71f3f->enter($__internal_e49c017977812a6bf7b0967d954b4772fa9d00a283822ff94ccf88d808e71f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d9b8f2b9dfca7c929f9eb47dd0b11ca591eb9ff25b2a324aae21a7746f769518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b8f2b9dfca7c929f9eb47dd0b11ca591eb9ff25b2a324aae21a7746f769518->enter($__internal_d9b8f2b9dfca7c929f9eb47dd0b11ca591eb9ff25b2a324aae21a7746f769518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_d9b8f2b9dfca7c929f9eb47dd0b11ca591eb9ff25b2a324aae21a7746f769518->leave($__internal_d9b8f2b9dfca7c929f9eb47dd0b11ca591eb9ff25b2a324aae21a7746f769518_prof);

        
        $__internal_e49c017977812a6bf7b0967d954b4772fa9d00a283822ff94ccf88d808e71f3f->leave($__internal_e49c017977812a6bf7b0967d954b4772fa9d00a283822ff94ccf88d808e71f3f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 14,  120 => 13,  103 => 12,  92 => 7,  83 => 6,  65 => 5,  53 => 17,  50 => 13,  48 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Cuisinons{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/app/Resources/views/base.html.twig");
    }
}
