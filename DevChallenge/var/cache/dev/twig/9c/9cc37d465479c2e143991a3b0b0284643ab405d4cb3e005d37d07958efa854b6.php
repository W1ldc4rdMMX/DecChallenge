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
        $__internal_fdceb2152e4e4a9d7106768ad52bf56fba5c9b42c6391db03286eaeb42003804 = $this->env->getExtension("native_profiler");
        $__internal_fdceb2152e4e4a9d7106768ad52bf56fba5c9b42c6391db03286eaeb42003804->enter($__internal_fdceb2152e4e4a9d7106768ad52bf56fba5c9b42c6391db03286eaeb42003804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">

        <!--link href=\"http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css\" rel=\"stylesheet\"-->
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\"
              href=\"http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css\">
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
        // line 52
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 53
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 56
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    ";
        // line 60
        $this->displayBlock('loginModal', $context, $blocks);
        // line 106
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
        echo "    </body>
</html>
";
        
        $__internal_fdceb2152e4e4a9d7106768ad52bf56fba5c9b42c6391db03286eaeb42003804->leave($__internal_fdceb2152e4e4a9d7106768ad52bf56fba5c9b42c6391db03286eaeb42003804_prof);

    }

    // line 52
    public function block_title($context, array $blocks = array())
    {
        $__internal_7871acb5b0f28cf11709e7498dec8cdfe975a000dd7192eeb6cf6466e820e1ea = $this->env->getExtension("native_profiler");
        $__internal_7871acb5b0f28cf11709e7498dec8cdfe975a000dd7192eeb6cf6466e820e1ea->enter($__internal_7871acb5b0f28cf11709e7498dec8cdfe975a000dd7192eeb6cf6466e820e1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7871acb5b0f28cf11709e7498dec8cdfe975a000dd7192eeb6cf6466e820e1ea->leave($__internal_7871acb5b0f28cf11709e7498dec8cdfe975a000dd7192eeb6cf6466e820e1ea_prof);

    }

    // line 53
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d83dbb0ecb7619c80969225ea3cb2ca0ce1d80e2767a41cf02ac1dfc55163c42 = $this->env->getExtension("native_profiler");
        $__internal_d83dbb0ecb7619c80969225ea3cb2ca0ce1d80e2767a41cf02ac1dfc55163c42->enter($__internal_d83dbb0ecb7619c80969225ea3cb2ca0ce1d80e2767a41cf02ac1dfc55163c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 54
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/myStyles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_d83dbb0ecb7619c80969225ea3cb2ca0ce1d80e2767a41cf02ac1dfc55163c42->leave($__internal_d83dbb0ecb7619c80969225ea3cb2ca0ce1d80e2767a41cf02ac1dfc55163c42_prof);

    }

    // line 60
    public function block_loginModal($context, array $blocks = array())
    {
        $__internal_48538d6b9e20f18d8af72136e9ef28906f93c3179c19460146b0549f861797f3 = $this->env->getExtension("native_profiler");
        $__internal_48538d6b9e20f18d8af72136e9ef28906f93c3179c19460146b0549f861797f3->enter($__internal_48538d6b9e20f18d8af72136e9ef28906f93c3179c19460146b0549f861797f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loginModal"));

        // line 61
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
        
        $__internal_48538d6b9e20f18d8af72136e9ef28906f93c3179c19460146b0549f861797f3->leave($__internal_48538d6b9e20f18d8af72136e9ef28906f93c3179c19460146b0549f861797f3_prof);

    }

    // line 106
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2f9d35ffe48cc8a7934245ecf98667545a5d8adc9fffcc6f6b273001be815b6 = $this->env->getExtension("native_profiler");
        $__internal_d2f9d35ffe48cc8a7934245ecf98667545a5d8adc9fffcc6f6b273001be815b6->enter($__internal_d2f9d35ffe48cc8a7934245ecf98667545a5d8adc9fffcc6f6b273001be815b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d2f9d35ffe48cc8a7934245ecf98667545a5d8adc9fffcc6f6b273001be815b6->leave($__internal_d2f9d35ffe48cc8a7934245ecf98667545a5d8adc9fffcc6f6b273001be815b6_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_260391d72d4f6942cf8d196f8c6e543d8fa7e4b9f41bff20e44e08f8dd133c5a = $this->env->getExtension("native_profiler");
        $__internal_260391d72d4f6942cf8d196f8c6e543d8fa7e4b9f41bff20e44e08f8dd133c5a->enter($__internal_260391d72d4f6942cf8d196f8c6e543d8fa7e4b9f41bff20e44e08f8dd133c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>

            <!--script type=\"text/javascript\"
                    src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js\">
            </script>
            <script type=\"text/javascript\"
                    src=\"http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js\">
            </script-->
            <script type=\"text/javascript\"
                    src=\"http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js\">
            </script>
            <script type=\"text/javascript\"
                    src=\"http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js\">
            </script>
            <script type=\"text/javascript\">
                \$('#datetimepicker').datetimepicker({
                    format: 'dd/MM/yyyy hh:mm:ss'
                    //language: 'pt-BR'
                });
            </script>
        ";
        
        $__internal_260391d72d4f6942cf8d196f8c6e543d8fa7e4b9f41bff20e44e08f8dd133c5a->leave($__internal_260391d72d4f6942cf8d196f8c6e543d8fa7e4b9f41bff20e44e08f8dd133c5a_prof);

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
        return array (  213 => 108,  207 => 107,  196 => 106,  145 => 61,  139 => 60,  129 => 54,  123 => 53,  111 => 52,  102 => 130,  99 => 107,  96 => 106,  94 => 60,  86 => 56,  84 => 53,  80 => 52,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* */
/*         <!--link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"-->*/
/*         <link rel="stylesheet" type="text/css" media="screen"*/
/*               href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">*/
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
/* */
/*             <!--script type="text/javascript"*/
/*                     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">*/
/*             </script>*/
/*             <script type="text/javascript"*/
/*                     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">*/
/*             </script-->*/
/*             <script type="text/javascript"*/
/*                     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">*/
/*             </script>*/
/*             <script type="text/javascript"*/
/*                     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">*/
/*             </script>*/
/*             <script type="text/javascript">*/
/*                 $('#datetimepicker').datetimepicker({*/
/*                     format: 'dd/MM/yyyy hh:mm:ss'*/
/*                     //language: 'pt-BR'*/
/*                 });*/
/*             </script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
