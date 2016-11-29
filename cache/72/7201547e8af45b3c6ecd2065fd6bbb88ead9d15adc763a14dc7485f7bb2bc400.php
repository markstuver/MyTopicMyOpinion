<?php

/* comments.phtml */
class __TwigTemplate_5c943db88d0f680078cf7de70d83b8a4e28bd043b909e6aafba922397b3e7865 extends Twig_Template
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
        echo "<!-- Start Comments -->
<div class=\"comments content\">
\t<h2>Comments</h2>
\t<hr/>
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 6
            echo "\t<div class=\"comments-box\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-2 col-md-2 col-xs-12 col-sm-12\">
\t\t\t\t<img class=\"pane-author\" src=\"http://www.gravatar.com/avatar/";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "mailhash", array()), "html", null, true);
            echo "?s=200\" title=\"";
            echo $this->getAttribute($context["comment"], "name", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["comment"], "name", array());
            echo "\">
\t\t\t</div>
\t\t\t<div class=\"col-lg-10 col-md-10 col-xs-12 col-sm-12 comment-content\">
\t\t\t\t<h4 class=\"comment-name\">
\t\t\t\t";
            // line 13
            if ($this->getAttribute($context["comment"], "author_url", array())) {
                // line 14
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author_url", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["comment"], "author", array());
                echo "</a>
\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t";
                echo $this->getAttribute($context["comment"], "author", array());
                echo "
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "F jS, Y"), "html", null, true);
            echo "</span>
\t\t\t\t</h4>
\t\t\t<div class=\"comment-section\">
\t\t\t\t<p>";
            // line 21
            echo $this->getAttribute($context["comment"], "content", array());
            echo " </p>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "\t<p><em>No comments to display for this post.</em></p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</div>
<!-- End Comments -->

<!-- Start Comments Box -->
<div class=\"comments content\">
\t<h2>LEAVE A REPLY</h2>
\t<hr/>
\t<form class=\"comments-form form-horizontal\" id=\"form\" method=\"post\" action=\"\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-md-6 col-xs-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" name=\"author\" class=\"form-control\" placeholder=\"Name\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true);
        echo "\" required>
\t\t\t\t";
        // line 41
        if ((isset($context["AuthorError"]) ? $context["AuthorError"] : null)) {
            echo "<span>";
            echo twig_escape_filter($this->env, (isset($context["AuthorError"]) ? $context["AuthorError"] : null), "html", null, true);
            echo "</span>";
        }
        // line 42
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"email\" name=\"author_email\" class=\"form-control\" placeholder=\"Email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["author_email"]) ? $context["author_email"] : null), "html", null, true);
        echo "\" required>
\t\t\t\t";
        // line 45
        if ((isset($context["EmailError"]) ? $context["EmailError"] : null)) {
            echo "<span>";
            echo twig_escape_filter($this->env, (isset($context["EmailError"]) ? $context["EmailError"] : null), "html", null, true);
            echo "</span>";
        }
        // line 46
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"link\" name=\"author_url\" class=\"form-control\" placeholder=\"Website\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["author_url"]) ? $context["author_url"] : null), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 49
        if ((isset($context["URLError"]) ? $context["URLError"] : null)) {
            echo "<span>";
            echo twig_escape_filter($this->env, (isset($context["URLError"]) ? $context["URLError"] : null), "html", null, true);
            echo "</span>";
        }
        // line 50
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 col-md-6 col-xs-12\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<textarea name=\"content\" class=\"form-control\" placeholder=\"Comment\" required>";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "</textarea>
\t\t\t\t";
        // line 55
        if ((isset($context["ContentError"]) ? $context["ContentError"] : null)) {
            echo "<span>";
            echo twig_escape_filter($this->env, (isset($context["ContentError"]) ? $context["ContentError"] : null), "html", null, true);
            echo "</span>";
        }
        // line 56
        echo "\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-paleutism pull-right\">Post Comment</button>
\t\t\t</div>
\t\t</div>
\t</form>
\t";
        // line 61
        if ((isset($context["message"]) ? $context["message"] : null)) {
            // line 62
            echo "\t<h1 class=\"success\">";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</h1>
\t";
        }
        // line 64
        echo "</div>
<!-- End Comments Box -->";
    }

    public function getTemplateName()
    {
        return "comments.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  163 => 62,  161 => 61,  154 => 56,  148 => 55,  144 => 54,  138 => 50,  132 => 49,  128 => 48,  124 => 46,  118 => 45,  114 => 44,  110 => 42,  104 => 41,  100 => 40,  87 => 29,  80 => 27,  69 => 21,  62 => 18,  56 => 16,  48 => 14,  46 => 13,  35 => 9,  30 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!-- Start Comments -->*/
/* <div class="comments content">*/
/* 	<h2>Comments</h2>*/
/* 	<hr/>*/
/* 	{% for comment in comments %}*/
/* 	<div class="comments-box">*/
/* 		<div class="row">*/
/* 			<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">*/
/* 				<img class="pane-author" src="http://www.gravatar.com/avatar/{{ comment.mailhash }}?s=200" title="{{ comment.name | raw }}" alt="{{ comment.name | raw }}">*/
/* 			</div>*/
/* 			<div class="col-lg-10 col-md-10 col-xs-12 col-sm-12 comment-content">*/
/* 				<h4 class="comment-name">*/
/* 				{% if comment.author_url %}*/
/* 				<a href="{{ comment.author_url }}" target="_blank">{{ comment.author | raw }}</a>*/
/* 				{% else %}*/
/* 				{{ comment.author | raw }}*/
/* 				{% endif %}*/
/* 				<span>{{ comment.date|date("F jS, Y") }}</span>*/
/* 				</h4>*/
/* 			<div class="comment-section">*/
/* 				<p>{{ comment.content | raw }} </p>*/
/* 			</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	{% else %}*/
/* 	<p><em>No comments to display for this post.</em></p>*/
/* 	{% endfor %}*/
/* </div>*/
/* <!-- End Comments -->*/
/* */
/* <!-- Start Comments Box -->*/
/* <div class="comments content">*/
/* 	<h2>LEAVE A REPLY</h2>*/
/* 	<hr/>*/
/* 	<form class="comments-form form-horizontal" id="form" method="post" action="">*/
/* 		<div class="row">*/
/* 			<div class="col-lg-6 col-md-6 col-xs-12">*/
/* 				<div class="form-group">*/
/* 				<input type="text" name="author" class="form-control" placeholder="Name" value="{{ author }}" required>*/
/* 				{% if AuthorError %}<span>{{ AuthorError }}</span>{% endif %}*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 				<input type="email" name="author_email" class="form-control" placeholder="Email" value="{{ author_email }}" required>*/
/* 				{% if EmailError %}<span>{{ EmailError }}</span>{% endif %}*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 				<input type="link" name="author_url" class="form-control" placeholder="Website" value="{{ author_url }}">*/
/* 				{% if URLError %}<span>{{ URLError }}</span>{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-lg-6 col-md-6 col-xs-12">*/
/* 				<div class="form-group">*/
/* 				<textarea name="content" class="form-control" placeholder="Comment" required>{{ content }}</textarea>*/
/* 				{% if ContentError %}<span>{{ ContentError }}</span>{% endif %}*/
/* 				</div>*/
/* 				<button type="submit" name="submit" id="submit" class="btn btn-paleutism pull-right">Post Comment</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</form>*/
/* 	{% if message  %}*/
/* 	<h1 class="success">{{ message }}</h1>*/
/* 	{% endif %}*/
/* </div>*/
/* <!-- End Comments Box -->*/
