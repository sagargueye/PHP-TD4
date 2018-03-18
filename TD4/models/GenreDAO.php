<?php
require_once (PATH_MODELS . 'DAO.php');
require_once (PATH_ENTITIES . 'Genre.php');

class GenreDAO extends DAO
{

    public function getAll()
    {
        $res = $this->queryAll('SELECT DISTINCT genre.* FROM genre JOIN film ON genre.ID = film.GENID');
        if ($res == false)
            $genres = array();
        else {
            foreach ($res as $p) {
                $genres[] = new Genre($p['id'], $p['libelle']);
            }
        }
        return $genres;
    }

    public function getById($id)
    {
        $res = $this->queryRow('SELECT * FROM genre WHERE id=?', array(
            $id
        ));
        if ($res == false)
            $genre = null;
        else
            $genre = new Genre($res['id'], $res['libelle']);
        return $genre;
    }
	
	 public function getbylibelle($libelle)
    {
        $res = $this->queryRow('SELECT * FROM genre WHERE libelle=?', array(
            $libelle
        ));
        if ($res == false)
            $genre = null;
        else
            $genre = new Genre($res['id'], $res['libelle']);
        return $genre;
    }
}
