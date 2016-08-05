<?php

/* base.html.twig */
class __TwigTemplate_06a79ca81cac2e7868a37b29d46463b9f1c5215bc3e253c26a4652fbed083653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ed8d62a366e59dcdd0def5c67f35b72c6f92d3fddcc27e4e3d898fe82d4a914 = $this->env->getExtension("native_profiler");
        $__internal_0ed8d62a366e59dcdd0def5c67f35b72c6f92d3fddcc27e4e3d898fe82d4a914->enter($__internal_0ed8d62a366e59dcdd0def5c67f35b72c6f92d3fddcc27e4e3d898fe82d4a914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"search-bar\">
            <form method=\"GET\" action=\"\" class=\"js-sea-search sea-search\">
                <input type=\"search\" name=\"q\" placeholder=\"Search Sea Creatures\" autocomplete=\"off\" class=\"search-input\">
            </form>
        </div>
        <header class=\"header\">
            <img class=\"logo-icon\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/aquanote-logo.png"), "html", null, true);
        echo "\">
            <h1 class=\"logo\">AquaNote</h1>
            <ul class=\"navi\">
                <li class=\"search\"><a href=\"#\" class=\"js-header-search-toggle\"><i class=\"fa fa-search\"></i></a></li>
                <li><a href=\"#\">Login</a></li>
            </ul>
        </header>

        <div class=\"main-content\">
            ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "        </div>

        <div class=\"footer\">
            <p class=\"footer-text\">Made with <span class=\"heart\"><3</span> <a href=\"https://knpuniversity.com\">KnpUniversity</a></p>
        </div>

        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_0ed8d62a366e59dcdd0def5c67f35b72c6f92d3fddcc27e4e3d898fe82d4a914->leave($__internal_0ed8d62a366e59dcdd0def5c67f35b72c6f92d3fddcc27e4e3d898fe82d4a914_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_672aa5dcbef726304b8fe1703ff421b907036765e73c9503c2cf6e3a34cb9faa = $this->env->getExtension("native_profiler");
        $__internal_672aa5dcbef726304b8fe1703ff421b907036765e73c9503c2cf6e3a34cb9faa->enter($__internal_672aa5dcbef726304b8fe1703ff421b907036765e73c9503c2cf6e3a34cb9faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AquaNote!";
        
        $__internal_672aa5dcbef726304b8fe1703ff421b907036765e73c9503c2cf6e3a34cb9faa->leave($__internal_672aa5dcbef726304b8fe1703ff421b907036765e73c9503c2cf6e3a34cb9faa_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e2558b72e55d8f7887848ba8b661e2080722b9a2705753e2597081ea9110a06 = $this->env->getExtension("native_profiler");
        $__internal_7e2558b72e55d8f7887848ba8b661e2080722b9a2705753e2597081ea9110a06->enter($__internal_7e2558b72e55d8f7887848ba8b661e2080722b9a2705753e2597081ea9110a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_7e2558b72e55d8f7887848ba8b661e2080722b9a2705753e2597081ea9110a06->leave($__internal_7e2558b72e55d8f7887848ba8b661e2080722b9a2705753e2597081ea9110a06_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8b0784f42e16dd9081b3818ed68872361263bdf6ca307a252091d1c312a81c5 = $this->env->getExtension("native_profiler");
        $__internal_c8b0784f42e16dd9081b3818ed68872361263bdf6ca307a252091d1c312a81c5->enter($__internal_c8b0784f42e16dd9081b3818ed68872361263bdf6ca307a252091d1c312a81c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8b0784f42e16dd9081b3818ed68872361263bdf6ca307a252091d1c312a81c5->leave($__internal_c8b0784f42e16dd9081b3818ed68872361263bdf6ca307a252091d1c312a81c5_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_28d127acf457b02f1c4cd0040a8d21b71b40bc40209799f1f633c5c74ba93bf3 = $this->env->getExtension("native_profiler");
        $__internal_28d127acf457b02f1c4cd0040a8d21b71b40bc40209799f1f633c5c74ba93bf3->enter($__internal_28d127acf457b02f1c4cd0040a8d21b71b40bc40209799f1f633c5c74ba93bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_28d127acf457b02f1c4cd0040a8d21b71b40bc40209799f1f633c5c74ba93bf3->leave($__internal_28d127acf457b02f1c4cd0040a8d21b71b40bc40209799f1f633c5c74ba93bf3_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  138 => 38,  132 => 37,  121 => 30,  112 => 10,  108 => 9,  103 => 8,  97 => 7,  85 => 5,  76 => 41,  74 => 37,  66 => 31,  64 => 30,  52 => 21,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>{% block title %}AquaNote!{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/styles.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="search-bar">*/
/*             <form method="GET" action="" class="js-sea-search sea-search">*/
/*                 <input type="search" name="q" placeholder="Search Sea Creatures" autocomplete="off" class="search-input">*/
/*             </form>*/
/*         </div>*/
/*         <header class="header">*/
/*             <img class="logo-icon" src="{{ asset('images/aquanote-logo.png') }}">*/
/*             <h1 class="logo">AquaNote</h1>*/
/*             <ul class="navi">*/
/*                 <li class="search"><a href="#" class="js-header-search-toggle"><i class="fa fa-search"></i></a></li>*/
/*                 <li><a href="#">Login</a></li>*/
/*             </ul>*/
/*         </header>*/
/* */
/*         <div class="main-content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/* */
/*         <div class="footer">*/
/*             <p class="footer-text">Made with <span class="heart"><3</span> <a href="https://knpuniversity.com">KnpUniversity</a></p>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
