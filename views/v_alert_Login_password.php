<?php


// Message d'alerte permettant d'afficher un message d'erreur si l'identifiant et/ou mot de passe incorecte

{ 
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong><?php echo ERREUR_IDENTIFICATION; ?></strong>
	</div>
<?php
}