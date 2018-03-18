<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
//  En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->

<?php if(isset($_SESSION['logged']))
{
?>
	
<?php
}
else
{
?>
	<h1><?= TITRE_PAGE_CONNEXION ?></h1>

	<form action="index.php?page=connexion" method="post">
	<label><?= NOM ?>
		<input type="text" name = "nom" />
	</label>
	<label><?= MDP ?>
		<input type="text" name = "mdp" />
	</label> 
	<input type="submit" value="<?= CONNECTER ?>">
	</form>
<?php
}
?>

<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
