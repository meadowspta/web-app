<?php

/* post/view.html */
class __TwigTemplate_1c20a45dca2201ad36a9a497cd383361 extends Twig_Template
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
        $context["_form"] = $this->env->loadTemplate("_macros/form.html");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
        if ((Model_User::user_has_access($__user_, "edit own post") || Model_User::user_has_access($__user_, "edit all post"))) {
            // line 6
            echo "\t\t";
            if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo $__form_->getbutton(array("value" => "Edit This Post", "href" => ($__base_ . $this->getAttribute($_post_, "get_edit_url", array(), "method")), "class" => "btn btn-block btn-warning"));
            // line 10
            echo "
\t\t<br />
\t";
        }
        // line 13
        echo "\t
\t";
        // line 22
        echo "\t
\t";
        // line 23
        if (isset($context["recent_posts_block"])) { $_recent_posts_block_ = $context["recent_posts_block"]; } else { $_recent_posts_block_ = null; }
        echo $_recent_posts_block_;
        echo "
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t<h1>";
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
        echo "</h1>
\t<div class=\"quiet\">
\t\t";
        // line 29
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_post_, "publish_date"), "l F j, Y"), "html", null, true);
        echo "<br />
\t</div>
\t<hr />
\t
\t<div>
\t\t<img src=\"";
        // line 34
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "images"), "medium"), "html", null, true);
        echo "\" class=\"main image-medium\" align=\"right\">
\t\t<div>
\t\t\t";
        // line 36
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $this->getAttribute($_post_, "body");
        echo "
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "post/view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  81 => 34,  72 => 29,  65 => 27,  62 => 26,  55 => 23,  49 => 13,  44 => 10,  38 => 6,  34 => 5,  31 => 4,  26 => 2,  85 => 19,  82 => 18,  71 => 14,  61 => 13,  52 => 22,  39 => 8,  36 => 7,  33 => 6,  29 => 5,  24 => 4,  19 => 1,);
    }
}
