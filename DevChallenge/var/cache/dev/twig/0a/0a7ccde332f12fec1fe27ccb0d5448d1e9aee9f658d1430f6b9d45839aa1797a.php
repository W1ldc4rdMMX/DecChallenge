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
        $__internal_8adf5ab34442f4bad70c0ffa51a00e28401ba7c0f14e5bd5cd8c4c132acd0b99 = $this->env->getExtension("native_profiler");
        $__internal_8adf5ab34442f4bad70c0ffa51a00e28401ba7c0f14e5bd5cd8c4c132acd0b99->enter($__internal_8adf5ab34442f4bad70c0ffa51a00e28401ba7c0f14e5bd5cd8c4c132acd0b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8adf5ab34442f4bad70c0ffa51a00e28401ba7c0f14e5bd5cd8c4c132acd0b99->leave($__internal_8adf5ab34442f4bad70c0ffa51a00e28401ba7c0f14e5bd5cd8c4c132acd0b99_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_be84f5f12ec61fb3807429058c74f4b3d8247f3ac8f8c3b19d512649f6b7c9dd = $this->env->getExtension("native_profiler");
        $__internal_be84f5f12ec61fb3807429058c74f4b3d8247f3ac8f8c3b19d512649f6b7c9dd->enter($__internal_be84f5f12ec61fb3807429058c74f4b3d8247f3ac8f8c3b19d512649f6b7c9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    WebApp Name here
";
        
        $__internal_be84f5f12ec61fb3807429058c74f4b3d8247f3ac8f8c3b19d512649f6b7c9dd->leave($__internal_be84f5f12ec61fb3807429058c74f4b3d8247f3ac8f8c3b19d512649f6b7c9dd_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2b95d023311c5e6b8d1dc0e925efaf0d0721f9704c5b8f5babc86a62a049c95 = $this->env->getExtension("native_profiler");
        $__internal_e2b95d023311c5e6b8d1dc0e925efaf0d0721f9704c5b8f5babc86a62a049c95->enter($__internal_e2b95d023311c5e6b8d1dc0e925efaf0d0721f9704c5b8f5babc86a62a049c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
    <h1>About App</h1>
    <p>Details and description of App here</p>
        ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 11
            echo "            <h2>Logged in as ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</h2>
        ";
        }
        // line 13
        echo "    </div>

";
        
        $__internal_e2b95d023311c5e6b8d1dc0e925efaf0d0721f9704c5b8f5babc86a62a049c95->leave($__internal_e2b95d023311c5e6b8d1dc0e925efaf0d0721f9704c5b8f5babc86a62a049c95_prof);

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
        return array (  68 => 13,  62 => 11,  60 => 10,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/*         {% if is_granted("ROLE_USER") %}*/
/*             <h2>Logged in as {{ app.user.username }}</h2>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
