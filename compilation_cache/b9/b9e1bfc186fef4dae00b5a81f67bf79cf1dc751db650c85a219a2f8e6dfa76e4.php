<?php

/* blog.html */
class __TwigTemplate_4c2a1778d516fda43b4b61ccf23272c35fc424f79b94f6f983e4c2e8d76f1d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "blog.html", 1);
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
        echo "Блог - ";
    }

    // line 5
    public function block_files($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"css/blog.css\">
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
\t\t\t<h3 class=\"title\">БЛОГ ПЛЮСОДИН</h3>
\t\t\t<div class=\"article\">
\t\t\t\t<h5>Как мы помогали сотрудникам Reebook</h5>
\t\t\t\t<img src=\"images/article-image.jpg\" alt=\"\">
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, doloremque, quo. Minus, quos. Aliquid quod doloribus rerum voluptatem provident unde dolores, dolorum nesciunt adipisci, quia facere tempora doloremque quae itaque iusto eaque perferendis possimus. Cupiditate quasi modi assumenda, alias distinctio culpa blanditiis magnam error adipisci dicta veniam vel, odio eveniet.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos unde saepe, ducimus, vitae non numquam perspiciatis dolores itaque blanditiis accusantium repellendus provident ex voluptate iste ipsam est vero odio praesentium possimus dignissimos aliquam magni id labore maiores? Sequi aliquam, sit architecto debitis distinctio facere dolor possimus esse reprehenderit dicta sed.</p>
\t\t\t\t<a class=\"not-clickable\" href=\"#\">Читать далее</a>
\t\t\t</div>
\t\t\t<div class=\"article\">
\t\t\t\t<h5>Помощь при обморожении</h5>
\t\t\t\t<img src=\"images/article-image2.jpg\" alt=\"\">
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat, ad saepe rerum. Deleniti expedita laudantium non eligendi, numquam voluptas eveniet accusantium ullam excepturi, ratione a at quo quos, optio sit? Neque maxime reprehenderit explicabo sit recusandae. Inventore eaque aspernatur libero vitae animi maiores. Maiores, rerum.</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nobis, veniam! Nesciunt cupiditate iusto deserunt tempore dolorem porro eligendi, totam praesentium recusandae architecto, voluptates cum necessitatibus incidunt eum atque optio a ducimus quidem minus corporis ab odio repellendus ipsum quaerat. Cupiditate minima fugit dolore molestiae ea, necessitatibus, doloribus laborum officiis.</p>
\t\t\t\t<a class=\"not-clickable\" href=\"#\">Читать далее</a>
\t\t\t</div>
\t\t\t<div class=\"article\">
\t\t\t\t<h5>Что делать, если нет под рукой анальгетика</h5>
\t\t\t\t<img src=\"images/article-image3.jpg\" alt=\"\">
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam sequi molestias reprehenderit, fuga dolore amet laborum, nesciunt tempore. Eum distinctio laboriosam mollitia, quibusdam animi sint similique nemo dicta? Debitis quaerat ea ipsum, nostrum sunt eos. Aliquam asperiores repellat, veritatis, placeat dolor quos veniam quasi totam laudantium ipsum, id nostrum molestias!</p>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque neque at veritatis suscipit nesciunt debitis totam eveniet! Itaque repellendus, id suscipit a voluptatum nemo aliquid quod, consequatur mollitia maiores optio at enim impedit libero? Doloribus optio, enim corporis cum veritatis, eum ullam unde soluta voluptatibus, tempora sapiente! Earum, magni, mollitia.</p>
\t\t\t\t<a class=\"not-clickable\" href=\"#\">Читать далее</a>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"content-right\" class=\"not-clickable\">
\t\t\t<div id=\"subscription\">
\t\t\t\t<h5>Подпишись на наш блог</h5>
\t\t\t\t<form id=\"subscription-form\" class=\"form\" action=\"index.php\" method=\"post\">
\t\t\t\t\t<input class=\"required\" type=\"text\" name=\"subscriberName\" maxlength=\"80\" placeholder=\"Введите ваше имя\">
\t\t\t\t\t<input class=\"required\" type=\"email\" name=\"subscriberEmail\" maxlength=\"80\" placeholder=\"Введите ваш e-mail\">
\t\t\t\t\t<input type=\"submit\" value=\"ПОДПИСАТЬСЯ\">
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div id=\"tagcloud\">
\t\t\t\t<object type=\"application/x-shockwave-flash\" data=\"flash/tagcloud.swf\" width=\"270\" height=\"270\">
\t\t\t\t\t<param name=\"wmode\" value=\"opaque\">
\t\t\t\t\t<param name=\"quality\" value=\"high\">
\t\t\t\t\t<param name=\"bgcolor\" value=\"#ffffff\">
\t\t\t\t</object>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--========== content end ==========-->
</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  45 => 10,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block title %}Блог - {% endblock %}*/
/* */
/* {% block files %}*/
/* <link rel="stylesheet" href="css/blog.css">*/
/* <script type="text/javascript" src="js/form.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* <div id="container">*/
/* 	<!--========== content start ==========-->*/
/* 	<div id="content">*/
/* 		<div id="content-main">*/
/* 			<hr class="redline">*/
/* 			<h3 class="title">БЛОГ ПЛЮСОДИН</h3>*/
/* 			<div class="article">*/
/* 				<h5>Как мы помогали сотрудникам Reebook</h5>*/
/* 				<img src="images/article-image.jpg" alt="">*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, doloremque, quo. Minus, quos. Aliquid quod doloribus rerum voluptatem provident unde dolores, dolorum nesciunt adipisci, quia facere tempora doloremque quae itaque iusto eaque perferendis possimus. Cupiditate quasi modi assumenda, alias distinctio culpa blanditiis magnam error adipisci dicta veniam vel, odio eveniet.</p>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos unde saepe, ducimus, vitae non numquam perspiciatis dolores itaque blanditiis accusantium repellendus provident ex voluptate iste ipsam est vero odio praesentium possimus dignissimos aliquam magni id labore maiores? Sequi aliquam, sit architecto debitis distinctio facere dolor possimus esse reprehenderit dicta sed.</p>*/
/* 				<a class="not-clickable" href="#">Читать далее</a>*/
/* 			</div>*/
/* 			<div class="article">*/
/* 				<h5>Помощь при обморожении</h5>*/
/* 				<img src="images/article-image2.jpg" alt="">*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat, ad saepe rerum. Deleniti expedita laudantium non eligendi, numquam voluptas eveniet accusantium ullam excepturi, ratione a at quo quos, optio sit? Neque maxime reprehenderit explicabo sit recusandae. Inventore eaque aspernatur libero vitae animi maiores. Maiores, rerum.</p>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nobis, veniam! Nesciunt cupiditate iusto deserunt tempore dolorem porro eligendi, totam praesentium recusandae architecto, voluptates cum necessitatibus incidunt eum atque optio a ducimus quidem minus corporis ab odio repellendus ipsum quaerat. Cupiditate minima fugit dolore molestiae ea, necessitatibus, doloribus laborum officiis.</p>*/
/* 				<a class="not-clickable" href="#">Читать далее</a>*/
/* 			</div>*/
/* 			<div class="article">*/
/* 				<h5>Что делать, если нет под рукой анальгетика</h5>*/
/* 				<img src="images/article-image3.jpg" alt="">*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam sequi molestias reprehenderit, fuga dolore amet laborum, nesciunt tempore. Eum distinctio laboriosam mollitia, quibusdam animi sint similique nemo dicta? Debitis quaerat ea ipsum, nostrum sunt eos. Aliquam asperiores repellat, veritatis, placeat dolor quos veniam quasi totam laudantium ipsum, id nostrum molestias!</p>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque neque at veritatis suscipit nesciunt debitis totam eveniet! Itaque repellendus, id suscipit a voluptatum nemo aliquid quod, consequatur mollitia maiores optio at enim impedit libero? Doloribus optio, enim corporis cum veritatis, eum ullam unde soluta voluptatibus, tempora sapiente! Earum, magni, mollitia.</p>*/
/* 				<a class="not-clickable" href="#">Читать далее</a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div id="content-right" class="not-clickable">*/
/* 			<div id="subscription">*/
/* 				<h5>Подпишись на наш блог</h5>*/
/* 				<form id="subscription-form" class="form" action="index.php" method="post">*/
/* 					<input class="required" type="text" name="subscriberName" maxlength="80" placeholder="Введите ваше имя">*/
/* 					<input class="required" type="email" name="subscriberEmail" maxlength="80" placeholder="Введите ваш e-mail">*/
/* 					<input type="submit" value="ПОДПИСАТЬСЯ">*/
/* 				</form>*/
/* 			</div>*/
/* 			<div id="tagcloud">*/
/* 				<object type="application/x-shockwave-flash" data="flash/tagcloud.swf" width="270" height="270">*/
/* 					<param name="wmode" value="opaque">*/
/* 					<param name="quality" value="high">*/
/* 					<param name="bgcolor" value="#ffffff">*/
/* 				</object>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--========== content end ==========-->*/
/* </div>*/
/* {% endblock %}*/
