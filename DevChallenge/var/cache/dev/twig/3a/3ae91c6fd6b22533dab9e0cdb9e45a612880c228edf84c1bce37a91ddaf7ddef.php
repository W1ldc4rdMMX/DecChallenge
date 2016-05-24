<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fbe59e7a71b2e1f34e10e17619e3e0b158b96465cf914a4856dad1689a6b417 extends Twig_Template
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
        $__internal_ecca9d9e3345f68f375acfa60a0a583092bb4b752065cfe448f4b239711396e4 = $this->env->getExtension("native_profiler");
        $__internal_ecca9d9e3345f68f375acfa60a0a583092bb4b752065cfe448f4b239711396e4->enter($__internal_ecca9d9e3345f68f375acfa60a0a583092bb4b752065cfe448f4b239711396e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecca9d9e3345f68f375acfa60a0a583092bb4b752065cfe448f4b239711396e4->leave($__internal_ecca9d9e3345f68f375acfa60a0a583092bb4b752065cfe448f4b239711396e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e30b60fb27603132c022bc2d3aa0a99f08ab03a83ef85b4f365bae5ec267db8 = $this->env->getExtension("native_profiler");
        $__internal_4e30b60fb27603132c022bc2d3aa0a99f08ab03a83ef85b4f365bae5ec267db8->enter($__internal_4e30b60fb27603132c022bc2d3aa0a99f08ab03a83ef85b4f365bae5ec267db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e30b60fb27603132c022bc2d3aa0a99f08ab03a83ef85b4f365bae5ec267db8->leave($__internal_4e30b60fb27603132c022bc2d3aa0a99f08ab03a83ef85b4f365bae5ec267db8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f59e711a64b2018e949fcdec9e5ff49c7f5f24e4a01e7d28e1d33c85d51e95a = $this->env->getExtension("native_profiler");
        $__internal_1f59e711a64b2018e949fcdec9e5ff49c7f5f24e4a01e7d28e1d33c85d51e95a->enter($__internal_1f59e711a64b2018e949fcdec9e5ff49c7f5f24e4a01e7d28e1d33c85d51e95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1f59e711a64b2018e949fcdec9e5ff49c7f5f24e4a01e7d28e1d33c85d51e95a->leave($__internal_1f59e711a64b2018e949fcdec9e5ff49c7f5f24e4a01e7d28e1d33c85d51e95a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_537389c947aec77525d5e104be193fc38281e9d710f335eef73774b514795e72 = $this->env->getExtension("native_profiler");
        $__internal_537389c947aec77525d5e104be193fc38281e9d710f335eef73774b514795e72->enter($__internal_537389c947aec77525d5e104be193fc38281e9d710f335eef73774b514795e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_537389c947aec77525d5e104be193fc38281e9d710f335eef73774b514795e72->leave($__internal_537389c947aec77525d5e104be193fc38281e9d710f335eef73774b514795e72_prof);

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
