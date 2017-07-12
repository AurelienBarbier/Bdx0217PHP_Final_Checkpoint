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
        $__internal_708dcf7d9b6f16a7ef3fb0597a2010b202d151e0a980e99237f5b081418db4f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708dcf7d9b6f16a7ef3fb0597a2010b202d151e0a980e99237f5b081418db4f6->enter($__internal_708dcf7d9b6f16a7ef3fb0597a2010b202d151e0a980e99237f5b081418db4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5f8941496dbe12b11f25793316ca4c657737d5ca9fc9244441937180eaf521a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8941496dbe12b11f25793316ca4c657737d5ca9fc9244441937180eaf521a2->enter($__internal_5f8941496dbe12b11f25793316ca4c657737d5ca9fc9244441937180eaf521a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <nav>
        <div class=\"nav-wrapper\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marmi_wild_homepage");
        echo "\" class=\"brand-logo\">
                <img id=\"logo\" src=\"";
        // line 17
        echo "images/marmiwild_logo.png";
        echo "\"></a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                <li><a href=";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marmi_wild_add");
        echo ">Add recipes!</a></li>
            </ul>
        </div>
    </nav>
            <main>
        ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "            </main>
            <footer class=\"page-footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col l6 s12\">
                            <h5 class=\"white-text\"></h5>
                        </div>
                        <div class=\"col l4 offset-l2 s12\">
                            <ul>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        © 2017 Copyright Text
                    </div>
                </div>
            </footer>
        ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>
</html>
";
        
        $__internal_708dcf7d9b6f16a7ef3fb0597a2010b202d151e0a980e99237f5b081418db4f6->leave($__internal_708dcf7d9b6f16a7ef3fb0597a2010b202d151e0a980e99237f5b081418db4f6_prof);

        
        $__internal_5f8941496dbe12b11f25793316ca4c657737d5ca9fc9244441937180eaf521a2->leave($__internal_5f8941496dbe12b11f25793316ca4c657737d5ca9fc9244441937180eaf521a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61d0652eca3f9e7c88efd197ffe2484429b7e59159bfe63b0a3f87e285cf2122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d0652eca3f9e7c88efd197ffe2484429b7e59159bfe63b0a3f87e285cf2122->enter($__internal_61d0652eca3f9e7c88efd197ffe2484429b7e59159bfe63b0a3f87e285cf2122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b496016b3f851f15ef535433a5bfb1b7f4ea3bf99ef810916811149fb13c112e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b496016b3f851f15ef535433a5bfb1b7f4ea3bf99ef810916811149fb13c112e->enter($__internal_b496016b3f851f15ef535433a5bfb1b7f4ea3bf99ef810916811149fb13c112e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "MarmiWild!";
        
        $__internal_b496016b3f851f15ef535433a5bfb1b7f4ea3bf99ef810916811149fb13c112e->leave($__internal_b496016b3f851f15ef535433a5bfb1b7f4ea3bf99ef810916811149fb13c112e_prof);

        
        $__internal_61d0652eca3f9e7c88efd197ffe2484429b7e59159bfe63b0a3f87e285cf2122->leave($__internal_61d0652eca3f9e7c88efd197ffe2484429b7e59159bfe63b0a3f87e285cf2122_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82073653fee51563857dea074d5c67e3a65b017af3537cba48553db7b7acaa1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82073653fee51563857dea074d5c67e3a65b017af3537cba48553db7b7acaa1e->enter($__internal_82073653fee51563857dea074d5c67e3a65b017af3537cba48553db7b7acaa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f564d5f85eeda3b1fdd391a9f37301091eb4a8f83cd0f577e1b02cc175515fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f564d5f85eeda3b1fdd391a9f37301091eb4a8f83cd0f577e1b02cc175515fff->enter($__internal_f564d5f85eeda3b1fdd391a9f37301091eb4a8f83cd0f577e1b02cc175515fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css\">
            <link type= \"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_f564d5f85eeda3b1fdd391a9f37301091eb4a8f83cd0f577e1b02cc175515fff->leave($__internal_f564d5f85eeda3b1fdd391a9f37301091eb4a8f83cd0f577e1b02cc175515fff_prof);

        
        $__internal_82073653fee51563857dea074d5c67e3a65b017af3537cba48553db7b7acaa1e->leave($__internal_82073653fee51563857dea074d5c67e3a65b017af3537cba48553db7b7acaa1e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd546a42c38b105c05162e1dc6a0052921835877bb5b142d8160ae6c5f6013cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd546a42c38b105c05162e1dc6a0052921835877bb5b142d8160ae6c5f6013cc->enter($__internal_fd546a42c38b105c05162e1dc6a0052921835877bb5b142d8160ae6c5f6013cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_859f5c095af4ad1e837cac76ed81646cb8c56e4e183cf547522fc68e5ade5448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859f5c095af4ad1e837cac76ed81646cb8c56e4e183cf547522fc68e5ade5448->enter($__internal_859f5c095af4ad1e837cac76ed81646cb8c56e4e183cf547522fc68e5ade5448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_859f5c095af4ad1e837cac76ed81646cb8c56e4e183cf547522fc68e5ade5448->leave($__internal_859f5c095af4ad1e837cac76ed81646cb8c56e4e183cf547522fc68e5ade5448_prof);

        
        $__internal_fd546a42c38b105c05162e1dc6a0052921835877bb5b142d8160ae6c5f6013cc->leave($__internal_fd546a42c38b105c05162e1dc6a0052921835877bb5b142d8160ae6c5f6013cc_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aae5b7ec9bc6993b87d0ee46b3b996d471e0410f2cb7b68ff944f5a097fd4abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae5b7ec9bc6993b87d0ee46b3b996d471e0410f2cb7b68ff944f5a097fd4abe->enter($__internal_aae5b7ec9bc6993b87d0ee46b3b996d471e0410f2cb7b68ff944f5a097fd4abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38f1736e37e8f0def3706d448b81c7666eff090d9f957aede435df7aa0a0558a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f1736e37e8f0def3706d448b81c7666eff090d9f957aede435df7aa0a0558a->enter($__internal_38f1736e37e8f0def3706d448b81c7666eff090d9f957aede435df7aa0a0558a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js\"></script>
        ";
        
        $__internal_38f1736e37e8f0def3706d448b81c7666eff090d9f957aede435df7aa0a0558a->leave($__internal_38f1736e37e8f0def3706d448b81c7666eff090d9f957aede435df7aa0a0558a_prof);

        
        $__internal_aae5b7ec9bc6993b87d0ee46b3b996d471e0410f2cb7b68ff944f5a097fd4abe->leave($__internal_aae5b7ec9bc6993b87d0ee46b3b996d471e0410f2cb7b68ff944f5a097fd4abe_prof);

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
        return array (  177 => 49,  168 => 48,  151 => 24,  139 => 9,  135 => 7,  126 => 6,  108 => 5,  96 => 52,  94 => 48,  69 => 25,  67 => 24,  59 => 19,  54 => 17,  50 => 16,  41 => 11,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}MarmiWild!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css\">
            <link type= \"text/css\" rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
    <nav>
        <div class=\"nav-wrapper\">
            <a href=\"{{ path('marmi_wild_homepage') }}\" class=\"brand-logo\">
                <img id=\"logo\" src=\"{{ 'images/marmiwild_logo.png' }}\"></a>
            <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                <li><a href={{ path('marmi_wild_add') }}>Add recipes!</a></li>
            </ul>
        </div>
    </nav>
            <main>
        {% block body %}{% endblock %}
            </main>
            <footer class=\"page-footer\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col l6 s12\">
                            <h5 class=\"white-text\"></h5>
                        </div>
                        <div class=\"col l4 offset-l2 s12\">
                            <ul>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                                <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"footer-copyright\">
                    <div class=\"container\">
                        © 2017 Copyright Text
                    </div>
                </div>
            </footer>
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/wilder/Apache/Bdx0217PHP_Final_Checkpoint/final/app/Resources/views/base.html.twig");
    }
}
