<?php

/* search.phtml */
class __TwigTemplate_cebecdb85bd7ea57d8d81987689b8e449f8c8c819be54d77b1965af31eb6ee15 extends Twig_Template
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
        echo " - Search for ";
        echo (isset($context["term"]) ? $context["term"] : null);
        echo "</title>
\t<meta name=\"description\" content=\"Search for ";
        // line 5
        echo (isset($context["term"]) ? $context["term"] : null);
        echo "\">
\t<meta name=\"keywords\" content=\"Search for ";
        // line 6
        echo (isset($context["term"]) ? $context["term"] : null);
        echo ", ";
        echo (isset($context["term"]) ? $context["term"] : null);
        echo "\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta property=\"og:title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo " - Search for ";
        echo (isset($context["term"]) ? $context["term"] : null);
        echo "\">
\t<meta property=\"og:description\" content=\"Search for ";
        // line 9
        echo (isset($context["term"]) ? $context["term"] : null);
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
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">
\t\t\t<img src=\"uploads/";
        // line 31
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
        // line 48
        $this->loadTemplate("menu.phtml", "search.phtml", 48)->display($context);
        // line 49
        echo "\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<!-- End Menu -->
\t\t
\t</header>
\t<!-- End Header -->

\t<!-- Start Content -->
\t<div class=\"main\">
\t\t<!-- Start Search Title  -->
\t\t<section class=\"main-t\">
\t\t\t";
        // line 61
        if ((((isset($context["totalposts"]) ? $context["totalposts"] : null) >= 1) &&  !twig_test_empty((isset($context["term"]) ? $context["term"] : null)))) {
            // line 62
            echo "\t\t\t<h1> Search for ";
            echo (isset($context["term"]) ? $context["term"] : null);
            echo " </h1>
\t\t\t<h4> ";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["totalposts"]) ? $context["totalposts"] : null), "html", null, true);
            echo " Result(s) Found for ";
            echo (isset($context["term"]) ? $context["term"] : null);
            echo " </h4>
\t\t\t";
        }
        // line 65
        echo "\t\t\t";
        if ((((isset($context["totalposts"]) ? $context["totalposts"] : null) == 0) || twig_test_empty((isset($context["term"]) ? $context["term"] : null)))) {
            // line 66
            echo "\t\t\t<h1> Nothing found for \"";
            echo (isset($context["term"]) ? $context["term"] : null);
            echo "\" </h1>
\t\t\t<h4> Sorry, but nothing matched your search terms. Please try again with some different keywords. </h4>
\t\t\t";
        }
        // line 69
        echo "\t\t</section>
\t\t<!-- End Search Title -->

\t\t<div class=\"container\">
\t\t<div class=\"row\">


\t\t<div class=\"col-lg-9 col-md-8 col-xs-12 col-sm-12 main-content\">
\t\t
\t\t\t";
        // line 78
        if ((((isset($context["totalposts"]) ? $context["totalposts"] : null) == 0) || twig_test_empty((isset($context["term"]) ? $context["term"] : null)))) {
            // line 79
            echo "\t\t\t<article class=\"main-d\">
\t\t\t<div class=\"content\">
\t\t\t<p> NOTHING FOUND FOR \"";
            // line 81
            echo (isset($context["term"]) ? $context["term"] : null);
            echo "\" </p>
\t\t\t<hr/>
\t\t\t<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
\t\t\t<form method=\"get\" action=\"search.php\" id=\"search\" >
\t\t\t<div class=\"searchblog\">
\t\t\t<button type=\"submit\">
\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t</button>
\t\t\t<div class=\"searchbox\">
\t\t\t<input type=\"search\" name=\"search\" class=\"form-control\" id=\"Search\" placeholder=\"Search...\" value=\"";
            // line 90
            echo (isset($context["term"]) ? $context["term"] : null);
            echo "\">
\t\t\t</div>
\t\t\t</div>
\t\t\t</form>
\t\t\t</div>
\t\t\t</article>
\t\t\t";
        }
        // line 97
        echo "\t\t\t
