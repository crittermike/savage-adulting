<?php

/* page.html.twig */
class __TwigTemplate_ee18966246f5971f8e58e96aada34ea3c971d07eac0ef7a6e4640b0ea20f3758 extends Twig_Template
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
        $this->loadTemplate("page.html.twig", "page.html.twig", 1, "1304515677")->display($context);
    }

    public function getTemplateName()
    {
        return "page.html.twig";
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
                <a class=\"summer-blog-logo\" href=\"{{ basebase_url_absolute_url }}\">
                    <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" /></a>
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
            <div>{{ content }}</div>
        </article>
        <div class=\"cf\"></div>
        {% include 'partials/footer.html.twig' %}
    </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}", "page.html.twig", "/Users/mcrittenden/Dropbox/Code/adulting/user/themes/notepad/templates/page.html.twig");
    }
}


/* page.html.twig */
class __TwigTemplate_ee18966246f5971f8e58e96aada34ea3c971d07eac0ef7a6e4640b0ea20f3758_1304515677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "page.html.twig", 1);
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
        echo (isset($context["basebase_url_absolute_url"]) ? $context["basebase_url_absolute_url"] : null);
        echo "\">
                    <img src=\"";
        // line 12
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"Blog Logo\" /></a>
                </a>

                ";
        // line 15
        $this->loadTemplate("partials/navigation.html.twig", "page.html.twig", 15)->display($context);
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
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</div>
        </article>
        <div class=\"cf\"></div>
        ";
        // line 27
        $this->loadTemplate("partials/footer.html.twig", "page.html.twig", 27)->display($context);
        // line 28
        echo "    </main>
";
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 31,  160 => 28,  158 => 27,  152 => 24,  144 => 19,  139 => 16,  137 => 15,  130 => 12,  126 => 11,  121 => 8,  118 => 7,  113 => 5,  108 => 3,  105 => 2,  19 => 1,);
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
                <a class=\"summer-blog-logo\" href=\"{{ basebase_url_absolute_url }}\">
                    <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" /></a>
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
            <div>{{ content }}</div>
        </article>
        <div class=\"cf\"></div>
        {% include 'partials/footer.html.twig' %}
    </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}", "page.html.twig", "/Users/mcrittenden/Dropbox/Code/adulting/user/themes/notepad/templates/page.html.twig");
    }
}
