<!-- entête du site -->
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
		
		
<!-- Menu du site -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
				<li <?php echo ($page=='accueil')?> >
					<a href="index.php">
						<?= MENU_ACCUEIL ?>
					</a>
				</li>
    </ul>
	<ul class="nav navbar-nav">
				<li <?php echo ($page=='masession.php')?>  class=active>
					<a href="masession.php">
						Ajouter un film
					</a>
				</li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
				<li <?php echo ($page=='connexion')?>  >
					<a href="session.php">
						Deconnexion
					</a>
				</li>
    </ul>
  </div>
</nav>

<!-- Vue -->
			<section class="container">
				<div class = "row">

<!--  contenue de la page-->

<h1>Quel film ?</h1>
<FORM action="index.php" method =" POST "enctype =" multipart /form - data ">


	<div class="form-group">
		<label for="exampleInputFile">choisir le fichier:</label>
		<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
		<small id="fileHelp" class="form-text text-muted"></small>
	</div>
	<div>
		 <label for="exampleInputFile"><b>Titre du film:</b></label>
		 <br>
		 <input type =" submit " value =" ex: titanic">
		 <br>
	</div> 
	<div class="form-group">
	<br>
    <label for="exampleTextarea">Resumé du film :</label><br>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  
  <div class="form-group">
  <br>
    <label for="exampleSelect1">choisir un genre:</label><br>
    <select name="liste" class="form-control" id="exampleSelect1">
  			<?php foreach  ($ge as $val) { ?>
			<option value="<?=$val->getlibelle()?>" <?php if(isset($liste)) if($liste==$val->getlibelle()) echo "selected"; ?>><?php echo $val->getlibelle()?></option>
  			<?php } ?>
    </select>
  </div>
  
	<div>
		<br>
		<button type="submit" class="btn btn-primary">valider</button>
	</div>


</FORM >


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 