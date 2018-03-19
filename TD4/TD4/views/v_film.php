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
// En tête de page
?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>


<!--  Début de la page -->
<?php
if (! isset($erreur)) {
    ?>
<h1><?= TITRE_PAGE_FILM ?></h1>

<!--  Photo  -->
<div class="col-md-6 col-sm-6 col-xs-12">
	<img width="400px" height="500px" src="<?=PATH_IMAGES.$film->getNomFichier()?>" alt="<?=$film->getResume()?>" />
</div>
<div class="col-md-6 col-sm-6 col-xs-12">
	<table class="table table-bordered">
		<tr>
			<th><?= TITRE_FILM ?></th>
			<td><?=$film->getTitre()?></td>
		</tr>
		<tr>
			<th><?= RESUME ?></th>
			<td><?=$film->getResume()?></td>
		</tr>
		<tr>
			<th><?= NOMFICH ?></th>
			<td><?=$film->getNomFichier()?></td>
		</tr>
		<th><?= GENRE ?></th>
		<td><a href="index.php?genre=<?= $gen->getId()?>"><?=$gen->getLibelle()?></td>
		</tr>
	</table>
	<br /> 
	<br /> 
	<?php if(isset($_SESSION['logged']))
	{
	?>
		<FORM method="POST" action="index.php?supprid=<?= $film->getId()?>">
			<input class="btn btn-danger" type="submit" value="<?= SUPPR ?>">
		</FORM>
	<?php
	}
	?>
	
</div>
<!--  Fin de la page -->

<?php
}
?>

<!--  Pied de page -->
<?php

require_once (PATH_VIEWS . 'footer.php'); 
