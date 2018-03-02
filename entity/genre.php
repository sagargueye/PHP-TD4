<?php

class genre
{
  private $_id;

  private $_libelle;

  public function __construct($id, $libelle)
  {
    $this->_id = $id;
    $this->_libelle = $libelle;

  }
  
  public function getid() {
    return $this->_id;
  } 

  public function getlibelle() {
    return $this->_libelle;
  } 
  
}
