<?php

/* partials/footer.html.twig */
class __TwigTemplate_12fa32c8955cd7aaa6b7f24a08ecfeaee9751dc92605e6a5371c691978b9726e extends Twig_Template
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
        echo "<footer class=\"summer-site-footer\">
    <div class=\"copyright\">
         <section>All content copyright <a href=\"";
        // line 3
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "name", array());
        echo "</a> &copy; All rights reserved.</section>
         <section>Proudly published with <a class=\"icon-ghost\" href=\"https://jekyllrb.com/\">Grav</a></section>
    </div>
    <div class=\"social-icons\">
        
        ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "twitter", array())) {
            // line 9
            echo "        <a href=\"http://twitter.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "twitter", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-twitter fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 16
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "google_plus", array())) {
            // line 17
            echo "        <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "google_plus", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-google-plus fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 24
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "instagram", array())) {
            // line 25
            echo "        <a href=\"http://instagram.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "instagram", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-instagram fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 32
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "github", array())) {
            // line 33
            echo "        <a href=\"http://github.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "github", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-github fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 40
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "facebook", array())) {
            // line 41
            echo "        <a href=\"http://facebook.com/";
            echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "owner", array()), "facebook", array());
            echo "\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-facebook fa-stack-1x\"></i>
            </span>
        </a>
        ";
        }
        // line 48
        echo "    </div>
    
    <div class=\"cf\"></div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 48,  91 => 41,  88 => 40,  77 => 33,  74 => 32,  63 => 25,  60 => 24,  49 => 17,  46 => 16,  35 => 9,  33 => 8,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"summer-site-footer\">
    <div class=\"copyright\">
         <section>All content copyright <a href=\"{{ base_url_absolute }}\">{{ site.owner.name }}</a> &copy; All rights reserved.</section>
         <section>Proudly published with <a class=\"icon-ghost\" href=\"https://jekyllrb.com/\">Grav</a></section>
    </div>
    <div class=\"social-icons\">
        
        {% if site.owner.twitter %}
        <a href=\"http://twitter.com/{{ site.owner.twitter }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-twitter fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.google_plus %}
        <a href=\"{{ site.owner.google_plus }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-google-plus fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.instagram %}
        <a href=\"http://instagram.com/{{ site.owner.instagram }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-instagram fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.github %}
        <a href=\"http://github.com/{{ site.owner.github }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-github fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
        {% if site.owner.facebook %}
        <a href=\"http://facebook.com/{{ site.owner.facebook }}\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x fa-inverse\"></i>
                <i class=\"fa fa-facebook fa-stack-1x\"></i>
            </span>
        </a>
        {% endif %}
    </div>
    
    <div class=\"cf\"></div>
</footer>", "partials/footer.html.twig", "/Users/mcrittenden/Dropbox/Code/adulting/user/themes/notepad/templates/partials/footer.html.twig");
    }
}
