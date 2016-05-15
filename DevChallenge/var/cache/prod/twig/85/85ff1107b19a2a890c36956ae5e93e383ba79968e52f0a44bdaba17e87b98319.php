<?php

/* header.html */
class __TwigTemplate_de0a8952c9f7b822ec6a5dccd9fc31df51f930bdbe6849286be6e3250bffff20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<link rel=\"stylesheet\" 
href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
<script 
src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\">
</script>
<script 
src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\">
</script>
<!--link rel=\"stylesheet\" type=\"text/css\" href=\"myStyles.css\"-->
<style>
\t.navbar-default {
\t\tbackground-color: #3763f7;
\t\tborder-color: #0048e4;
\t}
\t.navbar-default .navbar-brand {
\t\tcolor: #fbfeff;
\t}
\t.navbar-default .navbar-brand:hover,
\t.navbar-default .navbar-brand:focus {
\t\tcolor: #ecdbff;
\t}
\t.navbar-default .navbar-text {
\t\tcolor: #fbfeff;
\t}
\t.navbar-default .navbar-nav > li > a {
\t\tcolor: #fbfeff;
\t}
\t.navbar-default .navbar-nav > li > a:hover,
\t.navbar-default .navbar-nav > li > a:focus {
\t\tcolor: #ecdbff;
\t}
\t.navbar-default .navbar-nav > .active > a,
\t.navbar-default .navbar-nav > .active > a:hover,
\t.navbar-default .navbar-nav > .active > a:focus {
\t\tcolor: #ecdbff;
\t\tbackground-color: #0048e4;
\t}
\t.navbar-default .navbar-nav > .open > a,
\t.navbar-default .navbar-nav > .open > a:hover,
\t.navbar-default .navbar-nav > .open > a:focus {
\t\tcolor: #ecdbff;
\t\tbackground-color: #0048e4;
\t}
\t.navbar-default .navbar-toggle {
\t\tborder-color: #0048e4;
\t}
\t.navbar-default .navbar-toggle:hover,
\t.navbar-default .navbar-toggle:focus {
\t\tbackground-color: #0048e4;
\t}
\t.navbar-default .navbar-toggle .icon-bar {
\t\tbackground-color: #fbfeff;
\t}
\t.navbar-default .navbar-collapse,
\t.navbar-default .navbar-form {
\t\tborder-color: #fbfeff;
\t}
\t.navbar-default .navbar-link {
\t\tcolor: #fbfeff;
\t}
\t.navbar-default .navbar-link:hover {
\t\tcolor: #ecdbff;
\t}

\t@media (max-width: 767px) {
\t\t.navbar-default .navbar-nav .open .dropdown-menu > li > a {
\t\t\tcolor: #fbfeff;
\t\t}
\t\t.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
\t\t.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
\t\t\tcolor: #ecdbff;
\t\t}
\t\t.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
\t\t.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
\t\t.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
\t\t\tcolor: #ecdbff;
\t\t\tbackground-color: #0048e4;
\t\t}
\t}
</style>
</head>

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
        \t<li><a href=\"home\"><span class = \"glyphicon glyphicon-home\">
\t\t\t</span> Home </a></li>
\t\t\t<li><a href=\"update\"><span class = \"glyphicon glyphicon-list-alt\">
\t\t\t</span> Add Stock </a></li>
        \t<li><a href=\"view\"><span class = \"glyphicon glyphicon-time\">
\t\t\t</span> View Stock </a></li>
        \t<!--li>
\t\t\t\t<a href=\"#\"><span class=\"glyphicon glyphicon-search\"></span></a>
\t\t\t</li-->
\t\t\t\t\t<div class=\"col-sm-3 col-md-5 pull-left\">
\t\t        \t<form action=\"search.php\" method=\"post\" class=\"navbar-form\" 
\t\t\t\t\trole=\"search\">
      \t\t  \t\t<div class=\"input-group\">
            \t\t\t<input type=\"text\" class=\"form-control\" 
\t\t\t\t\t\t\tplaceholder=\"Search\" name=\"srch-term\" id=\"srch-term\">
            \t\t\t\t<div class=\"input-group-btn\">
 \t\t               \t\t<button class=\"btn btn-default\" type=\"submit\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-search\"></i></button>
      \t\t      \t\t</div>
\t\t        \t\t</div>
      \t\t  </form>
        \t</div>

  </button>
      </ul>
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up
\t\t\t</a></li>
        <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login
\t\t\t</a></li>
      </ul>
    </div>
  </div>
