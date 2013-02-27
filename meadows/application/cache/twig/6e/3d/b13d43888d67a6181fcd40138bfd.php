<?php

/* menu/block/upcoming.html */
class __TwigTemplate_6e3db13d43888d67a6181fcd40138bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["_ui"] = $this->env->loadTemplate("_macros/ui.html");
        // line 2
        echo "
<h2 class=\"chrome\">Upcoming Lunch Menu</h2>
";
        // line 4
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_menus_);
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 5
            echo "\t<b>";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_menu_, "date"), "l n/j"), "html", null, true);
            echo "</b><br />
\t<blockquote>";
            // line 6
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo strtr(nl2br($this->getAttribute($_menu_, "menu")), array("*" => "<span class=\"bright\">*</span>"));
            echo "</blockquote>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "<span class=\"quiet pull-left small\"><span class=\"bright\">*</span> Vegetarian Items</span>
";
        // line 9
        if (isset($context["_ui"])) { $__ui_ = $context["_ui"]; } else { $__ui_ = null; }
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo $this->getAttribute($__ui_, "more_link", array(0 => array("href" => ($__base_ . "food/menu"))), "method");
        echo "
<div class=\"clearfix\"></div>
<br />";
    }

    public function getTemplateName()
    {
        return "menu/block/upcoming.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  43 => 8,  34 => 6,  28 => 5,  23 => 4,  19 => 2,  17 => 1,);
    }
}
