<?php

$genreScifi = new Genre('sci-fi');
$genreFantasy = new Genre('fantasy');
$genreDrama = new Genre('drama');
$genreAction = new Genre('action');

$movies = [

    $badBoys = new Movie('Bad Boys, I', [ $genreScifi, $genreDrama  ], 'images/downloadbadboy.jpeg', 120),
    $matrix = new Movie('Matrix, I', [ $genreScifi, $genreAction ], 'images/downloadmatrix.jpeg', 110),
    $avatar = new Movie('Avatar, I', [ $genreAction, $genreDrama ], 'images/downloadavatar.jpeg', 130), 
];

