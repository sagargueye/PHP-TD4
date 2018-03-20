<?php 
session_name('p1606501');
session_start();

require_once (PATH_MODELS . 'FilmDAO.php');
require_once (PATH_MODELS . 'GenreDAO.php');


$gDAO=new GenreDAO(DEBUG);
$fDAO=new FilmDAO(DEBUG);

$erreur_ajout=null;

$genfilm=$gDAO->getAllgenre();

if(isset($_POST['genrefilm']))
{
	$genrefilm=htmlspecialchars($_POST['genrefilm']);
	
	if($genrefilm=='Tous les genres')
	{
		$erreur_ajout= ERREUR_GENREFILM;
	}
		
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


if(isset($_FILES['imgfilm']['name']))
{
	
	if($_FILES['imgfilm']['size']>=100000)
	{
		$erreur_ajout=ERREUR_IMAGEFILM2.' , '.$erreur_ajout;
	}
	
	if((preg_match('#^.+.png$#',$_FILES['imgfilm']['name']))||
	(preg_match('#^.+.gif$#',$_FILES['imgfilm']['name']))||
	(preg_match('#^.+.jpg$#',$_FILES['imgfilm']['name'])) )
	{
		
	}
	else
	{
		$erreur_ajout=ERREUR_IMAGEFILM1.' , '.$erreur_ajout;
	}
	
	if($erreur_ajout!=null)
	{
		$alert=choixAlert('ajout_film', $erreur_ajout);
	}
	
	if(! isset($alert))
	{
		$valide=1;
		
		$g=$gDAO->getbylibelle($genrefilm);
		$i=$g->getId();
	
		$f=$fDAO->getAll();
		foreach($f as $val)
		{		
		}
		
		$j=$val->getId();
		$j=$j+1;
		
		$extension_upload = strtolower(  substr(  strrchr($_FILES['imgfilm']['name'], '.')  ,1)  );
		$nom="assets/images/DSC{$j}.{$extension_upload}";		
				
		$fDAO->insertfilm($j,$titrefilm,$resumefilm,"DSC{$j}.{$extension_upload}",$i);
	
		
		move_uploaded_file($_FILES['imgfilm']['tmp_name'],$nom);
		
		$page="film";
		$_GET['id']=$j;

		
		require_once(PATH_CONTROLLERS.$page.'.php');
		
	}
	
		
}







require_once(PATH_VIEWS.$page.'.php');
