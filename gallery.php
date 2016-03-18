<?php

include "config.php";

$template = $twig->loadTemplate("gallery.html");
echo $template->render(array());

?>