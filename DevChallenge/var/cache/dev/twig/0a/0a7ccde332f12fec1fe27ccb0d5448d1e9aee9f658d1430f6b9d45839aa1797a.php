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
        $__internal_23409bcae5be9d918304635964dcf3be817d18bf14d2af90b2fc7800da82858d = $this->env->getExtension("native_profiler");
        $__internal_23409bcae5be9d918304635964dcf3be817d18bf14d2af90b2fc7800da82858d->enter($__internal_23409bcae5be9d918304635964dcf3be817d18bf14d2af90b2fc7800da82858d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23409bcae5be9d918304635964dcf3be817d18bf14d2af90b2fc7800da82858d->leave($__internal_23409bcae5be9d918304635964dcf3be817d18bf14d2af90b2fc7800da82858d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_765adf95735bee59bee80863a60939a0475207ad58da2608077c9bfbef3ecf8b = $this->env->getExtension("native_profiler");
        $__internal_765adf95735bee59bee80863a60939a0475207ad58da2608077c9bfbef3ecf8b->enter($__internal_765adf95735bee59bee80863a60939a0475207ad58da2608077c9bfbef3ecf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    WebApp Name here
";
        
        $__internal_765adf95735bee59bee80863a60939a0475207ad58da2608077c9bfbef3ecf8b->leave($__internal_765adf95735bee59bee80863a60939a0475207ad58da2608077c9bfbef3ecf8b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9075df7b59c79beabbf4596729b35664eacc315fd7dadfe7a5200ffc20d5e741 = $this->env->getExtension("native_profiler");
        $__internal_9075df7b59c79beabbf4596729b35664eacc315fd7dadfe7a5200ffc20d5e741->enter($__internal_9075df7b59c79beabbf4596729b35664eacc315fd7dadfe7a5200ffc20d5e741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9075df7b59c79beabbf4596729b35664eacc315fd7dadfe7a5200ffc20d5e741->leave($__internal_9075df7b59c79beabbf4596729b35664eacc315fd7dadfe7a5200ffc20d5e741_prof);

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
