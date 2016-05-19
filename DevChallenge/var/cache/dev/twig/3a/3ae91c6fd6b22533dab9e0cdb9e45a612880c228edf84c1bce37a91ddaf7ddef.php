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
        $__internal_109e2b23f66fa84b047e902583947b507439a3c30d7ef406e5070e9f9c8d97d2 = $this->env->getExtension("native_profiler");
        $__internal_109e2b23f66fa84b047e902583947b507439a3c30d7ef406e5070e9f9c8d97d2->enter($__internal_109e2b23f66fa84b047e902583947b507439a3c30d7ef406e5070e9f9c8d97d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_109e2b23f66fa84b047e902583947b507439a3c30d7ef406e5070e9f9c8d97d2->leave($__internal_109e2b23f66fa84b047e902583947b507439a3c30d7ef406e5070e9f9c8d97d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a3e8e91b7c6ee29734a58a3352a42e1f0c52ffe331746eb4e212d1c6d1cc80d0 = $this->env->getExtension("native_profiler");
        $__internal_a3e8e91b7c6ee29734a58a3352a42e1f0c52ffe331746eb4e212d1c6d1cc80d0->enter($__internal_a3e8e91b7c6ee29734a58a3352a42e1f0c52ffe331746eb4e212d1c6d1cc80d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a3e8e91b7c6ee29734a58a3352a42e1f0c52ffe331746eb4e212d1c6d1cc80d0->leave($__internal_a3e8e91b7c6ee29734a58a3352a42e1f0c52ffe331746eb4e212d1c6d1cc80d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae74cd6f1d54543eb715fc30f623a06db8931838c982124d0f8021d8fcd82761 = $this->env->getExtension("native_profiler");
        $__internal_ae74cd6f1d54543eb715fc30f623a06db8931838c982124d0f8021d8fcd82761->enter($__internal_ae74cd6f1d54543eb715fc30f623a06db8931838c982124d0f8021d8fcd82761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ae74cd6f1d54543eb715fc30f623a06db8931838c982124d0f8021d8fcd82761->leave($__internal_ae74cd6f1d54543eb715fc30f623a06db8931838c982124d0f8021d8fcd82761_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_49a572371a72dcb89b8662009c0195b8fc493c22805ba8e25a32ee5f4f511d7d = $this->env->getExtension("native_profiler");
        $__internal_49a572371a72dcb89b8662009c0195b8fc493c22805ba8e25a32ee5f4f511d7d->enter($__internal_49a572371a72dcb89b8662009c0195b8fc493c22805ba8e25a32ee5f4f511d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_49a572371a72dcb89b8662009c0195b8fc493c22805ba8e25a32ee5f4f511d7d->leave($__internal_49a572371a72dcb89b8662009c0195b8fc493c22805ba8e25a32ee5f4f511d7d_prof);

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
