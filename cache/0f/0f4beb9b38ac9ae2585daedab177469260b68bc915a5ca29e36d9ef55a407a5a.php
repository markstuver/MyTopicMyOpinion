<?php

/* category.phtml */
class __TwigTemplate_91226d7fbec6adde73c1a433884a21cc742f356180ce97ffd1c39dca2b3c18b0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array())), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "keywords", array()), "html", null, true);
        echo "\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta property=\"og:title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
        echo "\">
\t<meta property=\"og:description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array())), "html", null, true);
        echo "\">
\t<base href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">

\t<!-- FAVICON -->
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"template/default/assets/img/favicon.ico\" />

\t<!-- CSS & JS Library -->
\t<link href=\"template/default/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<link href=\"template/default/assets/css/animate.css\" rel=\"stylesheet\">
\t<link href=\"template/default/assets/css/font-awesome.min.css\" rel=\"stylesheet\">
\t<link href=\"template/default/assets/css/style.css\" rel=\"stylesheet\">
\t<script src=\"template/default/assets/js/jquery-1.11.1.js\"></script>
\t
\t<!-- Google Fonts -->
\t<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
\t<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
</head>
<body>
\t<!-- Start Header -->
\t<header>
\t\t<!-- Start Logo -->
\t\t<div class=\"h-logo\">
\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">
\t\t\t<img src=\"uploads/";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "\">
\t\t\t</a>
\t\t</div>
\t\t<!-- End Logo -->
\t\t
\t\t<!-- Start Menu -->
\t\t<nav class=\"navbar navbar-pale\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Menu</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t";
        // line 49
        $this->loadTemplate("menu.phtml", "category.phtml", 49)->display($context);
        // line 50
        echo "\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<!-- End Menu -->
\t\t
\t</header>
\t<!-- End Header -->
\t
\t<!-- Start Content -->
\t<div class=\"main\">
\t\t<!-- Start Category Title and Description -->
\t\t<section class=\"main-t\">
\t\t\t<h1> ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
        echo " </h1>
\t\t\t<h4> ";
        // line 63
        echo $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array());
        echo " </h4>
\t\t</section>
\t\t<!-- End Category Title and Description -->
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t
\t\t\t\t<div class=\"col-lg-9 col-md-8 col-xs-12 col-sm-12 main-content\">\t
\t\t\t\t\t<!-- Start Posts Loop -->
\t\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 73
            echo "\t\t\t\t\t<article class=\"main-d\">
\t\t\t\t\t\t";
            // line 74
            if (($this->getAttribute($context["post"], "photo", array()) != null)) {
                // line 75
                echo "\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<div class=\"main-hov\">
\t\t\t\t\t\t\t\t<h5>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                // line 79
                if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                    echo ".html";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
                    echo ".html";
                }
                echo "\">
\t\t\t\t\t\t\t\t<img src=\"uploads/posts/";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "photo", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h2><span><a href=\"";
            // line 85
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "\">";
            echo $this->getAttribute($context["post"], "title", array());
            echo "</a></span></h2>
\t\t\t\t\t\t\t";
            // line 86
            echo $this->getAttribute($context["post"], "description", array());
            echo "
\t\t\t\t\t\t\t<div class=\"read-btn\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"";
            // line 89
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "\" class=\"btn btn-paleutism btn-lg\"> Read More... </a>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"more-tabs\">
\t\t\t\t\t\t\t<div class=\"article-date\">
\t\t\t\t\t\t\t<p><strong>";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "M j"), "html", null, true);
            echo "</strong></p><p>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y"), "html", null, true);
            echo "</p> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 99
            echo "\t\t\t\t\t<article class=\"main-d\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<p> No Posts Found in  ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
            echo " </p>
\t\t\t\t\t\t\t</hr>
\t\t\t\t\t\t\t<p>Sorry, but No posts found in  ";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "title", array()), "html", null, true);
            echo ". Feel free to search our website.</p>
\t\t\t\t\t\t<form method=\"get\" action=\"search.php\" id=\"search\">
\t\t\t\t\t\t\t<div class=\"searchblog\">
\t\t\t\t\t\t\t\t<button type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"searchbox\">
\t\t\t\t\t\t\t\t<input type=\"search\" name=\"search\" class=\"form-control\" id=\"Search\" placeholder=\"Search...\" value=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t\t\t<!-- End Posts Loop -->
\t\t\t\t
\t\t\t\t\t<!-- Start Pagination -->
\t\t\t\t\t";
        // line 120
        if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
            // line 121
            echo "\t\t\t\t\t\t<div class=\"pages\">
