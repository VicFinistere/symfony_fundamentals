<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0e3f635b3de6a867098de5ee0079cb6d9a93b426e2af567b56992fa495d33f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81fe59e3c1f6ad2a0c2ce20b00ca1edb436f95e980366de3ae40f4bb1ae82129 = $this->env->getExtension("native_profiler");
        $__internal_81fe59e3c1f6ad2a0c2ce20b00ca1edb436f95e980366de3ae40f4bb1ae82129->enter($__internal_81fe59e3c1f6ad2a0c2ce20b00ca1edb436f95e980366de3ae40f4bb1ae82129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81fe59e3c1f6ad2a0c2ce20b00ca1edb436f95e980366de3ae40f4bb1ae82129->leave($__internal_81fe59e3c1f6ad2a0c2ce20b00ca1edb436f95e980366de3ae40f4bb1ae82129_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_394cfc24ec2818630c90a7aff0e57789e660ab984f5b58b87296f8c588fcf36c = $this->env->getExtension("native_profiler");
        $__internal_394cfc24ec2818630c90a7aff0e57789e660ab984f5b58b87296f8c588fcf36c->enter($__internal_394cfc24ec2818630c90a7aff0e57789e660ab984f5b58b87296f8c588fcf36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_394cfc24ec2818630c90a7aff0e57789e660ab984f5b58b87296f8c588fcf36c->leave($__internal_394cfc24ec2818630c90a7aff0e57789e660ab984f5b58b87296f8c588fcf36c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eea7b77a870e91c37f82194223f1149033f883b54eed54765eba75397c5f578e = $this->env->getExtension("native_profiler");
        $__internal_eea7b77a870e91c37f82194223f1149033f883b54eed54765eba75397c5f578e->enter($__internal_eea7b77a870e91c37f82194223f1149033f883b54eed54765eba75397c5f578e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eea7b77a870e91c37f82194223f1149033f883b54eed54765eba75397c5f578e->leave($__internal_eea7b77a870e91c37f82194223f1149033f883b54eed54765eba75397c5f578e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fdba2a8c8b13f4fcf7324d97e055df607fb4d8980b1e0510c607c33bce8e989 = $this->env->getExtension("native_profiler");
        $__internal_0fdba2a8c8b13f4fcf7324d97e055df607fb4d8980b1e0510c607c33bce8e989->enter($__internal_0fdba2a8c8b13f4fcf7324d97e055df607fb4d8980b1e0510c607c33bce8e989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0fdba2a8c8b13f4fcf7324d97e055df607fb4d8980b1e0510c607c33bce8e989->leave($__internal_0fdba2a8c8b13f4fcf7324d97e055df607fb4d8980b1e0510c607c33bce8e989_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
