<?php

include "config.php";

$template = $twig->loadTemplate("main.html");
echo $template->render(array());

?>