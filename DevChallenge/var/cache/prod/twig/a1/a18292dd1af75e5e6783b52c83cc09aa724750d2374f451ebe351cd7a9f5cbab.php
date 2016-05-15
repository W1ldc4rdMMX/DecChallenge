<?php

/* :catalogue:home.html.twig */
class __TwigTemplate_2cf983f474dc767028198b08d201361fa8e88530677c5c966057bc0a9a6355de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":catalogue:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'top' => array($this, 'block_top'),
            'bottomLeft' => array($this, 'block_bottomLeft'),
            'bottomMid' => array($this, 'block_bottomMid'),
            'bottomRight' => array($this, 'block_bottomRight'),
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
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["someText"]) ? $context["someText"] : null), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"top_box\">
        ";
        // line 8
        $this->displayBlock('top', $context, $blocks);
        // line 33
        echo "    </div>

    <div class=\"bottom_box_left\">
        ";
        // line 36
        $this->displayBlock('bottomLeft', $context, $blocks);
        // line 46
        echo "    </div>

    <div class=\"bottom_box_mid\">
        ";
        // line 49
        $this->displayBlock('bottomMid', $context, $blocks);
        // line 59
        echo "    </div>

    <div class=\"bottom_box_right\">
        ";
        // line 62
        $this->displayBlock('bottomRight', $context, $blocks);
        // line 72
        echo "    </div>
";
    }

    // line 8
    public function block_top($context, array $blocks = array())
    {
        // line 9
        echo "            <div class=\"col-sm-12\">
                <div class=\"well\">
                <legend class=\"scheduler-border\">Top selling products:</legend>

                        <ul class=\"nav nav-pills nav-justified\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["stock"]) ? $context["stock"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 15
            echo "                            <li><a data-toggle=\"tab\" href=\"#";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                        </ul>
                        <div class=\"tab-content\">
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["stock"]) ? $context["stock"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 20
            echo "                                <div id=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"tab-pane fade in active\">
                                    <h3>";
            // line 21
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
            echo "</h3>
                                    <p>Some content.</p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </div>

                </div>
            </div>


        </div>
        ";
    }

    // line 36
    public function block_bottomLeft($context, array $blocks = array())
    {
        // line 37
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Current Stock Items:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
    }

    // line 49
    public function block_bottomMid($context, array $blocks = array())
    {
        // line 50
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Current Orders:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
    }

    // line 62
    public function block_bottomRight($context, array $blocks = array())
    {
        // line 63
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Latest Additions:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
    }

    public function getTemplateName()
    {
        return ":catalogue:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  166 => 62,  154 => 50,  151 => 49,  139 => 37,  136 => 36,  125 => 25,  115 => 21,  110 => 20,  106 => 19,  102 => 17,  91 => 15,  87 => 14,  80 => 9,  77 => 8,  72 => 72,  70 => 62,  65 => 59,  63 => 49,  58 => 46,  56 => 36,  51 => 33,  49 => 8,  46 => 7,  43 => 6,  36 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}*/
/*     {{ someText }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="top_box">*/
/*         {% block top %}*/
/*             <div class="col-sm-12">*/
/*                 <div class="well">*/
/*                 <legend class="scheduler-border">Top selling products:</legend>*/
/* */
/*                         <ul class="nav nav-pills nav-justified">*/
/*                         {%  for key in stock|keys %}*/
/*                             <li><a data-toggle="tab" href="#{{ key }}">{{ key }}</a></li>*/
/*                         {% endfor %}*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             {%  for key in stock|keys %}*/
/*                                 <div id="{{ key }}" class="tab-pane fade in active">*/
/*                                     <h3>{{ key|upper }}</h3>*/
/*                                     <p>Some content.</p>*/
/*                                 </div>*/
/*                             {%  endfor %}*/
/*                         </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="bottom_box_left">*/
/*         {% block bottomLeft %}*/
/*             <div class="col-sm-4">*/
/*                 <div class="well">*/
/*                     <legend class="scheduler-border">Current Stock Items:</legend>*/
/*                     <div class="row">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="bottom_box_mid">*/
/*         {% block bottomMid %}*/
/*             <div class="col-sm-4">*/
/*                 <div class="well">*/
/*                     <legend class="scheduler-border">Current Orders:</legend>*/
/*                     <div class="row">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="bottom_box_right">*/
/*         {% block bottomRight %}*/
/*             <div class="col-sm-4">*/
/*                 <div class="well">*/
/*                     <legend class="scheduler-border">Latest Additions:</legend>*/
/*                     <div class="row">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* {% endblock %}*/
