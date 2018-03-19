<?php
session_name('p1606501');
session_start();


require_once (PATH_MODELS . 'FilmDAO.php');
require_once (PATH_MODELS . 'GenreDAO.php');

//Traitement déconnexion

if(isset($_GET['deconnexion']))
{
	if(ini_get("session.use_cookies")) {
	$params = session_get_cookie_params();
	setcookie(session_name(), '', -1,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);
	
	$_SESSION = array();
	session_destroy();
	
}

}


//Traitement suppression d'un film
if (isset($_GET['supprid']))
{
	$supprid = (int) $_GET['supprid'];
	
	$supprfilmDAO= new FilmDAO(DEBUG);
	$supprfilm= $supprfilmDAO->getById($supprid);
	$supprimage=$supprfilm->getNomFichier();
	
	unlink("assets/images/{$supprimage}"); 
	
	$supprfilmDAO->supprfilm($supprid);
}


// Traitement du formulaire
if (isset($_POST['genre'])) {
    if (is_numeric($_POST['genre'])) {
        $genId = (int) $_POST['genre'];
    }
}
// traitement de l'URL
if (isset($_GET['genre'])) {
    if (is_numeric($_GET['genre'])) {
        $genId = (int) $_GET['genre'];
    }
}

// 0 correspond à toutes les films
if (! isset($genId))
    $genId = 0;

// Appel du modèle
// Pour les films et les genres
$genDAO = new GenreDAO(DEBUG);
$genres = $genDAO->getAll();
$FilmDAO = new FilmDAO(DEBUG);
if (isset($genId) and $genId != 0) {
    $films = $FilmDAO->getAll($genId);
    $selectedGen = $genDAO->getById($genId);
} else
    $films = $FilmDAO->getAll();

// Traitement des erreurs
if (! is_null($FilmDAO->getErreur()) || ! is_null($genDAO->getErreur())) {
    $erreur = 'query';
}

if (! isset($erreur)) {
    if (isset($selectedGen))
        if (! is_null($selectedGen))
            $libelle = $selectedGen->getLibelle();
        else
            $erreur = 'query';
    $nbP = count($films);
    if ($nbP == 0)
        $erreur = 'aucun_film_selectionne';
}

// choix de l'alerte
if (isset($erreur)) {
    $alert = choixAlert($erreur);
} elseif (isset($nbP)) {
    $alert = choixAlert('selection_ok', $nbP);
}

// appel de la vue
require_once (PATH_VIEWS . $page . '.php');
        