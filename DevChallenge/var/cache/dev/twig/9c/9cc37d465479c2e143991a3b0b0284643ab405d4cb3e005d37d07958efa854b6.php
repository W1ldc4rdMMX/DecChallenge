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
        $__internal_90698957583f6355fa29da70a3dea7c382be67534bb7b22188838a470a8ab955 = $this->env->getExtension("native_profiler");
        $__internal_90698957583f6355fa29da70a3dea7c382be67534bb7b22188838a470a8ab955->enter($__internal_90698957583f6355fa29da70a3dea7c382be67534bb7b22188838a470a8ab955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br>


        <title>";
        // line 53
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 54
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 57
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    ";
        // line 61
        $this->displayBlock('loginModal', $context, $blocks);
        // line 107
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 126
        echo "    </body>
</html>
";
        
        $__internal_90698957583f6355fa29da70a3dea7c382be67534bb7b22188838a470a8ab955->leave($__internal_90698957583f6355fa29da70a3dea7c382be67534bb7b22188838a470a8ab955_prof);

    }

    // line 53
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1e1b2e17342aee8639e44c8e5034635fc16260d726237c727895ac4008f3b71 = $this->env->getExtension("native_profiler");
        $__internal_d1e1b2e17342aee8639e44c8e5034635fc16260d726237c727895ac4008f3b71->enter($__internal_d1e1b2e17342aee8639e44c8e5034635fc16260d726237c727895ac4008f3b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d1e1b2e17342aee8639e44c8e5034635fc16260d726237c727895ac4008f3b71->leave($__internal_d1e1b2e17342aee8639e44c8e5034635fc16260d726237c727895ac4008f3b71_prof);

    }

    // line 54
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5902fe53a25c01a9acf461588962a203f39c9884a95494ec70618450fcf8365f = $this->env->getExtension("native_profiler");
        $__internal_5902fe53a25c01a9acf461588962a203f39c9884a95494ec70618450fcf8365f->enter($__internal_5902fe53a25c01a9acf461588962a203f39c9884a95494ec70618450fcf8365f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 55
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/myStyles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_5902fe53a25c01a9acf461588962a203f39c9884a95494ec70618450fcf8365f->leave($__internal_5902fe53a25c01a9acf461588962a203f39c9884a95494ec70618450fcf8365f_prof);

    }

    // line 61
    public function block_loginModal($context, array $blocks = array())
    {
        $__internal_6919aedc684562ab522ffe573ee36a2b837010322f9a81415808e43e7f94bfaa = $this->env->getExtension("native_profiler");
        $__internal_6919aedc684562ab522ffe573ee36a2b837010322f9a81415808e43e7f94bfaa->enter($__internal_6919aedc684562ab522ffe573ee36a2b837010322f9a81415808e43e7f94bfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loginModal"));

        // line 62
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
        
        $__internal_6919aedc684562ab522ffe573ee36a2b837010322f9a81415808e43e7f94bfaa->leave($__internal_6919aedc684562ab522ffe573ee36a2b837010322f9a81415808e43e7f94bfaa_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_03fa5bbe495b3afe35538ba0be35ddf949d272460faad9c8a19c7f9940b9e63c = $this->env->getExtension("native_profiler");
        $__internal_03fa5bbe495b3afe35538ba0be35ddf949d272460faad9c8a19c7f9940b9e63c->enter($__internal_03fa5bbe495b3afe35538ba0be35ddf949d272460faad9c8a19c7f9940b9e63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_03fa5bbe495b3afe35538ba0be35ddf949d272460faad9c8a19c7f9940b9e63c->leave($__internal_03fa5bbe495b3afe35538ba0be35ddf949d272460faad9c8a19c7f9940b9e63c_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_312d521de1e0e15297dac5680aa85ab0f52b1616383b5a8167ff1453bc84bd09 = $this->env->getExtension("native_profiler");
        $__internal_312d521de1e0e15297dac5680aa85ab0f52b1616383b5a8167ff1453bc84bd09->enter($__internal_312d521de1e0e15297dac5680aa85ab0f52b1616383b5a8167ff1453bc84bd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>

            <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jasmine-1.3.1/jasmine-html.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"http://github.com/searls/jasmine-fixture/releases/1.0.5/1737/jasmine-fixture.js\"></script>
            <script type=\"text/javascript\" src=\"http://code.jquery.com/ui/1.11.1/jquery-ui.min.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-timepicker-addon.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-sliderAccess.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">
                \$(function() {
                    \$( \"#datepicker\" ).datetimepicker();
                });
            </script>

        ";
        
        $__internal_312d521de1e0e15297dac5680aa85ab0f52b1616383b5a8167ff1453bc84bd09->leave($__internal_312d521de1e0e15297dac5680aa85ab0f52b1616383b5a8167ff1453bc84bd09_prof);

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
        return array (  243 => 118,  239 => 117,  233 => 114,  229 => 113,  223 => 109,  217 => 108,  206 => 107,  155 => 62,  149 => 61,  139 => 55,  133 => 54,  121 => 53,  112 => 126,  109 => 108,  106 => 107,  104 => 61,  96 => 57,  94 => 54,  90 => 53,  44 => 10,  40 => 9,  36 => 8,  27 => 1,);
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
/*                         <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
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
