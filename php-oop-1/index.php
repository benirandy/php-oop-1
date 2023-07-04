<?php
//Istanziato 3 oggetti 'movie' e stampati a schermo i valori delle relative proprietà
//importo i dati di da db
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Genre.php";
require_once __DIR__ . "/Database/db.php";


foreach ($movies as $movie) {
    echo $movie->getMovieDetails();
    echo '<br/>';
}

/*
 var_dump($badBoys);
 var_dump($matrix);
 var_dump($avatar);

 echo $badBoys->getMovieDetails();
 echo '<br/>';
 echo $matrix->getMovieDetails();
 echo '<br/>';
 echo $avatar->getMovieDetails();


echo $badBoys->getGenreList();
echo $matrix->getGenreList();
echo $avatar->getGenreList();

//modifico la classe 'movie' in modo che accetti più di un genere
*/

