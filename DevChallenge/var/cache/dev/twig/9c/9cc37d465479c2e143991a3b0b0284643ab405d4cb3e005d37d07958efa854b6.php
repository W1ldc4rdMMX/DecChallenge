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
        $__internal_90ccbb9a180011ae18aee0871b7ffc20ef39bef621fe1f668a89cf78c9c075fc = $this->env->getExtension("native_profiler");
        $__internal_90ccbb9a180011ae18aee0871b7ffc20ef39bef621fe1f668a89cf78c9c075fc->enter($__internal_90ccbb9a180011ae18aee0871b7ffc20ef39bef621fe1f668a89cf78c9c075fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <li><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"glyphicon glyphicon-log-in\"></span> Log-off</a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Admin Page</a></li>
                            <li><a href=\"#\">System Reports</a></li>
                            <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutPath("main"), "html", null, true);
        echo "\">Logout</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>


        <title>";
        // line 59
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 60
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 63
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    ";
        // line 67
        $this->displayBlock('loginModal', $context, $blocks);
        // line 113
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "    </body>
</html>
";
        
        $__internal_90ccbb9a180011ae18aee0871b7ffc20ef39bef621fe1f668a89cf78c9c075fc->leave($__internal_90ccbb9a180011ae18aee0871b7ffc20ef39bef621fe1f668a89cf78c9c075fc_prof);

    }

    // line 59
    public function block_title($context, array $blocks = array())
    {
        $__internal_06de058d959eade8a5b125d40df7799af448381fa89f0d502f03048842d89761 = $this->env->getExtension("native_profiler");
        $__internal_06de058d959eade8a5b125d40df7799af448381fa89f0d502f03048842d89761->enter($__internal_06de058d959eade8a5b125d40df7799af448381fa89f0d502f03048842d89761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06de058d959eade8a5b125d40df7799af448381fa89f0d502f03048842d89761->leave($__internal_06de058d959eade8a5b125d40df7799af448381fa89f0d502f03048842d89761_prof);

    }

    // line 60
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e7210c529a4c681577b105a0f212e18adfd8a04220c94863770672699fdbe8b = $this->env->getExtension("native_profiler");
        $__internal_7e7210c529a4c681577b105a0f212e18adfd8a04220c94863770672699fdbe8b->enter($__internal_7e7210c529a4c681577b105a0f212e18adfd8a04220c94863770672699fdbe8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 61
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/myStyles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_7e7210c529a4c681577b105a0f212e18adfd8a04220c94863770672699fdbe8b->leave($__internal_7e7210c529a4c681577b105a0f212e18adfd8a04220c94863770672699fdbe8b_prof);

    }

    // line 67
    public function block_loginModal($context, array $blocks = array())
    {
        $__internal_af47869c7d8b71f6cad97cec449ae03a7eda75c381a3154110cc10d7ec6f08b5 = $this->env->getExtension("native_profiler");
        $__internal_af47869c7d8b71f6cad97cec449ae03a7eda75c381a3154110cc10d7ec6f08b5->enter($__internal_af47869c7d8b71f6cad97cec449ae03a7eda75c381a3154110cc10d7ec6f08b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loginModal"));

        // line 68
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
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" id=\"uLogin\" placeholder=\"Login\">
                            <label for=\"uLogin\" class=\"input-group-addon glyphicon glyphicon-user\"></label>
                        </div>
                    </div> <!-- /.form-group -->

                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <input type=\"password\" class=\"form-control\" id=\"uPassword\" placeholder=\"Password\">
                            <label for=\"uPassword\" class=\"input-group-addon glyphicon glyphicon-lock\"></label>
                        </div> <!-- /.input-group -->
                    </div> <!-- /.form-group -->

                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\"> Remember me
                        </label>
                    </div> <!-- /.checkbox -->
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
        
        $__internal_af47869c7d8b71f6cad97cec449ae03a7eda75c381a3154110cc10d7ec6f08b5->leave($__internal_af47869c7d8b71f6cad97cec449ae03a7eda75c381a3154110cc10d7ec6f08b5_prof);

    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        $__internal_87ce7c11dff4b0f1438288dca41da94a31084fbe5aa0855d6c471b0be49cd6d7 = $this->env->getExtension("native_profiler");
        $__internal_87ce7c11dff4b0f1438288dca41da94a31084fbe5aa0855d6c471b0be49cd6d7->enter($__internal_87ce7c11dff4b0f1438288dca41da94a31084fbe5aa0855d6c471b0be49cd6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87ce7c11dff4b0f1438288dca41da94a31084fbe5aa0855d6c471b0be49cd6d7->leave($__internal_87ce7c11dff4b0f1438288dca41da94a31084fbe5aa0855d6c471b0be49cd6d7_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b1f380cdb37d29e3aea6a6611a3aee560f33b7770ab6f6f6bd82c36deffaaf7e = $this->env->getExtension("native_profiler");
        $__internal_b1f380cdb37d29e3aea6a6611a3aee560f33b7770ab6f6f6bd82c36deffaaf7e->enter($__internal_b1f380cdb37d29e3aea6a6611a3aee560f33b7770ab6f6f6bd82c36deffaaf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>

            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine-html.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"http://github.com/searls/jasmine-fixture/releases/1.0.5/1737/jasmine-fixture.js\"></script>
            <script type=\"text/javascript\" src=\"http://code.jquery.com/ui/1.11.1/jquery-ui.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-sliderAccess.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(function() {
                    \$( \"#datepicker\" ).datetimepicker();
                });
            </script>

        ";
        
        $__internal_b1f380cdb37d29e3aea6a6611a3aee560f33b7770ab6f6f6bd82c36deffaaf7e->leave($__internal_b1f380cdb37d29e3aea6a6611a3aee560f33b7770ab6f6f6bd82c36deffaaf7e_prof);

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
        return array (  252 => 124,  248 => 123,  242 => 120,  238 => 119,  232 => 115,  226 => 114,  215 => 113,  164 => 68,  158 => 67,  148 => 61,  142 => 60,  130 => 59,  121 => 132,  118 => 114,  115 => 113,  113 => 67,  105 => 63,  103 => 60,  99 => 59,  86 => 49,  44 => 10,  40 => 9,  36 => 8,  27 => 1,);
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
/*                         <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Log-off</a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Admin Page</a></li>*/
/*                             <li><a href="#">System Reports</a></li>*/
/*                             <li><a href="{{ logout_path('main') }}">Logout</a></li>*/
/*                         </ul>*/
/*                         </li>*/
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
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <input type="text" class="form-control" id="uLogin" placeholder="Login">*/
/*                             <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>*/
/*                         </div>*/
/*                     </div> <!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <input type="password" class="form-control" id="uPassword" placeholder="Password">*/
/*                             <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>*/
/*                         </div> <!-- /.input-group -->*/
/*                     </div> <!-- /.form-group -->*/
/* */
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             <input type="checkbox"> Remember me*/
/*                         </label>*/
/*                     </div> <!-- /.checkbox -->*/
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
