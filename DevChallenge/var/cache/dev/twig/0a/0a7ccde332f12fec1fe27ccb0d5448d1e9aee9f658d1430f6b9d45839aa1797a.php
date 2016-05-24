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
        $__internal_4525a9c4b2a30a900bad0e034a652a7b106c2723442245d65d1b27cbdfd22928 = $this->env->getExtension("native_profiler");
        $__internal_4525a9c4b2a30a900bad0e034a652a7b106c2723442245d65d1b27cbdfd22928->enter($__internal_4525a9c4b2a30a900bad0e034a652a7b106c2723442245d65d1b27cbdfd22928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4525a9c4b2a30a900bad0e034a652a7b106c2723442245d65d1b27cbdfd22928->leave($__internal_4525a9c4b2a30a900bad0e034a652a7b106c2723442245d65d1b27cbdfd22928_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a5f135931878c1974c9d9cbd50c61ee37a0fad1d4d1364e23f83dde98eb13af4 = $this->env->getExtension("native_profiler");
        $__internal_a5f135931878c1974c9d9cbd50c61ee37a0fad1d4d1364e23f83dde98eb13af4->enter($__internal_a5f135931878c1974c9d9cbd50c61ee37a0fad1d4d1364e23f83dde98eb13af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    WebApp Name here
";
        
        $__internal_a5f135931878c1974c9d9cbd50c61ee37a0fad1d4d1364e23f83dde98eb13af4->leave($__internal_a5f135931878c1974c9d9cbd50c61ee37a0fad1d4d1364e23f83dde98eb13af4_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_efeed4f97522a2257e99474708452e006a2f46ed859e3c83b4bdc86282203682 = $this->env->getExtension("native_profiler");
        $__internal_efeed4f97522a2257e99474708452e006a2f46ed859e3c83b4bdc86282203682->enter($__internal_efeed4f97522a2257e99474708452e006a2f46ed859e3c83b4bdc86282203682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_efeed4f97522a2257e99474708452e006a2f46ed859e3c83b4bdc86282203682->leave($__internal_efeed4f97522a2257e99474708452e006a2f46ed859e3c83b4bdc86282203682_prof);

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
