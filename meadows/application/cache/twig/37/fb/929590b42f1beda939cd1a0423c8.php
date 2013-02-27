<?php

/* page/add.html */
class __TwigTemplate_37fb929590b42f1beda939cd1a0423c8 extends Twig_Template
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
        echo "\t
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getopen(array("action" => "", "method" => "post", "enctype" => "multipart/form-data"));
        // line 13
        echo "
\t\t<div class=\"span8\">
\t\t\t<h1>Create Page</h1>
\t\t\t
\t\t\t";
        // line 17
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Title", "title");
        echo "
\t\t\t";
        // line 18
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettext(array("name" => "title", "value" => $this->getAttribute($_post_, "title")));
        // line 21
        echo "
\t\t\t
\t\t\t";
        // line 23
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Body", "body");
        echo "
\t\t\t";
        // line 24
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
        echo $__form_->gettextarea(array("name" => "body", "id" => "post-body", "value" => $this->getAttribute($_post_, "body")));
        // line 28
        echo "
\t\t</div>
\t\t
\t\t<div class=\"span4\">
\t\t\t<div class=\"well\">
\t\t\t\t";
        // line 33
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("URL", "slug");
        echo "
\t\t\t";
        // line 34
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $__form_->gettext(array("name" => "slug", "value" => $this->getAttribute($_page_, "slug"), "class" => "fluid regular"));
        // line 38
        echo "
\t\t\t\t
\t\t\t\t";
        // line 40
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getsubmit(array("value" => "Publish", "class" => "btn btn-success pull-right"));
        // line 43
        echo "
\t\t\t</div>
\t\t</div>
\t";
        // line 46
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getclose();
        echo "
";
    }

    public function getTemplateName()
    {
        return "page/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 46,  97 => 43,  94 => 40,  90 => 38,  86 => 34,  81 => 33,  74 => 28,  70 => 24,  65 => 23,  61 => 21,  57 => 18,  52 => 17,  46 => 13,  42 => 9,  39 => 8,  34 => 5,  31 => 4,  26 => 2,);
    }
}
