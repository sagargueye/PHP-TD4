<?php
if(! isset($valide))
{
	session_name('p1606501');
	session_start();
}

require_once (PATH_MODELS . 'FilmDAO.php');
require_once (PATH_MODELS . 'GenreDAO.php');

// Traitement de l'URL
if (isset($_GET['id']) && is_numeric($_GET['id']))
    $filmId = (int) $_GET['id'];
else {
    header('Logenion: index.php');
    exit();
}

// Appel du modèle
// Pour le film avec les données sur son genre
$FilmDAO = new FilmDAO(DEBUG);
$film = $FilmDAO->getById($filmId);

if (is_null($FilmDAO->getErreur()) && ! is_null($film)) {
    $genDAO = new GenreDAO(DEBUG);
    $gen = $genDAO->getById($film->getGenId());
}

// Traitement des erreurs
if (! is_null($FilmDAO->getErreur()) || (! is_null($film) && ! is_null($genDAO->getErreur()))) {
    $erreur = 'query';
}

if (! isset($erreur)) {
    if (is_null($film)) {
        $erreur = 'film_inexistant';
    }
}

// choix de l'alerte
if (isset($erreur)) {
    $alert = choixAlert($erreur);
} elseif (is_null($gen)) {
    $alert = choixAlert('genre_errone');
}

// appel de la vue
require_once (PATH_VIEWS . $page . '.php');
    