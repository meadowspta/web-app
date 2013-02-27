<?php

/* _template/includes/status_message.html */
class __TwigTemplate_c20e62e2940179fc82c5fc813799af3c extends Twig_Template
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
        if (isset($context["_status_messages"])) { $__status_messages_ = $context["_status_messages"]; } else { $__status_messages_ = null; }
        if ((twig_length_filter($this->env, $__status_messages_) > 0)) {
            // line 2
            echo "\t<div id=\"status-message\">
\t\t";
            // line 3
            if (isset($context["_status_messages"])) { $__status_messages_ = $context["_status_messages"]; } else { $__status_messages_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($__status_messages_, "error")) > 0)) {
                // line 4
                echo "\t\t\t<div class=\"status error\">
\t\t\t\t<ul>
\t\t\t\t\t";
                // line 6
                if (isset($context["_status_messages"])) { $__status_messages_ = $context["_status_messages"]; } else { $__status_messages_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($__status_messages_, "error"));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "\t\t\t\t\t\t<li>";
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    echo $_message_;
                    echo "</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 9
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
            }
            // line 12
            echo "\t\t";
            if (isset($context["_status_messages"])) { $__status_messages_ = $context["_status_messages"]; } else { $__status_messages_ = null; }
            if ((twig_length_filter($this->env, $this->getAttribute($__status_messages_, "confirmation")) > 0)) {
                // line 13
                echo "\t\t\t<div class=\"status confirmation\">
\t\t\t\t<ul>
\t\t\t\t\t";
                // line 15
                if (isset($context["_status_messages"])) { $__status_messages_ = $context["_status_messages"]; } else { $__status_messages_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($__status_messages_, "confirmation"));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 16
                    echo "\t\t\t\t\t\t<li>";
                    if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                    echo $_message_;
                    echo "</li>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 18
                echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
            }
            // line 21
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_template/includes/status_message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  75 => 18,  60 => 15,  56 => 13,  52 => 12,  47 => 9,  25 => 3,  22 => 2,  241 => 75,  238 => 74,  234 => 54,  231 => 53,  225 => 76,  222 => 74,  220 => 73,  213 => 71,  210 => 70,  207 => 69,  204 => 68,  189 => 55,  187 => 53,  173 => 43,  154 => 28,  150 => 26,  131 => 24,  91 => 20,  53 => 13,  37 => 7,  28 => 4,  112 => 39,  109 => 38,  105 => 49,  97 => 43,  90 => 38,  77 => 29,  67 => 23,  44 => 11,  36 => 5,  33 => 4,  30 => 3,  134 => 32,  121 => 28,  113 => 23,  111 => 25,  102 => 23,  92 => 40,  78 => 19,  65 => 16,  58 => 14,  55 => 20,  50 => 12,  34 => 5,  31 => 4,  26 => 2,  73 => 19,  70 => 12,  66 => 11,  62 => 16,  59 => 9,  48 => 8,  32 => 6,  119 => 44,  116 => 43,  110 => 22,  107 => 24,  99 => 45,  94 => 22,  83 => 20,  76 => 17,  71 => 16,  68 => 17,  61 => 21,  57 => 15,  45 => 9,  42 => 11,  39 => 9,  35 => 4,  29 => 7,  27 => 6,  21 => 1,  19 => 1,);
    }
}
