<?php

class Role
{
    private $_role;
    private $_castings;

    public function __construct($role)
    {
        $this->_role = $role;
        $this->_castings = []; 
    }

    public function get_role()
    {
        return $this->_role;
    }

    public function set_role($role)
    {
        $this->_role = $role;

        return $this;
    }
    public function ajoutCastings($castings){
        array_push($this->_castings,$castings);
        return $this;
    }
    public function afficherCastings()
    {
        echo "<b>Casting Role de $this :</b><ul>";
        foreach ($this->_castings as $casting) {
            echo "<li>".$casting->getActeur()  ."</li>";
        }
        echo '</ul>';
    }

    public function __toString()
    {

        return $this->get_role();
    }
}