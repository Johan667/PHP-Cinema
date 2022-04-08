<?php

class Genre
{
    private $_genre;
    private $_films;

    public function __construct($genre)
    {
        $this->_genre = $genre;
        $this->_genres = [];
    }

    public function get_genre()
    {
        return $this->_genre;
    }

    public function set_genre($genre)
    {
        $this->_genre = $genre;

        return $this;
    }

    public function get_films()
    {
        return $this->_films;
    }

    public function set_films($films)
    {
        $this->_films = $films;

        return $this;
    }

    public function ajoutGenres($genres)
    {
        array_push($this->_genres, $genres);

        return $this;
    }

    public function afficherGenres()
    {
        echo "<b>Film Du Genre $this:</b>";
        echo count($this->_genres);
        echo '<ul>';
        foreach ($this->_genres as $genre) {
            echo "<li>$genre</li>";
        }
        echo '</ul>';
    }

    public function __toString()
    {
        return $this->_genre;
    }
}
