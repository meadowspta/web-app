<?php

/* _macros/ui.html */
class __TwigTemplate_e1f975a5222744bc1e04347ae2a8e85d extends Twig_Template
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
    public function getasset($_path = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $_path,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
            if ((!twig_test_empty($_path_))) {
                // line 4
                if (isset($context["path"])) { $_path_ = $context["path"]; } else { $_path_ = null; }
                echo twig_escape_filter($this->env, Meadows_Twig_Extensions::asset_route($_path_), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getmore_link($_params = null)
    {
        $context = $this->env->mergeGlobals(array(
            "params" => $_params,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["value"] = $this->getAttribute($_params_, "value");
            // line 10
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["href"] = $this->getAttribute($_params_, "href");
            // line 11
            echo "\t";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            $context["params"] = Meadows_Twig_Extensions::html_attributes($_params_);
            // line 12
            echo "\t<div class=\"pull-right\">
\t\t<a href=\"";
            // line 13
            if (isset($context["href"])) { $_href_ = $context["href"]; } else { $_href_ = null; }
            echo $_href_;
            echo "\" class=\"btn btn-mini\" type=\"button\" ";
            if (isset($context["params"])) { $_params_ = $context["params"]; } else { $_params_ = null; }
            echo $_params_;
            echo ">More &raquo;</a>
\t</div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macros/ui.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  70 => 12,  66 => 11,  62 => 10,  59 => 9,  48 => 8,  32 => 3,  119 => 30,  116 => 29,  110 => 28,  107 => 27,  99 => 23,  94 => 22,  83 => 20,  76 => 17,  71 => 16,  68 => 15,  61 => 13,  57 => 12,  45 => 11,  42 => 10,  39 => 9,  35 => 4,  29 => 7,  27 => 6,  21 => 1,  19 => 1,);
    }
}
