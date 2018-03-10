<?php
	
// Initialisation des paramètres du site
require_once('./config/configuration.php');
require_once('./lib/foncBase.php');
require_once(PATH_TEXTES.LANG.'.php');

	
	
    // On définit un identifiant et un mot de passe de base : admin .
    $login_valide = admis_user;
    $pwd_valide = admis_pwd;

    // on teste si nos variables sont définies
    if (isset($_POST['identifiant']) && isset($_POST['mdp'])) {

    	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
    	if ($login_valide == $_POST['identifiant'] && $pwd_valide == $_POST['mdp']) {
    		// dans ce cas, tout est ok, on peut démarrer notre session

    		// on la démarre :)
    		session_start ();
    		// on enregistre les paramètres de notre visiteur comme variables de session ($identifiant et $mdp)
    		$_SESSION['identifiant'] = $_POST['identifiant'];
    		$_SESSION['mdp'] = $_POST['mdp'];

    		// on redirige notre visiteur vers sa session
    		header ('location: masession.php');
    	}
    	else {
    		// L'identifiant et/ou le mdp n'a pas été reconnu. On utilise alors un message d'erreur lui signalant ce fait
			//$page="identification";
			//appel du controller
			//require_once(PATH_CONTROLLERS.$page.'.php'); 
			$page="identification";
			require_once(PATH_VIEWS.$page.'.php');
			
    	}
    }
    else {
    	echo 'Les variables du formulaire ne sont pas déclarées.';
    }
    ?>