\t\t\t\t";
        // line 98
        if ((((isset($context["totalposts"]) ? $context["totalposts"] : null) >= 1) &&  !twig_test_empty((isset($context["term"]) ? $context["term"] : null)))) {
            // line 99
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 100
                echo "\t\t\t\t\t<article class=\"main-d\">
\t\t\t\t\t\t";
                // line 101
                if (($this->getAttribute($context["post"], "photo", array()) != null)) {
                    // line 102
                    echo "\t\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t\t\t<div class=\"main-hov\">
\t\t\t\t\t\t\t\t<h5>";
                    // line 104
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "categorytitle", array()), "html", null, true);
                    echo "</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img src=\"uploads/posts/";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "photo", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h2><span><a href=\"post.php?post=";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["post"], "title", array());
                echo "</a></span></h2>
\t\t\t\t\t\t\t";
                // line 111
                echo $this->getAttribute($context["post"], "description", array());
                echo "
\t\t\t\t\t\t\t<div class=\"read-btn\">
\t\t\t\t\t\t\t\t<a href=\"post.php?post=";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-paleutism btn-lg\"> Read More... </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"more-tabs\">
\t\t\t\t\t\t\t<div class=\"article-date\">
\t\t\t\t\t\t\t<p><strong>";
                // line 118
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "M j"), "html", null, true);
                echo "</strong></p><p>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "Y"), "html", null, true);
                echo "</p> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</article>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "
\t\t\t
\t\t\t\t\t<!-- Start Pagination -->
\t\t\t\t\t";
            // line 126
            if (((isset($context["lastPage"]) ? $context["lastPage"] : null) > 1)) {
                // line 127
                echo "\t\t\t\t\t\t<div class=\"pages\">
\t\t\t\t\t\t";
                // line 128
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) > 1)) {
                    // line 129
                    echo "\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
                    echo "/search.php?search=";
                    echo twig_escape_filter($this->env, (isset($context["term"]) ? $context["term"] : null), "html", null, true);
                    echo "&page=";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) - 1), "html", null, true);
                    echo "\"> &lt;&lt; Newer Posts </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 133
                echo "\t\t\t\t\t\t";
                if (((isset($context["currentPage"]) ? $context["currentPage"] : null) < (isset($context["lastPage"]) ? $context["lastPage"] : null))) {
                    // line 134
                    echo "\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
                    echo "/search.php?search=";
                    echo twig_escape_filter($this->env, (isset($context["term"]) ? $context["term"] : null), "html", null, true);
                    echo "&page=";
                    echo twig_escape_filter($this->env, ((isset($context["currentPage"]) ? $context["currentPage"] : null) + 1), "html", null, true);
                    echo "\"> Older Posts &gt;&gt; </a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t<!-- End Pagination -->
\t\t\t\t";
        }
        // line 141
        echo "\t
\t\t\t\t</div>
\t\t\t
\t\t\t\t";
        // line 144
        $this->loadTemplate("sidebar.phtml", "search.phtml", 144)->display($context);
        // line 145
        echo "\t\t\t</div>\t
\t\t</div>
\t
\t</div>
\t<!-- End Content -->
\t
\t<!-- Start Footer -->
\t<footer role=\"contentinfo\">
\t\t<p>";
        // line 153
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
        echo "</p> 
\t\t<a class=\"site-logo\" href=\"";
        // line 154
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
        return "search.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 154,  313 => 153,  303 => 145,  301 => 144,  296 => 141,  292 => 140,  288 => 138,  278 => 135,  275 => 134,  272 => 133,  262 => 130,  259 => 129,  257 => 128,  254 => 127,  252 => 126,  247 => 123,  234 => 118,  226 => 113,  221 => 111,  215 => 110,  212 => 109,  202 => 106,  197 => 104,  193 => 102,  191 => 101,  188 => 100,  183 => 99,  181 => 98,  178 => 97,  168 => 90,  156 => 81,  152 => 79,  150 => 78,  139 => 69,  132 => 66,  129 => 65,  122 => 63,  117 => 62,  115 => 61,  101 => 49,  99 => 48,  75 => 31,  71 => 30,  47 => 9,  41 => 8,  34 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>{{ site.title }} - Search for {{ term |raw }}</title>*/
