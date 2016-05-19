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
        $__internal_ace8dea2fb0f21fa24db854b281c65eb9c44657d724f669816bf293d55fafdd1 = $this->env->getExtension("native_profiler");
        $__internal_ace8dea2fb0f21fa24db854b281c65eb9c44657d724f669816bf293d55fafdd1->enter($__internal_ace8dea2fb0f21fa24db854b281c65eb9c44657d724f669816bf293d55fafdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
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
        // line 48
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 49
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 52
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    ";
        // line 56
        $this->displayBlock('loginModal', $context, $blocks);
        // line 102
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "    </body>
</html>
";
        
        $__internal_ace8dea2fb0f21fa24db854b281c65eb9c44657d724f669816bf293d55fafdd1->leave($__internal_ace8dea2fb0f21fa24db854b281c65eb9c44657d724f669816bf293d55fafdd1_prof);

    }

    // line 48
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce41f7426bf20b62886613d140e6115c02275d02d281617a4f9fa64c1ebde6b3 = $this->env->getExtension("native_profiler");
        $__internal_ce41f7426bf20b62886613d140e6115c02275d02d281617a4f9fa64c1ebde6b3->enter($__internal_ce41f7426bf20b62886613d140e6115c02275d02d281617a4f9fa64c1ebde6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ce41f7426bf20b62886613d140e6115c02275d02d281617a4f9fa64c1ebde6b3->leave($__internal_ce41f7426bf20b62886613d140e6115c02275d02d281617a4f9fa64c1ebde6b3_prof);

    }

    // line 49
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6da23e7fd6456217f32438d1cd5c3cfea2a8d791d05fe5967aee5a207e44e5f8 = $this->env->getExtension("native_profiler");
        $__internal_6da23e7fd6456217f32438d1cd5c3cfea2a8d791d05fe5967aee5a207e44e5f8->enter($__internal_6da23e7fd6456217f32438d1cd5c3cfea2a8d791d05fe5967aee5a207e44e5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 50
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/myStyles.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6da23e7fd6456217f32438d1cd5c3cfea2a8d791d05fe5967aee5a207e44e5f8->leave($__internal_6da23e7fd6456217f32438d1cd5c3cfea2a8d791d05fe5967aee5a207e44e5f8_prof);

    }

    // line 56
    public function block_loginModal($context, array $blocks = array())
    {
        $__internal_1a8eac2f73f2c7ae0d242237414ed826b8d7b13ce6082b5f6fd2d22a86016a04 = $this->env->getExtension("native_profiler");
        $__internal_1a8eac2f73f2c7ae0d242237414ed826b8d7b13ce6082b5f6fd2d22a86016a04->enter($__internal_1a8eac2f73f2c7ae0d242237414ed826b8d7b13ce6082b5f6fd2d22a86016a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "loginModal"));

        // line 57
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
        
        $__internal_1a8eac2f73f2c7ae0d242237414ed826b8d7b13ce6082b5f6fd2d22a86016a04->leave($__internal_1a8eac2f73f2c7ae0d242237414ed826b8d7b13ce6082b5f6fd2d22a86016a04_prof);

    }

    // line 102
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0a0557f6a4b2af84f76e07a51d6ddbb5150308be2477a1acde23d5af9448802 = $this->env->getExtension("native_profiler");
        $__internal_b0a0557f6a4b2af84f76e07a51d6ddbb5150308be2477a1acde23d5af9448802->enter($__internal_b0a0557f6a4b2af84f76e07a51d6ddbb5150308be2477a1acde23d5af9448802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0a0557f6a4b2af84f76e07a51d6ddbb5150308be2477a1acde23d5af9448802->leave($__internal_b0a0557f6a4b2af84f76e07a51d6ddbb5150308be2477a1acde23d5af9448802_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_56b9522e1db7c667b429fa506aaa7f970bdfd9116d88f207ce8099b80c46aa96 = $this->env->getExtension("native_profiler");
        $__internal_56b9522e1db7c667b429fa506aaa7f970bdfd9116d88f207ce8099b80c46aa96->enter($__internal_56b9522e1db7c667b429fa506aaa7f970bdfd9116d88f207ce8099b80c46aa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 104
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_56b9522e1db7c667b429fa506aaa7f970bdfd9116d88f207ce8099b80c46aa96->leave($__internal_56b9522e1db7c667b429fa506aaa7f970bdfd9116d88f207ce8099b80c46aa96_prof);

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
        return array (  209 => 104,  203 => 103,  192 => 102,  141 => 57,  135 => 56,  125 => 50,  119 => 49,  107 => 48,  98 => 107,  95 => 103,  92 => 102,  90 => 56,  82 => 52,  80 => 49,  76 => 48,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
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
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
