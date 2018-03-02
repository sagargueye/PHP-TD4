<?php

// Message d'alerte permettant d'afficher le nombre de film sélectionné
if(isset($cpt))
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'success' ?>">
		<strong><?=$cpt?> film(s) sélectionné(s)</strong>
	</div>
<?php
}

// Message d'alerte permettant d'afficher un méssage d'erreur si l'id d'un film n'existe pas
if($page==404)
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong>Identifiant de film incorrect dans l'URL</strong>
	</div>
<?php
}



