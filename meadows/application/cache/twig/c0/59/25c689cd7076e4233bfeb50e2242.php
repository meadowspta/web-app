<?php

/* _template/meta.html */
class __TwigTemplate_c05925c689cd7076e4233bfeb50e2242 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["_ui"] = $this->env->loadTemplate("_macros/ui.html");
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 5
        if (isset($context["_page_title"])) { $__page_title_ = $context["_page_title"]; } else { $__page_title_ = null; }
        echo twig_escape_filter($this->env, $__page_title_, "html", null, true);
        echo "</title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t
\t\t";
        // line 10
        if (isset($context["_styles"])) { $__styles_ = $context["_styles"]; } else { $__styles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($__styles_);
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 11
            echo "<link type=\"text/css\" rel=\"stylesheet\" media=\"all\" href=\"";
            if (isset($context["_ui"])) { $__ui_ = $context["_ui"]; } else { $__ui_ = null; }
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo $__ui_->getasset(("static/css/" . $_path_));
            echo "\" />
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "\t\t
\t\t<script type=\"text/javascript\">var Meadows = {};</script>
\t\t";
        // line 15
        if (isset($context["_scripts"])) { $__scripts_ = $context["_scripts"]; } else { $__scripts_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($__scripts_);
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 16
            echo "<script type=\"text/javascript\" src=\"";
            if (isset($context["_ui"])) { $__ui_ = $context["_ui"]; } else { $__ui_ = null; }
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            echo $__ui_->getasset(("static/js/" . $_path_));
            echo "\"></script>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        if (isset($context["_twig_js"])) { $__twig_js_ = $context["_twig_js"]; } else { $__twig_js_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($__twig_js_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 20
            echo "\t\t\t<script type=\"text/javascript\">";
            if (isset($context["js"])) { $_js_ = $context["js"]; } else { $_js_ = null; }
            $template = $this->env->resolveTemplate($_js_);
            $template->display($context);
            echo "</script>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "\t\t
\t\t";
        // line 23
        if (isset($context["_twig_css"])) { $__twig_css_ = $context["_twig_css"]; } else { $__twig_css_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($__twig_css_);
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 24
            echo "\t\t\t<style type=\"text/css\">";
            if (isset($context["css"])) { $_css_ = $context["css"]; } else { $_css_ = null; }
            $template = $this->env->resolveTemplate($_css_);
            $template->display($context);
            echo "</style>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t\t
\t\t<script>
\t\t\tvar _displayStatusMessage = ";
        // line 28
        if (isset($context["_display_status_messages"])) { $__display_status_messages_ = $context["_display_status_messages"]; } else { $__display_status_messages_ = null; }
        echo twig_escape_filter($this->env, $__display_status_messages_, "html", null, true);
        echo ";
\t\t</script>
\t\t
\t\t<script>
\t\t\t(function(d, s, id) {
\t\t\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\tif (d.getElementById(id)) return;
\t\t\t\tjs = d.createElement(s); js.id = id;
\t\t\t\tjs.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId=193882737326566\";
\t\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t\t}(document, 'script', 'facebook-jssdk'));
\t\t</script>
\t\t
\t\t<script type=\"text/javascript\">
\t\t\tvar _gaq = _gaq || [];
\t\t\t_gaq.push(['_setAccount', '";
        // line 43
        if (isset($context["_google_analytics_id"])) { $__google_analytics_id_ = $context["_google_analytics_id"]; } else { $__google_analytics_id_ = null; }
        echo twig_escape_filter($this->env, $__google_analytics_id_, "html", null, true);
        echo "']);
\t\t\t_gaq.push(['_trackPageview']);

\t\t\t(function() {
\t\t\t\tvar ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
\t\t\t\tga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
\t\t\t\tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
\t\t\t})();
\t\t</script>
\t\t
\t\t";
        // line 53
        $this->displayBlock('style', $context, $blocks);
        // line 55
        echo "\t\t
\t\t<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->

\t\t<!-- Le fav and touch icons -->
\t\t<link rel=\"shortcut icon\" href=\"../assets/ico/favicon.ico\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../assets/ico/apple-touch-icon-144-precomposed.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
\t\t<link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
\t</head>
\t";
        // line 68
        if (isset($context["_user"])) { $__user_ = $context["_user"]; } else { $__user_ = null; }
        if (Model_User::user_has_access($__user_, "view admin navbar")) {
            // line 69
            echo "\t\t";
            $context["body_class"] = "class=\"admin-bar\"";
            // line 70
            echo "\t";
        }
        // line 71
        echo "\t<body ";
        if (isset($context["body_class"])) { $_body_class_ = $context["body_class"]; } else { $_body_class_ = null; }
        echo $_body_class_;
        echo ">
\t\t<div id=\"fb-root\"></div>
\t\t";
        // line 73
        $this->env->loadTemplate("_template/includes/status_message.html")->display($context);
        // line 74
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "\t</body>
</html>
";
    }

    // line 53
    public function block_style($context, array $blocks = array())
    {
        // line 54
        echo "\t\t";
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "_template/meta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 75,  238 => 74,  234 => 54,  231 => 53,  225 => 76,  222 => 74,  220 => 73,  213 => 71,  210 => 70,  207 => 69,  204 => 68,  189 => 55,  187 => 53,  173 => 43,  154 => 28,  150 => 26,  131 => 24,  91 => 20,  53 => 13,  37 => 10,  28 => 5,  112 => 39,  109 => 38,  105 => 49,  97 => 43,  90 => 38,  77 => 29,  67 => 23,  44 => 11,  36 => 5,  33 => 4,  30 => 3,  134 => 32,  121 => 28,  113 => 23,  111 => 25,  102 => 23,  92 => 40,  78 => 19,  65 => 16,  58 => 14,  55 => 20,  50 => 12,  34 => 5,  31 => 4,  26 => 2,  73 => 19,  70 => 12,  66 => 11,  62 => 16,  59 => 9,  48 => 8,  32 => 3,  119 => 44,  116 => 43,  110 => 22,  107 => 24,  99 => 45,  94 => 22,  83 => 20,  76 => 17,  71 => 16,  68 => 17,  61 => 21,  57 => 15,  45 => 9,  42 => 11,  39 => 9,  35 => 4,  29 => 7,  27 => 6,  21 => 1,  19 => 1,);
    }
}
