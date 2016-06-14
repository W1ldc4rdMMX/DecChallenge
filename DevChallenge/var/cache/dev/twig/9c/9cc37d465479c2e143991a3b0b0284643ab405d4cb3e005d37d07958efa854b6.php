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
        $__internal_8acbb6d2a39303699c7a2929860da91d1a230036aaed16e5769ad40a4d511d15 = $this->env->getExtension("native_profiler");
        $__internal_8acbb6d2a39303699c7a2929860da91d1a230036aaed16e5769ad40a4d511d15->enter($__internal_8acbb6d2a39303699c7a2929860da91d1a230036aaed16e5769ad40a4d511d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                    ";
        // line 23
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 24
            echo "                    <ul class=\"nav navbar-nav\">
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
                    ";
        }
        // line 45
        echo "
                    <ul class=\"nav navbar-nav navbar-right\">
                        <!--li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li-->
                        ";
        // line 48
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 49
            echo "                            <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-user\"></span>  ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                    <span class=\"glyphicon glyphicon-collapse-down\"></span> </a>
                            <ul class=\"dropdown-menu\">
                                ";
            // line 53
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 54
                echo "                                <li><a href=\"admin\"><span class=\"glyphicon glyphicon-th-list\">
                                        </span>  Admin Page</a></li>
                                ";
            }
            // line 57
            echo "                                <li><a href=\"metaData\"><span class=\"glyphicon glyphicon-equalizer\">
                                        </span>  System Logs</a></li>
                                <li><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutPath("main"), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-log-out\">
                                        </span>  Logout</a></li>
                            </ul>
                            </li>
                        ";
        } else {
            // line 64
            echo "                           <li> <a href=\"login\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                        ";
        }
        // line 66
        echo "

                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>


        <title>";
        // line 75
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 76
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 79
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("StockPlus.png"), "html", null, true);
        echo "\" />
    </head>

    <body>
    ";
        // line 83
        $this->displayBlock('loginModal', $context, $blocks);
        // line 111
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
        echo "    </body>
