<?php

/* partials/base.html.twig */
class __TwigTemplate_c76637ab93966991644f6c874d9fcb8226896881a65042045a67853ae2d8cd7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>";
        // line 10
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        } else {
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        }
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 11
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "\" />

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 19
            echo "        <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    <link rel=\"canonical\" href=\"";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(), "method");
        echo "\">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,600&amp;subset=latin,latin-ext' rel='stylesheet'>

    ";
        // line 26
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css"), "method");
        // line 27
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/vendor/normalizeb146.css"), "method");
        // line 28
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/vendor/foundation.minb146.css"), "method");
        // line 29
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/styleb146.css"), "method");
        // line 30
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/postb146.css"), "method");
        // line 31
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css"), "method");
        // line 32
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/vendor/modernizrb146.js"), "method");
        // line 33
        echo "

    ";
        // line 35
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    <!-- Icons -->
    <!-- 16x16 -->
    <link rel=\"shortcut icon\" href=\"";
        // line 39
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.ico\">
    <!-- 32x32 -->
    <link rel=\"shortcut icon\" href=\"";
        // line 41
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/logo.png\">
    <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 43
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/apple-touch-icon-precomposed.png\">
    <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 45
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/apple-touch-icon-72x72-precomposed.png\">
    <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 47
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/apple-touch-icon-114x114-precomposed.png\">
    <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 49
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/apple-touch-icon-144x144-precomposed.png\">
</head>
";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "    ";
        $context["home"] = $this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "find", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "home", array()), "alias", array())), "method");
        // line 55
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "
        ";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "
        ";
        // line 82
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 83
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/summerb146.js"), "method");
        // line 84
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

    </body>
    </html>
";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "    <body class=\"home-template\" itemscope itemtype=\"http://schema.org/WebPage\">
    ";
    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        // line 56
        echo "            <header class=\"summer-site-head\">
                <div class=\"summer-site-head-menu\">
                    <a class=\"summer-blog-logo\" href=\"";
        // line 58
        echo ((((isset($context["base_url"]) ? $context["base_url"] : null) == "")) ? ("/") : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\"><img src=\"";
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"Blog Logo\" /></a>
                    ";
        // line 59
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"summer-site-head-content\" >
                    <div class=\"summer-site-head-bg\"></div>
                    <h1 class=\"summer-blog-title\">
                        <span class=\"summer-site-head-title-bg\">
                            ";
        // line 66
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "
                        </span>
                    </h1>
                    <h2 class=\"summer-blog-description\">";
        // line 69
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
        echo "</h2>
                </div>
            </header>
        ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        // line 75
        echo "            ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        ";
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 79)->display($context);
        // line 80
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 80,  258 => 79,  255 => 78,  248 => 75,  245 => 74,  237 => 69,  231 => 66,  223 => 60,  221 => 59,  214 => 58,  210 => 56,  207 => 55,  202 => 52,  199 => 51,  189 => 84,  186 => 83,  184 => 82,  181 => 81,  179 => 78,  176 => 77,  174 => 74,  171 => 73,  168 => 55,  165 => 54,  163 => 51,  158 => 49,  153 => 47,  148 => 45,  143 => 43,  138 => 41,  133 => 39,  126 => 35,  122 => 33,  119 => 32,  116 => 31,  113 => 30,  110 => 29,  107 => 28,  104 => 27,  102 => 26,  95 => 22,  92 => 21,  59 => 19,  55 => 18,  45 => 11,  37 => 10,  26 => 2,  23 => 1,);
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
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    <meta charset=\"utf-8\">
    <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <title>{% if page.title %}{{ page.title }}{% else %}{{ site.title }}{% endif %}</title>
    <meta name=\"description\" content=\"{{ site.description }}\" />

    <meta name=\"HandheldFriendly\" content=\"True\" />
    <meta name=\"MobileOptimized\" content=\"320\" />
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\">

    {% for meta in page.metadata %}
        <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endfor %}

    <link rel=\"canonical\" href=\"{{ page.url() }}\">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,600&amp;subset=latin,latin-ext' rel='stylesheet'>

    {% do assets.addCss('theme://css/font-awesome.min.css') %}
    {% do assets.addCss('theme://css/vendor/normalizeb146.css') %}
    {% do assets.addCss('theme://css/vendor/foundation.minb146.css') %}
    {% do assets.addCss('theme://css/styleb146.css') %}
    {% do assets.addCss('theme://css/postb146.css') %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addJs('theme://js/vendor/modernizrb146.js') %}


    {{ assets.css() }}

    <!-- Icons -->
    <!-- 16x16 -->
    <link rel=\"shortcut icon\" href=\"{{ theme_url }}/images/favicon.ico\">
    <!-- 32x32 -->
    <link rel=\"shortcut icon\" href=\"{{ theme_url }}/images/logo.png\">
    <!-- 57x57 (precomposed) for iPhone 3GS, pre-2011 iPod Touch and older Android devices -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ theme_url }}/images/apple-touch-icon-precomposed.png\">
    <!-- 72x72 (precomposed) for 1st generation iPad, iPad 2 and iPad mini -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ theme_url }}/images/apple-touch-icon-72x72-precomposed.png\">
    <!-- 114x114 (precomposed) for iPhone 4, 4S, 5 and post-2011 iPod Touch -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ theme_url }}/images/apple-touch-icon-114x114-precomposed.png\">
    <!-- 144x144 (precomposed) for iPad 3rd and 4th generation -->
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ theme_url }}/images/apple-touch-icon-144x144-precomposed.png\">
</head>
{% block body %}
    <body class=\"home-template\" itemscope itemtype=\"http://schema.org/WebPage\">
    {% endblock %}
    {% set home = pages.find(config.system.home.alias) %}
        {% block header %}
            <header class=\"summer-site-head\">
                <div class=\"summer-site-head-menu\">
                    <a class=\"summer-blog-logo\" href=\"{{ base_url == '' ? '/' : base_url }}\"><img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" /></a>
                    {% include 'partials/navigation.html.twig' %}
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"summer-site-head-content\" >
                    <div class=\"summer-site-head-bg\"></div>
                    <h1 class=\"summer-blog-title\">
                        <span class=\"summer-site-head-title-bg\">
                            {{ site.title }}
                        </span>
                    </h1>
                    <h2 class=\"summer-blog-description\">{{ site.description }}</h2>
                </div>
            </header>
        {% endblock %}

        {% block content %}
            {{ content }}
        {% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/summerb146.js') %}
        {{ assets.js() }}

    </body>
    </html>
", "partials/base.html.twig", "/Users/mcrittenden/Dropbox/Code/adulting/user/themes/notepad/templates/partials/base.html.twig");
    }
}
