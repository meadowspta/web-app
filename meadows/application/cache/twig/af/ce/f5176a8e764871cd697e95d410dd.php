<?php

/* post/index.html */
class __TwigTemplate_afcef5176a8e764871cd697e95d410dd extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        if (isset($context["events_block"])) { $_events_block_ = $context["events_block"]; } else { $_events_block_ = null; }
        echo $_events_block_;
        echo "
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t<h1>Meadows News</h1>
\t<hr />
\t<ul id=\"post-list\" class=\"list\">
\t\t";
        // line 12
        if (isset($context["posts"])) { $_posts_ = $context["posts"]; } else { $_posts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_posts_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "\t\t\t";
            $context["unpublished_class"] = "";
            // line 14
            echo "\t\t\t";
            $context["unpublished_text"] = "";
            // line 15
            echo "\t\t\t";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ((!$this->getAttribute($_post_, "is_published"))) {
                // line 16
                echo "\t\t\t\t";
                $context["unpublished_class"] = "unpublished";
                // line 17
                echo "\t\t\t\t";
                $context["unpublished_text"] = "***UNPUBLISHED***";
                // line 18
                echo "\t\t\t";
            }
            // line 19
            echo "\t\t\t<li class=\"post-item-";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo " list-item ";
            if (isset($context["unpublished_class"])) { $_unpublished_class_ = $context["unpublished_class"]; } else { $_unpublished_class_ = null; }
            echo twig_escape_filter($this->env, $_unpublished_class_, "html", null, true);
            echo "\">
\t\t\t\t<div class=\"span3 first\">
\t\t\t\t\t";
            // line 21
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if ($this->getAttribute($_post_, "images")) {
                // line 22
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
                echo twig_escape_filter($this->env, $__base_, "html", null, true);
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_post_, "get_absolute_url", array(), "method"), "html", null, true);
                echo "\"><img src=\"";
                if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
                echo twig_escape_filter($this->env, $__base_, "html", null, true);
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "images"), "medium"), "html", null, true);
                echo "\" class=\"image-medium\"></a>
\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t&nbsp;
\t\t\t\t</div>
\t\t\t\t<div class=\"span5\">
\t\t\t\t\t<h4>";
            // line 27
            if (isset($context["unpublished_text"])) { $_unpublished_text_ = $context["unpublished_text"]; } else { $_unpublished_text_ = null; }
            echo twig_escape_filter($this->env, $_unpublished_text_, "html", null, true);
            echo "</h4>
\t\t\t\t\t<a href=\"";
            // line 28
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            echo twig_escape_filter($this->env, $__base_, "html", null, true);
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "get_absolute_url", array(), "method"), "html", null, true);
            echo "\"><h3 class=\"title\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</h3></a>
\t\t\t\t\t<div class=\"quiet\">";
            // line 29
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_post_, "publish_date"), "l F j, Y"), "html", null, true);
            echo "</div>
\t\t\t\t\t<div>";
            // line 30
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "teaser"), "html", null, true);
            echo "</div>";
            // line 31
            ob_start();
            // line 32
            echo "... <a href=\"";
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            echo twig_escape_filter($this->env, $__base_, "html", null, true);
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "get_absolute_url", array(), "method"), "html", null, true);
            echo "\">read more &raquo;</a>";
            $context["trailer"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 34
            echo "<div class=\"quiet\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (isset($context["trailer"])) { $_trailer_ = $context["trailer"]; } else { $_trailer_ = null; }
            echo Meadows_Twig_Extensions::shorten($this->getAttribute($_post_, "body"), 35, $_trailer_);
            echo "</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "\t</ui>
";
    }

    public function getTemplateName()
    {
        return "post/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  140 => 34,  132 => 32,  130 => 31,  126 => 30,  121 => 29,  111 => 28,  106 => 27,  101 => 24,  87 => 22,  84 => 21,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  61 => 15,  58 => 14,  55 => 13,  50 => 12,  45 => 9,  42 => 8,  34 => 5,  31 => 4,  26 => 2,);
    }
}
