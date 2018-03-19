<?php

session_name('p1606501');
session_start();


require_once (PATH_MODELS . 'FilmDAO.php');
require_once (PATH_MODELS . 'GenreDAO.php');

if(isset($_POST['search']))
{
	$search= htmlspecialchars($_POST['search']);
	
	$cherchefilmDAO=new FilmDAO(DEBUG);
	$cherchefilm=$cherchefilmDAO->getbytitre($search);
	
	if($cherchefilm==null)
	{
		$alert=choixAlert('filmrecherche_invalide');
	}
	else
	{
		$nbP = count($cherchefilm);
		$alert = choixAlert('selection_ok', $nbP);
	}
		
	
	
}
 
 
require_once(PATH_VIEWS.$page.'.php'); 
