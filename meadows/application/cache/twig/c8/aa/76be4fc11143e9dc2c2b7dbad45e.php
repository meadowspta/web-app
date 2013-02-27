<?php

/* post/block/recent_posts.html */
class __TwigTemplate_c8aa76be4fc11143e9dc2c2b7dbad45e extends Twig_Template
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
        echo "<div id=\"recent-posts\" class=\"sidebar-section\">
\t<h2 class=\"chrome\">Recent Posts</h2>
\t<ul id=\"post-list\" class=\"list span4 first\">
\t\t";
        // line 4
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "\t\t\t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                // line 6
                echo "\t\t\t\t";
                $context["last"] = "last";
                // line 7
                echo "\t\t\t";
            }
            // line 8
            echo "\t\t\t<li id=\"post-item-";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\" class=\"post-item-";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo " list-item ";
            if (isset($context["last"])) { $_last_ = $context["last"]; } else { $_last_ = null; }
            echo twig_escape_filter($this->env, $_last_, "html", null, true);
            echo "\">
\t\t\t\t<div class=\"span1 first\">
\t\t\t\t\t<img src=\"";
            // line 10
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            echo twig_escape_filter($this->env, $__base_, "html", null, true);
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "images"), "thumb"), "html", null, true);
            echo "\" align=\"left\" class=\"image-thumb\">
\t\t\t\t</div>
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t<a href=\"";
            // line 13
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            echo twig_escape_filter($this->env, $__base_, "html", null, true);
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "get_absolute_url", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a>
\t\t\t\t\t<div class=\"quiet\">";
            // line 14
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "teaser"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "\t</ul>
\t<div class=\"pull-right\"><a href=\"";
        // line 19
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "events\">more news &raquo;</a></div>
\t<div class=\"clearfix\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "post/block/recent_posts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  82 => 18,  71 => 14,  61 => 13,  52 => 10,  39 => 8,  36 => 7,  33 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
