<?php

/* user/auth/login.html */
class __TwigTemplate_613fa98755c437e5963fd605241e11ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("_template/pages/full.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_template/pages/full.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["_form"] = $this->env->loadTemplate("_macros/form.html");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"span8\">
\t\t<h1>User Login</h1>
\t\t
\t\t";
        // line 8
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["_base"])) { $__base_ = $context["_base"]; } else { $__base_ = null; }
        echo $__form_->getopen(array("action" => ($__base_ . "login")));
        echo "
\t\t\t";
        // line 9
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Email", "email");
        echo "
\t\t\t";
        // line 10
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
        echo $__form_->gettext(array("name" => "email", "value" => $_email_, "class" => "medium"));
        // line 14
        echo "
\t\t\t
\t\t\t";
        // line 16
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getlabel("Password", "password");
        echo "
\t\t\t";
        // line 17
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getpassword(array("name" => "password", "class" => "medium"));
        // line 20
        echo "
\t\t\t<br />
\t\t\t";
        // line 22
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getsubmit(array("value" => "Login", "class" => "btn"));
        // line 25
        echo "
\t\t";
        // line 26
        if (isset($context["_form"])) { $__form_ = $context["_form"]; } else { $__form_ = null; }
        echo $__form_->getclose();
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "user/auth/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  72 => 25,  69 => 22,  65 => 20,  62 => 17,  57 => 16,  53 => 14,  49 => 10,  44 => 9,  38 => 8,  33 => 5,  30 => 4,  25 => 2,);
    }
}
