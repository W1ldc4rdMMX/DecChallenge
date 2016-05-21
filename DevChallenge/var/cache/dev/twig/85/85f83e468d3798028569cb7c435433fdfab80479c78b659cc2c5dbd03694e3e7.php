<?php

/* :catalogue:view.html.twig */
class __TwigTemplate_10ed6eb191706ee84448d27e49baf94538ac81bea1a1d713b978c908a3337b54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":catalogue:view.html.twig", 1);
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
        $__internal_3c0932c3a1b3224cf11b7ceadd1487acb477f342d034e5e23c9d7736aa3f8f52 = $this->env->getExtension("native_profiler");
        $__internal_3c0932c3a1b3224cf11b7ceadd1487acb477f342d034e5e23c9d7736aa3f8f52->enter($__internal_3c0932c3a1b3224cf11b7ceadd1487acb477f342d034e5e23c9d7736aa3f8f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c0932c3a1b3224cf11b7ceadd1487acb477f342d034e5e23c9d7736aa3f8f52->leave($__internal_3c0932c3a1b3224cf11b7ceadd1487acb477f342d034e5e23c9d7736aa3f8f52_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea1e127d6a02f14044b4d5eb7ae2ce79523ce47b671b0b815b3d4a427ad399e6 = $this->env->getExtension("native_profiler");
        $__internal_ea1e127d6a02f14044b4d5eb7ae2ce79523ce47b671b0b815b3d4a427ad399e6->enter($__internal_ea1e127d6a02f14044b4d5eb7ae2ce79523ce47b671b0b815b3d4a427ad399e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Current Stock Items
";
        
        $__internal_ea1e127d6a02f14044b4d5eb7ae2ce79523ce47b671b0b815b3d4a427ad399e6->leave($__internal_ea1e127d6a02f14044b4d5eb7ae2ce79523ce47b671b0b815b3d4a427ad399e6_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a5123cd62d18f1a4f33aaf26a08d52ad4e1e866b99aaf3f4811d542b5686378 = $this->env->getExtension("native_profiler");
        $__internal_9a5123cd62d18f1a4f33aaf26a08d52ad4e1e866b99aaf3f4811d542b5686378->enter($__internal_9a5123cd62d18f1a4f33aaf26a08d52ad4e1e866b99aaf3f4811d542b5686378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
        <h1>Current Stock</h1>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stockTypes"]) ? $context["stockTypes"] : $this->getContext($context, "stockTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["types"]) {
            // line 10
            echo "        <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["types"], "stockTypeName", array()), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-collapse-down\"></span> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["types"], "stockTypeName", array()), "html", null, true);
            echo " <span class=\"badge\">10</span>
        </button>

        <div id=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["types"], "stockTypeName", array()), "html", null, true);
            echo "\" class=\"collapse\">
            <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th>Click to Edit</th>
                        <th>Product Name</th>
                        <th>Base Features</th>
                        <th>Device Specification</th>
                        <th>Package Contents</th>
                        <th>System Requirements</th>
                        <th>Serial no.</th>
                    </tr>
                </thead>
                <tbody>
                    <!--tr>
                        <td><button type=\"button\" class=\"btn btn-primary btn-sm\"
                        data-toggle=\"modal\" data-target=\"#myModal\">
                        Edit data</button></td>
                    </tr-->

                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["types"], "id", array()), "html", null, true);
            echo "
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stockItems"]) ? $context["stockItems"] : $this->getContext($context, "stockItems")));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 37
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($context["items"], "stockTypes", array()), "id", array()) == $this->getAttribute($context["types"], "id", array()))) {
                    // line 38
                    echo "                        <tr>
                            <td>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\"
                                        data-toggle=\"modal\" data-target=\"#myModal\">Edit data
                                </button>
                            </td>
                            <td>";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemName", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemBase", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemSpec", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemCont", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemReq", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemSerial", array()), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                // line 52
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </tbody>
            </table>
            </div>
        </div>
        <br><hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['types'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9a5123cd62d18f1a4f33aaf26a08d52ad4e1e866b99aaf3f4811d542b5686378->leave($__internal_9a5123cd62d18f1a4f33aaf26a08d52ad4e1e866b99aaf3f4811d542b5686378_prof);

    }

    public function getTemplateName()
    {
        return ":catalogue:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  143 => 52,  137 => 49,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  109 => 38,  106 => 37,  102 => 36,  98 => 35,  74 => 14,  68 => 11,  63 => 10,  59 => 9,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}*/
/*     Current Stock Items*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <h1>Current Stock</h1>*/
/*         {% for types in stockTypes%}*/
/*         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#{{ types.stockTypeName }}">*/
/*             <span class="glyphicon glyphicon-collapse-down"></span> {{ types.stockTypeName }} <span class="badge">10</span>*/
/*         </button>*/
/* */
/*         <div id="{{ types.stockTypeName }}" class="collapse">*/
/*             <div class="table-responsive">*/
/*             <table class="table table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Click to Edit</th>*/
/*                         <th>Product Name</th>*/
/*                         <th>Base Features</th>*/
/*                         <th>Device Specification</th>*/
/*                         <th>Package Contents</th>*/
/*                         <th>System Requirements</th>*/
/*                         <th>Serial no.</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <!--tr>*/
/*                         <td><button type="button" class="btn btn-primary btn-sm"*/
/*                         data-toggle="modal" data-target="#myModal">*/
/*                         Edit data</button></td>*/
/*                     </tr-->*/
/* */
/*                     {{ types.id }}*/
/*                     {% for items in stockItems %}*/
/*                         {% if items.stockTypes.id == types.id %}*/
/*                         <tr>*/
/*                             <td>*/
/*                                 <button type="button" class="btn btn-primary btn-sm"*/
/*                                         data-toggle="modal" data-target="#myModal">Edit data*/
/*                                 </button>*/
/*                             </td>*/
/*                             <td>{{ items.stockItemName }}</td>*/
/*                             <td>{{ items.stockItemBase }}</td>*/
/*                             <td>{{ items.stockItemSpec }}</td>*/
/*                             <td>{{ items.stockItemCont }}</td>*/
/*                             <td>{{ items.stockItemReq }}</td>*/
/*                             <td>{{ items.stockItemSerial }}</td>*/
/*                         </tr>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             </div>*/
/*         </div>*/
/*         <br><hr>*/
/*         {% endfor %}*/
/* {% endblock %}*/
