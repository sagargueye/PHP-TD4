<?php 
session_name('p1606501');
session_start();

if(ini_get("session.use_cookies")) {
	$params = session_get_cookie_params();
	setcookie(session_name(), '', -1,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);
	
	$_SESSION = array();
	session_destroy();
	
}
$page='connexion';

require_once(PATH_VIEWS.$page.'.php'); 

