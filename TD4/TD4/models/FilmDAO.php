<?php
require_once (PATH_MODELS . 'DAO.php');
require_once (PATH_ENTITIES . 'Film.php');

class FilmDAO extends DAO
{

    public function getAll($genId = 0)
    {
        if ($genId == 0)
            $res = $this->queryAll('SELECT * FROM film');
        else
            $res = $this->queryAll('SELECT * FROM film WHERE genId=?', array(
                $genId
            ));
        if ($res == false)
            $films = array();
        else {
            foreach ($res as $p) {
                $films[] = new Film($p['id'], $p['titre'], $p['resume'], $p['genId'] , $p['nomFichier'] );
            }
        }
        return $films;
    }

    public function getById($id)
    {
        $res = $this->queryRow('SELECT * FROM film WHERE id=?', array(
            $id
        ));
        if ($res === false)
            $film = null;
        else
            $film = new Film($res['id'], $res['titre'], $res['resume'], $res['genId'] , $res['nomFichier']);
        return $film;
    }
	
	public function getbytitre($titrefilm)
    {
            $res = $this->queryAll('SELECT * FROM film WHERE titre=?', array(
                $titrefilm
            ));
        if ($res == false)
            $films = array();
        else {
            foreach ($res as $p) {
                $films[] = new Film($p['id'], $p['titre'], $p['resume'], $p['genId'] , $p['nomFichier'] );
            }
        }
        return $films;
    }
	
  public function insertfilm($id,$titrefilm,$resumefilm,$nomfichier,$idgenrefilm){
    
    $res = $this->queryBdd('INSERT INTO film (id,titre,resume,nomFichier,genId) VALUES("'.$id.'","'.$titrefilm.'","'.$resumefilm.'","'.$nomfichier.'","'.$idgenrefilm.'")',array($id,$titrefilm,$resumefilm,$nomfichier,$idgenrefilm));	
  }	
  
  public function supprfilm($id){
    
    $res = $this->queryBdd('DELETE FROM film where id = ?',array($id));	
  }	  
	  
	
	
}
