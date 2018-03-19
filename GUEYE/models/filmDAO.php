<?php

require_once(PATH_MODELS.'DAO.php');

class filmDAO extends DAO
{
  public function getid($_id){
    require_once(PATH_ENTITY.'film.php');
    $res = $this->queryRow('SELECT * FROM film WHERE ID = ?', array($_id));
    if($res)
    {
      return new film($res['ID'], $res['TITRE'], $res['RESUME'],$res['NOMFICHIER'],$res['GENID']);
    }
    else return null;     
	
  }
  
}

