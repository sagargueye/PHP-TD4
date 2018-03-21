<?php
/*
 * TP PHP
 * Vue menu
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 * menu: http://www.w3schools.com/bootstrap/bootstrap_ref_comp_navs.asp
 */
?>
<!-- Menu du site -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
				<li <?php echo ($page=='accueil' ? 'class="active"':'')?>>
					<a href="index.php">
						<?= MENU_ACCUEIL ?>
					</a>
				</li>
	</ul>
	

	
	
	
	<?php if(isset($_SESSION['logged'])) 
	{
	?>
    <ul class="nav navbar-nav navbar-right">
    	<li style="margin-top : 8px">
    		<form method="POST" class="form-inline" id="search" action="index.php?page=recherche">
			  <input size="25" id="search" name="search" class="form-control" value="<?= isset($search) ? $search : ""?>" placeholder="<?= isset($search) ? "" : 'Rechercher un nom de film'?>" aria-label="Search" type="search">
			  <button class="btn btn-success" type="submit"><?= CHERCHER ?></button>
			</form>
    	</li>	
	
				<li <?php echo ($page=='deconnexion' ? 'class="active"':'')?>>
					<a href="index.php?deconnexion">
						<?= MENU_DECONNEXION ?>
					</a>
				</li>						
    </ul>
    <ul class="nav navbar-nav">
				<li <?php echo ($page=='ajouter' ? 'class="active"':'')?>>
					<a href="index.php?page=ajouter">
						<?= MENU_AJOUTER ?>
					</a>
				</li>
	</ul>	
	<?php
	}
	else
	{
	?>
	
    <ul class="nav navbar-nav navbar-right">
    	<li style="margin-top : 8px">
    		<form  method="POST" class="form-inline" id="search" action="index.php?page=recherche">
			  <input size="25" id="search" name="search" class="form-control " value="<?= isset($search) ? $search : ""?>" placeholder="<?= isset($search) ? "" : 'Rechercher un nom de film'?>" aria-label="Search" type="search">
			  <button class="btn btn-success" type="submit"><?= CHERCHER ?></button>
			</form>
    	</li>	
	
		<li <?php echo ($page=='connexion' ? 'class="active"':'')?>>
			<a href="index.php?page=connexion"><?= MENU_CONNEXION ?></a>
		</li>
							
    </ul>
	
	
	
	
	<?php
	}
	?>
	
	
  </div>
</nav>


