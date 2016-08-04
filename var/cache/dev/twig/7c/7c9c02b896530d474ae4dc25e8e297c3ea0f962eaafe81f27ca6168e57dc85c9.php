<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4dacbb26076c486bb0f76a9c1f067e268fd30b10bb58f3162461201fd62dfe8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fb3205510a7dd5ceacb5b1e3b4ab8f8ca3daada655dc0bbbf077925c48ae8a5 = $this->env->getExtension("native_profiler");
        $__internal_6fb3205510a7dd5ceacb5b1e3b4ab8f8ca3daada655dc0bbbf077925c48ae8a5->enter($__internal_6fb3205510a7dd5ceacb5b1e3b4ab8f8ca3daada655dc0bbbf077925c48ae8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fb3205510a7dd5ceacb5b1e3b4ab8f8ca3daada655dc0bbbf077925c48ae8a5->leave($__internal_6fb3205510a7dd5ceacb5b1e3b4ab8f8ca3daada655dc0bbbf077925c48ae8a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce954ee299946653990681e75b9751fc2c99d80aa5d771fe99c40609144be2b5 = $this->env->getExtension("native_profiler");
        $__internal_ce954ee299946653990681e75b9751fc2c99d80aa5d771fe99c40609144be2b5->enter($__internal_ce954ee299946653990681e75b9751fc2c99d80aa5d771fe99c40609144be2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ce954ee299946653990681e75b9751fc2c99d80aa5d771fe99c40609144be2b5->leave($__internal_ce954ee299946653990681e75b9751fc2c99d80aa5d771fe99c40609144be2b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71ff9b0d9189e0cd6b46f6cad1b8be46d5a721a53aa5d6bac62995b63a31ed91 = $this->env->getExtension("native_profiler");
        $__internal_71ff9b0d9189e0cd6b46f6cad1b8be46d5a721a53aa5d6bac62995b63a31ed91->enter($__internal_71ff9b0d9189e0cd6b46f6cad1b8be46d5a721a53aa5d6bac62995b63a31ed91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_71ff9b0d9189e0cd6b46f6cad1b8be46d5a721a53aa5d6bac62995b63a31ed91->leave($__internal_71ff9b0d9189e0cd6b46f6cad1b8be46d5a721a53aa5d6bac62995b63a31ed91_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8180904efb0a7df7e667980d605a5ac546f8d021fef3745ac8f22656f18bfb4a = $this->env->getExtension("native_profiler");
        $__internal_8180904efb0a7df7e667980d605a5ac546f8d021fef3745ac8f22656f18bfb4a->enter($__internal_8180904efb0a7df7e667980d605a5ac546f8d021fef3745ac8f22656f18bfb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8180904efb0a7df7e667980d605a5ac546f8d021fef3745ac8f22656f18bfb4a->leave($__internal_8180904efb0a7df7e667980d605a5ac546f8d021fef3745ac8f22656f18bfb4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
