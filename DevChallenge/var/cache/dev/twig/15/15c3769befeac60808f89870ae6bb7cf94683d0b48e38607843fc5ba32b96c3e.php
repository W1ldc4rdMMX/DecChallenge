<?php

/* base.html.twig */
class __TwigTemplate_8b595b1c02b454ecc71f1f938fd4e3aac6fe19c00316c9c8177aa32e4f6ff65d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdad309b290bb9154374404c124ca950aea6126f568774440ba7d59f32cb402b = $this->env->getExtension("native_profiler");
        $__internal_bdad309b290bb9154374404c124ca950aea6126f568774440ba7d59f32cb402b->enter($__internal_bdad309b290bb9154374404c124ca950aea6126f568774440ba7d59f32cb402b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bdad309b290bb9154374404c124ca950aea6126f568774440ba7d59f32cb402b->leave($__internal_bdad309b290bb9154374404c124ca950aea6126f568774440ba7d59f32cb402b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ac962f26ce1fd707155609413a699cb8dad5a78a5c718082eaa5f26fb78a83c = $this->env->getExtension("native_profiler");
        $__internal_0ac962f26ce1fd707155609413a699cb8dad5a78a5c718082eaa5f26fb78a83c->enter($__internal_0ac962f26ce1fd707155609413a699cb8dad5a78a5c718082eaa5f26fb78a83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0ac962f26ce1fd707155609413a699cb8dad5a78a5c718082eaa5f26fb78a83c->leave($__internal_0ac962f26ce1fd707155609413a699cb8dad5a78a5c718082eaa5f26fb78a83c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18ee62108d3150c46beb0d22b9b286075de865d79f1c881798e640f760ffb147 = $this->env->getExtension("native_profiler");
        $__internal_18ee62108d3150c46beb0d22b9b286075de865d79f1c881798e640f760ffb147->enter($__internal_18ee62108d3150c46beb0d22b9b286075de865d79f1c881798e640f760ffb147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18ee62108d3150c46beb0d22b9b286075de865d79f1c881798e640f760ffb147->leave($__internal_18ee62108d3150c46beb0d22b9b286075de865d79f1c881798e640f760ffb147_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_38fd2af3412a086621f8baf5971753b7d767d8f123a6ea0978017c302831db56 = $this->env->getExtension("native_profiler");
        $__internal_38fd2af3412a086621f8baf5971753b7d767d8f123a6ea0978017c302831db56->enter($__internal_38fd2af3412a086621f8baf5971753b7d767d8f123a6ea0978017c302831db56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38fd2af3412a086621f8baf5971753b7d767d8f123a6ea0978017c302831db56->leave($__internal_38fd2af3412a086621f8baf5971753b7d767d8f123a6ea0978017c302831db56_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5735ba16b6ac10242c5cfaca04af4f051a09df07154faa2e0d09c4e1d246e116 = $this->env->getExtension("native_profiler");
        $__internal_5735ba16b6ac10242c5cfaca04af4f051a09df07154faa2e0d09c4e1d246e116->enter($__internal_5735ba16b6ac10242c5cfaca04af4f051a09df07154faa2e0d09c4e1d246e116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5735ba16b6ac10242c5cfaca04af4f051a09df07154faa2e0d09c4e1d246e116->leave($__internal_5735ba16b6ac10242c5cfaca04af4f051a09df07154faa2e0d09c4e1d246e116_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
