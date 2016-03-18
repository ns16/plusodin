<?php

include "config.php";

$template = $twig->loadTemplate("students.html");
echo $template->render(array());

?>