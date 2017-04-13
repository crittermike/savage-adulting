<?php

/* featured.html.twig */
class __TwigTemplate_6eadf0d56ec8e3c8827cf5bd0bc54c410fac1e873dbe40d9a7c373d419158dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("featured.html.twig", "featured.html.twig", 1, "1217089384")->display($context);
    }

    public function getTemplateName()
    {
        return "featured.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
{% block body %}
<body class=\"post-template page\" itemscope itemtype=\"http://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" />
                </a>

                {% include 'partials/navigation.html.twig' %}
            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>{{ page.title }}</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
            <div>{% set featured = taxonomy.findTaxonomy({'tag':'featured'}) %}
                <ul class=\"post-list\">
                    {% for post in featured %}
                      <li><article><i class=\"fa fa-star-half-o\"></i> <a href=\"{{ post.url }}\">{{ post.title }} <span class=\"entry-date\"><time datetime=\"{{ post.date | date(site.date_long) }}\">{{ post.date | date(\"d M Y\") }}</time></span></a></article></li>
                  {% endfor %}
              </ul></div>
          </article>
          <div class=\"cf\"></div>
          {% include 'partials/footer.html.twig' %}
      </main>
{% endblock %}
{% block footer %}{% endblock %}
{% endembed %}
", "featured.html.twig", "/Users/mcrittenden/Dropbox/Code/adulting/user/themes/notepad/templates/featured.html.twig");
    }
}


/* featured.html.twig */
class __TwigTemplate_6eadf0d56ec8e3c8827cf5bd0bc54c410fac1e873dbe40d9a7c373d419158dd3_1217089384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "featured.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<body class=\"post-template page\" itemscope itemtype=\"http://schema.org/WebPage\">
";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"";
        // line 11
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
                    <img src=\"";
        // line 12
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"Blog Logo\" />
                </a>

                ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "featured.html.twig", 15)->display($context);
        // line 16
        echo "            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
            <div>";
        // line 24
        $context["featured"] = $this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "findTaxonomy", array(0 => array("tag" => "featured")), "method");
        // line 25
        echo "                <ul class=\"post-list\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["featured"]) ? $context["featured"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 27
            echo "                      <li><article><i class=\"fa fa-star-half-o\"></i> <a href=\"";
            echo $this->getAttribute($context["post"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["post"], "title", array());
            echo " <span class=\"entry-date\"><time datetime=\"";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_long", array()));
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "d M Y");
            echo "</time></span></a></article></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "              </ul></div>
          </article>
          <div class=\"cf\"></div>
          ";
        // line 32
        $this->loadTemplate("partials/footer.html.twig", "featured.html.twig", 32)->display($context);
        // line 33
        echo "      </main>
";
    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "featured.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 35,  188 => 33,  186 => 32,  181 => 29,  166 => 27,  162 => 26,  159 => 25,  157 => 24,  149 => 19,  144 => 16,  142 => 15,  135 => 12,  131 => 11,  126 => 8,  123 => 7,  118 => 5,  113 => 3,  110 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
{% block body %}
<body class=\"post-template page\" itemscope itemtype=\"http://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
    <main id=\"summer-page-container\" class=\"summer-page-container\" role=\"main\">
        <header class=\"summer-page-header\">
            <div class=\"summer-page-menu-header\">
                <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
                    <img src=\"{{ base_url_relative }}{{ site.logo }}\" alt=\"Blog Logo\" />
                </a>

                {% include 'partials/navigation.html.twig' %}
            </div>
            <div class=\"summer-page-title row\">
                <div class=\"small-12 columns\">
                    <h1>{{ page.title }}</h1>
                </div>
            </div>
        </header>
        <article class=\"summer-page-content\">
            <div>{% set featured = taxonomy.findTaxonomy({'tag':'featured'}) %}
                <ul class=\"post-list\">
                    {% for post in featured %}
                      <li><article><i class=\"fa fa-star-half-o\"></i> <a href=\"{{ post.url }}\">{{ post.title }} <span class=\"entry-date\"><time datetime=\"{{ post.date | date(site.date_long) }}\">{{ post.date | date(\"d M Y\") }}</time></span></a></article></li>
                  {% endfor %}
              </ul></div>
          </article>
          <div class=\"cf\"></div>
          {% include 'partials/footer.html.twig' %}
      </main>
{% endblock %}
{% block footer %}{% endblock %}
{% endembed %}
", "featured.html.twig", "/Users/mcrittenden/Dropbox/Code/adulting/user/themes/notepad/templates/featured.html.twig");
    }
}
