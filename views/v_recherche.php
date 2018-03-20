<?php
/*
 * TP PHP
 * Vue page 404
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
?>
<?php require_once(PATH_VIEWS.'header.php');?>
<?php
require_once (PATH_VIEWS . 'alert.php');
?>

<?php if(isset($nbP))
{
?>
<h1><?= FILMCHERCHE ?></h1>
<?php
}
?>

<?php
foreach ($cherchefilm as $i) {
    ?>
	
<a href="index.php?page=film&id=<?=$i->getId()?>"><span></span> <img
	height="250px" width="180px" src="<?=PATH_IMAGES.$i->getNomFichier()?>" title="<?=$i->getTitre()?>" alt="<?=$i->getResume()?>" />
	
<?php
}
?>


<?php
require_once (PATH_VIEWS . 'footer.php'); 
