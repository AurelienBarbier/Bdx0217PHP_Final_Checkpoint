<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ec3fe00309156bf4259df473c26e7f64800cf3fdf91172ef62ce63f59c11628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec3fe00309156bf4259df473c26e7f64800cf3fdf91172ef62ce63f59c11628->enter($__internal_9ec3fe00309156bf4259df473c26e7f64800cf3fdf91172ef62ce63f59c11628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_751a2e953a563d3e952446a17d448773d42e239ec7fa6b6334ede26e5da61a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751a2e953a563d3e952446a17d448773d42e239ec7fa6b6334ede26e5da61a8e->enter($__internal_751a2e953a563d3e952446a17d448773d42e239ec7fa6b6334ede26e5da61a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9ec3fe00309156bf4259df473c26e7f64800cf3fdf91172ef62ce63f59c11628->leave($__internal_9ec3fe00309156bf4259df473c26e7f64800cf3fdf91172ef62ce63f59c11628_prof);

        
        $__internal_751a2e953a563d3e952446a17d448773d42e239ec7fa6b6334ede26e5da61a8e->leave($__internal_751a2e953a563d3e952446a17d448773d42e239ec7fa6b6334ede26e5da61a8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dff328fdfcf9d9b281bf687a9a363b5c0c2c165bf60fe8573b2d5325aa5bbdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dff328fdfcf9d9b281bf687a9a363b5c0c2c165bf60fe8573b2d5325aa5bbdd->enter($__internal_0dff328fdfcf9d9b281bf687a9a363b5c0c2c165bf60fe8573b2d5325aa5bbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_053889d592be5f99d2067742af8059c009266beefbabdea028c544a23e55125b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053889d592be5f99d2067742af8059c009266beefbabdea028c544a23e55125b->enter($__internal_053889d592be5f99d2067742af8059c009266beefbabdea028c544a23e55125b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_053889d592be5f99d2067742af8059c009266beefbabdea028c544a23e55125b->leave($__internal_053889d592be5f99d2067742af8059c009266beefbabdea028c544a23e55125b_prof);

        
        $__internal_0dff328fdfcf9d9b281bf687a9a363b5c0c2c165bf60fe8573b2d5325aa5bbdd->leave($__internal_0dff328fdfcf9d9b281bf687a9a363b5c0c2c165bf60fe8573b2d5325aa5bbdd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0c0922588f8f2a6462d9e7343899915871d35fe833475dac16d5138047fc36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c0922588f8f2a6462d9e7343899915871d35fe833475dac16d5138047fc36d->enter($__internal_e0c0922588f8f2a6462d9e7343899915871d35fe833475dac16d5138047fc36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e979a0eb332d98a14058a799351d9b3ef8203eba8902fd80c1851d598d0ba5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e979a0eb332d98a14058a799351d9b3ef8203eba8902fd80c1851d598d0ba5a1->enter($__internal_e979a0eb332d98a14058a799351d9b3ef8203eba8902fd80c1851d598d0ba5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e979a0eb332d98a14058a799351d9b3ef8203eba8902fd80c1851d598d0ba5a1->leave($__internal_e979a0eb332d98a14058a799351d9b3ef8203eba8902fd80c1851d598d0ba5a1_prof);

        
        $__internal_e0c0922588f8f2a6462d9e7343899915871d35fe833475dac16d5138047fc36d->leave($__internal_e0c0922588f8f2a6462d9e7343899915871d35fe833475dac16d5138047fc36d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fda4dcb3090969a12c6475ab9aca4034c69b54ddedcfd5601a57a44a1ca9682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fda4dcb3090969a12c6475ab9aca4034c69b54ddedcfd5601a57a44a1ca9682->enter($__internal_4fda4dcb3090969a12c6475ab9aca4034c69b54ddedcfd5601a57a44a1ca9682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_352542264b13c0dab0db3337d76e2336309a033294c1629d1e3324a86a4cdf71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352542264b13c0dab0db3337d76e2336309a033294c1629d1e3324a86a4cdf71->enter($__internal_352542264b13c0dab0db3337d76e2336309a033294c1629d1e3324a86a4cdf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_352542264b13c0dab0db3337d76e2336309a033294c1629d1e3324a86a4cdf71->leave($__internal_352542264b13c0dab0db3337d76e2336309a033294c1629d1e3324a86a4cdf71_prof);

        
        $__internal_4fda4dcb3090969a12c6475ab9aca4034c69b54ddedcfd5601a57a44a1ca9682->leave($__internal_4fda4dcb3090969a12c6475ab9aca4034c69b54ddedcfd5601a57a44a1ca9682_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/wilder/Apache/Bdx0217PHP_Final_Checkpoint/final/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
