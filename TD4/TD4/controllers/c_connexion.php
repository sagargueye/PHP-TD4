<?php 
session_name('p1606501');
session_start();



if((isset($_POST['nom']))&&(isset($_POST['mdp'])))
{
	$nom=htmlspecialchars ($_POST['nom']);
	$mdp=htmlspecialchars  ($_POST['mdp']);

	
	if(($nom==ADMINISTRATEUR_ID)&&(sha1($mdp)==ADMINISTRATEUR_MDP))
	{

		$_SESSION['logged']=1;
		
	
	}
	else
	{
		
		if($nom!=ADMINISTRATEUR_ID)
		{
				$alert=choixAlert('identifiant_invalide');
		}
		else
		{
					if(sha1($mdp)!=ADMINISTRATEUR_MDP)
					{
						$alert=choixAlert('motdepasse_invalide');
					}
		}
	}
	
	
}

if(isset($_SESSION['logged']))
{
	$alert=choixAlert('connexion_valide');
}

require_once(PATH_VIEWS.$page.'.php'); 

