<?php

require_once(PATH_MODELS.'DAO.php');

//retourne un Utilisateur ou nul
class genreDAO extends DAO
{
  public function getid($id){
    require_once(PATH_ENTITY.'genre.php');
    $res = $this->queryRow('SELECT * FROM genre WHERE id = ?', array($id));
    if($res)
    {
      return new genre($res['id'], $res['libelle']);
    }
    else return null;     
	
  }
  
  
}