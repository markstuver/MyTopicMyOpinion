<?php

/* post.phtml */
class __TwigTemplate_f5f03dd3d18001e4c6725c3a44e9da04f02a7cbe03efaf7fe12ce653231241f2 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "description", array())), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "keywords", array()), "html", null, true);
        echo "\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta property=\"og:title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "\">
\t<meta property=\"og:description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "description", array())), "html", null, true);
        echo "\">
\t";
        // line 10
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "photo", array()) != null)) {
            // line 11
            echo "\t<meta property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
            echo "uploads/posts/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "photo", array()), "html", null, true);
            echo "\" />
\t";
        }
        // line 13
        echo "
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
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">
\t\t\t<img src=\"uploads/";
        // line 34
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
        // line 51
        $this->loadTemplate("menu.phtml", "post.phtml", 51)->display($context);
        // line 52
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
\t\t<!-- Start Post Title and Subtitle -->\t
\t\t<section class=\"main-t\">
\t\t\t<h1> ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo " </h1>
\t\t\t<h4> ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subtitle", array()), "html", null, true);
        echo " </h4>
\t\t</section>
\t\t<!-- End Post Title and Subtitle -->\t
\t\t
\t\t<div class=\"container\">

\t\t<div class=\"row\">

\t\t\t<div class=\"col-lg-9 col-md-8 col-xs-12 col-sm-12\">

\t\t\t\t<article class=\"main-d post\">
\t\t\t\t\t";
        // line 77
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "photo", array()) != null)) {
            // line 78
            echo "\t\t\t\t\t<div class=\"img\">
\t\t\t\t\t<img src=\"uploads/posts/";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "photo", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t<div class=\"activ-s\">
\t\t\t\t\t<ul class=\"btn-s\">
\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "\"><i class=\"fa fa-facebook\"></i> </a></li>
\t\t\t\t\t<li><a target=\"_blank\" href=\"https://twitter.com/intent/tweet?url=";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "&text=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo "\"><i class=\"fa fa-twitter\"></i> </a></li>
\t\t\t\t\t<li><a target=\"_blank\" href=\"https://plus.google.com/share?url=";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "\"><i class=\"fa fa-google-plus\"></i></a></li>
\t\t\t\t\t<li><a target=\"_blank\" href=\"https://www.linkedin.com/shareArticle?mini=true&url=";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "&title=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t<li><a target=\"_blank\" href=\"http://reddit.com/submit?url=";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "\"><i class=\"fa fa-reddit\"></i></a></li>
\t\t\t\t\t<li><a target=\"_blank\" href=\"mailto:?subject=";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
            echo "&body=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
            if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
                echo ".html";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
                echo ".html";
            }
            echo "\"><i class=\"fa fa-envelope-o\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<i class=\"fa fa-share-alt\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 95
        echo "
\t\t\t\t\t<div class=\"content post\">
\t\t\t\t\t\t<h2><span>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</span></h2>
\t\t\t\t\t\t";
        // line 98
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array());
        echo "
\t\t\t\t\t\t</br>
\t\t\t\t\t\t<h3><span>Share this entry</span></h3>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ".html";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
            echo ".html";
        }
        echo "\" class=\"icon-link facebook fill\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"https://www.linkedin.com/shareArticle?mini=true&url=";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ".html";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
            echo ".html";
        }
        echo "&title=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "\" class=\"icon-link linkedin fill\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t\t<a href=\"https://twitter.com/intent/tweet?url=";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ".html";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
            echo ".html";
        }
        echo "&text=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "\" class=\"icon-link twitter fill\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"https://plus.google.com/share?url=";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ".html";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
            echo ".html";
        }
        echo "\" class=\"icon-link google-plus fill\"><i class=\"fa fa-google-plus\"></i></a>
\t\t\t\t\t\t<a href=\"http://reddit.com/submit?url=";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ".html";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
            echo ".html";
        }
        echo "\" class=\"icon-link reddit fill\"><i class=\"fa fa-reddit\"></i></a>
\t\t\t\t\t\t<a href=\"http://www.tumblr.com/share/link?url=";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ".html";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
            echo ".html";
        }
        echo "\" class=\"icon-link tumblr fill\"><i class=\"fa fa-tumblr\"></i></a>\t\t\t\t\t\t
\t\t\t\t\t\t<a href=\"http://pinterest.com/pin/create/button/?url=";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ".html";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
            echo ".html";
        }
        echo "&media=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "uploads/posts/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "photo", array()), "html", null, true);
        echo "\" class=\"icon-link pinterest fill\"><i class=\"fa fa-pinterest\"></i></a>
\t\t\t\t\t\t<a href=\"mailto:?subject=";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "&body=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        if (($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "permalink_structure", array()) == "0")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
            echo ".html";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()), "html", null, true);
            echo ".html";
        }
        echo "\" class=\"icon-link envelope fill\"><i class=\"fa fa-envelope\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 110
        $this->loadTemplate("comments.phtml", "post.phtml", 110)->display($context);
        // line 111
        echo "\t\t\t\t
\t\t\t\t</article>

\t\t\t</div>

\t\t\t";
        // line 116
        $this->loadTemplate("sidebar.phtml", "post.phtml", 116)->display($context);
        // line 117
        echo "
\t\t</div>

\t\t</div>
\t</div>
\t<!-- End Content -->

