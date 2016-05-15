<?php

/* catalogue/view.html.twig */
class __TwigTemplate_19551df2a17cfaed0d652c9b7e1ce8d573d8a1a08878e4cc3cb48dbff5fcf930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/view.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Current Stock Items
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Current Stock</h1>
    <p>Current Stock Items here</p>
";
    }

    public function getTemplateName()
    {
        return "catalogue/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}*/
/*     Current Stock Items*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>Current Stock</h1>*/
/*     <p>Current Stock Items here</p>*/
/* {% endblock %}*/
