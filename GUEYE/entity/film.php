<?php

class film
{
  private $_id;

  private $_titre;

  private $_resume;
  
  private $_nomfichier;
  
  private $_genid;

  public function __construct($id, $titre, $resume,$nomfichier,$genid)
  {
    $this->_id = $id;
    $this->_titre = $titre;
    $this->_resume = $resume;
    $this->_nomfichier=$nomfichier;
    $this->_genid=$genid;

  }
  
  public function getid() {
    return $this->_id;
  } 

  public function gettitre() {
    return $this->_titre;
  } 
  

  public function getresume() {
    return $this->_resume;
  } 
  
  public function getnomfichier() {
    return $this->_nomfichier;
  } 
  
  public function getgenid() {
    return $this->_genid;
  } 


  
  public function setMot($mot){
    $this->_mot = $mot;
  }

  public function getNbRepet() {
    return $this->_nbRepet;
  } 

}
