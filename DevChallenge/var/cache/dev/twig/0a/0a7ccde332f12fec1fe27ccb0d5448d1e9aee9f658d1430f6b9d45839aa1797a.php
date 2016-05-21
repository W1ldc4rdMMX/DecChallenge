<?php

/* catalogue/about.html.twig */
class __TwigTemplate_e2ce1d8e6bba7b89f807427c20c593e03419365ce4c9fdcf28a8f9115faa2ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/about.html.twig", 1);
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
        $__internal_02476ca14bedc49cb92877ff676bc296d4c0f994146366a89f316c2f2643be15 = $this->env->getExtension("native_profiler");
        $__internal_02476ca14bedc49cb92877ff676bc296d4c0f994146366a89f316c2f2643be15->enter($__internal_02476ca14bedc49cb92877ff676bc296d4c0f994146366a89f316c2f2643be15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02476ca14bedc49cb92877ff676bc296d4c0f994146366a89f316c2f2643be15->leave($__internal_02476ca14bedc49cb92877ff676bc296d4c0f994146366a89f316c2f2643be15_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae66b5eea998f38b30ccd2ce0b375a09ab3c5cd6e7442ccc0605f593c4f5df5e = $this->env->getExtension("native_profiler");
        $__internal_ae66b5eea998f38b30ccd2ce0b375a09ab3c5cd6e7442ccc0605f593c4f5df5e->enter($__internal_ae66b5eea998f38b30ccd2ce0b375a09ab3c5cd6e7442ccc0605f593c4f5df5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    WebApp Name here
";
        
        $__internal_ae66b5eea998f38b30ccd2ce0b375a09ab3c5cd6e7442ccc0605f593c4f5df5e->leave($__internal_ae66b5eea998f38b30ccd2ce0b375a09ab3c5cd6e7442ccc0605f593c4f5df5e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2a0afc58f77e1a75f469902abec95e88415225a9172dee19c3a620e0ca73296 = $this->env->getExtension("native_profiler");
        $__internal_d2a0afc58f77e1a75f469902abec95e88415225a9172dee19c3a620e0ca73296->enter($__internal_d2a0afc58f77e1a75f469902abec95e88415225a9172dee19c3a620e0ca73296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
    <h1>About App</h1>
    <p>Details and description of App here</p>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "            <h2>Welcome back ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "userFName", array()), "html", null, true);
            echo "</h2>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>

";
        
        $__internal_d2a0afc58f77e1a75f469902abec95e88415225a9172dee19c3a620e0ca73296->leave($__internal_d2a0afc58f77e1a75f469902abec95e88415225a9172dee19c3a620e0ca73296_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  64 => 11,  60 => 10,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}*/
/*     WebApp Name here*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*     <h1>About App</h1>*/
/*     <p>Details and description of App here</p>*/
/*         {% for user in users %}*/
/*             <h2>Welcome back {{ user.userFName }}</h2>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
