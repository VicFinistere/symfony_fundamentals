<?php

/* genus/show.html.twig */
class __TwigTemplate_3f45c914ec706fc1a76a2ae2defb11ba0e05b7dc395c777a4dce41cf3d306450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b76b332511c88156fb579e36bb185328c300080c6c3af15fc68adf4aba5a7558 = $this->env->getExtension("native_profiler");
        $__internal_b76b332511c88156fb579e36bb185328c300080c6c3af15fc68adf4aba5a7558->enter($__internal_b76b332511c88156fb579e36bb185328c300080c6c3af15fc68adf4aba5a7558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b76b332511c88156fb579e36bb185328c300080c6c3af15fc68adf4aba5a7558->leave($__internal_b76b332511c88156fb579e36bb185328c300080c6c3af15fc68adf4aba5a7558_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee70796b54cf3a03709755e595b720b0803fa4b38be5789eacc91bbbf2d74983 = $this->env->getExtension("native_profiler");
        $__internal_ee70796b54cf3a03709755e595b720b0803fa4b38be5789eacc91bbbf2d74983->enter($__internal_ee70796b54cf3a03709755e595b720b0803fa4b38be5789eacc91bbbf2d74983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Genus ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        
        $__internal_ee70796b54cf3a03709755e595b720b0803fa4b38be5789eacc91bbbf2d74983->leave($__internal_ee70796b54cf3a03709755e595b720b0803fa4b38be5789eacc91bbbf2d74983_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14c5f5ff4b9e9be345f869a130d744cf436267f9541387525f578dbc1b20fa82 = $this->env->getExtension("native_profiler");
        $__internal_14c5f5ff4b9e9be345f869a130d744cf436267f9541387525f578dbc1b20fa82->enter($__internal_14c5f5ff4b9e9be345f869a130d744cf436267f9541387525f578dbc1b20fa82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2 class=\"genus-name\">";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h2>

    <div class=\"sea-creature-container\">
        <div class=\"genus-photo\"></div>
        <div class=\"genus-details\">
            <dl class=\"genus-details-list\">
                <dt>Subfamily:</dt>
                <dd>Octopodinae</dd>
                <dt>Known Species:</dt>
                <dd>";
        // line 15
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, "99999"), "html", null, true);
        echo "</dd>
                <dt>Fun Fact:</dt>
                <dd>";
        // line 17
        echo (isset($context["funFact"]) ? $context["funFact"] : $this->getContext($context, "funFact"));
        echo "</dd>
            </dl>
        </div>
    </div>
    <div id=\"js-notes-wrapper\"></div>
";
        
        $__internal_14c5f5ff4b9e9be345f869a130d744cf436267f9541387525f578dbc1b20fa82->leave($__internal_14c5f5ff4b9e9be345f869a130d744cf436267f9541387525f578dbc1b20fa82_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27dbf82a94240251c4cd1cbdb98e0dd0294d2a2798d71b90cb34608f1fe339d6 = $this->env->getExtension("native_profiler");
        $__internal_27dbf82a94240251c4cd1cbdb98e0dd0294d2a2798d71b90cb34608f1fe339d6->enter($__internal_27dbf82a94240251c4cd1cbdb98e0dd0294d2a2798d71b90cb34608f1fe339d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js\"></script>

    <script type=\"text/babel\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/notes.react.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/babel\">
        var notesUrl = '";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("genus_show_notes", array("genusName" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "';

        ReactDOM.render(
          <NoteSection url={notesUrl} />,
          document.getElementById('js-notes-wrapper')
        );
    </script>
";
        
        $__internal_27dbf82a94240251c4cd1cbdb98e0dd0294d2a2798d71b90cb34608f1fe339d6->leave($__internal_27dbf82a94240251c4cd1cbdb98e0dd0294d2a2798d71b90cb34608f1fe339d6_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  101 => 30,  92 => 25,  86 => 24,  73 => 17,  68 => 15,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Genus {{ name }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h2 class="genus-name">{{ name }}</h2>*/
/* */
/*     <div class="sea-creature-container">*/
/*         <div class="genus-photo"></div>*/
/*         <div class="genus-details">*/
/*             <dl class="genus-details-list">*/
/*                 <dt>Subfamily:</dt>*/
/*                 <dd>Octopodinae</dd>*/
/*                 <dt>Known Species:</dt>*/
/*                 <dd>{{ '99999'|number_format }}</dd>*/
/*                 <dt>Fun Fact:</dt>*/
/*                 <dd>{{ funFact|raw }}</dd>*/
/*             </dl>*/
/*         </div>*/
/*     </div>*/
/*     <div id="js-notes-wrapper"></div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.3/react-dom.js"></script>*/
/*     <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>*/
/* */
/*     <script type="text/babel" src="{{ asset('js/notes.react.js') }}"></script>*/
/*     <script type="text/babel">*/
/*         var notesUrl = '{{ path('genus_show_notes', {'genusName': name}) }}';*/
/* */
/*         ReactDOM.render(*/
/*           <NoteSection url={notesUrl} />,*/
/*           document.getElementById('js-notes-wrapper')*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
