<?php

/* base.html */
class __TwigTemplate_368bea0c227760c2292b58cfdf5da175be016f6ac2e3a7a24025e4002b46ca2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'files' => array($this, 'block_files'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "Обучение первой помощи</title>
\t<meta charset=\"utf-8\">
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"images/favicon.ico\">
\t<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
\t<link rel=\"stylesheet\" href=\"css/style.css\">
\t";
        // line 9
        $this->displayBlock('files', $context, $blocks);
        // line 10
        echo "</head>
<body>
\t<!--========== wrapper start ==========-->
\t<div id=\"wrapper\">
\t\t<!--========== header start ==========-->
\t\t";
        // line 15
        $this->loadTemplate("header.html", "base.html", 15)->display($context);
        // line 16
        echo "\t\t<!--========== header end ==========-->
\t\t<!--========== container start ==========-->
\t\t";
        // line 18
        $this->displayBlock('container', $context, $blocks);
        // line 19
        echo "\t\t<!--========== container end ==========-->
\t</div>
\t<!--========== wrapper end ==========-->
\t<!--========== footer start ==========-->
\t";
        // line 23
        $this->loadTemplate("footer.html", "base.html", 23)->display($context);
        // line 24
        echo "\t<!--========== footer end ==========-->
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_files($context, array $blocks = array())
    {
    }

    // line 18
    public function block_container($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  71 => 9,  66 => 4,  60 => 24,  58 => 23,  52 => 19,  50 => 18,  46 => 16,  44 => 15,  37 => 10,  35 => 9,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>{% block title %}{% endblock %}Обучение первой помощи</title>*/
/* 	<meta charset="utf-8">*/
/* 	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">*/
/* 	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>*/
/* 	<link rel="stylesheet" href="css/style.css">*/
/* 	{% block files %}{% endblock %}*/
/* </head>*/
/* <body>*/
/* 	<!--========== wrapper start ==========-->*/
/* 	<div id="wrapper">*/
/* 		<!--========== header start ==========-->*/
/* 		{% include "header.html" %}*/
/* 		<!--========== header end ==========-->*/
/* 		<!--========== container start ==========-->*/
/* 		{% block container %}{% endblock %}*/
/* 		<!--========== container end ==========-->*/
/* 	</div>*/
/* 	<!--========== wrapper end ==========-->*/
/* 	<!--========== footer start ==========-->*/
/* 	{% include "footer.html" %}*/
/* 	<!--========== footer end ==========-->*/
/* </body>*/
/* </html>*/
