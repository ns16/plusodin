<?php

include "config.php";

$template = $twig->loadTemplate("blog.html");
echo $template->render(array());

?>