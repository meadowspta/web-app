<?php

/* post/edit.html */
class __TwigTemplate_7e90eacfdc891a3c0663f505f0734dae extends Twig_Template
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
\t\t<h3>Publishing Options</h3>
\t\t
\t\t";
        // line 8
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->getcheckbox(array("id" => "field-is-event", "name" => "is-event", "options" => array(1 => "This is an event"), "values" => $this->getAttribute($_post_, "is_event")));
        // line 13
        echo "
\t\t<div id=\"post-form-event-info\" class=\"well\">
\t\t\t";
        // line 15
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Start Date", "start_date");
        echo "
\t\t\t";
        // line 16
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("id" => "event-start-date", "name" => "event[start_date]", "value" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "n/j/Y"), "class" => "regular micro"));
        // line 21
        echo "
\t\t\t
\t\t\t";
        // line 23
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "event[start_time]", "value" => twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "g:ia"), "class" => "regular micro"));
        // line 27
        echo "
\t\t\t
\t\t\t";
        // line 29
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("End Date", "end_date");
        echo "
\t\t\t";
        // line 30
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("id" => "event-end-date", "name" => "event[end_date]", "value" => (($this->getAttribute($this->getAttribute($_post_, "event"), "end_date")) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "end_date"), "n/j/Y")) : ("")), "class" => "regular micro"));
        // line 35
        echo "
\t\t\t
\t\t\t";
        // line 37
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "event[end_time]", "value" => (($this->getAttribute($this->getAttribute($_post_, "event"), "end_date")) ? (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "end_date"), "g:ia")) : ("")), "class" => "regular micro"));
        // line 41
        echo "
\t\t\t
\t\t\t";
        // line 43
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Location", "location");
        echo "
\t\t\t";
        // line 44
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "event[location]", "value" => $this->getAttribute($this->getAttribute($_post_, "event"), "location"), "class" => "fluid regular"));
        // line 48
        echo "
\t\t</div>
\t\t
\t\t<div class=\"well\">
\t\t\t";
        // line 52
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Publish Date", "publish_date");
        echo "
\t\t\t";
        // line 53
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("id" => "publish-date", "name" => "publish_date", "value" => twig_date_format_filter($this->env, $this->getAttribute($_post_, "publish_date"), "n/j/Y"), "class" => "regular micro"));
        // line 58
        echo "
\t\t\t
\t\t\t";
        // line 60
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "publish_time", "value" => twig_date_format_filter($this->env, $this->getAttribute($_post_, "publish_date"), "g:ia"), "class" => "regular micro"));
        // line 64
        echo "
\t\t</div>
\t\t
\t\t<div class=\"well\">
\t\t\t";
        // line 68
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->getcheckbox(array("name" => "is-main-story", "options" => array(1 => "Publish as Main Story"), "values" => $this->getAttribute($_post_, "is_main_story")));
        // line 72
        echo "
\t\t\t
\t\t\t<b>Current Main Story</b><br />
\t\t\t<a href=\"";
        // line 75
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        if (isset($context["main_story"])) { $_main_story_ = $context["main_story"]; } else { $_main_story_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_main_story_, "get_absolute_url", array(), "method"), "html", null, true);
        echo "\">";
        if (isset($context["main_story"])) { $_main_story_ = $context["main_story"]; } else { $_main_story_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_main_story_, "title"), "html", null, true);
        echo "</a> - 
\t\t\t<span class=\"quiet\">";
        // line 76
        if (isset($context["main_story"])) { $_main_story_ = $context["main_story"]; } else { $_main_story_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_main_story_, "teaser"), "html", null, true);
        echo "</span>
\t\t\t<br /><br />
\t\t\t<center>
\t\t\t\t<img src=\"";
        // line 79
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        if (isset($context["main_story"])) { $_main_story_ = $context["main_story"]; } else { $_main_story_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_main_story_, "images"), "small"), "html", null, true);
        echo "\" class=\"image-small\">
\t\t\t</center>
\t\t</div>
\t\t
\t\t<div class=\"pull-right\">
\t\t\t";
        // line 84
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->getbutton(array("id" => "post-delete-button", "value" => "Delete", "href" => (($__base_ . "post/delete/") . $this->getAttribute($_post_, "id")), "class" => "btn btn-danger"));
        // line 89
        echo "
\t\t\t
\t\t\t";
        // line 91
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getsubmit(array("value" => "Publish", "class" => "btn btn-success"));
        // line 94
        echo "
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
\t";
        // line 98
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getclose();
        echo "
";
    }

    // line 101
    public function block_content($context, array $blocks = array())
    {
        // line 102
        echo "\t";
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getopen(array("action" => "", "method" => "post", "enctype" => "multipart/form-data", "class" => "form-inline"));
        // line 107
        echo "
\t
\t<h1>Edit Post</h1>
\t
\t";
        // line 111
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Title", "title");
        echo "
\t";
        // line 112
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "title", "value" => $this->getAttribute($_post_, "title")));
        // line 115
        echo "
\t
\t";
        // line 117
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Teaser", "teaser");
        echo "
\t";
        // line 118
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "teaser", "value" => $this->getAttribute($_post_, "teaser")));
        // line 121
        echo "
\t
\t";
        // line 123
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Image", "image");
        echo "
\t";
        // line 124
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->getfile(array("name" => "image", "value" => $this->getAttribute($_post_, "image")));
        // line 127
        echo "
\t
\t";
        // line 129
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Body", "body");
        echo "
\t";
        // line 130
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettextarea(array("name" => "body", "id" => "post-body", "value" => $this->getAttribute($_post_, "body")));
        // line 134
        echo "
\t
\t<br />
\t";
        // line 137
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Url", "slug");
        echo "
\t";
        // line 138
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "slug", "value" => $this->getAttribute($_post_, "slug")));
        // line 141
        echo "
";
    }

    public function getTemplateName()
    {
        return "post/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 141,  260 => 138,  255 => 137,  250 => 134,  246 => 130,  241 => 129,  237 => 127,  233 => 124,  228 => 123,  224 => 121,  220 => 118,  215 => 117,  211 => 115,  207 => 112,  202 => 111,  196 => 107,  192 => 102,  189 => 101,  182 => 98,  176 => 94,  173 => 91,  169 => 89,  164 => 84,  153 => 79,  146 => 76,  136 => 75,  131 => 72,  127 => 68,  121 => 64,  117 => 60,  113 => 58,  109 => 53,  104 => 52,  98 => 48,  94 => 44,  89 => 43,  85 => 41,  81 => 37,  77 => 35,  73 => 30,  68 => 29,  64 => 27,  60 => 23,  56 => 21,  52 => 16,  47 => 15,  43 => 13,  39 => 8,  34 => 5,  31 => 4,  26 => 2,);
    }
}
