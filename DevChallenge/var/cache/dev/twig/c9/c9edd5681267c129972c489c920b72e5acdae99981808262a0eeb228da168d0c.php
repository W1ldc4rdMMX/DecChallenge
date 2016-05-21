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
        $__internal_52cd40b7d5abf8ad59502e8d42071de050ea34890bc9b641afbc9b5003f8e99f = $this->env->getExtension("native_profiler");
        $__internal_52cd40b7d5abf8ad59502e8d42071de050ea34890bc9b641afbc9b5003f8e99f->enter($__internal_52cd40b7d5abf8ad59502e8d42071de050ea34890bc9b641afbc9b5003f8e99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52cd40b7d5abf8ad59502e8d42071de050ea34890bc9b641afbc9b5003f8e99f->leave($__internal_52cd40b7d5abf8ad59502e8d42071de050ea34890bc9b641afbc9b5003f8e99f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ca7e79b39886b3ffbd6cf76377e591035e5ca4d1e765b25e24334752eb5bc18f = $this->env->getExtension("native_profiler");
        $__internal_ca7e79b39886b3ffbd6cf76377e591035e5ca4d1e765b25e24334752eb5bc18f->enter($__internal_ca7e79b39886b3ffbd6cf76377e591035e5ca4d1e765b25e24334752eb5bc18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ca7e79b39886b3ffbd6cf76377e591035e5ca4d1e765b25e24334752eb5bc18f->leave($__internal_ca7e79b39886b3ffbd6cf76377e591035e5ca4d1e765b25e24334752eb5bc18f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb505c394f3f58ba01acbb87578f7731cfc6265fa5f7659d1010dd118917d5fd = $this->env->getExtension("native_profiler");
        $__internal_cb505c394f3f58ba01acbb87578f7731cfc6265fa5f7659d1010dd118917d5fd->enter($__internal_cb505c394f3f58ba01acbb87578f7731cfc6265fa5f7659d1010dd118917d5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb505c394f3f58ba01acbb87578f7731cfc6265fa5f7659d1010dd118917d5fd->leave($__internal_cb505c394f3f58ba01acbb87578f7731cfc6265fa5f7659d1010dd118917d5fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9e5631a7f227a24a35c8b6b6d230e7106d251d05c4a55ff965389cd61fc4078 = $this->env->getExtension("native_profiler");
        $__internal_c9e5631a7f227a24a35c8b6b6d230e7106d251d05c4a55ff965389cd61fc4078->enter($__internal_c9e5631a7f227a24a35c8b6b6d230e7106d251d05c4a55ff965389cd61fc4078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c9e5631a7f227a24a35c8b6b6d230e7106d251d05c4a55ff965389cd61fc4078->leave($__internal_c9e5631a7f227a24a35c8b6b6d230e7106d251d05c4a55ff965389cd61fc4078_prof);

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