\t\t\t\t\t\t";
            // line 122
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                // line 123
                echo "\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 124
                if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                    echo "category/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
                } else {
                    echo "category/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "html", null, true);
                }
                echo "/page/";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                echo ".html\"> &lt;&lt; Newer Posts </a>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t\t";
            if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                // line 130
                echo "\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 131
                if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                    echo "category/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()), "html", null, true);
                } else {
                    echo "category/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "html", null, true);
                }
                echo "/page/";
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                echo ".html\"> Older Posts &gt;&gt; </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 134
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 136
        echo "\t\t\t\t\t<!-- End Pagination -->
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 139
        $this->loadTemplate("sidebar.phtml", "category.phtml", 139)->display($context);
        // line 140
        echo "\t\t\t</div>\t
\t\t</div>
\t
\t</div>
\t<!-- End Content -->

\t<!-- Start Footer -->
\t<footer role=\"contentinfo\">
\t\t<p>";
        // line 148
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
        echo "</p> 
\t\t<a class=\"site-logo\" href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "</a>
\t</footer>
\t<!-- End Footer -->
\t
\t<!-- JS Library -->
\t<script src=\"http://code.jquery.com/jquery-2.1.1.min.js\"></script>
\t<script src=\"template/default/assets/js/bootstrap.min.js\"></script>
\t<script src=\"template/default/assets/js/smoothscroll.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "category.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 149,  321 => 148,  311 => 140,  309 => 139,  304 => 136,  300 => 134,  286 => 131,  283 => 130,  280 => 129,  264 => 124,  261 => 123,  259 => 122,  256 => 121,  254 => 120,  249 => 117,  229 => 103,  224 => 101,  220 => 99,  208 => 94,  194 => 89,  188 => 86,  176 => 85,  173 => 84,  162 => 80,  152 => 79,  147 => 77,  143 => 75,  141 => 74,  138 => 73,  133 => 72,  121 => 63,  117 => 62,  103 => 50,  101 => 49,  77 => 32,  73 => 31,  49 => 10,  45 => 9,  39 => 8,  34 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>{{ site.title }} - {{ category.title }}</title>*/
/* 	<meta name="description" content="{{ category.description|striptags }}">*/
/* 	<meta name="keywords" content="{{ category.keywords }}">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<meta property="og:title" content="{{ site.title }} - {{ category.title }}">*/
/* 	<meta property="og:description" content="{{ category.description|striptags }}">*/
/* 	<base href="{{ site.url }}">*/
/* */
/* 	<!-- FAVICON -->*/
/* 	<link rel="icon" type="image/x-icon" href="template/default/assets/img/favicon.ico" />*/
/* */
/* 	<!-- CSS & JS Library -->*/
/* 	<link href="template/default/assets/css/bootstrap.min.css" rel="stylesheet">*/
/* 	<link href="template/default/assets/css/animate.css" rel="stylesheet">*/
/* 	<link href="template/default/assets/css/font-awesome.min.css" rel="stylesheet">*/
/* 	<link href="template/default/assets/css/style.css" rel="stylesheet">*/
/* 	<script src="template/default/assets/js/jquery-1.11.1.js"></script>*/
/* 	*/
/* 	<!-- Google Fonts -->*/
/* 	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>*/
/* 	<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>*/
/* </head>*/
/* <body>*/
/* 	<!-- Start Header -->*/
/* 	<header>*/
/* 		<!-- Start Logo -->*/
/* 		<div class="h-logo">*/
/* 			<a href="{{ site.url }}">*/
/* 			<img src="uploads/{{ site.logo }}" title="{{ site.title }}" alt="{{ site.title }}">*/
/* 			</a>*/
/* 		</div>*/
/* 		<!-- End Logo -->*/
/* 		*/
/* 		<!-- Start Menu -->*/
/* 		<nav class="navbar navbar-pale">*/
/* 			<div class="container-fluid">*/
/* 				<div class="navbar-header">*/
/* 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 					<span class="sr-only">Menu</span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					</button>*/
/* 				</div>*/
/* 			<div id="navbar" class="navbar-collapse collapse">*/
/* 					{% include 'menu.phtml' %}*/
/* 			</div>*/
/* 			</div>*/
/* 		</nav>*/
/* 		<!-- End Menu -->*/
/* 		*/
/* 	</header>*/
/* 	<!-- End Header -->*/
/* 	*/
/* 	<!-- Start Content -->*/
/* 	<div class="main">*/
/* 		<!-- Start Category Title and Description -->*/
/* 		<section class="main-t">*/
/* 			<h1> {{ category.title }} </h1>*/
/* 			<h4> {{ category.description|raw }} </h4>*/
/* 		</section>*/
/* 		<!-- End Category Title and Description -->*/
/* 		*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 		*/
/* 				<div class="col-lg-9 col-md-8 col-xs-12 col-sm-12 main-content">	*/
/* 					<!-- Start Posts Loop -->*/
/* 					{% for post in posts %}*/
/* 					<article class="main-d">*/
/* 						{% if post.photo != NULL %}*/
/* 						<div class="img">*/
/* 							<div class="main-hov">*/
/* 								<h5>{{ category.title }}</h5>*/
/* 							</div>*/
/* 							<a href="{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}">*/
/* 								<img src="uploads/posts/{{ post.photo }}" title="{{ post.title }}" alt="{{ post.title }}">*/
/* 							</a>*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						<div class="content">*/
/* 							<h2><span><a href="{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}">{{ post.title | raw }}</a></span></h2>*/
/* 							{{ post.description | raw }}*/
/* 							<div class="read-btn">*/
/* 								*/
/* 								<a href="{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}" class="btn btn-paleutism btn-lg"> Read More... </a>								*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="more-tabs">*/
/* 							<div class="article-date">*/
/* 							<p><strong>{{ post.date|date("M j") }}</strong></p><p>{{ post.date|date("Y") }}</p> */
/* 							</div>*/
/* 						</div>*/
/* 					</article>*/
/* 					{% else %}*/
/* 					<article class="main-d">*/
/* 						<div class="content">*/
/* 							<p> No Posts Found in  {{ category.title }} </p>*/
/* 							</hr>*/
/* 							<p>Sorry, but No posts found in  {{ category.title }}. Feel free to search our website.</p>*/
/* 						<form method="get" action="search.php" id="search">*/
/* 							<div class="searchblog">*/
/* 								<button type="submit">*/
/* 								<i class="fa fa-search"></i>*/
/* 								</button>*/
/* 							<div class="searchbox">*/
/* 								<input type="search" name="search" class="form-control" id="Search" placeholder="Search..." value="">*/
/* 							</div>*/
/* 							</div>*/
/* 						</form>*/
/* 						</div>*/
/* 					</article>*/
/* 					{% endfor %}*/
/* 					<!-- End Posts Loop -->*/
/* 				*/
/* 					<!-- Start Pagination -->*/
/* 					{% if lastPage > 1 %}*/
/* 						<div class="pages">*/
/* 						{% if currentPage > 1 %}*/
/* 							<div class="pull-left">*/
/* 								<a href="{% if site.permalink_structure == '0' %}category/{{ category.id }}{% else %}category/{{ category.slug }}{% endif %}/page/{{ currentPage-1 }}.html"> &lt;&lt; Newer Posts </a>*/
/* 								*/
/* */
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if currentPage < lastPage %}*/
/* 							<div class="pull-right">*/
/* 								<a href="{% if site.permalink_structure == '0' %}category/{{ category.id }}{% else %}category/{{ category.slug }}{% endif %}/page/{{ currentPage+1 }}.html"> Older Posts &gt;&gt; </a>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<!-- End Pagination -->*/
/* 				</div>*/
/* 				*/
/* 				{% include 'sidebar.phtml' %}*/
/* 			</div>	*/
/* 		</div>*/
/* 	*/
/* 	</div>*/
/* 	<!-- End Content -->*/
/* */
/* 	<!-- Start Footer -->*/
/* 	<footer role="contentinfo">*/
/* 		<p>{{ site.copyright | raw }}</p> */
/* 		<a class="site-logo" href="{{ site.url }}">{{ site.title }}</a>*/
/* 	</footer>*/
/* 	<!-- End Footer -->*/
/* 	*/
/* 	<!-- JS Library -->*/
/* 	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/* 	<script src="template/default/assets/js/bootstrap.min.js"></script>*/
/* 	<script src="template/default/assets/js/smoothscroll.js"></script>*/
/* </body>*/
/* </html>*/
