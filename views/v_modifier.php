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



<h1>Modifier le film </h1>

<form action="index.php?page=modifier&modid=<?=$modid?>" method="post" "> 


<div class="form-group row" >
  <label for="example-text-input"  class="col-2 col-form-label">Titre du film :</label>
  <div class="col-10" >
    <input  name="titrefilm" class="form-control" type="text" id="example-text-input" value="<?= isset($titrefilm) ? $titrefilm : ""?>">
  </div>
</div>

  <div class="form-group">
    <label for="exampleTextarea">Résumé du film :</label>
    <textarea  name="resumefilm" class="form-control" id="exampleTextarea" rows="3" ><?= isset($resumefilm) ? $resumefilm : ""?></textarea>
  </div>
  
 <label>Choisir un genre<select name="genrefilm" class="custom-select">
 <option value="Tous les genres" selected>Tous les genres</option>
	<?php foreach($genfilm as $val) { ?>
	<option value="<?=$val->getlibelle()?>" <?= (isset($genrefilm) and ($val->getlibelle() == $genrefilm)) ? "selected" : "" ?>><?php echo $val->getlibelle()?></option>
	<?php } ?>

</select></label>

<div></div>

<input type="submit" value="<?= ENVOYER ?>">

</form>

<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
