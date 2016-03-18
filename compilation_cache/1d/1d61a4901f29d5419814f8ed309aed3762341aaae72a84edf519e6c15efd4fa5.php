<?php

/* main.html */
class __TwigTemplate_44d86f3dc49ed3252fc797b514d1534ed0017a2417d29414564d92384d4ff39b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "main.html", 1);
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
    }

    // line 5
    public function block_files($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"css/main.css\">
<script type=\"text/javascript\" src=\"js/form.js\"></script>
";
    }

    // line 10
    public function block_container($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"container\">
\t<!--========== content start ==========-->
\t<div id=\"content\">
\t\t<div id=\"content-main\">
\t\t\t<hr class=\"redline\">
\t\t\t<h3 class=\"title\">ЧТО МЫ ДАЕМ</h3>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum animi ratione nostrum laboriosam consequatur ex libero quisquam consequuntur adipisci quod incidunt fuga sint molestiae sed aperiam optio quas recusandae laudantium accusantium vitae at, minima, illo ut? Tempore nihil, quo, voluptatibus itaque nesciunt quos magni! Facere sint modi, saepe beatae qui.</p>
\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi odit repellendus culpa iure blanditiis ipsa, maiores, non, perferendis quas voluptatum fuga cumque velit explicabo laborum nulla possimus rem! Vero optio rerum praesentium nostrum, esse dicta molestias consequatur aspernatur ratione est sapiente, ipsam modi, tempore ad! Adipisci quos iusto eveniet, quod.</p>
\t\t</div>
\t\t<div id=\"content-right\" class=\"not-clickable\">
\t\t\t<h4>ФОРМА ПОДПИСКИ</h4>
\t\t\t<form id=\"content-right-form\" class=\"form\" action=\"index.php\" method=\"post\">
\t\t\t\t<input class=\"required\" type=\"text\" name=\"subscriberName\" maxlength=\"80\" placeholder=\"Введите ваше имя\">
\t\t\t\t<input class=\"required\" type=\"tel\" name=\"subscriberPhone\" maxlength=\"80\" placeholder=\"Введите ваш телефон\">
\t\t\t\t<input type=\"submit\" value=\"ОТПРАВИТЬ\">
\t\t\t</form>
\t\t</div>
\t</div>
\t<!--========== content end ==========-->
\t<!--========== masonry start ==========-->
\t<div id=\"wrapper-masonry\">
\t\t<div id=\"masonry\" class=\"not-clickable\">
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
\t\t</div>
\t</div>
\t<!--========== masonry end ==========-->
</div>
";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  44 => 10,  38 => 6,  35 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block title %}{% endblock %}*/
/* */
/* {% block files %}*/
/* <link rel="stylesheet" href="css/main.css">*/
/* <script type="text/javascript" src="js/form.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* <div id="container">*/
/* 	<!--========== content start ==========-->*/
/* 	<div id="content">*/
/* 		<div id="content-main">*/
/* 			<hr class="redline">*/
/* 			<h3 class="title">ЧТО МЫ ДАЕМ</h3>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum animi ratione nostrum laboriosam consequatur ex libero quisquam consequuntur adipisci quod incidunt fuga sint molestiae sed aperiam optio quas recusandae laudantium accusantium vitae at, minima, illo ut? Tempore nihil, quo, voluptatibus itaque nesciunt quos magni! Facere sint modi, saepe beatae qui.</p>*/
/* 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi odit repellendus culpa iure blanditiis ipsa, maiores, non, perferendis quas voluptatum fuga cumque velit explicabo laborum nulla possimus rem! Vero optio rerum praesentium nostrum, esse dicta molestias consequatur aspernatur ratione est sapiente, ipsam modi, tempore ad! Adipisci quos iusto eveniet, quod.</p>*/
/* 		</div>*/
/* 		<div id="content-right" class="not-clickable">*/
/* 			<h4>ФОРМА ПОДПИСКИ</h4>*/
/* 			<form id="content-right-form" class="form" action="index.php" method="post">*/
/* 				<input class="required" type="text" name="subscriberName" maxlength="80" placeholder="Введите ваше имя">*/
/* 				<input class="required" type="tel" name="subscriberPhone" maxlength="80" placeholder="Введите ваш телефон">*/
/* 				<input type="submit" value="ОТПРАВИТЬ">*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--========== content end ==========-->*/
/* 	<!--========== masonry start ==========-->*/
/* 	<div id="wrapper-masonry">*/
/* 		<div id="masonry" class="not-clickable">*/
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
/* 		</div>*/
/* 	</div>*/
/* 	<!--========== masonry end ==========-->*/
/* </div>*/
/* {% endblock %}*/
