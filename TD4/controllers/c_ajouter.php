<?php 
session_name('p1606501');
session_start();

require_once (PATH_MODELS . 'FilmDAO.php');
require_once (PATH_MODELS . 'GenreDAO.php');


$genfilm = array();

$gDAO=new GenreDAO(DEBUG);
$fDAO=new FilmDAO(DEBUG);

$i=1;
$valide=0;
do
{
	$g=$gDAO->getById($i);
	if($g!=null)
	{
            $genfilm[]=$g;
            $i=$i+1;
	}
}
while(($g!=null));

if(isset($_POST['genrefilm']))
{
	$valide=1;
	$genrefilm=htmlspecialchars($_POST['genrefilm']);
	
	if($genrefilm=='Tous les genres')
	{
		$alert=choixAlert('genrefilm_invalide');
		$valide=0;
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
		$alert=choixAlert('resumefilm_invalide');
		$valide=0;
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
		$alert=choixAlert('titrefilm_invalide');
		$valide=0;
	}
		
}


if(isset($_FILES['imgfilm']['name']))
{
	
	if($_FILES['imgfilm']['size']>=100000)
	{
		$alert=choixAlert('imagefilm2_invalide');
		$valide=0;
	}
	
	if((preg_match('#^.+.png$#',$_FILES['imgfilm']['name']))||
	(preg_match('#^.+.gif$#',$_FILES['imgfilm']['name']))||
	(preg_match('#^.+.jpg$#',$_FILES['imgfilm']['name'])) )
	{
		
	}
	else
	{
		$alert=choixAlert('imagefilm1_invalide');
		$valide=0;
	}
	
	if($valide)
	{

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