</html>
";
        
        $__internal_8acbb6d2a39303699c7a2929860da91d1a230036aaed16e5769ad40a4d511d15->leave($__internal_8acbb6d2a39303699c7a2929860da91d1a230036aaed16e5769ad40a4d511d15_prof);

    }

    // line 75
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0e423ef9c832e710a76f5af24ad79aae98e3db74f2282d7c18569f9da715288 = $this->env->getExtension("native_profiler");
        $__internal_f0e423ef9c832e710a76f5af24ad79aae98e3db74f2282d7c18569f9da715288->enter($__internal_f0e423ef9c832e710a76f5af24ad79aae98e3db74f2282d7c18569f9da715288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0e423ef9c832e710a76f5af24ad79aae98e3db74f2282d7c18569f9da715288->leave($__internal_f0e423ef9c832e710a76f5af24ad79aae98e3db74f2282d7c18569f9da715288_prof);

    }

    // line 76
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3c2135453dbf4d081bfa72499a525299be74bf695ca07ae8a3fc39b64d222a3 = $this->env->getExtension("native_profiler");
        $__internal_e3c2135453dbf4d081bfa72499a525299be74bf695ca07ae8a3fc39b64d222a3->enter($__internal_e3c2135453dbf4d081bfa72499a525299be74bf695ca07ae8a3fc39b64d222a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 77
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/myStyles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_e3c2135453dbf4d081bfa72499a525299be74bf695ca07ae8a3fc39b64d222a3->leave($__internal_e3c2135453dbf4d081bfa72499a525299be74bf695ca07ae8a3fc39b64d222a3_prof);

    }

    // line 83
    public function block_loginModal($context, array $blocks = array())
    {
        $__internal_dede7dbd42ee25c75b020eb19ff1c3f36b6f819a4b0ca6d8c4916851752e72f7 = $this->env->getExtension("native_profiler");
        $__internal_dede7dbd42ee25c75b020eb19ff1c3f36b6f819a4b0ca6d8c4916851752e72f7->enter($__internal_dede7dbd42ee25c75b020eb19ff1c3f36b6f819a4b0ca6d8c4916851752e72f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loginModal"));

        // line 84
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
        
        $__internal_dede7dbd42ee25c75b020eb19ff1c3f36b6f819a4b0ca6d8c4916851752e72f7->leave($__internal_dede7dbd42ee25c75b020eb19ff1c3f36b6f819a4b0ca6d8c4916851752e72f7_prof);

    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        $__internal_aab6b694829227e0fef9c1ec8fb1754603ba070b3f91b5157b6ef0dbf227d90d = $this->env->getExtension("native_profiler");
        $__internal_aab6b694829227e0fef9c1ec8fb1754603ba070b3f91b5157b6ef0dbf227d90d->enter($__internal_aab6b694829227e0fef9c1ec8fb1754603ba070b3f91b5157b6ef0dbf227d90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aab6b694829227e0fef9c1ec8fb1754603ba070b3f91b5157b6ef0dbf227d90d->leave($__internal_aab6b694829227e0fef9c1ec8fb1754603ba070b3f91b5157b6ef0dbf227d90d_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5297a4f6066bb66bce6aeb7aeba40d30dc2e328f2d6f05e9a93b0007825d2cf = $this->env->getExtension("native_profiler");
        $__internal_d5297a4f6066bb66bce6aeb7aeba40d30dc2e328f2d6f05e9a93b0007825d2cf->enter($__internal_d5297a4f6066bb66bce6aeb7aeba40d30dc2e328f2d6f05e9a93b0007825d2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>

            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine-html.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"http://github.com/searls/jasmine-fixture/releases/1.0.5/1737/jasmine-fixture.js\"></script>
            <script type=\"text/javascript\" src=\"http://code.jquery.com/ui/1.11.1/jquery-ui.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-sliderAccess.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(function() {
                    \$( \"#datepicker\" ).datetimepicker();
                });
            </script>

        ";
        
        $__internal_d5297a4f6066bb66bce6aeb7aeba40d30dc2e328f2d6f05e9a93b0007825d2cf->leave($__internal_d5297a4f6066bb66bce6aeb7aeba40d30dc2e328f2d6f05e9a93b0007825d2cf_prof);

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
        return array (  270 => 122,  266 => 121,  260 => 118,  256 => 117,  250 => 113,  244 => 112,  233 => 111,  200 => 84,  194 => 83,  184 => 77,  178 => 76,  166 => 75,  157 => 130,  154 => 112,  151 => 111,  149 => 83,  141 => 79,  139 => 76,  135 => 75,  124 => 66,  120 => 64,  112 => 59,  108 => 57,  103 => 54,  101 => 53,  95 => 50,  92 => 49,  90 => 48,  85 => 45,  62 => 24,  60 => 23,  44 => 10,  40 => 9,  36 => 8,  27 => 1,);
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
/*                     {% if is_granted("ROLE_USER") %}*/
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
/*                     {% endif %}*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <!--li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li-->*/
/*                         {% if is_granted("ROLE_USER") %}*/
/*                             <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                                     <span class="glyphicon glyphicon-user"></span>  {{ app.user.username }}*/
/*                                     <span class="glyphicon glyphicon-collapse-down"></span> </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% if is_granted("ROLE_ADMIN") %}*/
/*                                 <li><a href="admin"><span class="glyphicon glyphicon-th-list">*/
/*                                         </span>  Admin Page</a></li>*/
/*                                 {% endif %}*/
/*                                 <li><a href="metaData"><span class="glyphicon glyphicon-equalizer">*/
/*                                         </span>  System Logs</a></li>*/
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
/*         <link rel="icon" type="image/x-icon" href="{{ asset('StockPlus.png') }}" />*/
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
