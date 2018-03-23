<?php 
session_name('p1606501');
session_start();

require_once (PATH_MODELS . 'FilmDAO.php');
require_once (PATH_MODELS . 'GenreDAO.php');


$gDAO=new GenreDAO(DEBUG);
$fDAO=new FilmDAO(DEBUG);

$erreur_ajout=null;


$modid = (int) $_GET['modid'];

$film=$fDAO->getById($modid);
$genre=$gDAO->getById($film->getGenId());


$genfilm=$gDAO->getAllgenre();
if(isset($_POST['genrefilm']))
{
	$genrefilm=htmlspecialchars($_POST['genrefilm']);
	
	if($genrefilm=='Tous les genres')
	{
		$erreur_ajout= ERREUR_GENREFILM;
	}
		
}
else
{
		$genrefilm=$genre->getlibelle();
}



if(isset($_POST['resumefilm']))
{

	$resumefilm=htmlspecialchars($_POST['resumefilm']);
	
	if(strlen($resumefilm)>=1)
	{
			
	}
	else
	{
		$erreur_ajout=ERREUR_RESUMEFILM .' , '. $erreur_ajout;
	}
		
}
else
{
	$resumefilm=$film->getResume();
}

if(isset($_POST['titrefilm']))
{
	
	$titrefilm=htmlspecialchars($_POST['titrefilm']);
	
	if(strlen($titrefilm)>=1)
	{
			
	}
	else
	{
		$erreur_ajout=ERREUR_TITREFILM .' , '. $erreur_ajout;
	}
		
}
else
{
	$titrefilm=$film->getTitre();
}


if($erreur_ajout!=null)
{
		$alert=choixAlert('ajout_film', $erreur_ajout);
}
	
if(! isset($alert)&(($titrefilm!=$film->getTitre())||($resumefilm!=$film->getResume())||($genrefilm!=$genre->getlibelle())))
{
	$valide=1;
		
	
	$g=$gDAO->getbylibelle($genrefilm);
	$idgenre=$g->getId();
			
	$fDAO->updatefilm($modid,$titrefilm,$resumefilm,$idgenre);
	
		
		
	$page="film";
	$_GET['id']=$modid;
		
	require_once(PATH_CONTROLLERS.$page.'.php');
		
}









require_once(PATH_VIEWS.$page.'.php');
