<?php

/* catalogue/home.html.twig */
class __TwigTemplate_47bf4077addb08aa984b9270b7b4bf1018d38696f1fb087e6e4e6f98d1a3eb69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/home.html.twig", 1);
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
        $__internal_b41cc2cddb988bf3ebe47ae47c7a2a337a163b8a64fdc56adc5215b1c9888ab0 = $this->env->getExtension("native_profiler");
        $__internal_b41cc2cddb988bf3ebe47ae47c7a2a337a163b8a64fdc56adc5215b1c9888ab0->enter($__internal_b41cc2cddb988bf3ebe47ae47c7a2a337a163b8a64fdc56adc5215b1c9888ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b41cc2cddb988bf3ebe47ae47c7a2a337a163b8a64fdc56adc5215b1c9888ab0->leave($__internal_b41cc2cddb988bf3ebe47ae47c7a2a337a163b8a64fdc56adc5215b1c9888ab0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d00572555938f185b53589ef59771a398726f0a77dc162b16a70b2950583846 = $this->env->getExtension("native_profiler");
        $__internal_5d00572555938f185b53589ef59771a398726f0a77dc162b16a70b2950583846->enter($__internal_5d00572555938f185b53589ef59771a398726f0a77dc162b16a70b2950583846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["someText"]) ? $context["someText"] : $this->getContext($context, "someText")), "html", null, true);
        echo "
