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
        $__internal_305ca61279e676a3c38eb5ce178c3afd09f4f4e72b2ede0d18cbf185e98e13f9 = $this->env->getExtension("native_profiler");
        $__internal_305ca61279e676a3c38eb5ce178c3afd09f4f4e72b2ede0d18cbf185e98e13f9->enter($__internal_305ca61279e676a3c38eb5ce178c3afd09f4f4e72b2ede0d18cbf185e98e13f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_305ca61279e676a3c38eb5ce178c3afd09f4f4e72b2ede0d18cbf185e98e13f9->leave($__internal_305ca61279e676a3c38eb5ce178c3afd09f4f4e72b2ede0d18cbf185e98e13f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6451a1ea6ef933963996f33c645bc5604527db719a8e5ff27be5ccae8e4aeca = $this->env->getExtension("native_profiler");
        $__internal_a6451a1ea6ef933963996f33c645bc5604527db719a8e5ff27be5ccae8e4aeca->enter($__internal_a6451a1ea6ef933963996f33c645bc5604527db719a8e5ff27be5ccae8e4aeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a6451a1ea6ef933963996f33c645bc5604527db719a8e5ff27be5ccae8e4aeca->leave($__internal_a6451a1ea6ef933963996f33c645bc5604527db719a8e5ff27be5ccae8e4aeca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed981b8c078c74d312241c4c9c866503481d6c0557d635018fcfbd5bc5c15c86 = $this->env->getExtension("native_profiler");
        $__internal_ed981b8c078c74d312241c4c9c866503481d6c0557d635018fcfbd5bc5c15c86->enter($__internal_ed981b8c078c74d312241c4c9c866503481d6c0557d635018fcfbd5bc5c15c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed981b8c078c74d312241c4c9c866503481d6c0557d635018fcfbd5bc5c15c86->leave($__internal_ed981b8c078c74d312241c4c9c866503481d6c0557d635018fcfbd5bc5c15c86_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_724ddd1abf9e35f28d3d45ae1775fbf863b1ebbe2ab6a5a53ce1598ad1e4846e = $this->env->getExtension("native_profiler");
        $__internal_724ddd1abf9e35f28d3d45ae1775fbf863b1ebbe2ab6a5a53ce1598ad1e4846e->enter($__internal_724ddd1abf9e35f28d3d45ae1775fbf863b1ebbe2ab6a5a53ce1598ad1e4846e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_724ddd1abf9e35f28d3d45ae1775fbf863b1ebbe2ab6a5a53ce1598ad1e4846e->leave($__internal_724ddd1abf9e35f28d3d45ae1775fbf863b1ebbe2ab6a5a53ce1598ad1e4846e_prof);

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
