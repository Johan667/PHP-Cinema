<?php

class Film
{
    private $_titre;
    private $_duree;
    private $_sortie;
    private $_realisateur;
    private $_synopsis;
    private $_genre;
    private $_castings;

    public function __construct($titre, $duree, $sortie, $realisateur, $synopsis, $genre)
    {
        $this->_titre = $titre;
        $this->_duree = $duree;
        $this->_sortie = $sortie;
        $this->_realisateur = $realisateur;
        $this->_synopsis = $synopsis;
        $this->_genre = $genre;
        $this->_realisateur->ajoutrealisation($this);
        $this->_genre->ajoutGenres($this);
        $this->_castings = [];
    }

    public function gettitre()
    {
        return $this->_titre;
    }

    public function getduree()
    {
        return $this->_duree;
    }

    public function getsortie()
    {
        return $this->_sortie;
    }

    public function getrealisateur()
    {
        return $this->_realisateur;
    }

    public function getsynopsis()
    {
        return $this->_synopsis;
    }

    public function getgenre()
    {
        return $this->_genre;
    }

    public function getcasting()
    {
        return $this->_casting;
    }

    public function settitre($titre)
    {
        $this->_titre = $titre;
    }

    public function setduree($duree)
    {
        $this->_duree = $duree;
    }

    public function setsortie($sortie)
    {
        $this->_sortie = $sortie;
    }

    public function setrealisateur($realisateur)
    {
        $this->$realisateur;
    }

    public function setsynopsis($synopsis)
    {
        $this->$synopsis;
    }

    public function setgenre($genre)
    {
        $this->$genre;
    }

    public function setcasting($casting)
    {
        $this->$casting;
    }

    public function voirfilm()
    {
        echo "$this";
    }

    public function ajoutCastings($casting)
    {
        array_push($this->_castings, $casting);

        return $this;
    }

    public function afficherCastings()
    {
        echo "<b>Casting de $this:</b><ul>";
        foreach ($this->_castings as $casting) {
            echo ''.$casting->getacteur().' '.$casting->getrole().'<br>';
        }
    }

    public function __toString()
    {
        return ' '.$this->_titre.' ('.$this->_sortie.')';
    }
}
