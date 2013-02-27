<?php

/* js/post/script.js */
class __TwigTemplate_f23be3bd9d963f7626e18b22a5d6b108 extends Twig_Template
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
        echo "Meadows.Post = {};

\$(function() {
\tMeadows.Post.WysiwygInit();
\tMeadows.Post.EventFieldManager();
\tMeadows.Post.DeleteHandler();
});

Meadows.Post.WysiwygInit = function() {
\t\$('#post-body').wysiwyg({
\t\tinitialContent: '',
\t});
};

Meadows.Post.EventFieldManager = function() {
\t// Event fields display init.
\t\$('#post-form-event-info').hide();
\tif (\$('#field-is-event:checked').length > 0) {
\t\t\$('#post-form-event-info').show();
\t}
\t
\t// Hide/show the event fields depending on the is-event checkbox.
\t\$('#field-is-event').click(function() {
\t\tif (\$('#field-is-event:checked').length > 0) {
\t\t\t\$('#post-form-event-info').slideDown();
\t\t} else {
\t\t\t\$('#post-form-event-info').slideUp();
\t\t}
\t});
\t
\t// Date picker.
\t\$(\"#event-start-date\").datepicker();
\t\$(\"#event-end-date\").datepicker();
\t\$(\"#publish-date\").datepicker();
};

Meadows.Post.DeleteHandler = function() {
\t\$('#post-delete-button').click(function() {
\t\tif (confirm('Are you sure you want to delete this post?')) {
\t\t\treturn true;
\t\t}
\t\treturn false;
\t});
};";
    }

    public function getTemplateName()
    {
        return "js/post/script.js";
    }

    public function getDebugInfo()
    {
        return array (  241 => 75,  238 => 74,  234 => 54,  231 => 53,  225 => 76,  222 => 74,  220 => 73,  213 => 71,  210 => 70,  207 => 69,  204 => 68,  189 => 55,  187 => 53,  173 => 43,  154 => 28,  150 => 26,  131 => 24,  91 => 20,  53 => 13,  37 => 10,  28 => 5,  112 => 39,  109 => 38,  105 => 49,  97 => 43,  90 => 38,  77 => 29,  67 => 23,  44 => 11,  36 => 5,  33 => 4,  30 => 3,  134 => 32,  121 => 28,  113 => 23,  111 => 25,  102 => 23,  92 => 40,  78 => 19,  65 => 16,  58 => 14,  55 => 20,  50 => 12,  34 => 5,  31 => 4,  26 => 2,  73 => 19,  70 => 12,  66 => 11,  62 => 16,  59 => 9,  48 => 8,  32 => 3,  119 => 44,  116 => 43,  110 => 22,  107 => 24,  99 => 45,  94 => 22,  83 => 20,  76 => 17,  71 => 16,  68 => 17,  61 => 21,  57 => 15,  45 => 9,  42 => 11,  39 => 9,  35 => 4,  29 => 7,  27 => 6,  21 => 1,  19 => 1,);
    }
}
