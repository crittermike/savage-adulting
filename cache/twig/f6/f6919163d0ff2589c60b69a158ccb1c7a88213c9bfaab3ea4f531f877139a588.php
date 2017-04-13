<?php

/* post.html.twig */
class __TwigTemplate_152505f9e9d5c5849198b6b53aee95ca0a7178642c9f3c086df38d8007020596 extends Twig_Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1902857889")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
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
<body class=\"post-template\" itemscope itemtype=\"http://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
 <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced modify\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
        <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" />
      </a>
      {% include 'partials/navigation.html.twig' %}
    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>{{ page.title }}</h1>
      <p>by <strong>{{ site.owner.name }}</strong> &#8212; on {% for tag in page.taxonomy.tag %}<a href=\"{{ base_url_absolute }}/tag:{{ tag }}\" data-toggle=\"tooltip\" title=\"Posts tagged with {{ tag }}\" rel=\"tag\">{{ tag }}</a>{%if not loop.last %}&nbsp;&comma;&nbsp;{% endif %}{% endfor %} <strong><time datetime=\"{{ page.date | date(site.date_long) }}\">{{ page.date | date(\"d M Y\") }}</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

    <article class=\"summer-post-content post\">
      <div>
        {{ content }}
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    {% include 'partials/footer.html.twig' %}
    <div class=\"cf\"></div>
  </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}
", "post.html.twig", "/Users/mcrittenden/Dropbox/Code/adulting/user/themes/notepad/templates/post.html.twig");
    }
}


/* post.html.twig */
class __TwigTemplate_152505f9e9d5c5849198b6b53aee95ca0a7178642c9f3c086df38d8007020596_1902857889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<body class=\"post-template\" itemscope itemtype=\"http://schema.org/WebPage\">
";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo " <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced modify\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"";
        // line 13
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">
        <img src=\"";
        // line 14
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array());
        echo "\" alt=\"Blog Logo\" />
      </a>
      ";
        // line 16
        $this->loadTemplate("partials/navigation.html.twig", "post.html.twig", 16)->display($context);
        // line 17
        echo "    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
      <p>by <strong>";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "name", array());
        echo "</strong> &#8212; on ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo "<a href=\"";
            echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
            echo "/tag:";
            echo $context["tag"];
            echo "\" data-toggle=\"tooltip\" title=\"Posts tagged with ";
            echo $context["tag"];
            echo "\" rel=\"tag\">";
            echo $context["tag"];
            echo "</a>";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "&nbsp;&comma;&nbsp;";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " <strong><time datetime=\"";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "date_long", array()));
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d M Y");
        echo "</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

    <article class=\"summer-post-content post\">
      <div>
        ";
        // line 27
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    ";
        // line 33
        $this->loadTemplate("partials/footer.html.twig", "post.html.twig", 33)->display($context);
        // line 34
        echo "    <div class=\"cf\"></div>
  </main>
";
    }

    // line 38
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 38,  221 => 34,  219 => 33,  210 => 27,  155 => 20,  151 => 19,  147 => 17,  145 => 16,  139 => 14,  135 => 13,  129 => 9,  126 => 8,  121 => 6,  116 => 4,  113 => 3,  19 => 1,);
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
<body class=\"post-template\" itemscope itemtype=\"http://schema.org/WebPage\">
{% endblock %}
{% block header %}{% endblock %}

{% block content %}
 <main id=\"summer-post-container\" class=\"summer-post-container intro-effect-sliced modify\" role=\"main\">
  <header class=\"summer-post-header\">
    <div class=\"bg-img\"></div>
    <div class=\"summer-post-menu-header\">
      <a class=\"summer-blog-logo\" href=\"{{ base_url_absolute }}\">
        <img src=\"{{ base_url }}{{ site.logo }}\" alt=\"Blog Logo\" />
      </a>
      {% include 'partials/navigation.html.twig' %}
    </div>
    <div class=\"summer-post-title bg-check\">
      <h1>{{ page.title }}</h1>
      <p>by <strong>{{ site.owner.name }}</strong> &#8212; on {% for tag in page.taxonomy.tag %}<a href=\"{{ base_url_absolute }}/tag:{{ tag }}\" data-toggle=\"tooltip\" title=\"Posts tagged with {{ tag }}\" rel=\"tag\">{{ tag }}</a>{%if not loop.last %}&nbsp;&comma;&nbsp;{% endif %}{% endfor %} <strong><time datetime=\"{{ page.date | date(site.date_long) }}\">{{ page.date | date(\"d M Y\") }}</time></strong></p>
    </div>
    <div class=\"bg-img\"></div>
  </header>

    <article class=\"summer-post-content post\">
      <div>
        {{ content }}
      </div>
    </article>
    <div class=\"cf\"></div>
    <br />

    {% include 'partials/footer.html.twig' %}
    <div class=\"cf\"></div>
  </main>
{% endblock %}

{% block footer %}{% endblock %}
{% endembed %}
", "post.html.twig", "/Users/mcrittenden/Dropbox/Code/adulting/user/themes/notepad/templates/post.html.twig");
    }
}
