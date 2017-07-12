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
            'header' => array($this, 'block_header'),
            'carousel' => array($this, 'block_carousel'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74eac05262a7af0770be43f55f3917e4afd1cdb8a491ef0da2a84fe5ea86cfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74eac05262a7af0770be43f55f3917e4afd1cdb8a491ef0da2a84fe5ea86cfda->enter($__internal_74eac05262a7af0770be43f55f3917e4afd1cdb8a491ef0da2a84fe5ea86cfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_c3a4eda3a06c51aa2e4fc9a621f239587a163fa30ba273933dbd5aa738adde50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a4eda3a06c51aa2e4fc9a621f239587a163fa30ba273933dbd5aa738adde50->enter($__internal_c3a4eda3a06c51aa2e4fc9a621f239587a163fa30ba273933dbd5aa738adde50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "        ";
        $this->displayBlock('carousel', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 61
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 62
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                    ";
                // line 63
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
        <div id=\"body\" class=\"container\">
            ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "        </div>
        ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "    </body>
</html>
";
        
        $__internal_74eac05262a7af0770be43f55f3917e4afd1cdb8a491ef0da2a84fe5ea86cfda->leave($__internal_74eac05262a7af0770be43f55f3917e4afd1cdb8a491ef0da2a84fe5ea86cfda_prof);

        
        $__internal_c3a4eda3a06c51aa2e4fc9a621f239587a163fa30ba273933dbd5aa738adde50->leave($__internal_c3a4eda3a06c51aa2e4fc9a621f239587a163fa30ba273933dbd5aa738adde50_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1398cb1413766d1cb185438b7607f7fc937fb0a53024e9fc2b8d482443200a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1398cb1413766d1cb185438b7607f7fc937fb0a53024e9fc2b8d482443200a6->enter($__internal_c1398cb1413766d1cb185438b7607f7fc937fb0a53024e9fc2b8d482443200a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9243616cb8fd9dc5240924001764511c2c038fc8876764d2a7e74258bb5286c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9243616cb8fd9dc5240924001764511c2c038fc8876764d2a7e74258bb5286c7->enter($__internal_9243616cb8fd9dc5240924001764511c2c038fc8876764d2a7e74258bb5286c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cuisinons";
        
        $__internal_9243616cb8fd9dc5240924001764511c2c038fc8876764d2a7e74258bb5286c7->leave($__internal_9243616cb8fd9dc5240924001764511c2c038fc8876764d2a7e74258bb5286c7_prof);

        
        $__internal_c1398cb1413766d1cb185438b7607f7fc937fb0a53024e9fc2b8d482443200a6->leave($__internal_c1398cb1413766d1cb185438b7607f7fc937fb0a53024e9fc2b8d482443200a6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0e1edb92250719c765d243fd6611915d822d35ab4897c7e8fefddb2180e9903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e1edb92250719c765d243fd6611915d822d35ab4897c7e8fefddb2180e9903->enter($__internal_a0e1edb92250719c765d243fd6611915d822d35ab4897c7e8fefddb2180e9903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12d9286e734e970bb9d35efbb4a53b7b078113d1982898ec2435b53aeabfbcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d9286e734e970bb9d35efbb4a53b7b078113d1982898ec2435b53aeabfbcaf->enter($__internal_12d9286e734e970bb9d35efbb4a53b7b078113d1982898ec2435b53aeabfbcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheet/main.css"), "html", null, true);
        echo ">
        ";
        
        $__internal_12d9286e734e970bb9d35efbb4a53b7b078113d1982898ec2435b53aeabfbcaf->leave($__internal_12d9286e734e970bb9d35efbb4a53b7b078113d1982898ec2435b53aeabfbcaf_prof);

        
        $__internal_a0e1edb92250719c765d243fd6611915d822d35ab4897c7e8fefddb2180e9903->leave($__internal_a0e1edb92250719c765d243fd6611915d822d35ab4897c7e8fefddb2180e9903_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_26ac59905ec1c7513b90d9ca129acd8e7e57af4a159cef5cd50e5088b07e5316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ac59905ec1c7513b90d9ca129acd8e7e57af4a159cef5cd50e5088b07e5316->enter($__internal_26ac59905ec1c7513b90d9ca129acd8e7e57af4a159cef5cd50e5088b07e5316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_148f5bac8a3ab587cbfa9337c9545828371ce15e05d699557b1632394d18fc2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148f5bac8a3ab587cbfa9337c9545828371ce15e05d699557b1632394d18fc2f->enter($__internal_148f5bac8a3ab587cbfa9337c9545828371ce15e05d699557b1632394d18fc2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/cuisinons.png"), "html", null, true);
        echo "\" alt=\"logo cuisinons\">Cuisinons</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\">Les recettes</a></li>
                        </ul>
                        <form class=\"navbar-form navbar-left\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Search</button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profil</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_recette_list");
        echo "\">Mes recettes</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_logout");
        echo "\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        ";
        
        $__internal_148f5bac8a3ab587cbfa9337c9545828371ce15e05d699557b1632394d18fc2f->leave($__internal_148f5bac8a3ab587cbfa9337c9545828371ce15e05d699557b1632394d18fc2f_prof);

        
        $__internal_26ac59905ec1c7513b90d9ca129acd8e7e57af4a159cef5cd50e5088b07e5316->leave($__internal_26ac59905ec1c7513b90d9ca129acd8e7e57af4a159cef5cd50e5088b07e5316_prof);

    }

    // line 54
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_323147b392d7b03af0ef1649782468c5d18fc576d2989f6353d965addb935e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323147b392d7b03af0ef1649782468c5d18fc576d2989f6353d965addb935e06->enter($__internal_323147b392d7b03af0ef1649782468c5d18fc576d2989f6353d965addb935e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_13d98c1e7d2ce4f5abf061bfe83f355b04fa531f8d72d7212337fd9a2598885d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d98c1e7d2ce4f5abf061bfe83f355b04fa531f8d72d7212337fd9a2598885d->enter($__internal_13d98c1e7d2ce4f5abf061bfe83f355b04fa531f8d72d7212337fd9a2598885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        // line 55
        echo "            <div id=\"imageAccueil\">

            </div>
        ";
        
        $__internal_13d98c1e7d2ce4f5abf061bfe83f355b04fa531f8d72d7212337fd9a2598885d->leave($__internal_13d98c1e7d2ce4f5abf061bfe83f355b04fa531f8d72d7212337fd9a2598885d_prof);

        
        $__internal_323147b392d7b03af0ef1649782468c5d18fc576d2989f6353d965addb935e06->leave($__internal_323147b392d7b03af0ef1649782468c5d18fc576d2989f6353d965addb935e06_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fbab5c963679174e3a8b31e1b5a6149e9d202fbe04640eebff5b973c652a171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbab5c963679174e3a8b31e1b5a6149e9d202fbe04640eebff5b973c652a171->enter($__internal_4fbab5c963679174e3a8b31e1b5a6149e9d202fbe04640eebff5b973c652a171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f33245babdffd521c2fde19ce29ed4adbb55d3e1ef5faa699a6c21753545980f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33245babdffd521c2fde19ce29ed4adbb55d3e1ef5faa699a6c21753545980f->enter($__internal_f33245babdffd521c2fde19ce29ed4adbb55d3e1ef5faa699a6c21753545980f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f33245babdffd521c2fde19ce29ed4adbb55d3e1ef5faa699a6c21753545980f->leave($__internal_f33245babdffd521c2fde19ce29ed4adbb55d3e1ef5faa699a6c21753545980f_prof);

        
        $__internal_4fbab5c963679174e3a8b31e1b5a6149e9d202fbe04640eebff5b973c652a171->leave($__internal_4fbab5c963679174e3a8b31e1b5a6149e9d202fbe04640eebff5b973c652a171_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_177ebc959bd53918889b500464cb89f49a307da5e52714423116fff6a82818d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177ebc959bd53918889b500464cb89f49a307da5e52714423116fff6a82818d3->enter($__internal_177ebc959bd53918889b500464cb89f49a307da5e52714423116fff6a82818d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bca5ce73fc382a45ab73ff60127d0b73952eb094a8444f31f177cdaef47835a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca5ce73fc382a45ab73ff60127d0b73952eb094a8444f31f177cdaef47835a8->enter($__internal_bca5ce73fc382a45ab73ff60127d0b73952eb094a8444f31f177cdaef47835a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_bca5ce73fc382a45ab73ff60127d0b73952eb094a8444f31f177cdaef47835a8->leave($__internal_bca5ce73fc382a45ab73ff60127d0b73952eb094a8444f31f177cdaef47835a8_prof);

        
        $__internal_177ebc959bd53918889b500464cb89f49a307da5e52714423116fff6a82818d3->leave($__internal_177ebc959bd53918889b500464cb89f49a307da5e52714423116fff6a82818d3_prof);

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
        return array (  270 => 72,  261 => 71,  244 => 69,  231 => 55,  222 => 54,  204 => 46,  199 => 44,  192 => 40,  173 => 24,  161 => 14,  152 => 13,  140 => 8,  137 => 7,  128 => 6,  110 => 5,  98 => 75,  96 => 71,  93 => 70,  91 => 69,  87 => 67,  81 => 66,  72 => 63,  67 => 62,  62 => 61,  58 => 60,  55 => 59,  52 => 54,  50 => 13,  43 => 10,  41 => 6,  37 => 5,  31 => 1,);
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
            <link rel=\"stylesheet\" href={{ asset('stylesheet/main.css') }}>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block header %}
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\"><img class=\"img-responsive\" src=\"{{ asset('images/cuisinons.png') }}\" alt=\"logo cuisinons\">Cuisinons</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"#\">Les recettes</a></li>
                        </ul>
                        <form class=\"navbar-form navbar-left\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-search\" aria-hidden=\"true\"></span> Search</button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.user.username }} <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profil</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path('cuisinons_recette_list') }}\">Mes recettes</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path('cuisinons_logout') }}\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        {% endblock %}
        {% block carousel %}
            <div id=\"imageAccueil\">

            </div>
        {% endblock %}

        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}

        <div id=\"body\" class=\"container\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/wilder/Documents/Wild-Code-School/www-dev/checkpoint/Bdx0217PHP_Final_Checkpoint/app/Resources/views/base.html.twig");
    }
}
