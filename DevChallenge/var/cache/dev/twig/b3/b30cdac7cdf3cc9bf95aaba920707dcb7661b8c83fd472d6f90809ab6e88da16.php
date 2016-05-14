<?php

/* catalogue/about.html.twig */
class __TwigTemplate_e2f44d8b02550352fd4ff2e6ef7935777f58d5c15647ae4ea100c0caaf4b95bc extends Twig_Template
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
        $__internal_a7bef1f5297787a0f4ac4748ace290c590ea6baf093830eec2eb29877e1ded45 = $this->env->getExtension("native_profiler");
        $__internal_a7bef1f5297787a0f4ac4748ace290c590ea6baf093830eec2eb29877e1ded45->enter($__internal_a7bef1f5297787a0f4ac4748ace290c590ea6baf093830eec2eb29877e1ded45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalogue/about.html.twig"));

        // line 1
        $this->loadTemplate("header.html", "catalogue/about.html.twig", 1)->display($context);
        // line 2
        echo "<head>
    <title>WebApp Name</title>
</head>
<body>
<h1>About App</h1>
</body>
";
        
        $__internal_a7bef1f5297787a0f4ac4748ace290c590ea6baf093830eec2eb29877e1ded45->leave($__internal_a7bef1f5297787a0f4ac4748ace290c590ea6baf093830eec2eb29877e1ded45_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html' %}*/
/* <head>*/
/*     <title>WebApp Name</title>*/
/* </head>*/
/* <body>*/
/* <h1>About App</h1>*/
/* </body>*/
/* */
