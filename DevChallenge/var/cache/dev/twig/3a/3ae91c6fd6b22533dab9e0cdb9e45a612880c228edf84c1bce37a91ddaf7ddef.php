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
        $__internal_720a9a54fe717a426354d2d44b1d0bffec94b1fe5c739f4966803a111484b7ea = $this->env->getExtension("native_profiler");
        $__internal_720a9a54fe717a426354d2d44b1d0bffec94b1fe5c739f4966803a111484b7ea->enter($__internal_720a9a54fe717a426354d2d44b1d0bffec94b1fe5c739f4966803a111484b7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720a9a54fe717a426354d2d44b1d0bffec94b1fe5c739f4966803a111484b7ea->leave($__internal_720a9a54fe717a426354d2d44b1d0bffec94b1fe5c739f4966803a111484b7ea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9cb973b378928caf262cca24dfc2a692c993755148d3361275684845abd4bbc7 = $this->env->getExtension("native_profiler");
        $__internal_9cb973b378928caf262cca24dfc2a692c993755148d3361275684845abd4bbc7->enter($__internal_9cb973b378928caf262cca24dfc2a692c993755148d3361275684845abd4bbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9cb973b378928caf262cca24dfc2a692c993755148d3361275684845abd4bbc7->leave($__internal_9cb973b378928caf262cca24dfc2a692c993755148d3361275684845abd4bbc7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5aa412d4279653cebc466489dc15570fe9d001ba27a39fef0cd89ead8d433110 = $this->env->getExtension("native_profiler");
        $__internal_5aa412d4279653cebc466489dc15570fe9d001ba27a39fef0cd89ead8d433110->enter($__internal_5aa412d4279653cebc466489dc15570fe9d001ba27a39fef0cd89ead8d433110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5aa412d4279653cebc466489dc15570fe9d001ba27a39fef0cd89ead8d433110->leave($__internal_5aa412d4279653cebc466489dc15570fe9d001ba27a39fef0cd89ead8d433110_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_11501ea8ed4d535b73368921f8aaa4dffadfb561c5ee661e7f702c459c1bf1e9 = $this->env->getExtension("native_profiler");
        $__internal_11501ea8ed4d535b73368921f8aaa4dffadfb561c5ee661e7f702c459c1bf1e9->enter($__internal_11501ea8ed4d535b73368921f8aaa4dffadfb561c5ee661e7f702c459c1bf1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_11501ea8ed4d535b73368921f8aaa4dffadfb561c5ee661e7f702c459c1bf1e9->leave($__internal_11501ea8ed4d535b73368921f8aaa4dffadfb561c5ee661e7f702c459c1bf1e9_prof);

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
