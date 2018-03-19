<?php

class Genre
{

    private $_id;

    private $_libelle;

    public function __construct($id, $libelle)
    {
        $this->_id = $id;
        $this->_libelle = $libelle;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->_libelle;
    }

    /**
     * @param mixed $_id
     */
    public function setId($_id)
    {
        $this->_id = $_id;
    }

    /**
     * @param mixed $_libelle
     */
    public function setLibelle($_libelle)
    {
        $this->_libelle = $_libelle;
    }

    
}