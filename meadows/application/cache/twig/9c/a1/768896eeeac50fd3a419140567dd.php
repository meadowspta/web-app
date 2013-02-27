<?php

/* announcement/edit.html */
class __TwigTemplate_9ca1768896eeeac50fd3a419140567dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_template/pages/full.html");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $this->getAttribute($__form_, "open", array(0 => array("action" => "", "method" => "post")), "method");
        // line 8
        echo "
\t\t<div class=\"span8\">
\t\t\t<h1>Edit Announcement</h1>
\t\t\t
\t\t\t";
        // line 12
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $this->getAttribute($__form_, "label", array(0 => "Body", 1 => "body"), "method");
        echo "
\t\t\t";
        // line 13
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["announcement"])) { $_announcement_ = $context["announcement"]; } else { $_announcement_ = null; }
        echo $this->getAttribute($__form_, "textarea", array(0 => array("name" => "body", "id" => "announcement-body", "value" => $_announcement_)), "method");
        // line 17
        echo "
\t\t\t
\t\t\t";
        // line 19
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $this->getAttribute($__form_, "submit", array(0 => array("value" => "Update", "class" => "btn btn-primary")), "method");
        // line 22
        echo "
\t\t</div>
\t";
        // line 24
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $this->getAttribute($__form_, "close", array(), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "announcement/edit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  57 => 22,  54 => 19,  50 => 17,  46 => 13,  41 => 12,  35 => 8,  31 => 5,  28 => 4,  23 => 2,);
    }
}
