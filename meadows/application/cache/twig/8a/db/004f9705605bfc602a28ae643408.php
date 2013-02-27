<?php

/* js/announcement/script.js */
class __TwigTemplate_8adb004f9705605bfc602a28ae643408 extends Twig_Template
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
        echo "\$(function() {
\t\$('#announcement-body').wysiwyg({
\t\tinitialContent: '',
\t});
});";
    }

    public function getTemplateName()
    {
        return "js/announcement/script.js";
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,  61 => 24,  57 => 22,  54 => 19,  50 => 17,  46 => 13,  41 => 12,  35 => 8,  31 => 5,  28 => 4,  23 => 2,);
    }
}
