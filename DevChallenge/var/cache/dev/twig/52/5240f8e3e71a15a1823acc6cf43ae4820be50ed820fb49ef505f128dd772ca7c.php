<?php

/* catalogue/reports.html.twig */
class __TwigTemplate_edb68e9287dff5e691a493275ef605f906bac42cbb0c7f68050ea3ff1c4fd02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/reports.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'graph1' => array($this, 'block_graph1'),
            'graph2' => array($this, 'block_graph2'),
            'graph3' => array($this, 'block_graph3'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6da24ad6d886f7849a8b0720b803f31b297400bd8c31941d4e233d8455fbc74f = $this->env->getExtension("native_profiler");
        $__internal_6da24ad6d886f7849a8b0720b803f31b297400bd8c31941d4e233d8455fbc74f->enter($__internal_6da24ad6d886f7849a8b0720b803f31b297400bd8c31941d4e233d8455fbc74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/reports.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da24ad6d886f7849a8b0720b803f31b297400bd8c31941d4e233d8455fbc74f->leave($__internal_6da24ad6d886f7849a8b0720b803f31b297400bd8c31941d4e233d8455fbc74f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5435bdbf515cfd4cf315405175287f16b1bbbb0ce0f42a710c0fdb6ce4b3d4a = $this->env->getExtension("native_profiler");
        $__internal_c5435bdbf515cfd4cf315405175287f16b1bbbb0ce0f42a710c0fdb6ce4b3d4a->enter($__internal_c5435bdbf515cfd4cf315405175287f16b1bbbb0ce0f42a710c0fdb6ce4b3d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Stock Reports
";
        
        $__internal_c5435bdbf515cfd4cf315405175287f16b1bbbb0ce0f42a710c0fdb6ce4b3d4a->leave($__internal_c5435bdbf515cfd4cf315405175287f16b1bbbb0ce0f42a710c0fdb6ce4b3d4a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60d80fe2ac740e96b27ba6ae729086867f921085c75c5f9e6f8399d6c3f03ba9 = $this->env->getExtension("native_profiler");
        $__internal_60d80fe2ac740e96b27ba6ae729086867f921085c75c5f9e6f8399d6c3f03ba9->enter($__internal_60d80fe2ac740e96b27ba6ae729086867f921085c75c5f9e6f8399d6c3f03ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/graphstyles.css"), "html", null, true);
        echo "\">
";
        
        $__internal_60d80fe2ac740e96b27ba6ae729086867f921085c75c5f9e6f8399d6c3f03ba9->leave($__internal_60d80fe2ac740e96b27ba6ae729086867f921085c75c5f9e6f8399d6c3f03ba9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3503382202b46d34dc164b55da129415332c0ced621ea6276d4a281e0b78089b = $this->env->getExtension("native_profiler");
        $__internal_3503382202b46d34dc164b55da129415332c0ced621ea6276d4a281e0b78089b->enter($__internal_3503382202b46d34dc164b55da129415332c0ced621ea6276d4a281e0b78089b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <div class=\"container-fluid\">
        <h1>Stock Reports</h1>
        <p>Stock Reports will go here</p>
        ";
        // line 15
        $this->displayBlock('graph1', $context, $blocks);
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('graph2', $context, $blocks);
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('graph3', $context, $blocks);
        // line 95
        echo "
    </div>
";
        
        $__internal_3503382202b46d34dc164b55da129415332c0ced621ea6276d4a281e0b78089b->leave($__internal_3503382202b46d34dc164b55da129415332c0ced621ea6276d4a281e0b78089b_prof);

    }

    // line 15
    public function block_graph1($context, array $blocks = array())
    {
        $__internal_25600b95a761d9b24b05126467bf1ef4e8a3165c6ad155440313a47e48f050e6 = $this->env->getExtension("native_profiler");
        $__internal_25600b95a761d9b24b05126467bf1ef4e8a3165c6ad155440313a47e48f050e6->enter($__internal_25600b95a761d9b24b05126467bf1ef4e8a3165c6ad155440313a47e48f050e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "graph1"));

        // line 16
        echo "        <div class=\"col-sm-12\">
        <div class=\"well\">
           <div class=\"chart\">
           <div class=\"table-responsive\">
           <h3>Stock availability</h3>
           <table class=\"table table-hover table-striped\" id=\"data-table\" border=\"1\" cellpadding=\"10\" cellspacing=\"0\"
            summary=\"Current Stock vs Orders\">
               <thead>
               <tr>
                   <th>Stock Item</th>
                   <th>Current Stock</th>
                   <th>Current Orders</th>
               </tr>
               </thead>
               <tbody>
               <tr>
                   <td>Routers</td>
                   <td>100</td>
                   <td>50</td>
               </tr>
               <tr>
                   <td>Mobile</td>
                   <td>1000</td>
                   <td>750</td>
               </tr>
               </tbody>
           </table>
           </div></div>
        </div>
        </div>
        ";
        
        $__internal_25600b95a761d9b24b05126467bf1ef4e8a3165c6ad155440313a47e48f050e6->leave($__internal_25600b95a761d9b24b05126467bf1ef4e8a3165c6ad155440313a47e48f050e6_prof);

    }

    // line 48
    public function block_graph2($context, array $blocks = array())
    {
        $__internal_9d5c78d6fb2b9ab947c4e389f3a19dbaf59c770575d0feb7f58278c306c108f3 = $this->env->getExtension("native_profiler");
        $__internal_9d5c78d6fb2b9ab947c4e389f3a19dbaf59c770575d0feb7f58278c306c108f3->enter($__internal_9d5c78d6fb2b9ab947c4e389f3a19dbaf59c770575d0feb7f58278c306c108f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "graph2"));

        // line 49
        echo "        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h3>Stock Sales (Monthly)</h3>
                <!-- Graph HTML -->
                <div id=\"graph-wrapper\">
                    <div class=\"graph-info\">
                        <a href=\"javascript:void(0)\" class=\"visitors\">Visitors</a>
                        <a href=\"javascript:void(0)\" class=\"returning\">Returning Visitors</a>
                        <a href=\"#\" id=\"bars\"><span></span></a>
                        <a href=\"#\" id=\"lines\" class=\"active\"><span></span></a>
                    </div>
                    <div class=\"graph-container\">
                        <div id=\"graph-lines\"></div>
                        <div id=\"graph-bars\"></div>
                    </div>
                </div>
                <!-- end Graph HTML -->
            </div>
        </div>
        ";
        
        $__internal_9d5c78d6fb2b9ab947c4e389f3a19dbaf59c770575d0feb7f58278c306c108f3->leave($__internal_9d5c78d6fb2b9ab947c4e389f3a19dbaf59c770575d0feb7f58278c306c108f3_prof);

    }

    // line 70
    public function block_graph3($context, array $blocks = array())
    {
        $__internal_4cdf67214a584b47971a46b879128dd4a05164bbcf398f48c3630aec22df6f4a = $this->env->getExtension("native_profiler");
        $__internal_4cdf67214a584b47971a46b879128dd4a05164bbcf398f48c3630aec22df6f4a->enter($__internal_4cdf67214a584b47971a46b879128dd4a05164bbcf398f48c3630aec22df6f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "graph3"));

        // line 71
        echo "        <div class=\"col-sm-6\">
            <div class=\"well\">
                <h3>Stock Sales comparisons</h3>
                <div id=\"chartdiv\"></div>
                <div class=\"container-fluid\">
                    <div class=\"row text-center\" style=\"overflow:hidden;\">
                        <div class=\"col-sm-3\" style=\"float: none !important;display: inline-block;\">
                            <label class=\"text-left\">Angle:</label>
                            <input class=\"chart-input\" data-property=\"angle\" type=\"range\" min=\"0\" max=\"60\" value=\"30\" step=\"1\"/>
                        </div>

                        <div class=\"col-sm-3\" style=\"float: none !important;display: inline-block;\">
                            <label class=\"text-left\">Depth:</label>
                            <input class=\"chart-input\" data-property=\"depth3D\" type=\"range\" min=\"1\" max=\"25\" value=\"10\" step=\"1\"/>
                        </div>
                        <div class=\"col-sm-3\" style=\"float: none !important;display: inline-block;\">
                            <label class=\"text-left\">Inner-Radius:</label>
                            <input class=\"chart-input\" data-property=\"innerRadius\" type=\"range\" min=\"0\" max=\"80\" value=\"0\" step=\"1\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_4cdf67214a584b47971a46b879128dd4a05164bbcf398f48c3630aec22df6f4a->leave($__internal_4cdf67214a584b47971a46b879128dd4a05164bbcf398f48c3630aec22df6f4a_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd281374f1da2e021eb13d3775f80daff4be33845946128505d9ee8f11ac6323 = $this->env->getExtension("native_profiler");
        $__internal_cd281374f1da2e021eb13d3775f80daff4be33845946128505d9ee8f11ac6323->enter($__internal_cd281374f1da2e021eb13d3775f80daff4be33845946128505d9ee8f11ac6323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            // Graph scripts here
            var graphData = [{
                // Visits
                data: [ [6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000] ],
                color: '#71c73e'
            }, {
                // Returning Visits
                data: [ [6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000] ],
                color: '#77b7c5',
                points: { radius: 4, fillColor: '#77b7c5' }
            }
            ];
            // Lines
            \$.plot(\$('#graph-lines'), graphData, {
                series: {
                    points: {
                        show: true,
                        radius: 5
                    },
                    lines: {
                        show: true
                    },
                    shadowSize: 0
                },
                grid: {
                    color: '#646464',
                    borderColor: 'transparent',
                    borderWidth: 20,
                    hoverable: true
                },
                xaxis: {
                    tickColor: 'transparent',
                    tickDecimals: 2
                },
                yaxis: {
                    tickSize: 1000
                }
            });

            // Bars
            \$.plot(\$('#graph-bars'), graphData, {
                series: {
                    bars: {
                        show: true,
                        barWidth: .9,
                        align: 'center'
                    },
                    shadowSize: 0
                },
                grid: {
                    color: '#646464',
                    borderColor: 'transparent',
                    borderWidth: 20,
                    hoverable: true
                },
                xaxis: {
                    tickColor: 'transparent',
                    tickDecimals: 2
                },
                yaxis: {
                    tickSize: 1000
                }
            });

        });

        \$('#graph-bars').hide();

        \$('#lines').on('click', function (e) {
            \$('#bars').removeClass('active');
            \$('#graph-bars').fadeOut();
            \$(this).addClass('active');
            \$('#graph-lines').fadeIn();
            e.preventDefault();
        });

        \$('#bars').on('click', function (e) {
            \$('#lines').removeClass('active');
            \$('#graph-lines').fadeOut();
            \$(this).addClass('active');
            \$('#graph-bars').fadeIn().removeClass('hidden');
            e.preventDefault();
        });

        function showTooltip(x, y, contents) {
            \$('<div id=\"tooltip\">' + contents + '</div>').css({top: y - 16,left: x + 20}).appendTo('body').fadeIn();
        }

        var previousPoint = null;

        \$('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;
                    \$('#tooltip').remove();
                    var x = item.datapoint[0],
                            y = item.datapoint[1];
                    showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
                }
            } else {
                \$('#tooltip').remove();
                previousPoint = null;
            }
        });
    </script>

    <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/amcharts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/light.js"), "html", null, true);
        echo "\"></script>
    <script>
        var chart = AmCharts.makeChart( \"chartdiv\", {
            \"type\": \"pie\",
            \"theme\": \"light\",
            \"dataProvider\": [ {
                \"country\": \"Lithuania\",
                \"value\": 260
            }, {
                \"country\": \"Ireland\",
                \"value\": 201
            }, {
                \"country\": \"Germany\",
                \"value\": 65
            }, {
                \"country\": \"Australia\",
                \"value\": 39
            }, {
                \"country\": \"UK\",
                \"value\": 19
            }, {
                \"country\": \"Latvia\",
                \"value\": 10
            } ],
            \"valueField\": \"value\",
            \"titleField\": \"country\",
            \"outlineAlpha\": 0.4,
            \"depth3D\": 15,
            \"balloonText\": \"[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>\",
            \"angle\": 30,
            \"export\": {
                \"enabled\": true
            }
        } );
        jQuery( '.chart-input' ).off().on( 'input change', function() {
            var property = jQuery( this ).data( 'property' );
            var target = chart;
            var value = Number( this.value );
            chart.startDuration = 0;

            if ( property == 'innerRadius' ) {
                value += \"%\";
            }

            target[ property ] = value;
            chart.validateNow();
        } );
    </script>
