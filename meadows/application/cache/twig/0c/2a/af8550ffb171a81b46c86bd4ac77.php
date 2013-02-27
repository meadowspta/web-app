<?php

/* post/add.html */
class __TwigTemplate_0c2aaf8550ffb171a81b46c86bd4ac77 extends Twig_Template
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
        echo "\t<div class=\"well\">
\t\t";
        // line 6
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->getcheckbox(array("id" => "field-is-event", "name" => "is-event", "options" => array(1 => "This is an event"), "values" => $this->getAttribute($_post_, "is_event")));
        // line 11
        echo "
\t\t<div id=\"post-form-event-info\" class=\"well\">
\t\t\t";
        // line 13
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Start Date", "start_date");
        echo "
\t\t\t";
        // line 14
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("id" => "event-start-date", "name" => "event[start_date]", "value" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "n/j/Y"), "class" => "regular micro"));
        // line 19
        echo "
\t\t\t
\t\t\t";
        // line 21
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "event[start_time]", "value" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "g:ia"), "class" => "regular micro"));
        // line 25
        echo "
\t\t\t
\t\t\t";
        // line 27
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("End Date", "end_date");
        echo "
\t\t\t";
        // line 28
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("id" => "event-end-date", "name" => "event[end_date]", "value" => (($this->getAttribute($this->getAttribute($_post_, "event"), "end_date")) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "end_date"), "n/j/Y")) : ("")), "class" => "regular micro"));
        // line 33
        echo "
\t\t\t
\t\t\t";
        // line 35
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "event[end_time]", "value" => (($this->getAttribute($this->getAttribute($_post_, "event"), "end_date")) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "end_date"), "g:ia")) : ("")), "class" => "regular micro"));
        // line 39
        echo "
\t\t\t
\t\t\t";
        // line 41
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Location", "location");
        echo "
\t\t\t";
        // line 42
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "event[location]", "value" => $this->getAttribute($this->getAttribute($_post_, "event"), "location"), "class" => "fluid regular"));
        // line 46
        echo "
\t\t</div>
\t\t
\t\t<div class=\"well\">
\t\t\t";
        // line 50
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Publish Date", "publish_date");
        echo "
\t\t\t";
        // line 51
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("id" => "publish-date", "name" => "publish_date", "value" => twig_date_format_filter($this->env, $this->getAttribute($_post_, "publish_date"), "n/j/Y"), "class" => "regular micro"));
        // line 56
        echo "
\t\t\t
\t\t\t";
        // line 58
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "publish_time", "value" => twig_date_format_filter($this->env, $this->getAttribute($_post_, "publish_date"), "g:ia"), "class" => "regular micro"));
        // line 62
        echo "
\t\t</div>
\t\t
\t\t<div class=\"well\">
\t\t\t";
        // line 66
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->getcheckbox(array("name" => "is-main-story", "options" => array(1 => "Publish as Main Story"), "values" => $this->getAttribute($_post_, "is_main_story")));
        // line 70
        echo "
\t\t\t
\t\t\t<b>Current Main Story</b><br />
\t\t\t<a href=\"";
        // line 73
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        if (isset($context["main_story"])) { $_main_story_ = $context["main_story"]; } else { $_main_story_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_main_story_, "get_absolute_url", array(), "method"), "html", null, true);
        echo "\">";
        if (isset($context["main_story"])) { $_main_story_ = $context["main_story"]; } else { $_main_story_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_main_story_, "title"), "html", null, true);
        echo "</a> - 
\t\t\t<span class=\"quiet\">";
        // line 74
        if (isset($context["main_story"])) { $_main_story_ = $context["main_story"]; } else { $_main_story_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_main_story_, "teaser"), "html", null, true);
        echo "</span>
\t\t\t<br /><br />
\t\t\t<center>
\t\t\t\t<img src=\"";
        // line 77
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        if (isset($context["main_story"])) { $_main_story_ = $context["main_story"]; } else { $_main_story_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_main_story_, "images"), "small"), "html", null, true);
        echo "\" class=\"image-small\">
\t\t\t</center>
\t\t</div>
\t\t
\t\t";
        // line 81
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getsubmit(array("value" => "Publish", "class" => "btn btn-success pull-right"));
        // line 84
        echo "
\t\t<div class=\"clearfix\"></div>
\t</div>
\t";
        // line 87
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getclose();
        echo "
";
    }

    // line 90
    public function block_content($context, array $blocks = array())
    {
        // line 91
        echo "\t";
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getopen(array("action" => "", "method" => "post", "enctype" => "multipart/form-data"));
        // line 95
        echo "
\t<h1>Create Post</h1>
\t
\t";
        // line 98
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Title", "title");
        echo "
\t";
        // line 99
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "title", "value" => $this->getAttribute($_post_, "title")));
        // line 102
        echo "
\t
\t";
        // line 104
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Teaser", "teaser");
        echo "
\t";
        // line 105
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "teaser", "value" => $this->getAttribute($_post_, "teaser")));
        // line 108
        echo "
\t
\t";
        // line 110
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Image", "image");
        echo "
\t";
        // line 111
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->getfile(array("name" => "image", "value" => $this->getAttribute($_post_, "image")));
        // line 114
        echo "
\t
\t";
        // line 116
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Body", "body");
        echo "
\t";
        // line 117
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettextarea(array("name" => "body", "id" => "post-body", "value" => $this->getAttribute($_post_, "body")));
        // line 121
        echo "
\t
\t<br />
\t";
        // line 124
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Url", "slug");
        echo "
\t";
        // line 125
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "slug", "value" => $this->getAttribute($_post_, "slug")));
        // line 128
        echo "
";
    }

    public function getTemplateName()
    {
        return "post/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 128,  246 => 125,  241 => 124,  236 => 121,  232 => 117,  227 => 116,  223 => 114,  219 => 111,  214 => 110,  210 => 108,  206 => 105,  201 => 104,  197 => 102,  193 => 99,  188 => 98,  183 => 95,  179 => 91,  176 => 90,  169 => 87,  164 => 84,  161 => 81,  151 => 77,  144 => 74,  134 => 73,  129 => 70,  125 => 66,  119 => 62,  115 => 58,  111 => 56,  107 => 51,  102 => 50,  96 => 46,  92 => 42,  87 => 41,  83 => 39,  79 => 35,  75 => 33,  71 => 28,  66 => 27,  62 => 25,  58 => 21,  54 => 19,  50 => 14,  45 => 13,  41 => 11,  37 => 6,  34 => 5,  31 => 4,  26 => 2,);
    }
}
