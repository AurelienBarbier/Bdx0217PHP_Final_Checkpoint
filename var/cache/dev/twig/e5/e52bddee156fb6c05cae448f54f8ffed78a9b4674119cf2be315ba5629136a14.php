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
        $__internal_e871d37891c2946fec201f6ea19f2f89331462b25d98014e5759b669571eeffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e871d37891c2946fec201f6ea19f2f89331462b25d98014e5759b669571eeffe->enter($__internal_e871d37891c2946fec201f6ea19f2f89331462b25d98014e5759b669571eeffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_2792ddfe5b122b63f57225f2564d2ceb107c007d38f4983db4bd4701cf6163c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2792ddfe5b122b63f57225f2564d2ceb107c007d38f4983db4bd4701cf6163c3->enter($__internal_2792ddfe5b122b63f57225f2564d2ceb107c007d38f4983db4bd4701cf6163c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e871d37891c2946fec201f6ea19f2f89331462b25d98014e5759b669571eeffe->leave($__internal_e871d37891c2946fec201f6ea19f2f89331462b25d98014e5759b669571eeffe_prof);

        
        $__internal_2792ddfe5b122b63f57225f2564d2ceb107c007d38f4983db4bd4701cf6163c3->leave($__internal_2792ddfe5b122b63f57225f2564d2ceb107c007d38f4983db4bd4701cf6163c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_32cb65cc5b4ecc24464dc72a3e39f3fc771687fd20cdef9fb7ef1af003a05ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cb65cc5b4ecc24464dc72a3e39f3fc771687fd20cdef9fb7ef1af003a05ef2->enter($__internal_32cb65cc5b4ecc24464dc72a3e39f3fc771687fd20cdef9fb7ef1af003a05ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32ec434f8f3f9fd5bf34e42a24b22438ec3411ed1871454d8ea264daa7fd0fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ec434f8f3f9fd5bf34e42a24b22438ec3411ed1871454d8ea264daa7fd0fa9->enter($__internal_32ec434f8f3f9fd5bf34e42a24b22438ec3411ed1871454d8ea264daa7fd0fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cuisinons";
        
        $__internal_32ec434f8f3f9fd5bf34e42a24b22438ec3411ed1871454d8ea264daa7fd0fa9->leave($__internal_32ec434f8f3f9fd5bf34e42a24b22438ec3411ed1871454d8ea264daa7fd0fa9_prof);

        
        $__internal_32cb65cc5b4ecc24464dc72a3e39f3fc771687fd20cdef9fb7ef1af003a05ef2->leave($__internal_32cb65cc5b4ecc24464dc72a3e39f3fc771687fd20cdef9fb7ef1af003a05ef2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3ba039b105ae3a2c6d3de69a93eb472ac32ce88ae59bfe7572b8a9f50a8c842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ba039b105ae3a2c6d3de69a93eb472ac32ce88ae59bfe7572b8a9f50a8c842->enter($__internal_c3ba039b105ae3a2c6d3de69a93eb472ac32ce88ae59bfe7572b8a9f50a8c842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_56f46e4d8773f4c16046d7f104ed9d70a5ebda26fc0fbb6fc02cea63c0fe8a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f46e4d8773f4c16046d7f104ed9d70a5ebda26fc0fbb6fc02cea63c0fe8a70->enter($__internal_56f46e4d8773f4c16046d7f104ed9d70a5ebda26fc0fbb6fc02cea63c0fe8a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheet/main.css"), "html", null, true);
        echo ">
        ";
        
        $__internal_56f46e4d8773f4c16046d7f104ed9d70a5ebda26fc0fbb6fc02cea63c0fe8a70->leave($__internal_56f46e4d8773f4c16046d7f104ed9d70a5ebda26fc0fbb6fc02cea63c0fe8a70_prof);

        
        $__internal_c3ba039b105ae3a2c6d3de69a93eb472ac32ce88ae59bfe7572b8a9f50a8c842->leave($__internal_c3ba039b105ae3a2c6d3de69a93eb472ac32ce88ae59bfe7572b8a9f50a8c842_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_0958f86a50fe9e64f55bd0e113a970ad589ab009fce51129be8ec3aa38d7c10f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0958f86a50fe9e64f55bd0e113a970ad589ab009fce51129be8ec3aa38d7c10f->enter($__internal_0958f86a50fe9e64f55bd0e113a970ad589ab009fce51129be8ec3aa38d7c10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_835c23028918c6a8c008b2c3756b28b692cca131320969bc94b470a6bf6baf61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835c23028918c6a8c008b2c3756b28b692cca131320969bc94b470a6bf6baf61->enter($__internal_835c23028918c6a8c008b2c3756b28b692cca131320969bc94b470a6bf6baf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_835c23028918c6a8c008b2c3756b28b692cca131320969bc94b470a6bf6baf61->leave($__internal_835c23028918c6a8c008b2c3756b28b692cca131320969bc94b470a6bf6baf61_prof);

        
        $__internal_0958f86a50fe9e64f55bd0e113a970ad589ab009fce51129be8ec3aa38d7c10f->leave($__internal_0958f86a50fe9e64f55bd0e113a970ad589ab009fce51129be8ec3aa38d7c10f_prof);

    }

    // line 54
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_6417702fc3471816cc59f92ccf48cf078560e2eb7ee9d8a06039122f038d799d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6417702fc3471816cc59f92ccf48cf078560e2eb7ee9d8a06039122f038d799d->enter($__internal_6417702fc3471816cc59f92ccf48cf078560e2eb7ee9d8a06039122f038d799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_a34946087fe012e44f5f83496a90c3f47877497a89b5524211e83208be48c280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34946087fe012e44f5f83496a90c3f47877497a89b5524211e83208be48c280->enter($__internal_a34946087fe012e44f5f83496a90c3f47877497a89b5524211e83208be48c280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        // line 55
        echo "            <div id=\"imageAccueil\">

            </div>
        ";
        
        $__internal_a34946087fe012e44f5f83496a90c3f47877497a89b5524211e83208be48c280->leave($__internal_a34946087fe012e44f5f83496a90c3f47877497a89b5524211e83208be48c280_prof);

        
        $__internal_6417702fc3471816cc59f92ccf48cf078560e2eb7ee9d8a06039122f038d799d->leave($__internal_6417702fc3471816cc59f92ccf48cf078560e2eb7ee9d8a06039122f038d799d_prof);

    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        $__internal_44af5fb9650091fb8c28a936f8351c2689a24f9a31f208d5ecbd5ce2ca94f649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44af5fb9650091fb8c28a936f8351c2689a24f9a31f208d5ecbd5ce2ca94f649->enter($__internal_44af5fb9650091fb8c28a936f8351c2689a24f9a31f208d5ecbd5ce2ca94f649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c6edbdf3c38bda6188335afd2ca85ae80ffab2c68fdee9a23a96c23bbc4380f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6edbdf3c38bda6188335afd2ca85ae80ffab2c68fdee9a23a96c23bbc4380f->enter($__internal_1c6edbdf3c38bda6188335afd2ca85ae80ffab2c68fdee9a23a96c23bbc4380f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1c6edbdf3c38bda6188335afd2ca85ae80ffab2c68fdee9a23a96c23bbc4380f->leave($__internal_1c6edbdf3c38bda6188335afd2ca85ae80ffab2c68fdee9a23a96c23bbc4380f_prof);

        
        $__internal_44af5fb9650091fb8c28a936f8351c2689a24f9a31f208d5ecbd5ce2ca94f649->leave($__internal_44af5fb9650091fb8c28a936f8351c2689a24f9a31f208d5ecbd5ce2ca94f649_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_065d66feff901928a1438d3969eca1d6bc3569c72ef1c129af47d5cfc2e63b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_065d66feff901928a1438d3969eca1d6bc3569c72ef1c129af47d5cfc2e63b5f->enter($__internal_065d66feff901928a1438d3969eca1d6bc3569c72ef1c129af47d5cfc2e63b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_878aa5be4f1ee6dac52ff46c8a4a2b940621c79b95cfb54dfbdccb65106154e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878aa5be4f1ee6dac52ff46c8a4a2b940621c79b95cfb54dfbdccb65106154e0->enter($__internal_878aa5be4f1ee6dac52ff46c8a4a2b940621c79b95cfb54dfbdccb65106154e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_878aa5be4f1ee6dac52ff46c8a4a2b940621c79b95cfb54dfbdccb65106154e0->leave($__internal_878aa5be4f1ee6dac52ff46c8a4a2b940621c79b95cfb54dfbdccb65106154e0_prof);

        
        $__internal_065d66feff901928a1438d3969eca1d6bc3569c72ef1c129af47d5cfc2e63b5f->leave($__internal_065d66feff901928a1438d3969eca1d6bc3569c72ef1c129af47d5cfc2e63b5f_prof);

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
        return array (  273 => 72,  264 => 71,  247 => 69,  234 => 55,  225 => 54,  207 => 46,  202 => 44,  197 => 42,  192 => 40,  173 => 24,  161 => 14,  152 => 13,  140 => 8,  137 => 7,  128 => 6,  110 => 5,  98 => 75,  96 => 71,  93 => 70,  91 => 69,  87 => 67,  81 => 66,  72 => 63,  67 => 62,  62 => 61,  58 => 60,  55 => 59,  52 => 54,  50 => 13,  43 => 10,  41 => 6,  37 => 5,  31 => 1,);
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
