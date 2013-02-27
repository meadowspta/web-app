<?php

/* router/index.html */
class __TwigTemplate_de0baf334ed6e0803f71ceb387cc7903 extends Twig_Template
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
        echo "\t<div id=\"main\" class=\"span8\">
\t\t<h1>";
        // line 6
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_page_, "title"), "html", null, true);
        echo "</h1>
\t\t";
        // line 7
        if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
        echo nl2br($this->getAttribute($_page_, "body"));
        echo "
\t</div>
\t
\t<div id=\"sidebar\" class=\"span4\">
\t\t";
        // line 11
        if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
        if ((Model_User::user_has_access($__user_, "edit own page") || Model_User::user_has_access($__user_, "edit all pages"))) {
            // line 12
            echo "\t\t\t";
            if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
            echo $__form_->getbutton(array("value" => "Edit This Page", "href" => ($__base_ . $this->getAttribute($_page_, "get_edit_url", array(), "method")), "class" => "btn btn-block btn-warning"));
            // line 16
            echo "
\t\t\t<br />
\t\t";
        }
        // line 19
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "router/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  58 => 16,  52 => 12,  49 => 11,  41 => 7,  36 => 6,  33 => 5,  30 => 4,  25 => 2,);
    }
}
