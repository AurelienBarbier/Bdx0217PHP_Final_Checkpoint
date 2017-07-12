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
        $__internal_d3936bb29b73e0ef5df48dfc1fa84d1e21fe3035e05902c647fdb0060042ac94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3936bb29b73e0ef5df48dfc1fa84d1e21fe3035e05902c647fdb0060042ac94->enter($__internal_d3936bb29b73e0ef5df48dfc1fa84d1e21fe3035e05902c647fdb0060042ac94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_456c690f3e9a5564928a528630fab37a556d988f8a89c37dc730f31f336dfa33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456c690f3e9a5564928a528630fab37a556d988f8a89c37dc730f31f336dfa33->enter($__internal_456c690f3e9a5564928a528630fab37a556d988f8a89c37dc730f31f336dfa33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d3936bb29b73e0ef5df48dfc1fa84d1e21fe3035e05902c647fdb0060042ac94->leave($__internal_d3936bb29b73e0ef5df48dfc1fa84d1e21fe3035e05902c647fdb0060042ac94_prof);

        
        $__internal_456c690f3e9a5564928a528630fab37a556d988f8a89c37dc730f31f336dfa33->leave($__internal_456c690f3e9a5564928a528630fab37a556d988f8a89c37dc730f31f336dfa33_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9850c0cec592df1d9ee2354157a22169386d1d748e547b8575418ce6b2c637a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9850c0cec592df1d9ee2354157a22169386d1d748e547b8575418ce6b2c637a7->enter($__internal_9850c0cec592df1d9ee2354157a22169386d1d748e547b8575418ce6b2c637a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_177b9f70727d28175d1d62c4dcd638c93bce185b9fedda31d811efe4b8d650e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177b9f70727d28175d1d62c4dcd638c93bce185b9fedda31d811efe4b8d650e7->enter($__internal_177b9f70727d28175d1d62c4dcd638c93bce185b9fedda31d811efe4b8d650e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cuisinons";
        
        $__internal_177b9f70727d28175d1d62c4dcd638c93bce185b9fedda31d811efe4b8d650e7->leave($__internal_177b9f70727d28175d1d62c4dcd638c93bce185b9fedda31d811efe4b8d650e7_prof);

        
        $__internal_9850c0cec592df1d9ee2354157a22169386d1d748e547b8575418ce6b2c637a7->leave($__internal_9850c0cec592df1d9ee2354157a22169386d1d748e547b8575418ce6b2c637a7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fb9871537e164f1992ec51866d6a23432b25b0439e13f5f724b2fec8aac23b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9871537e164f1992ec51866d6a23432b25b0439e13f5f724b2fec8aac23b8f->enter($__internal_fb9871537e164f1992ec51866d6a23432b25b0439e13f5f724b2fec8aac23b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f4c6d0816e07565b14f8309c332408003a039afe135fe0c0bbe15baa92507e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4c6d0816e07565b14f8309c332408003a039afe135fe0c0bbe15baa92507e6->enter($__internal_9f4c6d0816e07565b14f8309c332408003a039afe135fe0c0bbe15baa92507e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheet/main.css"), "html", null, true);
        echo ">
        ";
        
        $__internal_9f4c6d0816e07565b14f8309c332408003a039afe135fe0c0bbe15baa92507e6->leave($__internal_9f4c6d0816e07565b14f8309c332408003a039afe135fe0c0bbe15baa92507e6_prof);

        
        $__internal_fb9871537e164f1992ec51866d6a23432b25b0439e13f5f724b2fec8aac23b8f->leave($__internal_fb9871537e164f1992ec51866d6a23432b25b0439e13f5f724b2fec8aac23b8f_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_1566790707df6f84ccb35edb22bc5fcd335f2a41f3d72b81a8442c356db8b018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1566790707df6f84ccb35edb22bc5fcd335f2a41f3d72b81a8442c356db8b018->enter($__internal_1566790707df6f84ccb35edb22bc5fcd335f2a41f3d72b81a8442c356db8b018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a1a91d768936ea67e85648026ee8449819db2a8a721c796c3d143215f152a721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a91d768936ea67e85648026ee8449819db2a8a721c796c3d143215f152a721->enter($__internal_a1a91d768936ea67e85648026ee8449819db2a8a721c796c3d143215f152a721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                        <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_homepage");
        echo "\"><img class=\"img-responsive\" src=\"";
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
                                    <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cuisinons_user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">Profil</a></li>
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
        
        $__internal_a1a91d768936ea67e85648026ee8449819db2a8a721c796c3d143215f152a721->leave($__internal_a1a91d768936ea67e85648026ee8449819db2a8a721c796c3d143215f152a721_prof);

        
        $__internal_1566790707df6f84ccb35edb22bc5fcd335f2a41f3d72b81a8442c356db8b018->leave($__internal_1566790707df6f84ccb35edb22bc5fcd335f2a41f3d72b81a8442c356db8b018_prof);

    }

    // line 54
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_4452307bc64d45a19f59b4f2d8e5564c8fab30c5eff15b976893209093ddc3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4452307bc64d45a19f59b4f2d8e5564c8fab30c5eff15b976893209093ddc3da->enter($__internal_4452307bc64d45a19f59b4f2d8e5564c8fab30c5eff15b976893209093ddc3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_88a8729eca681b8d7e1f2316f124deb361f495b6a141a8f3f08763d6b7103985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88a8729eca681b8d7e1f2316f124deb361f495b6a141a8f3f08763d6b7103985->enter($__internal_88a8729eca681b8d7e1f2316f124deb361f495b6a141a8f3f08763d6b7103985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        // line 55
        echo "            <div id=\"imageAccueil\">

            </div>
        ";
        
        $__internal_88a8729eca681b8d7e1f2316f124deb361f495b6a141a8f3f08763d6b7103985->leave($__internal_88a8729eca681b8d7e1f2316f124deb361f495b6a141a8f3f08763d6b7103985_prof);

        
        $__internal_4452307bc64d45a19f59b4f2d8e5564c8fab30c5eff15b976893209093ddc3da->leave($__internal_4452307bc64d45a19f59b4f2d8e5564c8fab30c5eff15b976893209093ddc3da_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_80274d00cb4f1f7ef7de905f2dea37f558cfe9ae5cf7427af8cde4b3f89380f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80274d00cb4f1f7ef7de905f2dea37f558cfe9ae5cf7427af8cde4b3f89380f0->enter($__internal_80274d00cb4f1f7ef7de905f2dea37f558cfe9ae5cf7427af8cde4b3f89380f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f54e4e91a144d95dc6c528019a175dcf8957d22cca236ce0efe4f1d42fbceac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54e4e91a144d95dc6c528019a175dcf8957d22cca236ce0efe4f1d42fbceac7->enter($__internal_f54e4e91a144d95dc6c528019a175dcf8957d22cca236ce0efe4f1d42fbceac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f54e4e91a144d95dc6c528019a175dcf8957d22cca236ce0efe4f1d42fbceac7->leave($__internal_f54e4e91a144d95dc6c528019a175dcf8957d22cca236ce0efe4f1d42fbceac7_prof);

        
        $__internal_80274d00cb4f1f7ef7de905f2dea37f558cfe9ae5cf7427af8cde4b3f89380f0->leave($__internal_80274d00cb4f1f7ef7de905f2dea37f558cfe9ae5cf7427af8cde4b3f89380f0_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af8f6db155ce0d8311d0e6b500ed8d936cd318ccb8c6c417e1a8cb9a9351f147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8f6db155ce0d8311d0e6b500ed8d936cd318ccb8c6c417e1a8cb9a9351f147->enter($__internal_af8f6db155ce0d8311d0e6b500ed8d936cd318ccb8c6c417e1a8cb9a9351f147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_33e5cc8e657eefeca5ccc13233422549b4c86607b6f544905cd4d7d33e47c600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e5cc8e657eefeca5ccc13233422549b4c86607b6f544905cd4d7d33e47c600->enter($__internal_33e5cc8e657eefeca5ccc13233422549b4c86607b6f544905cd4d7d33e47c600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_33e5cc8e657eefeca5ccc13233422549b4c86607b6f544905cd4d7d33e47c600->leave($__internal_33e5cc8e657eefeca5ccc13233422549b4c86607b6f544905cd4d7d33e47c600_prof);

        
        $__internal_af8f6db155ce0d8311d0e6b500ed8d936cd318ccb8c6c417e1a8cb9a9351f147->leave($__internal_af8f6db155ce0d8311d0e6b500ed8d936cd318ccb8c6c417e1a8cb9a9351f147_prof);

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
        return array (  275 => 72,  266 => 71,  249 => 69,  236 => 55,  227 => 54,  209 => 46,  204 => 44,  199 => 42,  194 => 40,  173 => 24,  161 => 14,  152 => 13,  140 => 8,  137 => 7,  128 => 6,  110 => 5,  98 => 75,  96 => 71,  93 => 70,  91 => 69,  87 => 67,  81 => 66,  72 => 63,  67 => 62,  62 => 61,  58 => 60,  55 => 59,  52 => 54,  50 => 13,  43 => 10,  41 => 6,  37 => 5,  31 => 1,);
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
                        <a class=\"navbar-brand\" href=\"{{ path('cuisinons_homepage') }}\"><img class=\"img-responsive\" src=\"{{ asset('images/cuisinons.png') }}\" alt=\"logo cuisinons\">Cuisinons</a>
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
                                    <li><a href=\"{{ path('cuisinons_user_profil', {'id' : app.user.id}) }}\">Profil</a></li>
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
