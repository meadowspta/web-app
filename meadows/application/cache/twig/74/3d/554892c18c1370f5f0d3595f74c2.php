<?php

/* _template/includes/navbar.html */
class __TwigTemplate_743d554892c18c1370f5f0d3595f74c2 extends Twig_Template
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
        if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
        if (($this->getAttribute($__user_, "is_authenticated") && Model_User::user_has_access($__user_, "view admin navbar"))) {
            // line 2
            echo "\t<div id=\"admin-bar-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div id=\"admin-bar\" class=\"row\">
\t\t\t\t<div class=\"span4 first\">Meadows Admin Navbar</div>
\t\t\t\t<div class=\"span8 text-right\">
\t\t\t\t\t";
            // line 7
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (Model_User::user_has_access($_user_, "view dashboard")) {
                // line 8
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
                echo twig_escape_filter($this->env, $__base_, "html", null, true);
                echo "dashboard\"><i class=\"icon-list-alt icon-white\"></i> Dashboard</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t\t";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (Model_User::user_has_access($_user_, "create a post")) {
                // line 11
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
                echo twig_escape_filter($this->env, $__base_, "html", null, true);
                echo "post/add\"><i class=\"icon-edit icon-white\"></i> Create A Post</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t\t\t\t";
            }
            // line 13
            echo "\t\t\t\t\t";
            if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
            if (Model_User::user_has_access($_user_, "create a page")) {
                // line 14
                echo "\t\t\t\t\t\t<a href=\"";
                if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
                echo twig_escape_filter($this->env, $__base_, "html", null, true);
                echo "page/add\"><i class=\"icon-file icon-white\"></i> Create A Page</a>&nbsp;&nbsp;|&nbsp;&nbsp;
\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t\t<a href=\"";
            if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
            echo twig_escape_filter($this->env, $__base_, "html", null, true);
            echo "logout\"><i class=\"icon-off icon-white\"></i> Logout</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "_template/includes/navbar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  43 => 11,  80 => 21,  75 => 18,  60 => 15,  56 => 13,  52 => 12,  47 => 9,  25 => 3,  22 => 2,  241 => 75,  238 => 74,  234 => 54,  231 => 53,  225 => 76,  222 => 74,  220 => 73,  213 => 71,  210 => 70,  207 => 69,  204 => 68,  189 => 55,  187 => 53,  173 => 43,  154 => 28,  150 => 26,  131 => 24,  91 => 20,  53 => 13,  37 => 7,  28 => 4,  112 => 39,  109 => 38,  105 => 49,  97 => 43,  90 => 38,  77 => 29,  67 => 23,  44 => 11,  36 => 5,  33 => 4,  30 => 3,  134 => 32,  121 => 28,  113 => 23,  111 => 25,  102 => 23,  92 => 40,  78 => 19,  65 => 16,  58 => 14,  55 => 20,  50 => 13,  34 => 5,  31 => 4,  26 => 2,  73 => 19,  70 => 12,  66 => 11,  62 => 16,  59 => 9,  48 => 8,  32 => 8,  119 => 44,  116 => 43,  110 => 22,  107 => 24,  99 => 45,  94 => 22,  83 => 20,  76 => 17,  71 => 16,  68 => 17,  61 => 16,  57 => 15,  45 => 9,  42 => 11,  39 => 10,  35 => 4,  29 => 7,  27 => 6,  21 => 1,  19 => 1,);
    }
}
