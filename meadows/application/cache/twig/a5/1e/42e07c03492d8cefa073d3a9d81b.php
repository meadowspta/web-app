<?php

/* home/index.html */
class __TwigTemplate_a51e42e07c03492d8cefa073d3a9d81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_template/pages/full.html");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_template/pages/full.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["_ui"] = $this->env->loadTemplate("_macros/ui.html");
        // line 3
        $context["_form"] = $this->env->loadTemplate("_macros/form.html");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_sidebar($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
        if ($_announcements_) {
            // line 7
            echo "\t\t<div id=\"announcement\" class=\"sidebar-section well\">
\t\t\t";
            // line 8
            if (isset($context["announcements"])) { $_announcements_ = $context["announcements"]; } else { $_announcements_ = null; }
            echo $_announcements_;
            echo "
\t\t\t
\t\t\t";
            // line 10
            if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
            if (Model_User::user_has_access($__user_, "edit announcement")) {
                // line 11
                echo "\t\t\t\t<div class=\"pull-right\"><a href=\"";
                if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
                echo twig_escape_filter($this->env, $__base_, "html", null, true);
                echo "announcement/edit\">edit</a></div>
\t\t\t";
            }
            // line 13
            echo "\t\t</div>
\t";
        }
        // line 15
        echo "\t
\t";
        // line 16
        if (isset($context["events_block"])) { $_events_block_ = $context["events_block"]; } else { $_events_block_ = null; }
        echo $_events_block_;
        echo "
\t";
        // line 17
        if (isset($context["menu_block"])) { $_menu_block_ = $context["menu_block"]; } else { $_menu_block_ = null; }
        echo $_menu_block_;
        echo "
\t
\t<div id=\"top-staff\" class=\"sidebar-section\">
\t\t<h2 class=\"chrome\">Staff</h2>
\t\t<ul class=\"list\">
\t\t\t<li class=\"list-item staff\">
\t\t\t\t<img src=\"";
        // line 23
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "static/images/home/susan_condio_hernandez.jpg\" class=\"image-thumb\">
\t\t\t\t<span>Susan Condio-Hernandez</span><br />
\t\t\t\t<strong>Principal</strong>
\t\t\t</li>
\t\t\t<li class=\"list-item last staff\">
\t\t\t\t<img src=\"http://placehold.it/65x65&text=Picture\" class=\"image-thumb\">
\t\t\t\t<span>Kellie Zahursky</span><br />
\t\t\t\t<strong>Administrative Secretary</strong>
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"clearfix\"></div>
\t</div>
\t";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "\t";
        if (isset($context["main_post"])) { $_main_post_ = $context["main_post"]; } else { $_main_post_ = null; }
        if ($this->getAttribute($_main_post_, "id")) {
            // line 40
            echo "\t\t<div id=\"main-story\">
\t\t\t<div class=\"title-bar\">
\t\t\t\t<div class=\"title\"><a href=\"";
            // line 42
            if (isset($context["main_post"])) { $_main_post_ = $context["main_post"]; } else { $_main_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_main_post_, "get_absolute_url", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["main_post"])) { $_main_post_ = $context["main_post"]; } else { $_main_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_main_post_, "title"), "html", null, true);
            echo "</a></div>
\t\t\t\t<div class=\"teaser\"><a href=\"";
            // line 43
            if (isset($context["main_post"])) { $_main_post_ = $context["main_post"]; } else { $_main_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_main_post_, "get_absolute_url", array(), "method"), "html", null, true);
            echo "\">";
            if (isset($context["main_post"])) { $_main_post_ = $context["main_post"]; } else { $_main_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_main_post_, "teaser"), "html", null, true);
            echo "</a></div>
\t\t\t</div>
\t\t\t<a href=\"";
            // line 45
            if (isset($context["main_post"])) { $_main_post_ = $context["main_post"]; } else { $_main_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_main_post_, "get_absolute_url", array(), "method"), "html", null, true);
            echo "\"><img src=\"";
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            echo twig_escape_filter($this->env, $__base_, "html", null, true);
            if (isset($context["main_post"])) { $_main_post_ = $context["main_post"]; } else { $_main_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_main_post_, "images"), "original"), "html", null, true);
            echo "\" class=\"image-main\"></a>
\t\t</div>
\t";
        }
        // line 48
        echo "\t
\t<h1 class=\"chrome\">Latest News</h1>
\t<ul id=\"post-list\" class=\"list\">
\t\t";
        // line 51
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 52
            echo "\t\t\t<li class=\"post-item-";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo " list-item\">
\t\t\t\t<div class=\"span2 first\">
\t\t\t\t\t";
            // line 54
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($_post_, "images")) {
                // line 55
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
                echo twig_escape_filter($this->env, $__base_, "html", null, true);
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_post_, "get_absolute_url", array(), "method"), "html", null, true);
                echo "\"><img src=\"";
                if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
                echo twig_escape_filter($this->env, $__base_, "html", null, true);
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "images"), "small"), "html", null, true);
                echo "\" class=\"image-thumb\"></a>
\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t&nbsp;
\t\t\t\t</div>
\t\t\t\t<div class=\"span6\">
\t\t\t\t\t<a href=\"";
            // line 60
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            echo twig_escape_filter($this->env, $__base_, "html", null, true);
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "get_absolute_url", array(), "method"), "html", null, true);
            echo "\"><h3 class=\"title\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</h3></a>
\t\t\t\t\t<div class=\"quiet\">";
            // line 61
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_post_, "created"), "l F jS, Y"), "html", null, true);
            echo " at ";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_post_, "created"), "g:ia"), "html", null, true);
            echo "<br /></div>
\t\t\t\t\t<div>";
            // line 62
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "teaser"), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"quiet\">";
            // line 63
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo Meadows_Twig_Extensions::shorten($this->getAttribute($_post_, "body"), 18);
            echo "</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 67
        echo "\t</ui>
\t<div class=\"clearfix\"></div>
\t";
        // line 69
        if (isset($context["_ui"])) { $__ui_ = $context["_ui"]; } else { $__ui_ = null; }
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo $__ui_->getmore_link(array("href" => ($__base_ . "news")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 69,  212 => 67,  201 => 63,  196 => 62,  188 => 61,  178 => 60,  173 => 57,  159 => 55,  156 => 54,  149 => 52,  144 => 51,  139 => 48,  127 => 45,  118 => 43,  110 => 42,  106 => 40,  102 => 39,  99 => 38,  81 => 23,  71 => 17,  66 => 16,  63 => 15,  59 => 13,  52 => 11,  49 => 10,  43 => 8,  40 => 7,  36 => 6,  33 => 5,  28 => 3,  26 => 2,);
    }
}
