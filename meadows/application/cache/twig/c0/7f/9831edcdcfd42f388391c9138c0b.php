<?php

/* post/block/upcoming_events.html */
class __TwigTemplate_c07f9831edcdcfd42f388391c9138c0b extends Twig_Template
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
<div id=\"upcoming-events\" class=\"sidebar-section\">
\t<h2 class=\"chrome\">Upcoming Events</h2>
\t<ul id=\"event-list\" class=\"list\">
\t\t";
        // line 6
        $context["current_month"] = "";
        // line 7
        echo "\t\t";
        if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_events_);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "\t\t\t";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "last")) {
                // line 9
                echo "\t\t\t\t";
                $context["last"] = "last";
                // line 10
                echo "\t\t\t";
            }
            // line 11
            echo "\t\t\t<li id=\"event-item-";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo "\" class=\"event-item event-item-";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "id"), "html", null, true);
            echo " list-item ";
            if (isset($context["last"])) { $_last_ = $context["last"]; } else { $_last_ = null; }
            echo twig_escape_filter($this->env, $_last_, "html", null, true);
            echo "\">
\t\t\t\t";
            // line 12
            if (isset($context["current_month"])) { $_current_month_ = $context["current_month"]; } else { $_current_month_ = null; }
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            if (($_current_month_ != twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "n"))) {
                // line 13
                echo "\t\t\t\t\t<div class=\"month\">";
                if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "F Y"), "html", null, true);
                echo "</div>
\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t<div class=\"date-square span1 first\">
\t\t\t\t\t<div class=\"day\">";
            // line 16
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "D"), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"date\">";
            // line 17
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "j"), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"details span3\">
\t\t\t\t\t<a href=\"";
            // line 20
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            echo twig_escape_filter($this->env, $__base_, "html", null, true);
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "get_absolute_url", array(), "method"), "html", null, true);
            echo "\" class=\"title\">";
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "title"), "html", null, true);
            echo "</a>
\t\t\t\t\t<div class=\"quiet\">
\t\t\t\t\t\t";
            // line 22
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_post_, "get_formatted_times", array(), "method"), "html", null, true);
            echo "<br />
\t\t\t\t\t\t";
            // line 23
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "location"), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
            // line 27
            if (isset($context["post"])) { $_post_ = $context["post"]; } else { $_post_ = null; }
            $context["current_month"] = twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($_post_, "event"), "start_date"), "n");
            // line 28
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "\t</ul>
\t";
        // line 30
        if (isset($context["_ui"])) { $__ui_ = $context["_ui"]; } else { $__ui_ = null; }
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo $__ui_->getmore_link(array("href" => ($__base_ . "events")));
        echo "
\t<div class=\"clearfix\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "post/block/upcoming_events.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  116 => 29,  110 => 28,  107 => 27,  99 => 23,  94 => 22,  83 => 20,  76 => 17,  71 => 16,  68 => 15,  61 => 13,  57 => 12,  45 => 11,  42 => 10,  39 => 9,  35 => 8,  29 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
