<?php

class Acteur extends Personne // Le mot-clé Extends permet à Acteur d'hérité de la class Personne
{
    private $_castings;
    private $_acteur;

    public function __construct($nom, $prenom, $sexe, $naissance) // Le constructeur de la classe lui oblige de respecter les paramètres de la classe Mère
    {
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->_castings = [];
    }

    public function ajoutActeur($acteur)
    {
        array_push($this->_acteur, $acteur);

        return $this;
    }

    public function ajoutActing($realisations)
    {
        array_push($this->_realisations, $realisations);

        return $this;
    }

    public function ajoutCastings($castings)
    {
        array_push($this->_castings, $castings);

        return $this;
    }

    public function afficherCastings()
    {
        echo "<b>Joué par $this :</b><ul>";
        foreach ($this->_castings as $casting) {
            echo '<li>'.$casting->getrole().''.$casting->getfilms().'</li>';
        }
        echo '</ul>';
    }

    public function __toString()
    {
        return $this->_prenom.' '.$this->_nom.' '.$this->_sexe.'<br>';
    }
}
