<?php

class Personne
{
  private $nom;
  private $prenom;
  private $sexe;
  private $naissance; 

  public function __construct($nom,$prenom,$sexe,$naissance)
  {
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_sexe = $sexe;
    $this->_naissance = $naissance;
  }

  public function getnom()
  {
      return $this->_nom;
  }

  public function getprenom()
  {
      return $this->_prenom;
  }

  public function getsexe()
  {
      return $this->_sexe;
  }
  public function getnaissance()
  {
      return $this->_naissance;
  }
  public function setnom($nom)
  {
      $this->_nom = $nom;
  }

  public function setprenom($prenom)
  {
      $this->_prenom = $prenom;
  }

  public function setsexe($sexe)
  {
      $this->_sexe = $sexe;
  }

  public function setnaissance($naissance)
  {
      $this->$naissance;
  }
  public function __toString()
  {
      return $this->_nom.' '.$this->_prenom.' -'.$this->_sexe.''.$this->_naissance.'';
  }
}