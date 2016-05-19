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
        $__internal_ac3768f0937a8d489b7cd5cbfd5952045656bf7bf0ea431f1e29654220ed52bf = $this->env->getExtension("native_profiler");
        $__internal_ac3768f0937a8d489b7cd5cbfd5952045656bf7bf0ea431f1e29654220ed52bf->enter($__internal_ac3768f0937a8d489b7cd5cbfd5952045656bf7bf0ea431f1e29654220ed52bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3768f0937a8d489b7cd5cbfd5952045656bf7bf0ea431f1e29654220ed52bf->leave($__internal_ac3768f0937a8d489b7cd5cbfd5952045656bf7bf0ea431f1e29654220ed52bf_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbae38788854bf97232acb3c1c49eae32f5d49eb61803697d829394ce2f2f77d = $this->env->getExtension("native_profiler");
        $__internal_bbae38788854bf97232acb3c1c49eae32f5d49eb61803697d829394ce2f2f77d->enter($__internal_bbae38788854bf97232acb3c1c49eae32f5d49eb61803697d829394ce2f2f77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    WebApp Name here
";
        
        $__internal_bbae38788854bf97232acb3c1c49eae32f5d49eb61803697d829394ce2f2f77d->leave($__internal_bbae38788854bf97232acb3c1c49eae32f5d49eb61803697d829394ce2f2f77d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_735db54ca6906115b9e3200295354a9985dfe3128cb3ccc4f92da5a53a3af6c5 = $this->env->getExtension("native_profiler");
        $__internal_735db54ca6906115b9e3200295354a9985dfe3128cb3ccc4f92da5a53a3af6c5->enter($__internal_735db54ca6906115b9e3200295354a9985dfe3128cb3ccc4f92da5a53a3af6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
    <h1>About App</h1>
    <p>Details and description of App here</p>
    </div>
";
        
        $__internal_735db54ca6906115b9e3200295354a9985dfe3128cb3ccc4f92da5a53a3af6c5->leave($__internal_735db54ca6906115b9e3200295354a9985dfe3128cb3ccc4f92da5a53a3af6c5_prof);

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
        return array (  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/*     </div>*/
/* {% endblock %}*/
