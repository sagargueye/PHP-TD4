<?php

function choixAlert($message, $nbP = null)
{
    $alert = array();
    switch ($message) {
        case 'aucun_film_selectionne':
            $alert['messageAlert'] = AUCUN_FILM;
            break;
        case 'filmrecherche_invalide':
            $alert['messageAlert'] = ERREUR_FILMCHERCHE;
            break;
        case 'film_inexistant':
            $alert['messageAlert'] = ID_FILM_INCORRECT;
            break;
        case 'genre_inexistant':
            $alert['messageAlert'] = ID_GEN_INCORRECT;
            $alert['classAlert'] = 'warning';
            break;
        case 'query':
            $alert['messageAlert'] = ERREUR_QUERY;
            break;
        case 'connexion':
            $alert['messageAlert'] = ERREUR_CONNEXION;
            break;
        case 'url_non_valide':
            $alert['messageAlert'] = TEXTE_PAGE_404;
            break;
        case 'selection_ok':
            if (isset($nbP)) {
                if ($nbP === 0)
                    $alert['classAlert'] = 'warning';
                else
                    $alert['classAlert'] = 'success';
                $alert['messageAlert'] = $nbP . ' ' . FILM;
                break;
            }
	    case 'login' :
				$alert['messageAlert'] = ERREUR_INSCRIPTION;
				break;

			
	    case 'identifiant_invalide' :
      $alert['messageAlert'] = ERREUR_IDENTIFIANT;	
		break;
    case 'motdepasse_invalide' :
      $alert['messageAlert'] = ERREUR_MOTDEPASSE;	  	  
      break;
	case 'connexion_valide' :
	  $alert['classAlert'] = 'success';
      $alert['messageAlert'] = CONNEXION_VALIDE;
	  break;
	  
	case 'ajout_film':
		
		if(isset($nbP))
		{
			$alert['classAlert'] = 'danger';
			$alert['messageAlert'] = $nbP;
			break;
		}
		
		
        default:
            $alert['messageAlert'] = MESSAGE_ERREUR;
    }
    return $alert;
}
