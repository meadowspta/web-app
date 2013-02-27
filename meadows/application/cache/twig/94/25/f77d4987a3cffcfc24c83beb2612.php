<?php

/* meal/menu/index.html */
class __TwigTemplate_9425f77d4987a3cffcfc24c83beb2612 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sidebar($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"sidebar\">
\t\t<div class=\"well pad\">
\t\t\t<a href=\"";
        // line 6
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "static/files/meal/menus/Meadows_Lunch_Menu_December_2012.pdf\"><img src=\"";
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo twig_escape_filter($this->env, $__base_, "html", null, true);
        echo "static/images/icons/pdf_small.png\"> Download the December lunch menu</a>
\t\t</div>
\t\t
\t\t<div id=\"meal-facts\">
\t\t\t<h2 class=\"chrome\">Did You Know?</h2>
\t\t\t
\t\t\t<b>Fun health and nutrition facts about the Millbrae School District Meal Program:</b>
\t\t\t<ul>
\t\t\t\t<li>The Millbrae School District Meal Program has been 100% trans-fat free since 2006.</li>
\t\t\t\t<li>Many entrees - such as pizzas, corn dogs, cereal, and muffins - are made from whole grains.</li>
\t\t\t\t<li>All menus meet federal and state guidelines of less than 30% total fat, and less than 10% saturated fat.</li>
\t\t\t\t<li>We do not fry any foods - chicken nuggets, breaded chicken patty sandwiches, French-fried potatoes, orange chicken, and corn dogs are all baked.</li>
\t\t\t\t<li>Our milk selection is all natural, rBST-free.</li>
\t\t\t\t<li>Ingredients and menu selections are low fat or low sugar whenever possible.</li>
\t\t\t\t<li>Fresh fruits and vegetables are acquired through local California growers.</li>
\t\t\t\t<li>We no longer use Styrofoam trays at the elementary schools. We have switched to a reusable, washable red basket as a meal tray, helping the environment by limiting excess trash disposal. Students at Taylor Middle School use recycled cardboard food trays.</li>
\t\t\t</ul>
\t\t</div>
\t</div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "\t<h1>Upcoming Food Services Menu</h1>
\t<div id=\"main\">
\t\t";
        // line 30
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_menus_);
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 31
            echo "\t\t\t<h3>";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_menu_, "date"), "l F jS"), "html", null, true);
            echo "</h3>
\t\t\t<blockquote>";
            // line 32
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo strtr(nl2br($this->getAttribute($_menu_, "menu")), array("*" => "<span class=\"bright\">*</span>"));
            echo "</blockquote>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "\t\t<span class=\"quiet pull-left small\"><span class=\"bright\">*</span> Vegetarian Items</span>
\t\t<div class=\"clearfix\"></div>
\t\t<br />
\t</div>
";
    }

    public function getTemplateName()
    {
        return "meal/menu/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  82 => 32,  76 => 31,  71 => 30,  67 => 28,  64 => 27,  36 => 6,  32 => 4,  29 => 3,);
    }
}
