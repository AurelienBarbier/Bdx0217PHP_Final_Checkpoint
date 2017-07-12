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
        $__internal_ae0f264c771e131c76bf2c8f7e4013167e6e7c5e94bb7766a33896d1e20113a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0f264c771e131c76bf2c8f7e4013167e6e7c5e94bb7766a33896d1e20113a2->enter($__internal_ae0f264c771e131c76bf2c8f7e4013167e6e7c5e94bb7766a33896d1e20113a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a3c1801be4345bb14f597bbf6a21a3581b024510f3ee6703ff73669c9dbced63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c1801be4345bb14f597bbf6a21a3581b024510f3ee6703ff73669c9dbced63->enter($__internal_a3c1801be4345bb14f597bbf6a21a3581b024510f3ee6703ff73669c9dbced63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 53
        echo "        ";
        $this->displayBlock('carousel', $context, $blocks);
        // line 86
        echo "
        <div class=\"container\">
            ";
        // line 88
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "        </div>
        ";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "    </body>
</html>
";
        
        $__internal_ae0f264c771e131c76bf2c8f7e4013167e6e7c5e94bb7766a33896d1e20113a2->leave($__internal_ae0f264c771e131c76bf2c8f7e4013167e6e7c5e94bb7766a33896d1e20113a2_prof);

        
        $__internal_a3c1801be4345bb14f597bbf6a21a3581b024510f3ee6703ff73669c9dbced63->leave($__internal_a3c1801be4345bb14f597bbf6a21a3581b024510f3ee6703ff73669c9dbced63_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8672ce31dd9c8323d26ebf98675c7b8ebbc3d541e7c3f95bcf52c12500ba4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8672ce31dd9c8323d26ebf98675c7b8ebbc3d541e7c3f95bcf52c12500ba4fb->enter($__internal_a8672ce31dd9c8323d26ebf98675c7b8ebbc3d541e7c3f95bcf52c12500ba4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da7a9f4cfdbeb4f7979d38376d8155d3dd65bea69a4cd7fe4d63006d864b75fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7a9f4cfdbeb4f7979d38376d8155d3dd65bea69a4cd7fe4d63006d864b75fb->enter($__internal_da7a9f4cfdbeb4f7979d38376d8155d3dd65bea69a4cd7fe4d63006d864b75fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cuisinons";
        
        $__internal_da7a9f4cfdbeb4f7979d38376d8155d3dd65bea69a4cd7fe4d63006d864b75fb->leave($__internal_da7a9f4cfdbeb4f7979d38376d8155d3dd65bea69a4cd7fe4d63006d864b75fb_prof);

        
        $__internal_a8672ce31dd9c8323d26ebf98675c7b8ebbc3d541e7c3f95bcf52c12500ba4fb->leave($__internal_a8672ce31dd9c8323d26ebf98675c7b8ebbc3d541e7c3f95bcf52c12500ba4fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_edde887ccaa0be1d992b7a860eafb6319b30801057ef56dadcc9f4736c805c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edde887ccaa0be1d992b7a860eafb6319b30801057ef56dadcc9f4736c805c6a->enter($__internal_edde887ccaa0be1d992b7a860eafb6319b30801057ef56dadcc9f4736c805c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cb8e3ba314dc261f1db2164a9c9d8c6563f7fa7cd77b9126c2a0d704bbe0a919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8e3ba314dc261f1db2164a9c9d8c6563f7fa7cd77b9126c2a0d704bbe0a919->enter($__internal_cb8e3ba314dc261f1db2164a9c9d8c6563f7fa7cd77b9126c2a0d704bbe0a919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("stylesheet/main.css"), "html", null, true);
        echo ">
        ";
        
        $__internal_cb8e3ba314dc261f1db2164a9c9d8c6563f7fa7cd77b9126c2a0d704bbe0a919->leave($__internal_cb8e3ba314dc261f1db2164a9c9d8c6563f7fa7cd77b9126c2a0d704bbe0a919_prof);

        
        $__internal_edde887ccaa0be1d992b7a860eafb6319b30801057ef56dadcc9f4736c805c6a->leave($__internal_edde887ccaa0be1d992b7a860eafb6319b30801057ef56dadcc9f4736c805c6a_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_85aff04c4b47625b2e23e13658dd849184beea07493b1059a9462c7ce5a5d5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85aff04c4b47625b2e23e13658dd849184beea07493b1059a9462c7ce5a5d5bf->enter($__internal_85aff04c4b47625b2e23e13658dd849184beea07493b1059a9462c7ce5a5d5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_d73b72a036d4ff2293428c207af626dc2c9078aba5f6ea4a161a1dc9fd3b5ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73b72a036d4ff2293428c207af626dc2c9078aba5f6ea4a161a1dc9fd3b5ec0->enter($__internal_d73b72a036d4ff2293428c207af626dc2c9078aba5f6ea4a161a1dc9fd3b5ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
                            <li><a href=\"#\">Recettes</a></li>
                            <li><a href=\"#\">Ingrédient</a></li>
                        </ul>
                        <form class=\"navbar-form navbar-left\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profil</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        ";
        
        $__internal_d73b72a036d4ff2293428c207af626dc2c9078aba5f6ea4a161a1dc9fd3b5ec0->leave($__internal_d73b72a036d4ff2293428c207af626dc2c9078aba5f6ea4a161a1dc9fd3b5ec0_prof);

        
        $__internal_85aff04c4b47625b2e23e13658dd849184beea07493b1059a9462c7ce5a5d5bf->leave($__internal_85aff04c4b47625b2e23e13658dd849184beea07493b1059a9462c7ce5a5d5bf_prof);

    }

    // line 53
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_adc492c44d259def18cc4862a7a7a07906235fd20b13309cb50860726885e0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc492c44d259def18cc4862a7a7a07906235fd20b13309cb50860726885e0a8->enter($__internal_adc492c44d259def18cc4862a7a7a07906235fd20b13309cb50860726885e0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_4ac90a393f6e79f68c854c11b831dbb50309a3d7f8f9c30d39c802bd0041b64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac90a393f6e79f68c854c11b831dbb50309a3d7f8f9c30d39c802bd0041b64f->enter($__internal_4ac90a393f6e79f68c854c11b831dbb50309a3d7f8f9c30d39c802bd0041b64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        // line 54
        echo "            <div id=\"carousel-example-generic\" class=\"carousel slide container\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img class=\"img-responsive\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/caroussel/plat1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/caroussel/plat2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/caroussel/plat3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        ";
        
        $__internal_4ac90a393f6e79f68c854c11b831dbb50309a3d7f8f9c30d39c802bd0041b64f->leave($__internal_4ac90a393f6e79f68c854c11b831dbb50309a3d7f8f9c30d39c802bd0041b64f_prof);

        
        $__internal_adc492c44d259def18cc4862a7a7a07906235fd20b13309cb50860726885e0a8->leave($__internal_adc492c44d259def18cc4862a7a7a07906235fd20b13309cb50860726885e0a8_prof);

    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        $__internal_efc7d380afa37c1e0d6e6383e07f98f1d5c4fbf791f3b143c85af222926457b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc7d380afa37c1e0d6e6383e07f98f1d5c4fbf791f3b143c85af222926457b4->enter($__internal_efc7d380afa37c1e0d6e6383e07f98f1d5c4fbf791f3b143c85af222926457b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_856783e2b867be1c11032cd7cc911cbf17db2fc84328b048b6ab1f39441b2ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856783e2b867be1c11032cd7cc911cbf17db2fc84328b048b6ab1f39441b2ae7->enter($__internal_856783e2b867be1c11032cd7cc911cbf17db2fc84328b048b6ab1f39441b2ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_856783e2b867be1c11032cd7cc911cbf17db2fc84328b048b6ab1f39441b2ae7->leave($__internal_856783e2b867be1c11032cd7cc911cbf17db2fc84328b048b6ab1f39441b2ae7_prof);

        
        $__internal_efc7d380afa37c1e0d6e6383e07f98f1d5c4fbf791f3b143c85af222926457b4->leave($__internal_efc7d380afa37c1e0d6e6383e07f98f1d5c4fbf791f3b143c85af222926457b4_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fbd3e32dca3c5119dace02a02590756a1f2e1da45a2dc2c6e0cb88795b1789eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd3e32dca3c5119dace02a02590756a1f2e1da45a2dc2c6e0cb88795b1789eb->enter($__internal_fbd3e32dca3c5119dace02a02590756a1f2e1da45a2dc2c6e0cb88795b1789eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3c837ecf18551f69f19ff3a23a7a6717e386ccb8acd9ce14d0bafb77e9e0f022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c837ecf18551f69f19ff3a23a7a6717e386ccb8acd9ce14d0bafb77e9e0f022->enter($__internal_3c837ecf18551f69f19ff3a23a7a6717e386ccb8acd9ce14d0bafb77e9e0f022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
        ";
        
        $__internal_3c837ecf18551f69f19ff3a23a7a6717e386ccb8acd9ce14d0bafb77e9e0f022->leave($__internal_3c837ecf18551f69f19ff3a23a7a6717e386ccb8acd9ce14d0bafb77e9e0f022_prof);

        
        $__internal_fbd3e32dca3c5119dace02a02590756a1f2e1da45a2dc2c6e0cb88795b1789eb->leave($__internal_fbd3e32dca3c5119dace02a02590756a1f2e1da45a2dc2c6e0cb88795b1789eb_prof);

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
        return array (  268 => 91,  259 => 90,  242 => 88,  217 => 71,  211 => 68,  205 => 65,  192 => 54,  183 => 53,  161 => 41,  141 => 24,  129 => 14,  120 => 13,  108 => 8,  105 => 7,  96 => 6,  78 => 5,  66 => 94,  64 => 90,  61 => 89,  59 => 88,  55 => 86,  52 => 53,  50 => 13,  43 => 10,  41 => 6,  37 => 5,  31 => 1,);
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
                            <li><a href=\"#\">Recettes</a></li>
                            <li><a href=\"#\">Ingrédient</a></li>
                        </ul>
                        <form class=\"navbar-form navbar-left\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ app.user.username }} <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Profil</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Déconnexion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        {% endblock %}
        {% block carousel %}
            <div id=\"carousel-example-generic\" class=\"carousel slide container\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"item active\">
                        <img class=\"img-responsive\" src=\"{{ asset('images/caroussel/plat1.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"{{ asset('images/caroussel/plat2.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"item\">
                        <img class=\"img-responsive\" src=\"{{ asset('images/caroussel/plat3.jpg') }}\" alt=\"\">
                    </div>
                </div>

                <!-- Controls -->
                <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        {% endblock %}

        <div class=\"container\">
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
