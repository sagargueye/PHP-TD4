<?php

require_once(PATH_MODELS.'DAO.php');

class filmDAO extends DAO
{
  public function getid($id){
    require_once(PATH_ENTITY.'film.php');
    $res = $this->queryRow('SELECT * FROM film WHERE id = ?', array($id));
    if($res)
    {
      return new film($res['id'], $res['titre'], $res['resume'],$res['nomfichier'],$res['genid']);
    }
    else return null;     
	
  }
  
}

