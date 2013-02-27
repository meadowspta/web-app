<?php

/* js/page/script.js */
class __TwigTemplate_02b29927d54dd59b1aff1948bce1538d extends Twig_Template
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
        echo "Meadows.Page = {};

\$(function() {
\tMeadows.Page.WysiwygInit();
});

Meadows.Page.WysiwygInit = function() {
\t\$('#page-body').wysiwyg({
\t\tinitialContent: '',
\t});
};";
    }

    public function getTemplateName()
    {
        return "js/page/script.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  100 => 44,  96 => 42,  93 => 39,  89 => 37,  85 => 33,  80 => 32,  73 => 27,  69 => 23,  64 => 22,  60 => 20,  56 => 17,  51 => 16,  46 => 13,  42 => 9,  39 => 8,  34 => 5,  31 => 4,  26 => 2,);
    }
}
