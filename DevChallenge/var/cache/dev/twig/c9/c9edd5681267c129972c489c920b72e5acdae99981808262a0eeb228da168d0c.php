<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_29ed96e697fcfe845f98df1a03d84405a061a66c0593de07cb11e0c62de7f741 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_767be3facae34e73fd3bee2880d92d9cd3b5596698448f24ae2506f7e4e7147a = $this->env->getExtension("native_profiler");
        $__internal_767be3facae34e73fd3bee2880d92d9cd3b5596698448f24ae2506f7e4e7147a->enter($__internal_767be3facae34e73fd3bee2880d92d9cd3b5596698448f24ae2506f7e4e7147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_767be3facae34e73fd3bee2880d92d9cd3b5596698448f24ae2506f7e4e7147a->leave($__internal_767be3facae34e73fd3bee2880d92d9cd3b5596698448f24ae2506f7e4e7147a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee9a8787acc6a519b83e48b2117a3d8fe540fa8b708521399dacc92be2730e19 = $this->env->getExtension("native_profiler");
        $__internal_ee9a8787acc6a519b83e48b2117a3d8fe540fa8b708521399dacc92be2730e19->enter($__internal_ee9a8787acc6a519b83e48b2117a3d8fe540fa8b708521399dacc92be2730e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee9a8787acc6a519b83e48b2117a3d8fe540fa8b708521399dacc92be2730e19->leave($__internal_ee9a8787acc6a519b83e48b2117a3d8fe540fa8b708521399dacc92be2730e19_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d035025d2874f0dd7f6a1e970fd4341f3a6a3513a34363f26bb55a48314c62de = $this->env->getExtension("native_profiler");
        $__internal_d035025d2874f0dd7f6a1e970fd4341f3a6a3513a34363f26bb55a48314c62de->enter($__internal_d035025d2874f0dd7f6a1e970fd4341f3a6a3513a34363f26bb55a48314c62de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d035025d2874f0dd7f6a1e970fd4341f3a6a3513a34363f26bb55a48314c62de->leave($__internal_d035025d2874f0dd7f6a1e970fd4341f3a6a3513a34363f26bb55a48314c62de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_937dca7a301f4e5c0e2ef358eb67917c7d68431d045dfa46e7c38fd7f52dae73 = $this->env->getExtension("native_profiler");
        $__internal_937dca7a301f4e5c0e2ef358eb67917c7d68431d045dfa46e7c38fd7f52dae73->enter($__internal_937dca7a301f4e5c0e2ef358eb67917c7d68431d045dfa46e7c38fd7f52dae73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_937dca7a301f4e5c0e2ef358eb67917c7d68431d045dfa46e7c38fd7f52dae73->leave($__internal_937dca7a301f4e5c0e2ef358eb67917c7d68431d045dfa46e7c38fd7f52dae73_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
