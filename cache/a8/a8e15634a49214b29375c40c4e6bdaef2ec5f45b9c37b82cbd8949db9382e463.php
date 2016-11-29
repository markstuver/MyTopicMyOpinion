<?php

/* menu.phtml */
class __TwigTemplate_41d522babb2282d3ab5da41137e90f12dbdaca12f589b3bcc8dd45e0ade7a0ec extends Twig_Template
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
        echo "<ul class=\"nav navbar-nav\">
<li ";
        // line 2
        if (((isset($context["page"]) ? $context["page"] : null) == "home")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">Home</a></li>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "<li ";
            if (($this->getAttribute($context["item"], "id", array()) == $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"";
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo "category/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo "category/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "<li  ";
        if (((isset($context["page"]) ? $context["page"] : null) == "contact")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"contactus.php\">Contact Us</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "menu.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 6,  34 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav navbar-nav">*/
/* <li {% if page == "home"  %} class="active"{% endif %}><a href="{{ site.url }}">Home</a></li>*/
/* {% for item in menu %}*/
/* <li {% if item.id == category.id %} class="active" {% endif %}><a href="{% if site.permalink_structure == '0' %}category/{{ item.id }}.html{% else %}category/{{ item.slug }}.html{% endif %}">{{ item.title }}</a></li>*/
/* {% endfor %}*/
/* <li  {% if page == "contact" %} class="active"{% endif %}><a href="contactus.php">Contact Us</a></li>*/
/* </ul>*/
/* */
