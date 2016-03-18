<?php

/* gallery.html */
class __TwigTemplate_bb4d974add4c8128a13f5e02de7f16de75e79d61171387cef461e6c20ee49d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "gallery.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'files' => array($this, 'block_files'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Галерея - ";
    }

    // line 5
    public function block_files($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"css/gallery.css\">
";
    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"container\">
\t<!--========== content start ==========-->
\t<div id=\"content\">
\t\t<hr class=\"redline\">
\t\t<h3 class=\"title\">ГАЛЕРЕЯ ПЛЮСОДИН</h3>
\t\t<h5>16 февраля Первая помощь в неотложных ситуациях\"</h5>
\t\t<div class=\"masonry not-clickable\">
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image2.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image3.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image4.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image5.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image6.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image7.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image8.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image9.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image10.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<hr class=\"separator\">
\t\t</div>
\t\t<h5>\"Первая помощь вдали от цивилизации\" для Альпинистов МАИ</h5>
\t\t<div class=\"masonry not-clickable\">
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image2.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image3.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image4.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image5.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image6.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image7.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image8.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image9.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<div class=\"brick\"><img src=\"images/masonry-image10.jpg\" alt=\"\"><span>20.02.2015</span></div>
\t\t\t<hr class=\"separator\">
\t\t</div>
\t</div>
\t<!--========== content end ==========-->
</div>
";
    }

    public function getTemplateName()
    {
        return "gallery.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block title %}Галерея - {% endblock %}*/
/* */
/* {% block files %}*/
/* <link rel="stylesheet" href="css/gallery.css">*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* <div id="container">*/
/* 	<!--========== content start ==========-->*/
/* 	<div id="content">*/
/* 		<hr class="redline">*/
/* 		<h3 class="title">ГАЛЕРЕЯ ПЛЮСОДИН</h3>*/
/* 		<h5>16 февраля Первая помощь в неотложных ситуациях"</h5>*/
/* 		<div class="masonry not-clickable">*/
/* 			<div class="brick"><img src="images/masonry-image.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image2.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image3.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image4.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image5.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image6.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image7.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image8.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image9.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image10.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<hr class="separator">*/
/* 		</div>*/
/* 		<h5>"Первая помощь вдали от цивилизации" для Альпинистов МАИ</h5>*/
/* 		<div class="masonry not-clickable">*/
/* 			<div class="brick"><img src="images/masonry-image.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image2.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image3.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image4.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image5.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image6.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image7.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image8.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image9.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<div class="brick"><img src="images/masonry-image10.jpg" alt=""><span>20.02.2015</span></div>*/
/* 			<hr class="separator">*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--========== content end ==========-->*/
/* </div>*/
/* {% endblock %}*/