/* 	<meta name="description" content="Search for {{ term |raw }}">*/
/* 	<meta name="keywords" content="Search for {{ term |raw }}, {{ term |raw }}">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<meta property="og:title" content="{{ site.title }} - Search for {{ term |raw }}">*/
/* 	<meta property="og:description" content="Search for {{ term |raw }}">*/
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
/* */
/* 	<!-- Start Content -->*/
/* 	<div class="main">*/
/* 		<!-- Start Search Title  -->*/
/* 		<section class="main-t">*/
/* 			{% if (totalposts >= 1) and (term is not empty) %}*/
/* 			<h1> Search for {{ term |raw }} </h1>*/
/* 			<h4> {{ totalposts }} Result(s) Found for {{ term |raw }} </h4>*/
/* 			{% endif %}*/
/* 			{% if (totalposts == 0) or (term is empty) %}*/
/* 			<h1> Nothing found for "{{ term |raw }}" </h1>*/
/* 			<h4> Sorry, but nothing matched your search terms. Please try again with some different keywords. </h4>*/
/* 			{% endif %}*/
/* 		</section>*/
/* 		<!-- End Search Title -->*/
/* */
/* 		<div class="container">*/
/* 		<div class="row">*/
/* */
/* */
/* 		<div class="col-lg-9 col-md-8 col-xs-12 col-sm-12 main-content">*/
/* 		*/
/* 			{% if (totalposts == 0) or (term is empty) %}*/
/* 			<article class="main-d">*/
/* 			<div class="content">*/
/* 			<p> NOTHING FOUND FOR "{{ term |raw }}" </p>*/
/* 			<hr/>*/
/* 			<p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>*/
/* 			<form method="get" action="search.php" id="search" >*/
/* 			<div class="searchblog">*/
/* 			<button type="submit">*/
/* 			<i class="fa fa-search"></i>*/
/* 			</button>*/
/* 			<div class="searchbox">*/
/* 			<input type="search" name="search" class="form-control" id="Search" placeholder="Search..." value="{{ term |raw }}">*/
/* 			</div>*/
/* 			</div>*/
/* 			</form>*/
/* 			</div>*/
/* 			</article>*/
/* 			{% endif %}*/
/* 			*/
/* 				{% if (totalposts >= 1) and (term is not empty) %}*/
/* 					{% for post in posts %}*/
/* 					<article class="main-d">*/
/* 						{% if post.photo != NULL %}*/
/* 						<div class="img">*/
/* 							<div class="main-hov">*/
/* 								<h5>{{ post.categorytitle }}</h5>*/
/* 							</div>*/
/* 							<img src="uploads/posts/{{ post.photo }}" title="{{ post.title }}" alt="{{ post.title }}">*/
/* 						</div>*/
/* 						{% endif %}*/
/* 						<div class="content">*/
/* 							<h2><span><a href="post.php?post={{ post.id }}">{{ post.title | raw }}</a></span></h2>*/
/* 							{{ post.description | raw }}*/
/* 							<div class="read-btn">*/
/* 								<a href="post.php?post={{ post.id }}" class="btn btn-paleutism btn-lg"> Read More... </a>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="more-tabs">*/
/* 							<div class="article-date">*/
/* 							<p><strong>{{ post.date|date("M j") }}</strong></p><p>{{ post.date|date("Y") }}</p> */
/* 							</div>*/
/* 						</div>*/
/* 					</article>*/
/* 					{% endfor %}*/
/* */
/* 			*/
/* 					<!-- Start Pagination -->*/
/* 					{% if lastPage > 1 %}*/
/* 						<div class="pages">*/
/* 						{% if currentPage > 1 %}*/
/* 							<div class="pull-left">*/
/* 								<a href="{{ site.url }}/search.php?search={{ term }}&page={{ currentPage-1 }}"> &lt;&lt; Newer Posts </a>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if currentPage < lastPage %}*/
/* 							<div class="pull-right">*/
/* 								<a href="{{ site.url }}/search.php?search={{ term }}&page={{ currentPage+1 }}"> Older Posts &gt;&gt; </a>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<!-- End Pagination -->*/
/* 				{% endif %}	*/
/* 				</div>*/
/* 			*/
/* 				{% include 'sidebar.phtml' %}*/
/* 			</div>	*/
/* 		</div>*/
/* 	*/
/* 	</div>*/
/* 	<!-- End Content -->*/
/* 	*/
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
