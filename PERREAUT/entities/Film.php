<?php

class Film
{
    
    private $_id;
    
    private $_titre;
    
    private $_resume;
    
    private $_genId;
    
    private $_nomFichier;
    
    
    /**
     * @return mixed
     */
    public function getNomFichier()
    {
        return $this->_nomFichier;
    }

    /**
     * @param mixed $_nomFichier
     */
    public function setNomFichier($_nomFichier)
    {
        $this->_nomFichier = $_nomFichier;
    }

    public function __construct($id, $titre, $resume, $genId, $nomFichier)
    {
        $this->_id = $id;
        $this->_titre = $titre;
        $this->_resume = $resume;
        $this->_genId = $genId;
        $this->_nomFichier = $nomFichier;
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
    public function getTitre()
    {
        return $this->_titre;
    }

    /**
     * @return mixed
     */
    public function getResume()
    {
        return $this->_resume;
    }

    /**
     * @return mixed
     */
    public function getGenId()
    {
        return $this->_genId;
    }

    /**
     * @param mixed $_id
     */
    public function setId($_id)
    {
        $this->_id = $_id;
    }

    /**
     * @param mixed $_titre
     */
    public function setTitre($_titre)
    {
        $this->_titre = $_titre;
    }

    /**
     * @param mixed $_resume
     */
    public function setResume($_resume)
    {
        $this->_resume = $_resume;
    }

    /**
     * @param mixed $_genId
     */
    public function setGenId($_genId)
    {
        $this->_genId = $_genId;
    }

    
}