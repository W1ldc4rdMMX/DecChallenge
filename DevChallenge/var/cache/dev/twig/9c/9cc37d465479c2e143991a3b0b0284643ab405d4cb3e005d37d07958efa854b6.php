<?php

/* base.html.twig */
class __TwigTemplate_381fb0cbd96557ae797059320ae81cb8c6635c736ab098152b205068ada5ae4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'loginModal' => array($this, 'block_loginModal'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7c04215f01c602d23264643e866a2addc1681f5000847009a0db55c5fed56f0 = $this->env->getExtension("native_profiler");
        $__internal_c7c04215f01c602d23264643e866a2addc1681f5000847009a0db55c5fed56f0->enter($__internal_c7c04215f01c602d23264643e866a2addc1681f5000847009a0db55c5fed56f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">

        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui-timepicker-addon.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui-timepicker-addon.min.css"), "html", null, true);
        echo "\">

        <nav class=\"navbar navbar-default navbar-fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"/\"> Stock-Webs </a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"home\"><span class = \"glyphicon glyphicon-home\"></span> Home </a></li>
                        <li><a href=\"update\"><span class = \"glyphicon glyphicon-plus\"></span> Add\\Edit Stock </a></li>
                        <li><a href=\"view\"><span class = \"glyphicon glyphicon-list-alt\"></span> View Stock </a></li>
                        <li><a href=\"sales\"><span class = \"glyphicon glyphicon-shopping-cart\"></span> Stock Sales </a></li>
                        <li><a href=\"reports\"><span class = \"glyphicon glyphicon-stats\"></span> Stock reports </a></li>
                        <div class=\"pull-right\">
                            <form action=\"search.php\" method=\"post\" class=\"navbar-form\" role=\"search\">
                                <div class=\"input-group\">
                                    <input type=\"text\" class=\"form-control\"
                                           placeholder=\"Search\" name=\"srch-term\" id=\"srch-term\">
                                    <div class=\"input-group-btn\">
                                        <button class=\"btn btn-default\" type=\"submit\">
                                            <i class=\"glyphicon glyphicon-search\"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </button>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        <!--li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li-->
                        ";
        // line 45
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 46
            echo "                            <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-user\"></span>  ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"admin\"><span class=\"glyphicon glyphicon-th-list\">
                                        </span>  Admin Page</a></li>
                                <li><a href=\"#\"><span class=\"glyphicon glyphicon-equalizer\">
                                        </span>  System Reports</a></li>
                                <li><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutPath("main"), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-log-out\">
                                        </span>  Logout</a></li>
                            </ul>
                            </li>
                        ";
        } else {
            // line 58
            echo "                           <li> <a href=\"login\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                        ";
        }
        // line 60
        echo "

                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>


        <title>";
        // line 69
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 70
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 73
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    ";
        // line 77
        $this->displayBlock('loginModal', $context, $blocks);
        // line 105
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "    </body>
</html>
";
        
        $__internal_c7c04215f01c602d23264643e866a2addc1681f5000847009a0db55c5fed56f0->leave($__internal_c7c04215f01c602d23264643e866a2addc1681f5000847009a0db55c5fed56f0_prof);

    }

    // line 69
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f873afa406875e44e8310c63eb586592cce5b12dacd22f51ed6b543361d6e2b = $this->env->getExtension("native_profiler");
        $__internal_0f873afa406875e44e8310c63eb586592cce5b12dacd22f51ed6b543361d6e2b->enter($__internal_0f873afa406875e44e8310c63eb586592cce5b12dacd22f51ed6b543361d6e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0f873afa406875e44e8310c63eb586592cce5b12dacd22f51ed6b543361d6e2b->leave($__internal_0f873afa406875e44e8310c63eb586592cce5b12dacd22f51ed6b543361d6e2b_prof);

    }

    // line 70
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf14b34ef5644a0d6d308f7d64f7132ffb95e4c6b21a5926ef24bba8cf96cd02 = $this->env->getExtension("native_profiler");
        $__internal_bf14b34ef5644a0d6d308f7d64f7132ffb95e4c6b21a5926ef24bba8cf96cd02->enter($__internal_bf14b34ef5644a0d6d308f7d64f7132ffb95e4c6b21a5926ef24bba8cf96cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 71
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/myStyles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_bf14b34ef5644a0d6d308f7d64f7132ffb95e4c6b21a5926ef24bba8cf96cd02->leave($__internal_bf14b34ef5644a0d6d308f7d64f7132ffb95e4c6b21a5926ef24bba8cf96cd02_prof);

    }

    // line 77
    public function block_loginModal($context, array $blocks = array())
    {
        $__internal_13fb15d4da54a7a187e6e57ca2e47820973c7a57542bc99f601a2b9d329ec701 = $this->env->getExtension("native_profiler");
        $__internal_13fb15d4da54a7a187e6e57ca2e47820973c7a57542bc99f601a2b9d329ec701->enter($__internal_13fb15d4da54a7a187e6e57ca2e47820973c7a57542bc99f601a2b9d329ec701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loginModal"));

        // line 78
        echo "    <div class=\"modal fade\" id=\"loginModal\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <!--form class=\\\"form-horizontal\\\"
                      action=\\\"save.php\\\" method=\\\"post\\\"-->
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\">Please enter your login details</h4>
                </div>
                <div class=\"modal-body\">
                    <!--br>
                    <label for=\"user\">Username</label>
                    <input type=\"text\" name=\"user\" id=\"user\" placeholder=\"Username\">
                    <br>
                    <label for=\"pass\">Password</label>
                    <input type=\"password\" name=\"pass\" id=\"pass\" placeholder=\"Password\"-->

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                </div>
                <!--/form-->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        ";
        
        $__internal_13fb15d4da54a7a187e6e57ca2e47820973c7a57542bc99f601a2b9d329ec701->leave($__internal_13fb15d4da54a7a187e6e57ca2e47820973c7a57542bc99f601a2b9d329ec701_prof);

    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        $__internal_e771db5bc3cd44ea933e6b77b57e5dd08214bfcd829624476da525f6cb793237 = $this->env->getExtension("native_profiler");
        $__internal_e771db5bc3cd44ea933e6b77b57e5dd08214bfcd829624476da525f6cb793237->enter($__internal_e771db5bc3cd44ea933e6b77b57e5dd08214bfcd829624476da525f6cb793237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e771db5bc3cd44ea933e6b77b57e5dd08214bfcd829624476da525f6cb793237->leave($__internal_e771db5bc3cd44ea933e6b77b57e5dd08214bfcd829624476da525f6cb793237_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10d1bd4e8520523ae237469ce53f4d6b2d3ef14336028fc7a68da9ba68798428 = $this->env->getExtension("native_profiler");
        $__internal_10d1bd4e8520523ae237469ce53f4d6b2d3ef14336028fc7a68da9ba68798428->enter($__internal_10d1bd4e8520523ae237469ce53f4d6b2d3ef14336028fc7a68da9ba68798428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>

            <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine-html.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"http://github.com/searls/jasmine-fixture/releases/1.0.5/1737/jasmine-fixture.js\"></script>
            <script type=\"text/javascript\" src=\"http://code.jquery.com/ui/1.11.1/jquery-ui.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-sliderAccess.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(function() {
                    \$( \"#datepicker\" ).datetimepicker();
                });
            </script>

        ";
        
        $__internal_10d1bd4e8520523ae237469ce53f4d6b2d3ef14336028fc7a68da9ba68798428->leave($__internal_10d1bd4e8520523ae237469ce53f4d6b2d3ef14336028fc7a68da9ba68798428_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 116,  250 => 115,  244 => 112,  240 => 111,  234 => 107,  228 => 106,  217 => 105,  184 => 78,  178 => 77,  168 => 71,  162 => 70,  150 => 69,  141 => 124,  138 => 106,  135 => 105,  133 => 77,  125 => 73,  123 => 70,  119 => 69,  108 => 60,  104 => 58,  96 => 53,  87 => 47,  84 => 46,  82 => 45,  44 => 10,  40 => 9,  36 => 8,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* */
/*         <link rel="stylesheet" href="{{ asset('css/jquery-ui-timepicker-addon.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('js/jasmine-1.3.1/jasmine.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/jquery-ui-timepicker-addon.min.css') }}">*/
/* */
/*         <nav class="navbar navbar-default navbar-fixed-top">*/
/*             <div class="container-fluid">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="/"> Stock-Webs </a>*/
/*                 </div>*/
/*                 <div class="collapse navbar-collapse" id="myNavbar">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li><a href="home"><span class = "glyphicon glyphicon-home"></span> Home </a></li>*/
/*                         <li><a href="update"><span class = "glyphicon glyphicon-plus"></span> Add\Edit Stock </a></li>*/
/*                         <li><a href="view"><span class = "glyphicon glyphicon-list-alt"></span> View Stock </a></li>*/
/*                         <li><a href="sales"><span class = "glyphicon glyphicon-shopping-cart"></span> Stock Sales </a></li>*/
/*                         <li><a href="reports"><span class = "glyphicon glyphicon-stats"></span> Stock reports </a></li>*/
/*                         <div class="pull-right">*/
/*                             <form action="search.php" method="post" class="navbar-form" role="search">*/
/*                                 <div class="input-group">*/
/*                                     <input type="text" class="form-control"*/
/*                                            placeholder="Search" name="srch-term" id="srch-term">*/
/*                                     <div class="input-group-btn">*/
/*                                         <button class="btn btn-default" type="submit">*/
/*                                             <i class="glyphicon glyphicon-search"></i></button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </button>*/
/*                     </ul>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <!--li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li-->*/
/*                         {% if is_granted("ROLE_USER") %}*/
/*                             <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <span class="glyphicon glyphicon-user"></span>  {{ app.user.username }}</a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="admin"><span class="glyphicon glyphicon-th-list">*/
/*                                         </span>  Admin Page</a></li>*/
/*                                 <li><a href="#"><span class="glyphicon glyphicon-equalizer">*/
/*                                         </span>  System Reports</a></li>*/
/*                                 <li><a href="{{ logout_path('main') }}"><span class="glyphicon glyphicon-log-out">*/
/*                                         </span>  Logout</a></li>*/
/*                             </ul>*/
/*                             </li>*/
/*                         {% else %}*/
/*                            <li> <a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*                         {% endif %}*/
/* */
/* */
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/*         <br><br><br><br>*/
/* */
/* */
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/myStyles.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     <body>*/
/*     {% block loginModal %}*/
/*     <div class="modal fade" id="loginModal">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <!--form class=\"form-horizontal\"*/
/*                       action=\"save.php\" method=\"post\"-->*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>*/
/*                     <h4 class="modal-title">Please enter your login details</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <!--br>*/
/*                     <label for="user">Username</label>*/
/*                     <input type="text" name="user" id="user" placeholder="Username">*/
/*                     <br>*/
/*                     <label for="pass">Password</label>*/
/*                     <input type="password" name="pass" id="pass" placeholder="Password"-->*/
/* */
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*                     <button type="submit" class="btn btn-primary">Login</button>*/
/*                 </div>*/
/*                 <!--/form-->*/
/*                 </div><!-- /.modal-content -->*/
/*             </div><!-- /.modal-dialog -->*/
/*         </div><!-- /.modal -->*/
/*         {% endblock %}*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*             <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>*/
/* */
/*             <script src="{{ asset('js/jasmine-1.3.1/jasmine.js') }}"></script>*/
/*             <script src="{{ asset('js/jasmine-1.3.1/jasmine-html.js') }}"></script>*/
/*             <script type="text/javascript" src="http://github.com/searls/jasmine-fixture/releases/1.0.5/1737/jasmine-fixture.js"></script>*/
/*             <script type="text/javascript" src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery-ui-timepicker-addon.js') }}"></script>*/
/*             <script type="text/javascript" src="{{ asset('js/jquery-ui-sliderAccess.js') }}"></script>*/
/*             <script type="text/javascript">*/
/*                 $(function() {*/
/*                     $( "#datepicker" ).datetimepicker();*/
/*                 });*/
/*             </script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
