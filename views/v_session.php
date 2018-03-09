<!--  En tête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>


<!--  contenue de la page-->
<h1> Connexion pour modifier le catalogue</h1>

<!--Formulaire permettant de se connecter à une session-->
<form method="post" action="masession.php">
   <p>
       <label for="identifiant"><b>Identifiant</b> :</label>
       <input type="text" name="identifiant" id="identifiant" />
       <label for="pass"><b>Votre mot de passe</b> :</label>
       <input type="password" name="pass" id="pass" />
	   <input type="submit" value="se connecter">
   </p>
</form>

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php'); 