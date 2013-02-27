<?php

/* _template/pages/full.html */
class __TwigTemplate_bee3e44247bba5a042744d8c3d3ece17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_template/meta.html");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_template/meta.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->env->loadTemplate("_template/includes/navbar.html")->display($context);
        // line 5
        echo "\t
\t<div id=\"header-background\"></div>
\t<div id=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span4\">
\t\t\t\t\t<div id=\"logo\"><a href=\"";
        // line 11
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "\"><img src=\"";
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "static/images/template/logo_type.png\"></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span8\">
\t\t\t\t\t<ul class=\"navigation\">
\t\t\t\t\t\t";
        // line 20
        echo "\t\t\t\t\t\t<li><a href=\"";
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "news\">News</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 21
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "calendar\">Calendar</a></li>
\t\t\t\t\t\t<li><a href=\"http://meadowspta.org/\" target=\"_blank\">PTA</a></li>
\t\t\t\t\t\t<li class=\"last\"><a href=\"";
        // line 23
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "meals/menu\">Food Services</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"contact-info pull-right\">
\t\t\t\t\t<a href=\"";
        // line 29
        if (isset($context["_map_url"])) { $__map_url_ = $context["_map_url"]; } else { $__map_url_ = null; }
        echo twig_escape_filter($this->env, $__map_url_, "html", null, true);
        echo "\" target=\"_blank\">1101 Helen Drive Millbrae, CA 94030</a> &middot (650) 583-7590 
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"container\">
\t\t<div id=\"page\" class=\"row\">
\t\t\t<div id=\"main\" class=\"span8\">
\t\t\t\t";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div id=\"sidebar\" class=\"span4\">
\t\t\t\t";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 45
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 49
        $this->env->loadTemplate("_template/includes/footer.html")->display($context);
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t\t";
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        // line 44
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "_template/pages/full.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 39,  109 => 38,  105 => 49,  97 => 43,  90 => 38,  77 => 29,  67 => 23,  44 => 11,  36 => 5,  33 => 4,  30 => 3,  134 => 32,  121 => 28,  113 => 26,  111 => 25,  102 => 23,  92 => 40,  78 => 19,  65 => 16,  58 => 14,  55 => 20,  50 => 12,  34 => 5,  31 => 4,  26 => 2,  73 => 13,  70 => 12,  66 => 11,  62 => 15,  59 => 9,  48 => 8,  32 => 3,  119 => 44,  116 => 43,  110 => 28,  107 => 24,  99 => 45,  94 => 22,  83 => 20,  76 => 17,  71 => 16,  68 => 17,  61 => 21,  57 => 12,  45 => 9,  42 => 8,  39 => 9,  35 => 4,  29 => 7,  27 => 6,  21 => 1,  19 => 1,);
    }
}
