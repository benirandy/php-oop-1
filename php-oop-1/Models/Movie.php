<?php


class Movie {
    public $title;
    public $poster;
    public $duration;
    public $genres;

    
    public function __construct(string $_title, array $_genres, string $_poster, int $_duration)
    {
        $this->title = $_title;
        $this->genres = $_genres;   
        $this->poster = $_poster;
        $this->duration = $_duration; 
        
        foreach($_genres as $genre) {
            if (!$genre instanceof Genre) {
                echo "ogni elemento dell'array deve essere un'instanza di Genre";
                die();
            }
        }
    }


    public function getMovieDetails() {
        $genreList = $this->getGenreList();
        return "Movie: $this->title, Duration: $this->duration, Poster: $this->poster, Generes: $genreList";
    }

    public function getGenreList() {
        $genres = [];
        foreach($this->genres as $genre) {
            $genres[] = $genre->name;
        }
        return implode(', ', $genres);
    }

}