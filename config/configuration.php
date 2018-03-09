<?php
 
const DEBUG = true; // production : false; dev : true

// Accès base de données
const BD_HOST = 'localhost';
const BD_DBNAME = 'gueye';
const BD_USER = 'root';
const BD_PWD = 'Gueye1997';

// Langue du site
const LANG ='FR-fr';

// Paramètres du site : nom de l'auteur ou des auteurs
const AUTEUR = 'sagar gueye'; 

//dossiers racines du site
define('PATH_CONTROLLERS','./controllers/c_');
define('PATH_ENTITY','./entity/');
define('PATH_ASSETS','./assets/');
define('PATH_LIB','./lib/');
define('PATH_MODELS','./models/');
define('PATH_VIEWS','./views/v_');
define('PATH_TEXTES','./languages/');

//sous dossiers
define('PATH_CSS', PATH_ASSETS.'css/');
define('PATH_IMAGES', PATH_ASSETS.'images/');
define('PATH_SCRIPTS', PATH_ASSETS.'scripts/');
//define("PATH_GALERIE",'galerie/');
//define('PATH_LOG','log/');

//fichiers
//define('LOG_BDD','logbdd.txt');
define('PATH_LOGO', PATH_IMAGES.'logo.png');
define('PATH_MENU', PATH_VIEWS.'menu.php');
define('PATH_SESSION', PATH_VIEWS.'session.php');
