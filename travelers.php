<?php

include "config.php";

$template = $twig->loadTemplate("travelers.html");
echo $template->render(array());

?>