";
        
        $__internal_5d00572555938f185b53589ef59771a398726f0a77dc162b16a70b2950583846->leave($__internal_5d00572555938f185b53589ef59771a398726f0a77dc162b16a70b2950583846_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa93675d3b4b4f4c90d270156921f96da8894317593fc11fd092e05cdc8aece3 = $this->env->getExtension("native_profiler");
        $__internal_fa93675d3b4b4f4c90d270156921f96da8894317593fc11fd092e05cdc8aece3->enter($__internal_fa93675d3b4b4f4c90d270156921f96da8894317593fc11fd092e05cdc8aece3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
    <div class=\"top_box\">
        ";
        // line 9
        $this->displayBlock('top', $context, $blocks);
        // line 42
        echo "

    <div class=\"bottom_box_left\">
        ";
        // line 45
        $this->displayBlock('bottomLeft', $context, $blocks);
        // line 55
        echo "    </div>

    <div class=\"bottom_box_mid\">
        ";
        // line 58
        $this->displayBlock('bottomMid', $context, $blocks);
        // line 68
        echo "    </div>

    <div class=\"bottom_box_right\">
        ";
        // line 71
        $this->displayBlock('bottomRight', $context, $blocks);
        // line 81
        echo "    </div>
    </div>
";
        
        $__internal_fa93675d3b4b4f4c90d270156921f96da8894317593fc11fd092e05cdc8aece3->leave($__internal_fa93675d3b4b4f4c90d270156921f96da8894317593fc11fd092e05cdc8aece3_prof);

    }

    // line 9
    public function block_top($context, array $blocks = array())
    {
        $__internal_3ce96e044fd67742b7efa789dde78e594627ff0099fd1e296c341110e898a572 = $this->env->getExtension("native_profiler");
        $__internal_3ce96e044fd67742b7efa789dde78e594627ff0099fd1e296c341110e898a572->enter($__internal_3ce96e044fd67742b7efa789dde78e594627ff0099fd1e296c341110e898a572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 10
        echo "            <div class=\"col-sm-12\">
                <div class=\"well\">
                <legend class=\"scheduler-border\">Top selling products:</legend>
                        <ul class=\"nav nav-pills nav-justified\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 15
            echo "                            ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 16
                echo "                                <li class=\"active\"><a data-toggle=\"tab\" href=\"#";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a></li>
                            ";
            } else {
                // line 18
                echo "                                <li><a data-toggle=\"tab\" href=\"#";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a></li>
                            ";
            }
            // line 20
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                    </ul>

                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 24
            echo "                            ";
            if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                // line 25
                echo "                                <div id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"tab-pane fade in active\" >
                                    <h3>";
                // line 26
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
                echo "</h3>
                                    <p>Some content.</p>
                                </div>
                            ";
            } else {
                // line 30
                echo "                                <div id=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"tab-pane fade\" >
                                    <h3>";
                // line 31
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
                echo "</h3>
                                    <p>Some content.</p>
                                </div>
                            ";
            }
            // line 35
            echo "
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
                </div>
            </div>
        </div>
        ";
        
        $__internal_3ce96e044fd67742b7efa789dde78e594627ff0099fd1e296c341110e898a572->leave($__internal_3ce96e044fd67742b7efa789dde78e594627ff0099fd1e296c341110e898a572_prof);

    }

    // line 45
    public function block_bottomLeft($context, array $blocks = array())
    {
        $__internal_226ed2e42b5154a21ea0b7e7ca54f39457852ed9874d7262bafdc0ab07eaa9db = $this->env->getExtension("native_profiler");
        $__internal_226ed2e42b5154a21ea0b7e7ca54f39457852ed9874d7262bafdc0ab07eaa9db->enter($__internal_226ed2e42b5154a21ea0b7e7ca54f39457852ed9874d7262bafdc0ab07eaa9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomLeft"));

        // line 46
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Current Stock Items:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
        
        $__internal_226ed2e42b5154a21ea0b7e7ca54f39457852ed9874d7262bafdc0ab07eaa9db->leave($__internal_226ed2e42b5154a21ea0b7e7ca54f39457852ed9874d7262bafdc0ab07eaa9db_prof);

    }

    // line 58
    public function block_bottomMid($context, array $blocks = array())
    {
        $__internal_1f6850a2c1fc8dfd6d7d45227399c003c3533c9216ab8afda19786caf7e76ca8 = $this->env->getExtension("native_profiler");
        $__internal_1f6850a2c1fc8dfd6d7d45227399c003c3533c9216ab8afda19786caf7e76ca8->enter($__internal_1f6850a2c1fc8dfd6d7d45227399c003c3533c9216ab8afda19786caf7e76ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomMid"));

        // line 59
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Current Orders:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
        
        $__internal_1f6850a2c1fc8dfd6d7d45227399c003c3533c9216ab8afda19786caf7e76ca8->leave($__internal_1f6850a2c1fc8dfd6d7d45227399c003c3533c9216ab8afda19786caf7e76ca8_prof);

    }

    // line 71
    public function block_bottomRight($context, array $blocks = array())
    {
        $__internal_f57806e442978f7a63bdc1d9db64ebb8abcd0828a332b21a9692be766d81a3e1 = $this->env->getExtension("native_profiler");
        $__internal_f57806e442978f7a63bdc1d9db64ebb8abcd0828a332b21a9692be766d81a3e1->enter($__internal_f57806e442978f7a63bdc1d9db64ebb8abcd0828a332b21a9692be766d81a3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomRight"));

        // line 72
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Latest Additions:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
        
        $__internal_f57806e442978f7a63bdc1d9db64ebb8abcd0828a332b21a9692be766d81a3e1->leave($__internal_f57806e442978f7a63bdc1d9db64ebb8abcd0828a332b21a9692be766d81a3e1_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 72,  275 => 71,  260 => 59,  254 => 58,  239 => 46,  233 => 45,  222 => 37,  207 => 35,  200 => 31,  195 => 30,  188 => 26,  183 => 25,  180 => 24,  163 => 23,  159 => 21,  145 => 20,  137 => 18,  129 => 16,  126 => 15,  109 => 14,  103 => 10,  97 => 9,  88 => 81,  86 => 71,  81 => 68,  79 => 58,  74 => 55,  72 => 45,  67 => 42,  65 => 9,  61 => 7,  55 => 6,  45 => 3,  39 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}*/
/*     {{ someText }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*     <div class="top_box">*/
/*         {% block top %}*/
/*             <div class="col-sm-12">*/
/*                 <div class="well">*/
/*                 <legend class="scheduler-border">Top selling products:</legend>*/
/*                         <ul class="nav nav-pills nav-justified">*/
/*                         {%  for key in stock|keys %}*/
/*                             {% if loop.index == 1 %}*/
/*                                 <li class="active"><a data-toggle="tab" href="#{{ key }}">{{ key }}</a></li>*/
/*                             {% else %}*/
/*                                 <li><a data-toggle="tab" href="#{{ key }}">{{ key }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/* */
/*                         {%  for key in stock|keys %}*/
/*                             {% if loop.index == 1 %}*/
/*                                 <div id="{{ key }}" class="tab-pane fade in active" >*/
/*                                     <h3>{{ key|upper }}</h3>*/
/*                                     <p>Some content.</p>*/
/*                                 </div>*/
/*                             {% else %}*/
/*                                 <div id="{{ key }}" class="tab-pane fade" >*/
/*                                     <h3>{{ key|upper }}</h3>*/
/*                                     <p>Some content.</p>*/
/*                                 </div>*/
/*                             {% endif %}*/
/* */
/*                         {%  endfor %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
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
/*     </div>*/
/* {% endblock %}*/
