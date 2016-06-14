<?php

/* :catalogue:meta.html.twig */
class __TwigTemplate_32a791b17a59086b7cd336ae8654d31670f85789193e759a8f640a1d42ce9909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":catalogue:meta.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_713dba4fccdaf7904c077fe81c9c6ee41d32f23ba6e9ea05323de003198d7e62 = $this->env->getExtension("native_profiler");
        $__internal_713dba4fccdaf7904c077fe81c9c6ee41d32f23ba6e9ea05323de003198d7e62->enter($__internal_713dba4fccdaf7904c077fe81c9c6ee41d32f23ba6e9ea05323de003198d7e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:meta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_713dba4fccdaf7904c077fe81c9c6ee41d32f23ba6e9ea05323de003198d7e62->leave($__internal_713dba4fccdaf7904c077fe81c9c6ee41d32f23ba6e9ea05323de003198d7e62_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_16e7860ffdf2b8f7e2e4683f4c63954d82941aefc702003d2065598d37826593 = $this->env->getExtension("native_profiler");
        $__internal_16e7860ffdf2b8f7e2e4683f4c63954d82941aefc702003d2065598d37826593->enter($__internal_16e7860ffdf2b8f7e2e4683f4c63954d82941aefc702003d2065598d37826593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    System log
";
        
        $__internal_16e7860ffdf2b8f7e2e4683f4c63954d82941aefc702003d2065598d37826593->leave($__internal_16e7860ffdf2b8f7e2e4683f4c63954d82941aefc702003d2065598d37826593_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d80a47d41bf5fb7f21d9af25e104525977f513a01bce39f21ffb3169b30ce88 = $this->env->getExtension("native_profiler");
        $__internal_9d80a47d41bf5fb7f21d9af25e104525977f513a01bce39f21ffb3169b30ce88->enter($__internal_9d80a47d41bf5fb7f21d9af25e104525977f513a01bce39f21ffb3169b30ce88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th>Date</th>
                <th>User</th>
                <th>Action</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metaData"]) ? $context["metaData"] : $this->getContext($context, "metaData")));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "metaDate", array()), "d/m/y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "metaUser", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "metaAction", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "metaDesc", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </tbody>
    </div>
";
        
        $__internal_9d80a47d41bf5fb7f21d9af25e104525977f513a01bce39f21ffb3169b30ce88->leave($__internal_9d80a47d41bf5fb7f21d9af25e104525977f513a01bce39f21ffb3169b30ce88_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:meta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  73 => 20,  69 => 19,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}*/
/*     System log*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Date</th>*/
/*                 <th>User</th>*/
/*                 <th>Action</th>*/
/*                 <th>Description</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for data in metaData %}*/
/*                 <tr>*/
/*                     <td>{{ data.metaDate|date('d/m/y') }}</td>*/
/*                     <td>{{ data.metaUser }}</td>*/
/*                     <td>{{ data.metaAction }}</td>*/
/*                     <td>{{ data.metaDesc }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*     </div>*/
/* {% endblock %}*/
