<?php

/* catalogue/home.html.twig */
class __TwigTemplate_d420969aa4fda347df70778144bccf894cb771e2875529a244bd7281fa89e7ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top' => array($this, 'block_top'),
            'bottomLeft' => array($this, 'block_bottomLeft'),
            'bottomMid' => array($this, 'block_bottomMid'),
            'bottomRight' => array($this, 'block_bottomRight'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65db92e889933b4ddcdb40f7de3e93f44f6d3726c181c97110c650eab44b7918 = $this->env->getExtension("native_profiler");
        $__internal_65db92e889933b4ddcdb40f7de3e93f44f6d3726c181c97110c650eab44b7918->enter($__internal_65db92e889933b4ddcdb40f7de3e93f44f6d3726c181c97110c650eab44b7918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/home.html.twig"));

        // line 1
        $this->loadTemplate("header.html", "catalogue/home.html.twig", 1)->display($context);
        // line 2
        echo "<head>
<title>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["someText"]) ? $context["someText"] : $this->getContext($context, "someText")), "html", null, true);
        echo "</title>
</head>
<body>
<!--h1>Text Here</h1-->

    <div class=\"top_box\">
        ";
        // line 9
        $this->displayBlock('top', $context, $blocks);
        // line 34
        echo "    </div>

    <div class=\"bottom_box_left\">
        ";
        // line 37
        $this->displayBlock('bottomLeft', $context, $blocks);
        // line 47
        echo "    </div>

    <div class=\"bottom_box_mid\">
        ";
        // line 50
        $this->displayBlock('bottomMid', $context, $blocks);
        // line 60
        echo "    </div>

    <div class=\"bottom_box_right\">
        ";
        // line 63
        $this->displayBlock('bottomRight', $context, $blocks);
        // line 73
        echo "    </div>

</body>";
        
        $__internal_65db92e889933b4ddcdb40f7de3e93f44f6d3726c181c97110c650eab44b7918->leave($__internal_65db92e889933b4ddcdb40f7de3e93f44f6d3726c181c97110c650eab44b7918_prof);

    }

    // line 9
    public function block_top($context, array $blocks = array())
    {
        $__internal_c487a67071c30533d5d7c5b57ded41e4ce7846f8caa122874d67a3f16ed7b9ed = $this->env->getExtension("native_profiler");
        $__internal_c487a67071c30533d5d7c5b57ded41e4ce7846f8caa122874d67a3f16ed7b9ed->enter($__internal_c487a67071c30533d5d7c5b57ded41e4ce7846f8caa122874d67a3f16ed7b9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 10
        echo "            <div class=\"col-sm-12\">
                <div class=\"well\">
                <legend class=\"scheduler-border\">Top selling products:</legend>

                        <ul class=\"nav nav-pills nav-justified\">
                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock"))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 16
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
        // line 18
        echo "                        </ul>
                        <div class=\"tab-content\">
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock"))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 21
            echo "                                <div id=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"tab-pane fade in active\">
                                    <h3>";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
            echo "</h3>
                                    <p>Some content.</p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                        </div>

                </div>
            </div>


        </div>
        ";
        
        $__internal_c487a67071c30533d5d7c5b57ded41e4ce7846f8caa122874d67a3f16ed7b9ed->leave($__internal_c487a67071c30533d5d7c5b57ded41e4ce7846f8caa122874d67a3f16ed7b9ed_prof);

    }

    // line 37
    public function block_bottomLeft($context, array $blocks = array())
    {
        $__internal_7e93fb419276605173dbbcc8512dd92caba6c41124ed77ffe122cdc2c3867b03 = $this->env->getExtension("native_profiler");
        $__internal_7e93fb419276605173dbbcc8512dd92caba6c41124ed77ffe122cdc2c3867b03->enter($__internal_7e93fb419276605173dbbcc8512dd92caba6c41124ed77ffe122cdc2c3867b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomLeft"));

        // line 38
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Current Stock Items:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
        
        $__internal_7e93fb419276605173dbbcc8512dd92caba6c41124ed77ffe122cdc2c3867b03->leave($__internal_7e93fb419276605173dbbcc8512dd92caba6c41124ed77ffe122cdc2c3867b03_prof);

    }

    // line 50
    public function block_bottomMid($context, array $blocks = array())
    {
        $__internal_2c6ffc6eee4e67950ce84e6588d0d83828d783ab00b2436821cd2fbf5a7f9d98 = $this->env->getExtension("native_profiler");
        $__internal_2c6ffc6eee4e67950ce84e6588d0d83828d783ab00b2436821cd2fbf5a7f9d98->enter($__internal_2c6ffc6eee4e67950ce84e6588d0d83828d783ab00b2436821cd2fbf5a7f9d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomMid"));

        // line 51
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Current Orders:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
        
        $__internal_2c6ffc6eee4e67950ce84e6588d0d83828d783ab00b2436821cd2fbf5a7f9d98->leave($__internal_2c6ffc6eee4e67950ce84e6588d0d83828d783ab00b2436821cd2fbf5a7f9d98_prof);

    }

    // line 63
    public function block_bottomRight($context, array $blocks = array())
    {
        $__internal_17e147ab51048c3926abe18d74b5433838004b77d691328b665fa1951a568e99 = $this->env->getExtension("native_profiler");
        $__internal_17e147ab51048c3926abe18d74b5433838004b77d691328b665fa1951a568e99->enter($__internal_17e147ab51048c3926abe18d74b5433838004b77d691328b665fa1951a568e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottomRight"));

        // line 64
        echo "            <div class=\"col-sm-4\">
                <div class=\"well\">
                    <legend class=\"scheduler-border\">Latest Additions:</legend>
                    <div class=\"row\">

                    </div>
                </div>
            </div>
        ";
        
        $__internal_17e147ab51048c3926abe18d74b5433838004b77d691328b665fa1951a568e99->leave($__internal_17e147ab51048c3926abe18d74b5433838004b77d691328b665fa1951a568e99_prof);

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
        return array (  185 => 64,  179 => 63,  164 => 51,  158 => 50,  143 => 38,  137 => 37,  123 => 26,  113 => 22,  108 => 21,  104 => 20,  100 => 18,  89 => 16,  85 => 15,  78 => 10,  72 => 9,  63 => 73,  61 => 63,  56 => 60,  54 => 50,  49 => 47,  47 => 37,  42 => 34,  40 => 9,  31 => 3,  28 => 2,  26 => 1,);
    }
}
/* {% include 'header.html' %}*/
/* <head>*/
/* <title>{{ someText }}</title>*/
/* </head>*/
/* <body>*/
/* <!--h1>Text Here</h1-->*/
/* */
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
/* */
/* </body>*/
