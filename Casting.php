<?php

class Casting
{
    private $_role;
    private $_acteur;
    private $_films;

    public function __construct($role, $acteur, $films)
    {
        $this->_role = $role;
        $this->_acteur = $acteur;
        $this->_films = $films;
        $role->ajoutCastings($this);
        $acteur->ajoutCastings($this);
        $films->ajoutCastings($this);
    }

    public function getrole()
    {
        return $this->_role;
    }

    public function getacteur()
    {
        return $this->_acteur;
    }

    public function getfilms()
    {
        return $this->_films;
    }

    public function setrole($role)
    {
        $this->_role = $role;
    }

    public function setacteur($acteur)
    {
        $this->_acteur = $acteur;
    }

    public function setfilms($films)
    {
        $this->_films = $films;
    }

    public function __toString()
    {
        return $this->_role.' à été jouer par '.$this->_films.'';
    }
}
