<?php

/* main/homepage.html.twig */
class __TwigTemplate_5d3ad373f22d94d5e712440f8344f441467f24b3677579dda5221b862ca0bc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_448ad710278b5a83d22d02d98b50ba554abe2c695260ffbf4bf647fbd4935cb9 = $this->env->getExtension("native_profiler");
        $__internal_448ad710278b5a83d22d02d98b50ba554abe2c695260ffbf4bf647fbd4935cb9->enter($__internal_448ad710278b5a83d22d02d98b50ba554abe2c695260ffbf4bf647fbd4935cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_448ad710278b5a83d22d02d98b50ba554abe2c695260ffbf4bf647fbd4935cb9->leave($__internal_448ad710278b5a83d22d02d98b50ba554abe2c695260ffbf4bf647fbd4935cb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff7954ef1be5af687c66ade8c31b930d35a89ad8dda55570685ae25afb224a95 = $this->env->getExtension("native_profiler");
        $__internal_ff7954ef1be5af687c66ade8c31b930d35a89ad8dda55570685ae25afb224a95->enter($__internal_ff7954ef1be5af687c66ade8c31b930d35a89ad8dda55570685ae25afb224a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1 class=\"page-header text-center\">Welcome Aquanauts!</h1>
";
        
        $__internal_ff7954ef1be5af687c66ade8c31b930d35a89ad8dda55570685ae25afb224a95->leave($__internal_ff7954ef1be5af687c66ade8c31b930d35a89ad8dda55570685ae25afb224a95_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1 class="page-header text-center">Welcome Aquanauts!</h1>*/
/* {% endblock %}*/
/* */