\t<!-- Start Footer -->
\t<footer role=\"contentinfo\">
\t\t<p>";
        // line 126
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
        echo "</p> 
\t\t<a class=\"site-logo\" href=\"";
        // line 127
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
        return "post.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 127,  371 => 126,  360 => 117,  358 => 116,  351 => 111,  349 => 110,  335 => 108,  320 => 107,  309 => 106,  298 => 105,  287 => 104,  274 => 103,  261 => 102,  250 => 101,  244 => 98,  240 => 97,  236 => 95,  217 => 88,  206 => 87,  193 => 86,  182 => 85,  169 => 84,  158 => 83,  147 => 79,  144 => 78,  142 => 77,  128 => 66,  124 => 65,  109 => 52,  107 => 51,  83 => 34,  79 => 33,  57 => 13,  49 => 11,  47 => 10,  43 => 9,  39 => 8,  34 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>{{ site.title }} - {{ post.title }}</title>*/
/* 	<meta name="description" content="{{ post.description|striptags }}">*/
/* 	<meta name="keywords" content="{{ post.keywords }}">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<meta property="og:title" content="{{ post.title }}">*/
/* 	<meta property="og:description" content="{{ post.description|striptags }}">*/
/* 	{% if post.photo != NULL %}*/
/* 	<meta property="og:image" content="{{ site.url }}uploads/posts/{{ post.photo }}" />*/
/* 	{% endif %}*/
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
/* */
/* 	<div class="main">*/
/* 		<!-- Start Post Title and Subtitle -->	*/
/* 		<section class="main-t">*/
/* 			<h1> {{ post.title }} </h1>*/
/* 			<h4> {{ post.subtitle }} </h4>*/
/* 		</section>*/
/* 		<!-- End Post Title and Subtitle -->	*/
/* 		*/
/* 		<div class="container">*/
/* */
/* 		<div class="row">*/
/* */
/* 			<div class="col-lg-9 col-md-8 col-xs-12 col-sm-12">*/
/* */
/* 				<article class="main-d post">*/
/* 					{% if post.photo != NULL %}*/
/* 					<div class="img">*/
/* 					<img src="uploads/posts/{{ post.photo }}" title="{{ post.title }}" alt="{{ post.title }}">*/
/* 					<div class="share">*/
/* 					<div class="activ-s">*/
/* 					<ul class="btn-s">*/
/* 					<li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}"><i class="fa fa-facebook"></i> </a></li>*/
/* 					<li><a target="_blank" href="https://twitter.com/intent/tweet?url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}&text={{ post.title }}"><i class="fa fa-twitter"></i> </a></li>*/
/* 					<li><a target="_blank" href="https://plus.google.com/share?url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}"><i class="fa fa-google-plus"></i></a></li>*/
/* 					<li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}&title={{ post.title }}"><i class="fa fa-linkedin"></i></a></li>*/
/* 					<li><a target="_blank" href="http://reddit.com/submit?url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}"><i class="fa fa-reddit"></i></a></li>*/
/* 					<li><a target="_blank" href="mailto:?subject={{ post.title }}&body={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}"><i class="fa fa-envelope-o"></i></a></li>*/
/* 					</ul>*/
/* 					<i class="fa fa-share-alt"></i>*/
/* 					</div>*/
/* 					</div>*/
/* 					</div>*/
/* 					{% endif %}*/
/* */
/* 					<div class="content post">*/
/* 						<h2><span>{{ post.title }}</span></h2>*/
/* 						{{ post.content | raw }}*/
/* 						</br>*/
/* 						<h3><span>Share this entry</span></h3>*/
/* 						<a href="https://www.facebook.com/sharer/sharer.php?u={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}" class="icon-link facebook fill"><i class="fa fa-facebook"></i></a>*/
/* 						<a href="https://www.linkedin.com/shareArticle?mini=true&url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}&title={{ post.title }}" class="icon-link linkedin fill"><i class="fa fa-linkedin"></i></a>*/
/* 						<a href="https://twitter.com/intent/tweet?url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}&text={{ post.title }}" class="icon-link twitter fill"><i class="fa fa-twitter"></i></a>*/
/* 						<a href="https://plus.google.com/share?url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}" class="icon-link google-plus fill"><i class="fa fa-google-plus"></i></a>*/
/* 						<a href="http://reddit.com/submit?url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}" class="icon-link reddit fill"><i class="fa fa-reddit"></i></a>*/
/* 						<a href="http://www.tumblr.com/share/link?url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}" class="icon-link tumblr fill"><i class="fa fa-tumblr"></i></a>						*/
/* 						<a href="http://pinterest.com/pin/create/button/?url={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}&media={{ site.url }}uploads/posts/{{ post.photo }}" class="icon-link pinterest fill"><i class="fa fa-pinterest"></i></a>*/
/* 						<a href="mailto:?subject={{ post.title }}&body={{ site.url }}{% if site.permalink_structure == '0' %}{{ post.id }}.html{% else %}{{ post.slug }}.html{% endif %}" class="icon-link envelope fill"><i class="fa fa-envelope"></i></a>*/
/* 					</div>*/
/* 					{% include 'comments.phtml' %}*/
/* 				*/
/* 				</article>*/
/* */
/* 			</div>*/
/* */
/* 			{% include 'sidebar.phtml' %}*/
/* */
/* 		</div>*/
/* */
/* 		</div>*/
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
