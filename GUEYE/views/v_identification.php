<!--  En tête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte 1 -->
<?php require_once(PATH_VIEWS.'alert_Login_password.php');?>
 

 
 
 
 
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