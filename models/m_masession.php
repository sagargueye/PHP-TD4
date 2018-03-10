

<?php

require_once(PATH_MODELS.'filmDAO.php');
require_once(PATH_MODELS.'genreDAO.php');




    $idi=htmlspecialchars($_GET['idi']);// la variable idi est l'identifiant d'un film
    $fDAO=new filmDAO();

    $i=1;
    $gd=0; 

    // boucle qui permet de savoir si la variable idi correspond ou non à un film dans la base de donnéés
    do
    {    
	$f=$fDAO->getid($i);
        if($f!=null)
        {
            if($f->getid()==$idi)
            {
                $gd=1; // idi correspond bien à un film
            }
            $i=$i+1;
        }
    }
    while($f!=null);

    if($gd==1) 
    {
        $f=$fDAO->getid($idi); 		// récupération des informations du film avec cette ID
        $image=$f->getnomfichier(); 	// 
        $resu=$f->getresume();      	// récupératon individuel de toutes ses informations
        $titre=$f->gettitre();      	//

        $gDAO=new genreDAO(); 
        $g=$gDAO->getid($f->getgenid()); // récupération des information du genre du film
        $genre=$g->getlibelle();         // récupération du libelle du film
    }
    else
    {
        $page="404";
    }

}
?>