<?php
// Initialisation des paramètres du site
require_once('./config/configuration.php');
require_once('./lib/foncBase.php');
require_once(PATH_TEXTES.LANG.'.php');


$page="masession";
//appel du controller
require_once(PATH_CONTROLLERS.$page.'.php'); 

?>