<!--  En tête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte 1 -->
<?php require_once(PATH_VIEWS.'alert1.php');?>


<!--  Début de la page -->

<!-- Deuxième partie lorsque l'utilisateur appuie sur une image -->
<?php if(isset($_GET['idi']))
{
?>

	<h1>Les détails du film</h1>

	<!--  Affichage de l'image du film et du tableau contenant toutes ses informations  -->

	<div class = "col-md-6 col-sm-6 col-xs-12"> 
		<img
        		src="<?= PATH_IMAGES.$image?>"
        		alt="Affiche du film"
        		height="800px" 
        		width="500px" 
        	/>	
	</div>

	<div class = "col-md-6 col-sm-6 col-xs-12"> 
		<table class="table table-bordered"  > 
	   		 <tr>
				<td>Titre</td>
				<td><?=$titre?></td>
			</tr>
			<tr>
				<td>Résumé</td>
				<td><?=$resu?></td>
			</tr>
			<tr>
				<td>Nom du fichier</td>
				<td><?=$image?></td>
			</tr>
			<tr>
				<td>Genre</td>
				<td><a href="index.php?genre=<?=$genre?>"><?=$genre?></a></td>
			</tr>
		</table>
	</div>


<?php
} 
else //Première partie affichage de la page principale -->
{
?>	

	<!--Formulaire permettant d'afficher les éléments de la combobox en fonction des informations stocker dans la table genre-->
	<form action="index.php" method="post"> 
 		<label>Quels films souhaitez-vous afficher ?  
			<select name="liste">
  				<option value="Tous les genres" selected>Tous les genres</option>
  				<?php foreach  ($ge as $val) { ?>
					<option value="<?=$val->getlibelle()?>" <?php if(isset($liste)) if($liste==$val->getlibelle()) echo "selected"; ?>><?php echo $val->getlibelle()?></option>
  				<?php } ?>
			</select>
			<input type="submit" value="<?= SUBMIT ?>">
		</label>
	</form> 

	<h1><?php  echo $t;?></h1>

	<!--  Zone message d'alerte 2-->
	
	<?php require_once(PATH_VIEWS.'alert2.php');?>
	
	<!--Boucle permettant d'afficher toutes les images des film en fonction du genre sélectionné dans la combobox-->
	<?php foreach($aid as $val)
	{ ?>
		<a href="index.php?idi=<?=$val->getid()?>"/>
     		<img
        		src="<?= PATH_IMAGES.$val->getnomfichier()?>"
    			alt="Affiche du film"
    			height="300px" 
    			width="200px" 
    		/> 
	</a>
	<?php 
	} 

}
?>


<!--  Fin de la page -->


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 
