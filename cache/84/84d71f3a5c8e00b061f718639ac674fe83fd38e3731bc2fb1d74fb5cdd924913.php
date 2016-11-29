<?php

/* contactus.phtml */
class __TwigTemplate_43062b88ac8ead3ac68ec0d0c24389777536d64f917a7589e5add9c6933c6ffe extends Twig_Template
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
        echo " - Contact Us</title>
\t<meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array())), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "keywords", array()), "html", null, true);
        echo "\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta property=\"og:title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html", null, true);
        echo "\">
\t<meta property=\"og:description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, strip_tags($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array())), "html", null, true);
        echo "\">
\t
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
        $this->loadTemplate("menu.phtml", "contactus.phtml", 48)->display($context);
        // line 49
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
\t\t<!-- Start Page Title and Subtitle -->\t
\t\t<section class=\"main-t\">
\t\t<h1> Contact Us </h1>
\t\t<h4> </h4>
\t\t</section>
\t\t<!-- End Page Title and Subtitle -->\t

\t\t<div class=\"container\">
\t\t
\t\t";
        // line 68
        if (((isset($context["message"]) ? $context["message"] : null) == true)) {
            // line 69
            echo "\t\t<h1 class=\"success\">Your Message Has Been Successfully Sent!</h1>
\t\t";
        }
        // line 70
        echo " \t

\t\t<article class=\"col-12 main-d col-centered\">\t
\t\t<iframe src=\"https://maps.google.com/maps?hl=en&q=";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "address", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "city", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "country", array()), "html", null, true);
        echo "&ie=UTF8&t=m&z=15&iwloc=B&output=embed\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>      \t
\t\t<div class=\"content contact\">
\t\t<div class=\"row\">
\t\t
\t\t<!-- Start Contact Us form -->\t
\t\t<div class=\"col-lg-8 col-md-6 col-xs-12\">
\t\t<h4>Contact Us</h4>
\t\t\t<form class=\"form-horizontal\" action=\"contactus.php\" method=\"POST\"> 
\t\t\t        <input type=\"hidden\" name=\"action\" value=\"submit\"> 
\t\t\t\t<input type=\"email\" name=\"email\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\" required=\"required\">
\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control\" id=\"inputname3\" placeholder=\"Name\" required=\"required\">
\t\t\t\t<input type=\"text\" name=\"subject\" class=\"form-control\" id=\"inputsubjec3\" placeholder=\"Subject\" required=\"required\">
\t\t\t\t<textarea type=\"text\" name=\"message\" class=\"form-control\" id=\"inputtext3\" placeholder=\"Message\" required=\"required\"></textarea>
\t\t\t\t<p class=\"antispam\">
\t\t\t\t<br /><input name=\"url\" placeholder=\"Leave This Empty\" /></p>
\t\t\t\t<button type=\"submit\" class=\"btn btn-paleutism\">Send</button>
\t\t\t</form>
\t\t</div>
\t\t<!-- End Contact Us form -->
\t\t\t
\t\t<!-- Start Contact Information -->\t
\t\t<div class=\"col-lg-4 col-md-6 col-xs-12\">
\t\t\t<h4>Contact Info</h4>
\t\t\t<p>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "city", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "country", array()), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "address", array()), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "html", null, true);
        echo "</p>
\t\t\t<hr/>
\t\t\t<ul>
\t\t\t\t<li><p><strong>Phone:</strong> ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "phone", array()), "html", null, true);
        echo "</p></li>
\t\t\t\t<li><p><strong>Email:</strong> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "email", array()), "html", null, true);
        echo "</p></li>
\t\t\t</ul>
\t\t\t<hr/>
\t\t</div>
\t\t<!-- End Contact Information -->\t
\t
\t\t</div>
\t\t</div>
\t\t</article>
\t\t</div>
\t</div>
\t<!-- End Content -->

\t<!-- Start Footer -->
\t<footer role=\"contentinfo\">
\t\t<p>";
        // line 117
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array());
        echo "</p> 
\t\t<a class=\"site-logo\" href=\"";
        // line 118
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
        return "contactus.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 118,  195 => 117,  177 => 102,  173 => 101,  167 => 98,  163 => 97,  157 => 96,  127 => 73,  122 => 70,  118 => 69,  116 => 68,  95 => 49,  93 => 48,  69 => 31,  65 => 30,  41 => 9,  37 => 8,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>{{ site.title }} - Contact Us</title>*/
/* 	<meta name="description" content="{{ site.description|striptags }}">*/
/* 	<meta name="keywords" content="{{ site.keywords }}">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<meta property="og:title" content="{{ site.title }}">*/
/* 	<meta property="og:description" content="{{ site.description|striptags }}">*/
/* 	*/
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
/* 		<!-- Start Page Title and Subtitle -->	*/
/* 		<section class="main-t">*/
/* 		<h1> Contact Us </h1>*/
/* 		<h4> </h4>*/
/* 		</section>*/
/* 		<!-- End Page Title and Subtitle -->	*/
/* */
/* 		<div class="container">*/
/* 		*/
/* 		{% if message == true  %}*/
/* 		<h1 class="success">Your Message Has Been Successfully Sent!</h1>*/
/* 		{% endif %} 	*/
/* */
/* 		<article class="col-12 main-d col-centered">	*/
/* 		<iframe src="https://maps.google.com/maps?hl=en&q={{ site.address }}, {{ site.city }}, {{ site.country }}&ie=UTF8&t=m&z=15&iwloc=B&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>      	*/
/* 		<div class="content contact">*/
/* 		<div class="row">*/
/* 		*/
/* 		<!-- Start Contact Us form -->	*/
/* 		<div class="col-lg-8 col-md-6 col-xs-12">*/
/* 		<h4>Contact Us</h4>*/
/* 			<form class="form-horizontal" action="contactus.php" method="POST"> */
/* 			        <input type="hidden" name="action" value="submit"> */
/* 				<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required="required">*/
/* 				<input type="text" name="name" class="form-control" id="inputname3" placeholder="Name" required="required">*/
/* 				<input type="text" name="subject" class="form-control" id="inputsubjec3" placeholder="Subject" required="required">*/
/* 				<textarea type="text" name="message" class="form-control" id="inputtext3" placeholder="Message" required="required"></textarea>*/
/* 				<p class="antispam">*/
/* 				<br /><input name="url" placeholder="Leave This Empty" /></p>*/
/* 				<button type="submit" class="btn btn-paleutism">Send</button>*/
/* 			</form>*/
/* 		</div>*/
/* 		<!-- End Contact Us form -->*/
/* 			*/
/* 		<!-- Start Contact Information -->	*/
/* 		<div class="col-lg-4 col-md-6 col-xs-12">*/
/* 			<h4>Contact Info</h4>*/
/* 			<p>{{ site.city }}, {{ site.country }}</p>*/
/* 			<p>{{ site.address }}</p>*/
/* 			<p>{{ site.name }}</p>*/
/* 			<hr/>*/
/* 			<ul>*/
/* 				<li><p><strong>Phone:</strong> {{ site.phone }}</p></li>*/
/* 				<li><p><strong>Email:</strong> {{ site.email }}</p></li>*/
/* 			</ul>*/
/* 			<hr/>*/
/* 		</div>*/
/* 		<!-- End Contact Information -->	*/
/* 	*/
/* 		</div>*/
/* 		</div>*/
/* 		</article>*/
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
