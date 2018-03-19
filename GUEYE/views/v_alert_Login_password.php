<?php


// Message d'alerte permettant d'afficher un message d'erreur si l'identifiant et/ou mot de passe incorecte

if($login_valide != $_POST['identifiant'] && $pwd_valide == $_POST['mdp'])
{
?>


	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong><?php echo "cet identifiant est inconnu !"; ?></strong>
	</div>
<?php
}else 
{
?>

	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong><?php echo "mot de pass incorrect !"; ?></strong>
	</div>

<?php	
}	//ERREUR_IDENTIFICATION
?>