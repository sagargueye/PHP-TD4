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

<!-- Formulaire -->
<FORM method="POST" action="index.php">
	<label> <?= LAB_GENRE ?>
     <select name="genre">
			<option value="0">Tous les genres</option>
  		 <?php
    
    foreach ($genres as $i) {
        ?>
         <option value="<?= $i->getId() ?>"
				<?= (isset($genId) and ($genId == $i->getId())) ? "selected" : "" ?>> <?= $i->getLibelle() ?> </option>
  		<?php
    }
    ?>
     </select>
	</label> <input type="submit" value="<?= SUBMIT ?>">
</FORM>

<h1><?= isset($libelle) ? TITRE_PAGE_ACCUEIL_GENRE.' '.$libelle : TITRE_PAGE_ACCUEIL_TOUS ?></h1>

<!--  FILMS  -->


<?php

// affichage de la boucle de messages
foreach ($films as $i) {
    ?>

	
<a href="index.php?page=film&id=<?=$i->getId()?>"><span></span> <img
	height="250px" width="180px" src="<?=PATH_IMAGES.$i->getNomFichier()?>" title="<?=$i->getTitre()?>" alt="<?=$i->getResume()?>" />
	
<?php
}
?>
<!--  Fin de la page --> <!--  Pied de page -->
<?php

require_once (PATH_VIEWS . 'footer.php'); 
