
<!--connection !-->

<? php
// Lancement du système de sessions
session_name (’pxxxxxx ’);
session_start ();
// création et affectation dans une variable de session toto
$_SESSION [’toto ’] = 1;
?>

<!--deconnection lorsqu'on clique sur deconnection!-->

<? php
session_name (’pxxxxxx ’);
session_start ();
// Delete the session cookie
if ( ini_get (" session . use_cookies ")) {
$params = session_get_cookie_params ();
setcookie ( session_name () , ’’, -1,
$params [" path "], $params [" domain "],
$params [" secure "], $params [" httponly "]
);
}
// Détruit toutes les variables de session
$_SESSION = array ();
// Détruit la session .
session_destroy ();
?>


<!--deconnection automatique!-->
<? php
$value = ’toto ’;
// Création du cookie qui expirera dans une heure
accessible en HTTP seulement
setcookie (" TestCookie ", $value , time () +3600 , null ,
null , false , true );
?>
<? php