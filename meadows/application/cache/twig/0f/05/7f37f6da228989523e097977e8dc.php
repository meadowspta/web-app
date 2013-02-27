<?php

/* _macros/form.html */
class __TwigTemplate_0f057f37f6da228989523e097977e8dc extends Twig_Template
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
    }

    // line 1
    public function getopen($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::html_attributes($_params_, array("method" => "post", "action" => ""));
            // line 3
            echo "\t<form ";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            echo $_params_;
            echo ">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "</form>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getlabel($_label = null, $_for = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "for" => $_for,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "<div><label for=\"";
            if (isset($context["for"])) { $_for_ = $context["for"]; } else { $_for_ = null; }
            echo twig_escape_filter($this->env, $_for_, "html", null, true);
            echo "\">";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo ":</label></div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function gethelp_text($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "<span class=\"help-block\">";
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            echo twig_escape_filter($this->env, $_text_, "html", null, true);
            echo "</span>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function gettext($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::html_attributes($_params_);
            // line 20
            echo "\t<input type=\"text\" ";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            echo $_params_;
            echo ">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function gettextarea($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["value"] = $this->getAttribute($_params_, "value");
            // line 25
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::set_property($_params_, "value", "");
            // line 26
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::html_attributes($_params_);
            // line 27
            echo "\t<textarea ";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            echo $_params_;
            echo ">";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "</textarea>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 30
    public function getpassword($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 31
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::html_attributes($_params_);
            // line 32
            echo "\t<input type=\"password\" ";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            echo $_params_;
            echo ">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 35
    public function getcheckbox($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 37
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["values"] = $this->getAttribute($_params_, "values");
            // line 38
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            if ((!is_array($this->getAttribute($_params_, "values")))) {
                // line 39
                echo "\t\t";
                if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
                $context["values"] = array(0 => $this->getAttribute($_params_, "values"));
                // line 40
                echo "\t";
            }
            // line 41
            echo "\t
\t";
            // line 42
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["options"] = $this->getAttribute($_params_, "options");
            // line 43
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            if ((!is_array($this->getAttribute($_params_, "options")))) {
                // line 44
                echo "\t\t";
                if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
                $context["options"] = array(0 => $this->getAttribute($_params_, "options"));
                // line 45
                echo "\t";
            }
            // line 46
            echo "\t
\t<ul class=\"no-style\">
\t\t";
            // line 48
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["option_id"] => $context["option"]) {
                // line 49
                echo "\t\t\t";
                // line 50
                echo "\t\t\t";
                $context["checked"] = 0;
                // line 51
                echo "\t\t\t";
                if (isset($context["option_id"])) { $_option_id_ = $context["option_id"]; } else { $_option_id_ = null; }
                if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                if (twig_in_filter($_option_id_, $_values_)) {
                    // line 52
                    echo "\t\t\t\t";
                    $context["checked"] = 1;
                    // line 53
                    echo "\t\t\t";
                }
                // line 54
                echo "\t\t\t<li>
\t\t\t\t<label>
\t\t\t\t\t<input id=\"";
                // line 56
                if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_params_, "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_params_, "id"), $this->getAttribute($_params_, "name"))) : ($this->getAttribute($_params_, "name"))), "html", null, true);
                echo "\" class=\"";
                if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_params_, "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_params_, "class"), $this->getAttribute($_params_, "name"))) : ($this->getAttribute($_params_, "name"))), "html", null, true);
                echo "\" type=\"checkbox\" name=\"";
                if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_params_, "name"), "html", null, true);
                echo "\" value=\"";
                if (isset($context["option_id"])) { $_option_id_ = $context["option_id"]; } else { $_option_id_ = null; }
                echo twig_escape_filter($this->env, $_option_id_);
                echo "\" ";
                if (isset($context["checked"])) { $_checked_ = $context["checked"]; } else { $_checked_ = null; }
                if (($_checked_ == 1)) {
                    echo "checked";
                }
                echo " ";
                if (isset($context["disabled"])) { $_disabled_ = $context["disabled"]; } else { $_disabled_ = null; }
                echo twig_escape_filter($this->env, $_disabled_, "html", null, true);
                echo " /> <div class=\"form-list-label\">";
                if (isset($context["option"])) { $_option_ = $context["option"]; } else { $_option_ = null; }
                echo twig_escape_filter($this->env, $_option_, "html", null, true);
                echo "</div>
\t\t\t\t\t<div class=\"clearfix\"></a>
\t\t\t\t</label>
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option_id'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 61
            echo "\t</ul>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function getfile($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::html_attributes($_params_);
            // line 66
            echo "\t<input ";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            echo $_params_;
            echo " type=\"file\">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getsubmit($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::html_attributes($_params_);
            // line 71
            echo "\t<input type=\"submit\" ";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            echo $_params_;
            echo ">";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getbutton($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["value"] = $this->getAttribute($_params_, "value");
            // line 76
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["href"] = $this->getAttribute($_params_, "href");
            // line 77
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::html_attributes($_params_);
            // line 78
            echo "\t<a href=\"";
            if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
            echo $_href_;
            echo "\" type=\"button\" ";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            echo $_params_;
            echo ">";
            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
            echo twig_escape_filter($this->env, $_value_, "html", null, true);
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macros/form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 78,  407 => 77,  403 => 76,  400 => 75,  389 => 74,  375 => 71,  372 => 70,  361 => 69,  347 => 66,  344 => 65,  333 => 64,  322 => 61,  290 => 56,  286 => 54,  283 => 53,  280 => 52,  275 => 51,  272 => 50,  270 => 49,  265 => 48,  261 => 46,  258 => 45,  254 => 44,  250 => 43,  247 => 42,  244 => 41,  241 => 40,  237 => 39,  233 => 38,  229 => 37,  218 => 35,  201 => 31,  190 => 30,  173 => 27,  169 => 26,  165 => 25,  162 => 24,  151 => 23,  137 => 20,  134 => 19,  123 => 18,  109 => 15,  98 => 14,  69 => 10,  58 => 7,  35 => 3,  32 => 2,  208 => 66,  204 => 32,  193 => 60,  188 => 59,  180 => 58,  170 => 57,  156 => 54,  149 => 52,  144 => 51,  139 => 48,  127 => 45,  118 => 43,  110 => 42,  106 => 40,  102 => 39,  99 => 38,  81 => 11,  71 => 17,  66 => 16,  63 => 15,  59 => 13,  52 => 11,  49 => 6,  43 => 8,  40 => 7,  33 => 5,  28 => 3,  26 => 2,  48 => 9,  45 => 8,  36 => 6,  30 => 5,  25 => 4,  21 => 1,  19 => 1,);
    }
}
