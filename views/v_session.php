<!--  En tête de page -->

<!DOCTYPE html>
<html>
	<head>
		<title><?= TITRE ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="Language" content="<?= LANG ?>"/>
		<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1; user-scalable=0"/> 

		<link href="<?= PATH_CSS ?>bootstrap.css" rel="stylesheet"> 
		<link href="<?= PATH_CSS ?>css.css" rel="stylesheet">
		
		<script type="text/javascript" src="<?= PATH_SCRIPTS ?>jquery-3.1.1.js"></script>
		<script type="text/javascript" src="<?= PATH_SCRIPTS ?>jquery.validate.min.js"></script>
		<script type="text/javascript" src="<?= PATH_SCRIPTS ?>monjs.js"></script>
	</head> 
	<body>
		<!-- En-tête -->
		<header class="header" >
			<section class="container" >
				<div class = "row">
					<div class = "col-md-2 col-sm-2 col-xs-12">
						<img src="<?= PATH_LOGO ?>" alt="<?= LOGO ?>" class="img-circle">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-12">
						<h2><?= TITRE ?></h2>
					</div>
				</div>
			</section>
		</header>
		<!-- Menu -->
			<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<ul class="nav navbar-nav">
					<li <?php echo ($page=='accueil')?>>
						<a href="index.php">
							<?= MENU_ACCUEIL ?>
						</a>
					</li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
					<li <?php echo ($page=='connexion' )?>  class=active>
						<a href="session.php">
							<?= MENU_CONNEXION ?>
						</a>
					</li>
		</ul>
	  </div>
	</nav>
		
		<!-- Vue -->
			<section class="container">
				<div class = "row">



<!--  contenue de la page-->
<h1> Connexion pour modifier le catalogue</h1>

<!--Formulaire permettant de se connecter à une session-->
<form method="post" action="identification.php">
   <p>
       <label for="identifiant"><b>Identifiant:</b></label>
       <input type="text" name="identifiant"  />
       <label for="password"><b>Votre mot de passe:</b></label>
       <input type="password" name="mdp" />
	   <input type="submit" value="se connecter">
   </p>
</form>

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 