<?php

include "config.php";

$template = $twig->loadTemplate("partners.html");
echo $template->render(array());

?>