<?php

class Realisateur extends Personne // Le mot-clé Extends permet à Realisateur d'hérité de la class Personne
{
   
    private $_realisations;


    public function __construct($nom, $prenom, $sexe, $naissance) 
    {
        parent::__construct($nom, $prenom, $sexe,$naissance); // Le constructeur de la classe lui oblige de respecter les paramètres de la classe Mère
        $this->_realisations = []; 
    }

    public function get_realisation()
    {
        return $this->_realisation;
    }
    public function set_realisation($realisation)
    {
        $this->_realisation = $realisation;
        return $this;
    }
    public function ajoutRealisation($realisations){
        array_push($this->_realisations,$realisations);
        return $this;
    }

    public function afficherRealisations()
    {
        echo "<b>$this à réaliser les films suivants:</b><ul>";
        foreach ($this->_realisations as $realisation) {
            echo "<li>$realisation</li>";
        }
        echo '</ul>';
    }

    public function __toString()
    {
        return $this->_prenom.' &nbsp'.$this->_nom;
    }

}
