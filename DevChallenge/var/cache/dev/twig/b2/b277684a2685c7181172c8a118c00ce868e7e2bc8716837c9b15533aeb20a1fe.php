<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fe77fb5658adf6ea31ab552931935d8e1a7a2f2ffb2bc613f0ccfd62fc8ab23e extends Twig_Template
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
        $__internal_d7696e193c528a4e2d2df659fd8959459d0c98e19f819af90b5485861219b763 = $this->env->getExtension("native_profiler");
        $__internal_d7696e193c528a4e2d2df659fd8959459d0c98e19f819af90b5485861219b763->enter($__internal_d7696e193c528a4e2d2df659fd8959459d0c98e19f819af90b5485861219b763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7696e193c528a4e2d2df659fd8959459d0c98e19f819af90b5485861219b763->leave($__internal_d7696e193c528a4e2d2df659fd8959459d0c98e19f819af90b5485861219b763_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a635d2ed73062422bbe552c8ed13380581f7c4d04b9509d539019e17c1a238d = $this->env->getExtension("native_profiler");
        $__internal_4a635d2ed73062422bbe552c8ed13380581f7c4d04b9509d539019e17c1a238d->enter($__internal_4a635d2ed73062422bbe552c8ed13380581f7c4d04b9509d539019e17c1a238d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4a635d2ed73062422bbe552c8ed13380581f7c4d04b9509d539019e17c1a238d->leave($__internal_4a635d2ed73062422bbe552c8ed13380581f7c4d04b9509d539019e17c1a238d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ee37fbe74943be059bdecb0864544ff9b69365859e728b44844e3270bd37b52 = $this->env->getExtension("native_profiler");
        $__internal_9ee37fbe74943be059bdecb0864544ff9b69365859e728b44844e3270bd37b52->enter($__internal_9ee37fbe74943be059bdecb0864544ff9b69365859e728b44844e3270bd37b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ee37fbe74943be059bdecb0864544ff9b69365859e728b44844e3270bd37b52->leave($__internal_9ee37fbe74943be059bdecb0864544ff9b69365859e728b44844e3270bd37b52_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_141f364150a4dc533299733b9df50f7585ac5b88cba7f3c85a3c18e94112ec88 = $this->env->getExtension("native_profiler");
        $__internal_141f364150a4dc533299733b9df50f7585ac5b88cba7f3c85a3c18e94112ec88->enter($__internal_141f364150a4dc533299733b9df50f7585ac5b88cba7f3c85a3c18e94112ec88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_141f364150a4dc533299733b9df50f7585ac5b88cba7f3c85a3c18e94112ec88->leave($__internal_141f364150a4dc533299733b9df50f7585ac5b88cba7f3c85a3c18e94112ec88_prof);

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
