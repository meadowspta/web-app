<?php

/* page/edit.html */
class __TwigTemplate_f1af51544a9c8bd7ee0043bd313808d1 extends Twig_Template
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
\t\t<h1>Edit Page</h1>
\t\t
\t\t";
        // line 16
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Title", "title");
        echo "
\t\t";
        // line 17
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $__form_->gettext(array("name" => "title", "value" => $this->getAttribute($_page_, "title")));
        // line 20
        echo "
\t\t
\t\t";
        // line 22
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Body", "body");
        echo "
\t\t";
        // line 23
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $__form_->gettextarea(array("name" => "body", "id" => "page-body", "value" => $this->getAttribute($_page_, "body")));
        // line 27
        echo "
\t</div>
\t
\t<div class=\"span4\">
\t\t<div class=\"well\">
\t\t\t";
        // line 32
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("URL", "slug");
        echo "
\t\t";
        // line 33
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo $__form_->gettext(array("name" => "slug", "value" => $this->getAttribute($_page_, "slug"), "class" => "fluid regular"));
        // line 37
        echo "
\t\t\t
\t\t\t";
        // line 39
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getsubmit(array("value" => "Publish", "class" => "btn btn-success pull-right"));
        // line 42
        echo "
\t\t</div>
\t";
        // line 44
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getclose();
        echo "
";
    }

    public function getTemplateName()
    {
        return "page/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  96 => 42,  93 => 39,  89 => 37,  85 => 33,  80 => 32,  73 => 27,  69 => 23,  64 => 22,  60 => 20,  56 => 17,  51 => 16,  46 => 13,  42 => 9,  39 => 8,  34 => 5,  31 => 4,  26 => 2,);
    }
}
