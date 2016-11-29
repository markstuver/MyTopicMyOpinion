<?php

/* sidebar.phtml */
class __TwigTemplate_9ed9662c41bca06e89971b7cfa7942ef79b3730530c9a9bdf4e3a242ed3a754a extends Twig_Template
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
        echo "<!-- Start Sidebar -->
<div class=\"col-lg-3 col-md-4 col-xs-12 col-sm-12 side\">
\t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t\t
\t\t<!-- Start Search Widget -->
\t\t<div class=\"panel panel-pale\">
\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"headingFour\">
\t\t\t\t<h4 class=\"panel-title\"><a class=\"\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion4\" href=\"#CollapseFour\" aria-expanded=\"false\" aria-controls=\"CollapseFour\">Search</a></h4>
\t\t\t</div>
\t\t\t<div id=\"CollapseFour\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingFour\">
\t\t\t\t<div class=\"panel-body search\">
\t\t\t\t\t<form method=\"get\" action=\"search.php\" id=\"search\">
\t\t\t\t\t\t<div class=\"searchblog\">
\t\t\t\t\t\t\t<button type=\"submit\">
\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"searchbox\">
\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" name=\"search\" placeholder=\"Search...\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Search Widget -->
\t\t
\t\t<!-- Start Latest Posts Widget -->
\t\t<div class=\"panel panel-pale\">
\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
\t\t\t\t<h4 class=\"panel-title\"><a class=\"\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">Latest Posts</a></h4>
\t\t\t</div>
\t\t\t<div id=\"collapseTwo\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest_posts"]) ? $context["latest_posts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 35
            echo "\t\t\t\t\t<div class=\"panel-post\">
\t\t\t\t\t\t";
            // line 36
            if (($this->getAttribute($context["post"], "photo", array()) != null)) {
                // line 37
                echo "\t\t\t\t\t\t<img src=\"uploads/posts/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "photo", array()), "html", null, true);
                echo "\" title=\"";
                echo $this->getAttribute($context["post"], "title", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["post"], "title", array());
                echo "\">
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t<h5><a href=\"";
            // line 40
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "\">";
            echo $this->getAttribute($context["post"], "title", array());
            echo "</a></h5>
\t\t\t\t\t\t<p>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "F jS, Y"), "html", null, true);
            echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Latest Posts Widget -->

\t\t<!-- Start Categories Widget -->
\t\t<div class=\"panel panel-pale\">
\t\t\t<div class=\"panel-heading\" role=\"tab\" id=\"headingThree\">
\t\t\t\t<h4 class=\"panel-title\"><a class=\"\" role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">Categories</a></h4>
\t\t\t</div>
\t\t\t<div id=\"collapseThree\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"headingThree\">
\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t<ul class=\"panel-cat\">
\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "\t\t\t\t\t\t<li><a href=\"";
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
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Categories Widget -->
\t\t\t
\t</div>
</div>
<!-- End Sidebar -->";
    }

    public function getTemplateName()
    {
        return "sidebar.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 61,  117 => 59,  113 => 58,  98 => 45,  88 => 41,  76 => 40,  73 => 39,  63 => 37,  61 => 36,  58 => 35,  54 => 34,  19 => 1,);
    }
}
/* <!-- Start Sidebar -->*/
/* <div class="col-lg-3 col-md-4 col-xs-12 col-sm-12 side">*/
/* 	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">*/
/* 		*/
/* 		<!-- Start Search Widget -->*/
/* 		<div class="panel panel-pale">*/
/* 			<div class="panel-heading" role="tab" id="headingFour">*/
/* 				<h4 class="panel-title"><a class="" role="button" data-toggle="collapse" data-parent="#accordion4" href="#CollapseFour" aria-expanded="false" aria-controls="CollapseFour">Search</a></h4>*/
/* 			</div>*/
/* 			<div id="CollapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">*/
/* 				<div class="panel-body search">*/
/* 					<form method="get" action="search.php" id="search">*/
/* 						<div class="searchblog">*/
/* 							<button type="submit">*/
/* 							<i class="fa fa-search"></i>*/
/* 							</button>*/
/* 						<div class="searchbox">*/
/* 							<input type="search" class="form-control" name="search" placeholder="Search...">*/
/* 						</div>*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- End Search Widget -->*/
/* 		*/
/* 		<!-- Start Latest Posts Widget -->*/
/* 		<div class="panel panel-pale">*/
/* 			<div class="panel-heading" role="tab" id="headingTwo">*/
/* 				<h4 class="panel-title"><a class="" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Latest Posts</a></h4>*/
/* 			</div>*/
/* 			<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">*/
/* 				<div class="panel-body">*/
/* 					{% for post in latest_posts %}*/
/* 					<div class="panel-post">*/
/* 						{% if post.photo != NULL %}*/
/* 						<img src="uploads/posts/{{ post.photo }}" title="{{ post.title | raw }}" alt="{{ post.title | raw }}">*/
/* 						{% endif %}*/
/* 					<div class="desc">*/
/* 						<h5><a href="{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}">{{ post.title | raw }}</a></h5>*/
/* 						<p>{{ post.date|date("F jS, Y") }}</p>*/
/* 					</div>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- End Latest Posts Widget -->*/
/* */
/* 		<!-- Start Categories Widget -->*/
/* 		<div class="panel panel-pale">*/
/* 			<div class="panel-heading" role="tab" id="headingThree">*/
/* 				<h4 class="panel-title"><a class="" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Categories</a></h4>*/
/* 			</div>*/
/* 			<div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">*/
/* 				<div class="panel-body">*/
/* 					<ul class="panel-cat">*/
/* 						{% for item in menu %}*/
/* 						<li><a href="{% if site.permalink_structure == '0' %}category/{{ item.id }}.html{% else %}category/{{ item.slug }}.html{% endif %}">{{ item.title }}</a></li>*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- End Categories Widget -->*/
/* 			*/
/* 	</div>*/
/* </div>*/
/* <!-- End Sidebar -->*/
