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
        $__internal_e4c54d5e186b76c7cb8bd5c8be556586baf0e0a8886129cc89e58606e43cc11a = $this->env->getExtension("native_profiler");
        $__internal_e4c54d5e186b76c7cb8bd5c8be556586baf0e0a8886129cc89e58606e43cc11a->enter($__internal_e4c54d5e186b76c7cb8bd5c8be556586baf0e0a8886129cc89e58606e43cc11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":catalogue:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c54d5e186b76c7cb8bd5c8be556586baf0e0a8886129cc89e58606e43cc11a->leave($__internal_e4c54d5e186b76c7cb8bd5c8be556586baf0e0a8886129cc89e58606e43cc11a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bdc44400a895cc6e80492f4b8b17c05df84cab8a1a81fbfee721dd831376490 = $this->env->getExtension("native_profiler");
        $__internal_5bdc44400a895cc6e80492f4b8b17c05df84cab8a1a81fbfee721dd831376490->enter($__internal_5bdc44400a895cc6e80492f4b8b17c05df84cab8a1a81fbfee721dd831376490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Current Stock Items
";
        
        $__internal_5bdc44400a895cc6e80492f4b8b17c05df84cab8a1a81fbfee721dd831376490->leave($__internal_5bdc44400a895cc6e80492f4b8b17c05df84cab8a1a81fbfee721dd831376490_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1215a7c616c6c10637d7791289ade9c7056c8d11c602ea80e913ada3c4bc8bf = $this->env->getExtension("native_profiler");
        $__internal_b1215a7c616c6c10637d7791289ade9c7056c8d11c602ea80e913ada3c4bc8bf->enter($__internal_b1215a7c616c6c10637d7791289ade9c7056c8d11c602ea80e913ada3c4bc8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container-fluid\">
        <h1>Current Stock</h1>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stockTypes"]) ? $context["stockTypes"] : $this->getContext($context, "stockTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["types"]) {
            // line 10
            echo "            ";
            $context["itemCount"] = 0;
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stockItems"]) ? $context["stockItems"] : $this->getContext($context, "stockItems")));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 12
                echo "                ";
                if (($this->getAttribute($this->getAttribute($context["items"], "stockTypes", array()), "id", array()) == $this->getAttribute($context["types"], "id", array()))) {
                    // line 13
                    echo "                    ";
                    $context["itemCount"] = ((isset($context["itemCount"]) ? $context["itemCount"] : $this->getContext($context, "itemCount")) + 1);
                    // line 14
                    echo "                ";
                }
                // line 15
                echo "             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        <button type=\"button\" class=\"btn btn-info\" data-toggle=\"collapse\" data-target=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute($context["types"], "stockTypeName", array()), "html", null, true);
            echo "\">
            <span class=\"glyphicon glyphicon-collapse-down\"></span> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["types"], "stockTypeName", array()), "html", null, true);
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, (isset($context["itemCount"]) ? $context["itemCount"] : $this->getContext($context, "itemCount")), "html", null, true);
            echo "</span>
        </button>

        <div id=\"";
            // line 20
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
                    </tr>
                </thead>
                <tbody>
                    <!--tr>
                        <td><button type=\"button\" class=\"btn btn-primary btn-sm\"
                        data-toggle=\"modal\" data-target=\"#myModal\">
                        Edit data</button></td>
                    </tr-->
                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stockItems"]) ? $context["stockItems"] : $this->getContext($context, "stockItems")));
            foreach ($context['_seq'] as $context["_key"] => $context["items"]) {
                // line 40
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($context["items"], "stockTypes", array()), "id", array()) == $this->getAttribute($context["types"], "id", array()))) {
                    // line 41
                    echo "                        <tr>
                            <td>
                                <button type=\"button\" class=\"btn btn-primary btn-sm\"
                                        data-toggle=\"modal\" data-target=\"#myModal\">Edit data
                                </button>
                            </td>
                            <td>";
                    // line 47
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemName", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemBase", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemSpec", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemCont", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["items"], "stockItemReq", array()), "html", null, true);
                    echo "</td>
                        </tr>
                        ";
                }
                // line 54
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
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
        
        $__internal_b1215a7c616c6c10637d7791289ade9c7056c8d11c602ea80e913ada3c4bc8bf->leave($__internal_b1215a7c616c6c10637d7791289ade9c7056c8d11c602ea80e913ada3c4bc8bf_prof);

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
        return array (  164 => 55,  158 => 54,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 47,  128 => 41,  125 => 40,  121 => 39,  99 => 20,  91 => 17,  86 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  66 => 11,  63 => 10,  59 => 9,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/*             {%  set itemCount = 0 %}*/
/*             {% for items in stockItems %}*/
/*                 {% if items.stockTypes.id == types.id %}*/
/*                     {% set itemCount = itemCount + 1 %}*/
/*                 {% endif %}*/
/*              {% endfor %}*/
/*         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#{{ types.stockTypeName }}">*/
/*             <span class="glyphicon glyphicon-collapse-down"></span> {{ types.stockTypeName }} <span class="badge">{{ itemCount }}</span>*/
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
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <!--tr>*/
/*                         <td><button type="button" class="btn btn-primary btn-sm"*/
/*                         data-toggle="modal" data-target="#myModal">*/
/*                         Edit data</button></td>*/
/*                     </tr-->*/
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
