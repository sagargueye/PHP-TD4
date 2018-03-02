<?php
// méssage d'alerte permettant d'afficher un méssage d'erreur si aucun film n'est dans cette catégorie
if($cpt==0) // aucun film n'est compté 
{
?>
	<div class="alert alert-<?= isset($alert['classeAlert']) ? $alert['classAlert'] : 'danger' ?>">
		<strong>Il n'y a aucun film dans cette catégorie</strong>
	</div>
<?php
}
?>





