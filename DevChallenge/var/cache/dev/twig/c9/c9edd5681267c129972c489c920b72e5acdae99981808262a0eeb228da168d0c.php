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
        $__internal_750c9fd370f823550d5a3cbc015a74f945f81fc76921473419496cb5e3cc781d = $this->env->getExtension("native_profiler");
        $__internal_750c9fd370f823550d5a3cbc015a74f945f81fc76921473419496cb5e3cc781d->enter($__internal_750c9fd370f823550d5a3cbc015a74f945f81fc76921473419496cb5e3cc781d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750c9fd370f823550d5a3cbc015a74f945f81fc76921473419496cb5e3cc781d->leave($__internal_750c9fd370f823550d5a3cbc015a74f945f81fc76921473419496cb5e3cc781d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_204695da040076cbd0cea6f2fd0880d70c664258ea81b0ca7f0223e144dbfa4a = $this->env->getExtension("native_profiler");
        $__internal_204695da040076cbd0cea6f2fd0880d70c664258ea81b0ca7f0223e144dbfa4a->enter($__internal_204695da040076cbd0cea6f2fd0880d70c664258ea81b0ca7f0223e144dbfa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_204695da040076cbd0cea6f2fd0880d70c664258ea81b0ca7f0223e144dbfa4a->leave($__internal_204695da040076cbd0cea6f2fd0880d70c664258ea81b0ca7f0223e144dbfa4a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_72a136b937408bea3e34a03a8bcf15a469b44023530e627f6ce7d75a681a6bd1 = $this->env->getExtension("native_profiler");
        $__internal_72a136b937408bea3e34a03a8bcf15a469b44023530e627f6ce7d75a681a6bd1->enter($__internal_72a136b937408bea3e34a03a8bcf15a469b44023530e627f6ce7d75a681a6bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_72a136b937408bea3e34a03a8bcf15a469b44023530e627f6ce7d75a681a6bd1->leave($__internal_72a136b937408bea3e34a03a8bcf15a469b44023530e627f6ce7d75a681a6bd1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8446960441f367f08eae22892303bb4ea4799378438fc37a07e8b400ec5151d = $this->env->getExtension("native_profiler");
        $__internal_d8446960441f367f08eae22892303bb4ea4799378438fc37a07e8b400ec5151d->enter($__internal_d8446960441f367f08eae22892303bb4ea4799378438fc37a07e8b400ec5151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d8446960441f367f08eae22892303bb4ea4799378438fc37a07e8b400ec5151d->leave($__internal_d8446960441f367f08eae22892303bb4ea4799378438fc37a07e8b400ec5151d_prof);

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
