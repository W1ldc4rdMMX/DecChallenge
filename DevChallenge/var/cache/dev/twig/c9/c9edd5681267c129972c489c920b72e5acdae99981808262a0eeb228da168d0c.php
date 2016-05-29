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
        $__internal_4df6dde7739ad03bd864fbe5431cdaa1a2ff4eb2e5bf962459defaab44b47b27 = $this->env->getExtension("native_profiler");
        $__internal_4df6dde7739ad03bd864fbe5431cdaa1a2ff4eb2e5bf962459defaab44b47b27->enter($__internal_4df6dde7739ad03bd864fbe5431cdaa1a2ff4eb2e5bf962459defaab44b47b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4df6dde7739ad03bd864fbe5431cdaa1a2ff4eb2e5bf962459defaab44b47b27->leave($__internal_4df6dde7739ad03bd864fbe5431cdaa1a2ff4eb2e5bf962459defaab44b47b27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_218ff58b06607a2db7640534b0a74882dd1258df3ca598e0f791a5a665f09419 = $this->env->getExtension("native_profiler");
        $__internal_218ff58b06607a2db7640534b0a74882dd1258df3ca598e0f791a5a665f09419->enter($__internal_218ff58b06607a2db7640534b0a74882dd1258df3ca598e0f791a5a665f09419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_218ff58b06607a2db7640534b0a74882dd1258df3ca598e0f791a5a665f09419->leave($__internal_218ff58b06607a2db7640534b0a74882dd1258df3ca598e0f791a5a665f09419_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6e5024a7889916fa0e7f5765c9a3488f0b6db7d5551f3bffabe643abc2b6801 = $this->env->getExtension("native_profiler");
        $__internal_a6e5024a7889916fa0e7f5765c9a3488f0b6db7d5551f3bffabe643abc2b6801->enter($__internal_a6e5024a7889916fa0e7f5765c9a3488f0b6db7d5551f3bffabe643abc2b6801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a6e5024a7889916fa0e7f5765c9a3488f0b6db7d5551f3bffabe643abc2b6801->leave($__internal_a6e5024a7889916fa0e7f5765c9a3488f0b6db7d5551f3bffabe643abc2b6801_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_440b385518cba3407846256c66a86a8e3a187766fce4e59e3377d37aa83178c5 = $this->env->getExtension("native_profiler");
        $__internal_440b385518cba3407846256c66a86a8e3a187766fce4e59e3377d37aa83178c5->enter($__internal_440b385518cba3407846256c66a86a8e3a187766fce4e59e3377d37aa83178c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_440b385518cba3407846256c66a86a8e3a187766fce4e59e3377d37aa83178c5->leave($__internal_440b385518cba3407846256c66a86a8e3a187766fce4e59e3377d37aa83178c5_prof);

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
