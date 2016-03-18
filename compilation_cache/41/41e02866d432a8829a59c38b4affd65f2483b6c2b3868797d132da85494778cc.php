<?php

/* travelers.html */
class __TwigTemplate_9d85fed3fa7156c7956aa7d76ac9ba7fa1a2ab2667d8557f3da525e3f2dbce91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "travelers.html", 1);
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
        echo "Путешественникам - ";
    }

    // line 5
    public function block_files($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"css/travelers.css\">
<script type=\"text/javascript\" src=\"js/textarea.js\"></script>
<script type=\"text/javascript\" src=\"js/file.js\"></script>
<script type=\"text/javascript\" src=\"js/date.js\"></script>
<script type=\"text/javascript\" src=\"js/time.js\"></script>
<script type=\"text/javascript\" src=\"js/form.js\"></script>
";
    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
        // line 15
        echo "<div id=\"container\">
\t<!--========== content start ==========-->
\t<div id=\"content\">
\t\t<!--========== content-block1 start ==========-->
\t\t<div id=\"content-block1\" class=\"content\">
\t\t\t<hr class=\"redline\">
\t\t\t<h3 class=\"title\">ТРЕНИНГ &laquo;ПЕРВАЯ ПОМОЩЬ ВДАЛИ ОТ ГОРОДА&raquo;</h3>
\t\t\t<p>Для походников, путешественников, экстремалов</p>
\t\t\t<div class=\"training-introduction\">
\t\t\t\t<div class=\"training-introduction-image\"><img src=\"images/introduction-image.jpg\" alt=\"\"></div>
\t\t\t\t<div class=\"training-introduction-main\">
\t\t\t\t\t<h5>Решили выбраться из душного города?<br><span>а знаете ли вы</span></h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>какой набор медикаментов нужно взять на день, какой на 3 дня, 7 дней?</li>
\t\t\t\t\t\t<li>что делать при обморожении, при тепловом ударе?</li>
\t\t\t\t\t\t<li>какой набор медикаментов нужно взять на день, какой на 3 дня, 7 дней?</li>
\t\t\t\t\t\t<li>что делать при обморожении, при тепловом ударе?</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"separator\">
\t\t\t<div class=\"training-introduction\">
\t\t\t\t<div class=\"training-introduction-image\"><img src=\"images/introduction-image2.jpg\" alt=\"\"></div>
\t\t\t\t<div class=\"training-introduction-main\">
\t\t\t\t\t<h5>Записывайтесь на тренинг &laquo;Первая помощь вдали от города&raquo;<br><span>за 8 часов вы узнаете</span></h5>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>приемы экстренной эвакуации пострадавших из зоны опасности</li>
\t\t\t\t\t\t<li>алгоритм оценки состояния пострадавшего</li>
\t\t\t\t\t\t<li>приемы экстренной эвакуации пострадавших из зоны опасности</li>
\t\t\t\t\t\t<li>алгоритм оценки состояния пострадавшего</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"training-data\">ПОСМОТРЕТЬ ДАТУ ТРЕНИНГА</a>
\t\t</div>
\t\t<!--========== content-block1 end ==========-->
\t\t<!--========== content-block2 start ==========-->
\t\t<div id=\"wrapper-content-block2\" class=\"wrapper-content\">
\t\t\t<div id=\"content-block2\" class=\"content\">
\t\t\t\t<h3 class=\"title\">ОСОБЕННОСТИ ТРЕНИНГА</h3>
\t\t\t\t<div id=\"training-features\">
\t\t\t\t\t<div id=\"training-features-video\">
\t\t\t\t\t\t<iframe src=\"https://www.youtube.com/embed/3tIno7I-UWw\" allowfullscreen></iframe>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"training-features-main\">
\t\t\t\t\t\t<p><strong>Тренинг на 50% состоит из теории и на 50% из практики</strong></p>
\t\t\t\t\t\t<p>Получили методику &ndash; опробовали на практике. Тренироваться будете на других участниках группы (накладывать бинты, жгуты, повязки) и на манекенах (искусственное дыхание&hellip;). Добавить 3-4 фотографии или видеоролик с тренинга.</p>
\t\t\t\t\t\t<p>Получили методику &ndash; опробовали на практике. Тренироваться будете на других участниках группы (накладывать бинты, жгуты, повязки) и на манекенах (искусственное дыхание&hellip;). Добавить 3-4 фотографии или видеоролик с тренинга.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--========== content-block2 end ==========-->
\t\t<!--========== content-block3 start ==========-->
\t\t<div id=\"content-block3\" class=\"content\">
\t\t\t<hr class=\"redline\">
\t\t\t<h3 class=\"title\">КТО ПРОВОДИТ ТРЕНИНГ?</h3>
\t\t\t<div id=\"training-coaches\">
\t\t\t\t<div class=\"coach\">
\t\t\t\t\t<div class=\"coach-image\"><img src=\"images/coach-image.jpg\" alt=\"\"></div>
\t\t\t\t\t<div class=\"coash-resume\">
\t\t\t\t\t\t<h5>Иван Иванов</h5>
\t\t\t\t\t\t<p>Резюме ведущего в контексте темы. Нужно доказать, что ведущий &ndash; профи в этой теме. У него высшее медицинское. Он опытный походник. Он уже 10 лет проводит аналогичные тренинги и т.д. Можно дать резюме рядом с фото тренера.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"coach\">
\t\t\t\t\t<div class=\"coach-image\"><img src=\"images/coach-image2.jpg\" alt=\"\"></div>
\t\t\t\t\t<div class=\"coash-resume\">
\t\t\t\t\t\t<h5>Иван Иванов</h5>
\t\t\t\t\t\t<p>Резюме ведущего в контексте темы. Нужно доказать, что ведущий &ndash; профи в этой теме. У него высшее медицинское. Он опытный походник. Он уже 10 лет проводит аналогичные тренинги и т.д. Можно дать резюме рядом с фото тренера.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#\" class=\"training-data\">ПОСМОТРЕТЬ ДАТУ ТРЕНИНГА</a>
\t\t\t<hr class=\"separator\">
\t\t\t<hr class=\"redline\">
\t\t\t<h3 class=\"title\">ОТЗЫВЫ УЧАСТНИКОВ</h3>
\t\t\t<div id=\"training-participants\">
\t\t\t\t<div class=\"participant\">
\t\t\t\t\t<div class=\"participant-image\"><img src=\"images/participant-image.jpg\" alt=\"\"></div>
\t\t\t\t\t<div class=\"participant-review\">
\t\t\t\t\t\t<p>2-3 отзыва представителей ЦА (в данном случае лучше путешественников). Если нет отзывов представителей ЦА, то общие. 2-3 отзыва представителей ЦА (в данном случае лучше путешественников).</p>
\t\t\t\t\t\t<h5>Иван Иванов</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"participant\">
\t\t\t\t\t<div class=\"participant-image\"><img src=\"images/participant-image2.jpg\" alt=\"\"></div>
\t\t\t\t\t<div class=\"participant-review\">
\t\t\t\t\t\t<p>2-3 отзыва представителей ЦА (в данном случае лучше путешественников). Если нет отзывов представителей ЦА, то общие. 2-3 отзыва представителей ЦА (в данном случае лучше путешественников).</p>
\t\t\t\t\t\t<h5>Иван Иванов</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"participant\">
\t\t\t\t\t<div class=\"participant-image\"><img src=\"images/participant-image3.jpg\" alt=\"\"></div>
\t\t\t\t\t<div class=\"participant-review\">
\t\t\t\t\t\t<p>2-3 отзыва представителей ЦА (в данном случае лучше путешественников). Если нет отзывов представителей ЦА, то общие. 2-3 отзыва представителей ЦА (в данном случае лучше путешественников).</p>
\t\t\t\t\t\t<h5>Иван Иванов</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"participant\">
\t\t\t\t\t<div class=\"participant-image\"><img src=\"images/participant-image4.jpg\" alt=\"\"></div>
\t\t\t\t\t<div class=\"participant-review\">
\t\t\t\t\t\t<p>2-3 отзыва представителей ЦА (в данном случае лучше путешественников). Если нет отзывов представителей ЦА, то общие. 2-3 отзыва представителей ЦА (в данном случае лучше путешественников).</p>
\t\t\t\t\t\t<h5>Иван Иванов</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"#\" id=\"training-add-review\">Добавить свой отзыв</a>
\t\t\t<form id=\"training-add-review-form\" class=\"form\" action=\"index.php\" enctype=\"multipart/form-data\" method=\"post\">
\t\t\t\t<input class=\"required\" type=\"text\" placeholder=\"Ваше имя\" maxlength=\"80\" name=\"reviewerName\">
\t\t\t\t<span id=\"training-add-review-form-filepole\">Загрузить фото</span><input id=\"training-add-review-form-file\" type=\"file\" accept=\"image/*\" name=\"reviewerPhoto\"><label for=\"training-add-review-form-file\">выбрать файл</label><br>
\t\t\t\t<textarea class=\"required\" id=\"training-add-review-form-textarea\" placeholder=\"Сообщение\" maxlength=\"1000\" name=\"reviewerComment\"></textarea>
\t\t\t\t<input type=\"submit\" value=\"ДОБАВИТЬ\">
\t\t\t</form>
\t\t</div>
\t\t<!--========== content-block3 end ==========-->
\t\t<!--========== content-block4 start ==========-->
\t\t<div id=\"wrapper-content-block4\" class=\"wrapper-content\">
\t\t\t<div id=\"content-block4\" class=\"content\">
\t\t\t\t<h3 class=\"title\">СТОИМОСТЬ ТРЕНИНГА</h3>
\t\t\t\t<div id=\"training-cost\">
\t\t\t\t\t<div class=\"training-cost-column\">
\t\t\t\t\t\t<h5>Рассказать, что входит в стоимость</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>раздаточный материал: рабочая тетрадь, памятка путешественнику, бинты, марли&hellip;</li>
\t\t\t\t\t\t\t<li>3 кофе-паузы с чаем и сладостями, обед</li>
\t\t\t\t\t\t\t<li>4 часа лекций</li>
\t\t\t\t\t\t\t<li>4 часа практики</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"training-cost-column\">
\t\t\t\t\t\t<h5>Сравнить стоимость с ценностью</h5>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Кажется, что это дорого?</li>
\t\t\t\t\t\t\t<li>А сколько стоит ваша жизнь?</li>
\t\t\t\t\t\t\t<li>Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека.</li>
\t\t\t\t\t\t\t<li>А сколько стоит ваша жизнь?</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a href=\"#\" class=\"training-data\">ПОСМОТРЕТЬ ДАТУ ТРЕНИНГА</a>
\t\t\t</div>
\t\t</div>
\t\t<!--========== content-block4 end ==========-->
\t\t<!--========== content-block5 start ==========-->
\t\t<div id=\"content-block5\" class=\"content\">
\t\t\t<hr class=\"redline\">
\t\t\t<h3 class=\"title\">ВСЕ ЕЩЕ СОМНЕВАЕТЕСЬ?</h3>
\t\t\t<div id=\"training-questions\">
\t\t\t\t<div class=\"question\">
\t\t\t\t\t<h5>Зачем мне идти на платный тренинг? Я узнаю то же самое бесплатно в интернете.</h5>
\t\t\t\t\t<p><span>Ответ:</span> Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека. Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"question\">
\t\t\t\t\t<h5>У меня нет свободного времени.</h5>
\t\t\t\t\t<p><span>Ответ:</span> Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека. Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"question\">
\t\t\t\t\t<h5>В автошколе были занятия по оказанию первой помощи, это не одно и то же?</h5>
\t\t\t\t\t<p><span>Ответ:</span> Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека. Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr class=\"separator\">
\t\t\t<hr class=\"redline\">
\t\t\t<h3 class=\"title\">ЗАРЕГИСТРИРУЙТЕСЬ НА ТРЕНИНГ ДО 15 АПРЕЛЯ <br><span>И ПОЛУЧИТЕ ТАКОЙ-ТО БОНУС</span></h3>
\t\t\t<form id=\"training-registration-form\" class=\"form\" action=\"index.php\" method=\"post\">
\t\t\t\t<div id=\"training-registration-form-left\">
\t\t\t\t\t<p>Выберите дату</p>
\t\t\t\t\t<input id=\"default-date\" type=\"date\" name=\"trainingDate\">
\t\t\t\t\t<p>Выберите время</p>
\t\t\t\t\t<input id=\"default-time\" type=\"time\" name=\"trainingTime\">
\t\t\t\t</div>
\t\t\t\t<div id=\"training-registration-form-right\">
\t\t\t\t\t<input class=\"required\" type=\"text\" placeholder=\"Введите ваше имя\" maxlength=\"80\" name=\"participantName\">
\t\t\t\t\t<input class=\"required\" type=\"tel\" placeholder=\"Введите ваш телефон\" maxlength=\"80\" name=\"participantPhone\">
\t\t\t\t\t<input type=\"submit\" value=\"ЗАПИСАТЬСЯ НА ТРЕНИНГ\">
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t<!--========== content-block5 end ==========-->
\t</div>
\t<!--========== content end ==========-->
</div>
";
    }

    public function getTemplateName()
    {
        return "travelers.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  49 => 14,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "base.html" %}*/
/* */
/* {% block title %}Путешественникам - {% endblock %}*/
/* */
/* {% block files %}*/
/* <link rel="stylesheet" href="css/travelers.css">*/
/* <script type="text/javascript" src="js/textarea.js"></script>*/
/* <script type="text/javascript" src="js/file.js"></script>*/
/* <script type="text/javascript" src="js/date.js"></script>*/
/* <script type="text/javascript" src="js/time.js"></script>*/
/* <script type="text/javascript" src="js/form.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* <div id="container">*/
/* 	<!--========== content start ==========-->*/
/* 	<div id="content">*/
/* 		<!--========== content-block1 start ==========-->*/
/* 		<div id="content-block1" class="content">*/
/* 			<hr class="redline">*/
/* 			<h3 class="title">ТРЕНИНГ &laquo;ПЕРВАЯ ПОМОЩЬ ВДАЛИ ОТ ГОРОДА&raquo;</h3>*/
/* 			<p>Для походников, путешественников, экстремалов</p>*/
/* 			<div class="training-introduction">*/
/* 				<div class="training-introduction-image"><img src="images/introduction-image.jpg" alt=""></div>*/
/* 				<div class="training-introduction-main">*/
/* 					<h5>Решили выбраться из душного города?<br><span>а знаете ли вы</span></h5>*/
/* 					<ul>*/
/* 						<li>какой набор медикаментов нужно взять на день, какой на 3 дня, 7 дней?</li>*/
/* 						<li>что делать при обморожении, при тепловом ударе?</li>*/
/* 						<li>какой набор медикаментов нужно взять на день, какой на 3 дня, 7 дней?</li>*/
/* 						<li>что делать при обморожении, при тепловом ударе?</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<hr class="separator">*/
/* 			<div class="training-introduction">*/
/* 				<div class="training-introduction-image"><img src="images/introduction-image2.jpg" alt=""></div>*/
/* 				<div class="training-introduction-main">*/
/* 					<h5>Записывайтесь на тренинг &laquo;Первая помощь вдали от города&raquo;<br><span>за 8 часов вы узнаете</span></h5>*/
/* 					<ul>*/
/* 						<li>приемы экстренной эвакуации пострадавших из зоны опасности</li>*/
/* 						<li>алгоритм оценки состояния пострадавшего</li>*/
/* 						<li>приемы экстренной эвакуации пострадавших из зоны опасности</li>*/
/* 						<li>алгоритм оценки состояния пострадавшего</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a href="#" class="training-data">ПОСМОТРЕТЬ ДАТУ ТРЕНИНГА</a>*/
/* 		</div>*/
/* 		<!--========== content-block1 end ==========-->*/
/* 		<!--========== content-block2 start ==========-->*/
/* 		<div id="wrapper-content-block2" class="wrapper-content">*/
/* 			<div id="content-block2" class="content">*/
/* 				<h3 class="title">ОСОБЕННОСТИ ТРЕНИНГА</h3>*/
/* 				<div id="training-features">*/
/* 					<div id="training-features-video">*/
/* 						<iframe src="https://www.youtube.com/embed/3tIno7I-UWw" allowfullscreen></iframe>*/
/* 					</div>*/
/* 					<div id="training-features-main">*/
/* 						<p><strong>Тренинг на 50% состоит из теории и на 50% из практики</strong></p>*/
/* 						<p>Получили методику &ndash; опробовали на практике. Тренироваться будете на других участниках группы (накладывать бинты, жгуты, повязки) и на манекенах (искусственное дыхание&hellip;). Добавить 3-4 фотографии или видеоролик с тренинга.</p>*/
/* 						<p>Получили методику &ndash; опробовали на практике. Тренироваться будете на других участниках группы (накладывать бинты, жгуты, повязки) и на манекенах (искусственное дыхание&hellip;). Добавить 3-4 фотографии или видеоролик с тренинга.</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!--========== content-block2 end ==========-->*/
/* 		<!--========== content-block3 start ==========-->*/
/* 		<div id="content-block3" class="content">*/
/* 			<hr class="redline">*/
/* 			<h3 class="title">КТО ПРОВОДИТ ТРЕНИНГ?</h3>*/
/* 			<div id="training-coaches">*/
/* 				<div class="coach">*/
/* 					<div class="coach-image"><img src="images/coach-image.jpg" alt=""></div>*/
/* 					<div class="coash-resume">*/
/* 						<h5>Иван Иванов</h5>*/
/* 						<p>Резюме ведущего в контексте темы. Нужно доказать, что ведущий &ndash; профи в этой теме. У него высшее медицинское. Он опытный походник. Он уже 10 лет проводит аналогичные тренинги и т.д. Можно дать резюме рядом с фото тренера.</p>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="coach">*/
/* 					<div class="coach-image"><img src="images/coach-image2.jpg" alt=""></div>*/
/* 					<div class="coash-resume">*/
/* 						<h5>Иван Иванов</h5>*/
/* 						<p>Резюме ведущего в контексте темы. Нужно доказать, что ведущий &ndash; профи в этой теме. У него высшее медицинское. Он опытный походник. Он уже 10 лет проводит аналогичные тренинги и т.д. Можно дать резюме рядом с фото тренера.</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a href="#" class="training-data">ПОСМОТРЕТЬ ДАТУ ТРЕНИНГА</a>*/
/* 			<hr class="separator">*/
/* 			<hr class="redline">*/
/* 			<h3 class="title">ОТЗЫВЫ УЧАСТНИКОВ</h3>*/
/* 			<div id="training-participants">*/
/* 				<div class="participant">*/
/* 					<div class="participant-image"><img src="images/participant-image.jpg" alt=""></div>*/
/* 					<div class="participant-review">*/
/* 						<p>2-3 отзыва представителей ЦА (в данном случае лучше путешественников). Если нет отзывов представителей ЦА, то общие. 2-3 отзыва представителей ЦА (в данном случае лучше путешественников).</p>*/
/* 						<h5>Иван Иванов</h5>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="participant">*/
/* 					<div class="participant-image"><img src="images/participant-image2.jpg" alt=""></div>*/
/* 					<div class="participant-review">*/
/* 						<p>2-3 отзыва представителей ЦА (в данном случае лучше путешественников). Если нет отзывов представителей ЦА, то общие. 2-3 отзыва представителей ЦА (в данном случае лучше путешественников).</p>*/
/* 						<h5>Иван Иванов</h5>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="participant">*/
/* 					<div class="participant-image"><img src="images/participant-image3.jpg" alt=""></div>*/
/* 					<div class="participant-review">*/
/* 						<p>2-3 отзыва представителей ЦА (в данном случае лучше путешественников). Если нет отзывов представителей ЦА, то общие. 2-3 отзыва представителей ЦА (в данном случае лучше путешественников).</p>*/
/* 						<h5>Иван Иванов</h5>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="participant">*/
/* 					<div class="participant-image"><img src="images/participant-image4.jpg" alt=""></div>*/
/* 					<div class="participant-review">*/
/* 						<p>2-3 отзыва представителей ЦА (в данном случае лучше путешественников). Если нет отзывов представителей ЦА, то общие. 2-3 отзыва представителей ЦА (в данном случае лучше путешественников).</p>*/
/* 						<h5>Иван Иванов</h5>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<a href="#" id="training-add-review">Добавить свой отзыв</a>*/
/* 			<form id="training-add-review-form" class="form" action="index.php" enctype="multipart/form-data" method="post">*/
/* 				<input class="required" type="text" placeholder="Ваше имя" maxlength="80" name="reviewerName">*/
/* 				<span id="training-add-review-form-filepole">Загрузить фото</span><input id="training-add-review-form-file" type="file" accept="image/*" name="reviewerPhoto"><label for="training-add-review-form-file">выбрать файл</label><br>*/
/* 				<textarea class="required" id="training-add-review-form-textarea" placeholder="Сообщение" maxlength="1000" name="reviewerComment"></textarea>*/
/* 				<input type="submit" value="ДОБАВИТЬ">*/
/* 			</form>*/
/* 		</div>*/
/* 		<!--========== content-block3 end ==========-->*/
/* 		<!--========== content-block4 start ==========-->*/
/* 		<div id="wrapper-content-block4" class="wrapper-content">*/
/* 			<div id="content-block4" class="content">*/
/* 				<h3 class="title">СТОИМОСТЬ ТРЕНИНГА</h3>*/
/* 				<div id="training-cost">*/
/* 					<div class="training-cost-column">*/
/* 						<h5>Рассказать, что входит в стоимость</h5>*/
/* 						<ul>*/
/* 							<li>раздаточный материал: рабочая тетрадь, памятка путешественнику, бинты, марли&hellip;</li>*/
/* 							<li>3 кофе-паузы с чаем и сладостями, обед</li>*/
/* 							<li>4 часа лекций</li>*/
/* 							<li>4 часа практики</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					<div class="training-cost-column">*/
/* 						<h5>Сравнить стоимость с ценностью</h5>*/
/* 						<ul>*/
/* 							<li>Кажется, что это дорого?</li>*/
/* 							<li>А сколько стоит ваша жизнь?</li>*/
/* 							<li>Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека.</li>*/
/* 							<li>А сколько стоит ваша жизнь?</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				<a href="#" class="training-data">ПОСМОТРЕТЬ ДАТУ ТРЕНИНГА</a>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!--========== content-block4 end ==========-->*/
/* 		<!--========== content-block5 start ==========-->*/
/* 		<div id="content-block5" class="content">*/
/* 			<hr class="redline">*/
/* 			<h3 class="title">ВСЕ ЕЩЕ СОМНЕВАЕТЕСЬ?</h3>*/
/* 			<div id="training-questions">*/
/* 				<div class="question">*/
/* 					<h5>Зачем мне идти на платный тренинг? Я узнаю то же самое бесплатно в интернете.</h5>*/
/* 					<p><span>Ответ:</span> Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека. Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека.</p>*/
/* 				</div>*/
/* 				<div class="question">*/
/* 					<h5>У меня нет свободного времени.</h5>*/
/* 					<p><span>Ответ:</span> Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека. Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека.</p>*/
/* 				</div>*/
/* 				<div class="question">*/
/* 					<h5>В автошколе были занятия по оказанию первой помощи, это не одно и то же?</h5>*/
/* 					<p><span>Ответ:</span> Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека. Кажется, что это дорого за тренинг? А сколько стоит ваша жизнь? Тренинг даст знания и навыки, которые могут спасти вашу жизнь или жизнь близкого человека.</p>*/
/* 				</div>*/
/* 			</div>*/
/* 			<hr class="separator">*/
/* 			<hr class="redline">*/
/* 			<h3 class="title">ЗАРЕГИСТРИРУЙТЕСЬ НА ТРЕНИНГ ДО 15 АПРЕЛЯ <br><span>И ПОЛУЧИТЕ ТАКОЙ-ТО БОНУС</span></h3>*/
/* 			<form id="training-registration-form" class="form" action="index.php" method="post">*/
/* 				<div id="training-registration-form-left">*/
/* 					<p>Выберите дату</p>*/
/* 					<input id="default-date" type="date" name="trainingDate">*/
/* 					<p>Выберите время</p>*/
/* 					<input id="default-time" type="time" name="trainingTime">*/
/* 				</div>*/
/* 				<div id="training-registration-form-right">*/
/* 					<input class="required" type="text" placeholder="Введите ваше имя" maxlength="80" name="participantName">*/
/* 					<input class="required" type="tel" placeholder="Введите ваш телефон" maxlength="80" name="participantPhone">*/
/* 					<input type="submit" value="ЗАПИСАТЬСЯ НА ТРЕНИНГ">*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 		<!--========== content-block5 end ==========-->*/
/* 	</div>*/
/* 	<!--========== content end ==========-->*/
/* </div>*/
/* {% endblock %}*/
