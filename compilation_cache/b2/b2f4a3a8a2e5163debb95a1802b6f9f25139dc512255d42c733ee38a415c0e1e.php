<?php

/* students.html */
class __TwigTemplate_38006848cc472d5c865baf8b06b9c327fde620112b22f53d99b8238baad8fc27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "students.html", 1);
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
        echo "У нас учились - ";
    }

    // line 5
    public function block_files($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"css/students.css\">
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
\t\t<h3 class=\"title\">У НАС УЧИЛИСЬ</h3>
\t\t<div class=\"student\">
\t\t\t<div class=\"student-image not-clickable\"><img src=\"images/student-image.jpg\" alt=\"\"></div>
\t\t\t<div class=\"student-review\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Ea perspiciatis odio voluptatibus incidunt. Illum, ratione nam veritatis quam beatae maxime quidem rerum architecto. Nesciunt molestias, asperiores illum, nisi cumque sequi fugit earum sapiente tenetur corporis, inventore enim, dolorem deleniti debitis aperiam. Maxime cumque a, autem.
\t\t\t</div>
\t\t\t<div class=\"student-contacts not-clickable\">
\t\t\t\t<p class=\"student-contacts-phone\"><img src=\"images/phone.png\" alt=\"\"><span>+7 (495) 241-15-44</span></p>
\t\t\t\t<p class=\"student-contacts-site\"><img src=\"images/site.png\" alt=\"\"><span>www.domain.ru</span></p>
\t\t\t</div>
\t\t\t<hr class=\"separator\">
\t\t</div>
\t\t<div class=\"student\">
\t\t\t<div class=\"student-image not-clickable\"><img src=\"images/student-image2.jpg\" alt=\"\"></div>
\t\t\t<div class=\"student-review\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quaerat commodi ut nam, porro vel laboriosam voluptatibus, quisquam, est numquam incidunt excepturi hic expedita esse facere doloremque. Deserunt voluptas totam, quidem quas molestiae, illum debitis deleniti doloribus laboriosam aspernatur ea quis, voluptatum vitae! Facilis, sint.
\t\t\t</div>
\t\t\t<div class=\"student-contacts not-clickable\">
\t\t\t\t<p class=\"student-contacts-phone\"><img src=\"images/phone.png\" alt=\"\"><span>+7 (495) 241-15-44</span></p>
\t\t\t\t<p class=\"student-contacts-site\"><img src=\"images/site.png\" alt=\"\"><span>www.domain.ru</span></p>
\t\t\t</div>
\t\t\t<hr class=\"separator\">
\t\t</div>
\t\t<div class=\"student\">
\t\t\t<div class=\"student-image not-clickable\"><img src=\"images/student-image3.jpg\" alt=\"\"></div>
\t\t\t<div class=\"student-review\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus minus porro nisi, iusto accusamus aperiam. Odio nemo in asperiores eaque eligendi impedit amet dolor id, eos quos nobis dolorem beatae expedita, laborum itaque fugit accusamus consequatur tempore fuga perspiciatis deserunt saepe nulla! Nostrum, reprehenderit, commodi.
\t\t\t</div>
\t\t\t<div class=\"student-contacts not-clickable\">
\t\t\t\t<p class=\"student-contacts-phone\"><img src=\"images/phone.png\" alt=\"\"><span>+7 (495) 241-15-44</span></p>
\t\t\t\t<p class=\"student-contacts-site\"><img src=\"images/site.png\" alt=\"\"><span>www.domain.ru</span></p>
\t\t\t</div>
\t\t\t<hr class=\"separator\">
\t\t</div>
\t\t<div class=\"student\">
\t\t\t<div class=\"student-image not-clickable\"><img src=\"images/student-image4.jpg\" alt=\"\"></div>
\t\t\t<div class=\"student-review\">
\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nisi veritatis quo, minima laudantium error in, quaerat provident ipsum, quis minus perferendis mollitia. Delectus dolorum tempora tempore numquam quia dolore cum cumque sed amet nulla quos nobis recusandae similique unde autem consectetur, provident vel porro!
\t\t\t</div>
\t\t\t<div class=\"student-contacts not-clickable\">
\t\t\t\t<p class=\"student-contacts-phone\"><img src=\"images/phone.png\" alt=\"\"><span>+7 (495) 241-15-44</span></p>
\t\t\t\t<p class=\"student-contacts-site\"><img src=\"images/site.png\" alt=\"\"><span>www.domain.ru</span></p>
\t\t\t</div>
\t\t\t<hr class=\"separator\">
\t\t</div>
\t</div>
\t<!--========== content end ==========-->
</div>
";
    }

    public function getTemplateName()
    {
        return "students.html";
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
/* {% block title %}У нас учились - {% endblock %}*/
/* */
/* {% block files %}*/
/* <link rel="stylesheet" href="css/students.css">*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* <div id="container">*/
/* 	<!--========== content start ==========-->*/
/* 	<div id="content">*/
/* 		<hr class="redline">*/
/* 		<h3 class="title">У НАС УЧИЛИСЬ</h3>*/
/* 		<div class="student">*/
/* 			<div class="student-image not-clickable"><img src="images/student-image.jpg" alt=""></div>*/
/* 			<div class="student-review">*/
/* 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea perspiciatis odio voluptatibus incidunt. Illum, ratione nam veritatis quam beatae maxime quidem rerum architecto. Nesciunt molestias, asperiores illum, nisi cumque sequi fugit earum sapiente tenetur corporis, inventore enim, dolorem deleniti debitis aperiam. Maxime cumque a, autem.*/
/* 			</div>*/
/* 			<div class="student-contacts not-clickable">*/
/* 				<p class="student-contacts-phone"><img src="images/phone.png" alt=""><span>+7 (495) 241-15-44</span></p>*/
/* 				<p class="student-contacts-site"><img src="images/site.png" alt=""><span>www.domain.ru</span></p>*/
/* 			</div>*/
/* 			<hr class="separator">*/
/* 		</div>*/
/* 		<div class="student">*/
/* 			<div class="student-image not-clickable"><img src="images/student-image2.jpg" alt=""></div>*/
/* 			<div class="student-review">*/
/* 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quaerat commodi ut nam, porro vel laboriosam voluptatibus, quisquam, est numquam incidunt excepturi hic expedita esse facere doloremque. Deserunt voluptas totam, quidem quas molestiae, illum debitis deleniti doloribus laboriosam aspernatur ea quis, voluptatum vitae! Facilis, sint.*/
/* 			</div>*/
/* 			<div class="student-contacts not-clickable">*/
/* 				<p class="student-contacts-phone"><img src="images/phone.png" alt=""><span>+7 (495) 241-15-44</span></p>*/
/* 				<p class="student-contacts-site"><img src="images/site.png" alt=""><span>www.domain.ru</span></p>*/
/* 			</div>*/
/* 			<hr class="separator">*/
/* 		</div>*/
/* 		<div class="student">*/
/* 			<div class="student-image not-clickable"><img src="images/student-image3.jpg" alt=""></div>*/
/* 			<div class="student-review">*/
/* 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus minus porro nisi, iusto accusamus aperiam. Odio nemo in asperiores eaque eligendi impedit amet dolor id, eos quos nobis dolorem beatae expedita, laborum itaque fugit accusamus consequatur tempore fuga perspiciatis deserunt saepe nulla! Nostrum, reprehenderit, commodi.*/
/* 			</div>*/
/* 			<div class="student-contacts not-clickable">*/
/* 				<p class="student-contacts-phone"><img src="images/phone.png" alt=""><span>+7 (495) 241-15-44</span></p>*/
/* 				<p class="student-contacts-site"><img src="images/site.png" alt=""><span>www.domain.ru</span></p>*/
/* 			</div>*/
/* 			<hr class="separator">*/
/* 		</div>*/
/* 		<div class="student">*/
/* 			<div class="student-image not-clickable"><img src="images/student-image4.jpg" alt=""></div>*/
/* 			<div class="student-review">*/
/* 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum nisi veritatis quo, minima laudantium error in, quaerat provident ipsum, quis minus perferendis mollitia. Delectus dolorum tempora tempore numquam quia dolore cum cumque sed amet nulla quos nobis recusandae similique unde autem consectetur, provident vel porro!*/
/* 			</div>*/
/* 			<div class="student-contacts not-clickable">*/
/* 				<p class="student-contacts-phone"><img src="images/phone.png" alt=""><span>+7 (495) 241-15-44</span></p>*/
/* 				<p class="student-contacts-site"><img src="images/site.png" alt=""><span>www.domain.ru</span></p>*/
/* 			</div>*/
/* 			<hr class="separator">*/
/* 		</div>*/
/* 	</div>*/
/* 	<!--========== content end ==========-->*/
/* </div>*/
/* {% endblock %}*/