</nav>
<br><br><br><br>
";
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <link rel="stylesheet" */
/* href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/* <script */
/* src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">*/
/* </script>*/
/* <script */
/* src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">*/
/* </script>*/
/* <!--link rel="stylesheet" type="text/css" href="myStyles.css"-->*/
/* <style>*/
/* 	.navbar-default {*/
/* 		background-color: #3763f7;*/
/* 		border-color: #0048e4;*/
/* 	}*/
/* 	.navbar-default .navbar-brand {*/
/* 		color: #fbfeff;*/
/* 	}*/
/* 	.navbar-default .navbar-brand:hover,*/
/* 	.navbar-default .navbar-brand:focus {*/
/* 		color: #ecdbff;*/
/* 	}*/
/* 	.navbar-default .navbar-text {*/
/* 		color: #fbfeff;*/
/* 	}*/
/* 	.navbar-default .navbar-nav > li > a {*/
/* 		color: #fbfeff;*/
/* 	}*/
/* 	.navbar-default .navbar-nav > li > a:hover,*/
/* 	.navbar-default .navbar-nav > li > a:focus {*/
/* 		color: #ecdbff;*/
/* 	}*/
/* 	.navbar-default .navbar-nav > .active > a,*/
/* 	.navbar-default .navbar-nav > .active > a:hover,*/
/* 	.navbar-default .navbar-nav > .active > a:focus {*/
/* 		color: #ecdbff;*/
/* 		background-color: #0048e4;*/
/* 	}*/
/* 	.navbar-default .navbar-nav > .open > a,*/
/* 	.navbar-default .navbar-nav > .open > a:hover,*/
/* 	.navbar-default .navbar-nav > .open > a:focus {*/
/* 		color: #ecdbff;*/
/* 		background-color: #0048e4;*/
/* 	}*/
/* 	.navbar-default .navbar-toggle {*/
/* 		border-color: #0048e4;*/
/* 	}*/
/* 	.navbar-default .navbar-toggle:hover,*/
/* 	.navbar-default .navbar-toggle:focus {*/
/* 		background-color: #0048e4;*/
/* 	}*/
/* 	.navbar-default .navbar-toggle .icon-bar {*/
/* 		background-color: #fbfeff;*/
/* 	}*/
/* 	.navbar-default .navbar-collapse,*/
/* 	.navbar-default .navbar-form {*/
/* 		border-color: #fbfeff;*/
/* 	}*/
/* 	.navbar-default .navbar-link {*/
/* 		color: #fbfeff;*/
/* 	}*/
/* 	.navbar-default .navbar-link:hover {*/
/* 		color: #ecdbff;*/
/* 	}*/
/* */
/* 	@media (max-width: 767px) {*/
/* 		.navbar-default .navbar-nav .open .dropdown-menu > li > a {*/
/* 			color: #fbfeff;*/
/* 		}*/
/* 		.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,*/
/* 		.navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {*/
/* 			color: #ecdbff;*/
/* 		}*/
/* 		.navbar-default .navbar-nav .open .dropdown-menu > .active > a,*/
/* 		.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,*/
/* 		.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {*/
/* 			color: #ecdbff;*/
/* 			background-color: #0048e4;*/
/* 		}*/
/* 	}*/
/* </style>*/
/* </head>*/
/* */
/* <nav class="navbar navbar-default navbar-fixed-top">*/
/*   <div class="container-fluid">*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>                        */
/*       </button>*/
/*       <a class="navbar-brand" href="/"> Stock-Webs </a>*/
/*     </div>*/
/*     <div class="collapse navbar-collapse" id="myNavbar">*/
/*       <ul class="nav navbar-nav">*/
/*         	<li><a href="home"><span class = "glyphicon glyphicon-home">*/
/* 			</span> Home </a></li>*/
/* 			<li><a href="update"><span class = "glyphicon glyphicon-list-alt">*/
/* 			</span> Add Stock </a></li>*/
/*         	<li><a href="view"><span class = "glyphicon glyphicon-time">*/
/* 			</span> View Stock </a></li>*/
/*         	<!--li>*/
/* 				<a href="#"><span class="glyphicon glyphicon-search"></span></a>*/
/* 			</li-->*/
/* 					<div class="col-sm-3 col-md-5 pull-left">*/
/* 		        	<form action="search.php" method="post" class="navbar-form" */
/* 					role="search">*/
/*       		  		<div class="input-group">*/
/*             			<input type="text" class="form-control" */
/* 							placeholder="Search" name="srch-term" id="srch-term">*/
/*             				<div class="input-group-btn">*/
/*  		               		<button class="btn btn-default" type="submit">*/
/* 									<i class="glyphicon glyphicon-search"></i></button>*/
/*       		      		</div>*/
/* 		        		</div>*/
/*       		  </form>*/
/*         	</div>*/
/* */
/*   </button>*/
/*       </ul>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*         <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up*/
/* 			</a></li>*/
/*         <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login*/
/* 			</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <br><br><br><br>*/
/* */