";
        
        $__internal_cd281374f1da2e021eb13d3775f80daff4be33845946128505d9ee8f11ac6323->leave($__internal_cd281374f1da2e021eb13d3775f80daff4be33845946128505d9ee8f11ac6323_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 212,  344 => 211,  340 => 210,  228 => 101,  223 => 100,  217 => 99,  187 => 71,  181 => 70,  155 => 49,  149 => 48,  112 => 16,  106 => 15,  97 => 95,  95 => 70,  92 => 69,  90 => 48,  87 => 47,  85 => 15,  80 => 12,  74 => 11,  65 => 8,  60 => 7,  54 => 6,  46 => 3,  40 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}*/
/*     Stock Reports*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset("css/graphstyles.css") }}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <h1>Stock Reports</h1>*/
/*         <p>Stock Reports will go here</p>*/
/*         {% block graph1 %}*/
/*         <div class="col-sm-12">*/
/*         <div class="well">*/
/*            <div class="chart">*/
/*            <div class="table-responsive">*/
/*            <h3>Stock availability</h3>*/
/*            <table class="table table-hover table-striped" id="data-table" border="1" cellpadding="10" cellspacing="0"*/
/*             summary="Current Stock vs Orders">*/
/*                <thead>*/
/*                <tr>*/
/*                    <th>Stock Item</th>*/
/*                    <th>Current Stock</th>*/
/*                    <th>Current Orders</th>*/
/*                </tr>*/
/*                </thead>*/
/*                <tbody>*/
/*                <tr>*/
/*                    <td>Routers</td>*/
/*                    <td>100</td>*/
/*                    <td>50</td>*/
/*                </tr>*/
/*                <tr>*/
/*                    <td>Mobile</td>*/
/*                    <td>1000</td>*/
/*                    <td>750</td>*/
/*                </tr>*/
/*                </tbody>*/
/*            </table>*/
/*            </div></div>*/
/*         </div>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
/*         {% block graph2 %}*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h3>Stock Sales (Monthly)</h3>*/
/*                 <!-- Graph HTML -->*/
/*                 <div id="graph-wrapper">*/
/*                     <div class="graph-info">*/
/*                         <a href="javascript:void(0)" class="visitors">Visitors</a>*/
/*                         <a href="javascript:void(0)" class="returning">Returning Visitors</a>*/
/*                         <a href="#" id="bars"><span></span></a>*/
/*                         <a href="#" id="lines" class="active"><span></span></a>*/
/*                     </div>*/
/*                     <div class="graph-container">*/
/*                         <div id="graph-lines"></div>*/
/*                         <div id="graph-bars"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- end Graph HTML -->*/
/*             </div>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
/*         {% block graph3 %}*/
/*         <div class="col-sm-6">*/
/*             <div class="well">*/
/*                 <h3>Stock Sales comparisons</h3>*/
/*                 <div id="chartdiv"></div>*/
/*                 <div class="container-fluid">*/
/*                     <div class="row text-center" style="overflow:hidden;">*/
/*                         <div class="col-sm-3" style="float: none !important;display: inline-block;">*/
/*                             <label class="text-left">Angle:</label>*/
/*                             <input class="chart-input" data-property="angle" type="range" min="0" max="60" value="30" step="1"/>*/
/*                         </div>*/
/* */
/*                         <div class="col-sm-3" style="float: none !important;display: inline-block;">*/
/*                             <label class="text-left">Depth:</label>*/
/*                             <input class="chart-input" data-property="depth3D" type="range" min="1" max="25" value="10" step="1"/>*/
/*                         </div>*/
/*                         <div class="col-sm-3" style="float: none !important;display: inline-block;">*/
/*                             <label class="text-left">Inner-Radius:</label>*/
/*                             <input class="chart-input" data-property="innerRadius" type="range" min="0" max="80" value="0" step="1"/>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {% endblock %}*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset("js/jquery.flot.min.js") }}"></script>*/
/*     <script>*/
/*         $(document).ready(function () {*/
/*             // Graph scripts here*/
/*             var graphData = [{*/
/*                 // Visits*/
/*                 data: [ [6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000] ],*/
/*                 color: '#71c73e'*/
/*             }, {*/
/*                 // Returning Visits*/
/*                 data: [ [6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000] ],*/
/*                 color: '#77b7c5',*/
/*                 points: { radius: 4, fillColor: '#77b7c5' }*/
/*             }*/
/*             ];*/
/*             // Lines*/
/*             $.plot($('#graph-lines'), graphData, {*/
/*                 series: {*/
/*                     points: {*/
/*                         show: true,*/
/*                         radius: 5*/
/*                     },*/
/*                     lines: {*/
/*                         show: true*/
/*                     },*/
/*                     shadowSize: 0*/
/*                 },*/
/*                 grid: {*/
/*                     color: '#646464',*/
/*                     borderColor: 'transparent',*/
/*                     borderWidth: 20,*/
/*                     hoverable: true*/
/*                 },*/
/*                 xaxis: {*/
/*                     tickColor: 'transparent',*/
/*                     tickDecimals: 2*/
/*                 },*/
/*                 yaxis: {*/
/*                     tickSize: 1000*/
/*                 }*/
/*             });*/
/* */
/*             // Bars*/
/*             $.plot($('#graph-bars'), graphData, {*/
/*                 series: {*/
/*                     bars: {*/
/*                         show: true,*/
/*                         barWidth: .9,*/
/*                         align: 'center'*/
/*                     },*/
/*                     shadowSize: 0*/
/*                 },*/
/*                 grid: {*/
/*                     color: '#646464',*/
/*                     borderColor: 'transparent',*/
/*                     borderWidth: 20,*/
/*                     hoverable: true*/
/*                 },*/
/*                 xaxis: {*/
/*                     tickColor: 'transparent',*/
/*                     tickDecimals: 2*/
/*                 },*/
/*                 yaxis: {*/
/*                     tickSize: 1000*/
/*                 }*/
/*             });*/
/* */
/*         });*/
/* */
/*         $('#graph-bars').hide();*/
/* */
/*         $('#lines').on('click', function (e) {*/
/*             $('#bars').removeClass('active');*/
/*             $('#graph-bars').fadeOut();*/
/*             $(this).addClass('active');*/
/*             $('#graph-lines').fadeIn();*/
/*             e.preventDefault();*/
/*         });*/
/* */
/*         $('#bars').on('click', function (e) {*/
/*             $('#lines').removeClass('active');*/
/*             $('#graph-lines').fadeOut();*/
/*             $(this).addClass('active');*/
/*             $('#graph-bars').fadeIn().removeClass('hidden');*/
/*             e.preventDefault();*/
/*         });*/
/* */
/*         function showTooltip(x, y, contents) {*/
/*             $('<div id="tooltip">' + contents + '</div>').css({top: y - 16,left: x + 20}).appendTo('body').fadeIn();*/
/*         }*/
/* */
/*         var previousPoint = null;*/
/* */
/*         $('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {*/
/*             if (item) {*/
/*                 if (previousPoint != item.dataIndex) {*/
/*                     previousPoint = item.dataIndex;*/
/*                     $('#tooltip').remove();*/
/*                     var x = item.datapoint[0],*/
/*                             y = item.datapoint[1];*/
/*                     showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');*/
/*                 }*/
/*             } else {*/
/*                 $('#tooltip').remove();*/
/*                 previousPoint = null;*/
/*             }*/
/*         });*/
/*     </script>*/
/* */
/*     <script src="{{ asset("js/amcharts.js") }}"></script>*/
/*     <script src="{{ asset("js/pie.js") }}"></script>*/
/*     <script src="{{ asset("js/light.js") }}"></script>*/
/*     <script>*/
/*         var chart = AmCharts.makeChart( "chartdiv", {*/
/*             "type": "pie",*/
/*             "theme": "light",*/
/*             "dataProvider": [ {*/
/*                 "country": "Lithuania",*/
/*                 "value": 260*/
/*             }, {*/
/*                 "country": "Ireland",*/
/*                 "value": 201*/
/*             }, {*/
/*                 "country": "Germany",*/
/*                 "value": 65*/
/*             }, {*/
/*                 "country": "Australia",*/
/*                 "value": 39*/
/*             }, {*/
/*                 "country": "UK",*/
/*                 "value": 19*/
/*             }, {*/
/*                 "country": "Latvia",*/
/*                 "value": 10*/
/*             } ],*/
/*             "valueField": "value",*/
/*             "titleField": "country",*/
/*             "outlineAlpha": 0.4,*/
/*             "depth3D": 15,*/
/*             "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",*/
/*             "angle": 30,*/
/*             "export": {*/
/*                 "enabled": true*/
/*             }*/
/*         } );*/
/*         jQuery( '.chart-input' ).off().on( 'input change', function() {*/
/*             var property = jQuery( this ).data( 'property' );*/
/*             var target = chart;*/
/*             var value = Number( this.value );*/
/*             chart.startDuration = 0;*/
/* */
/*             if ( property == 'innerRadius' ) {*/
/*                 value += "%";*/
/*             }*/
/* */
/*             target[ property ] = value;*/
/*             chart.validateNow();*/
/*         } );*/
/*     </script>*/
/* {% endblock %}*/
