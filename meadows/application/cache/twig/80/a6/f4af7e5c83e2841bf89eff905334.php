<?php

/* meal/menu/block/upcoming.html */
class __TwigTemplate_80a6f4af7e5c83e2841bf89eff905334 extends Twig_Template
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
        echo $__ui_->getmore_link(array("href" => ($__base_ . "meals/menu")));
        echo "
<div class=\"clearfix\"></div>";
    }

    public function getTemplateName()
    {
        return "meal/menu/block/upcoming.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  45 => 8,  36 => 6,  30 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
