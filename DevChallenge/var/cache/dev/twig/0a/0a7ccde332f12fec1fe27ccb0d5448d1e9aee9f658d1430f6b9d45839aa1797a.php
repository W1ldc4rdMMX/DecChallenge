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
        $__internal_c75dea24938612dadd36b2d71a464f6ec1e36bb910c4fe041483c21b7c46b68a = $this->env->getExtension("native_profiler");
        $__internal_c75dea24938612dadd36b2d71a464f6ec1e36bb910c4fe041483c21b7c46b68a->enter($__internal_c75dea24938612dadd36b2d71a464f6ec1e36bb910c4fe041483c21b7c46b68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c75dea24938612dadd36b2d71a464f6ec1e36bb910c4fe041483c21b7c46b68a->leave($__internal_c75dea24938612dadd36b2d71a464f6ec1e36bb910c4fe041483c21b7c46b68a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d43e1660f56f9d16ef29039e36c043183c76fe2dbc4d03757850ace6939a7e80 = $this->env->getExtension("native_profiler");
        $__internal_d43e1660f56f9d16ef29039e36c043183c76fe2dbc4d03757850ace6939a7e80->enter($__internal_d43e1660f56f9d16ef29039e36c043183c76fe2dbc4d03757850ace6939a7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    WebApp Name here
";
        
        $__internal_d43e1660f56f9d16ef29039e36c043183c76fe2dbc4d03757850ace6939a7e80->leave($__internal_d43e1660f56f9d16ef29039e36c043183c76fe2dbc4d03757850ace6939a7e80_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0245dd8ed8553c8e433d5914f5868fd357ace3e13d2118a8efbadd2dcf042e9b = $this->env->getExtension("native_profiler");
        $__internal_0245dd8ed8553c8e433d5914f5868fd357ace3e13d2118a8efbadd2dcf042e9b->enter($__internal_0245dd8ed8553c8e433d5914f5868fd357ace3e13d2118a8efbadd2dcf042e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</h2>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>

";
        
        $__internal_0245dd8ed8553c8e433d5914f5868fd357ace3e13d2118a8efbadd2dcf042e9b->leave($__internal_0245dd8ed8553c8e433d5914f5868fd357ace3e13d2118a8efbadd2dcf042e9b_prof);

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
/*             <h2>Welcome back {{ user.username }}</h2>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
