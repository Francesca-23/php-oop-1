<?php 

include_once __DIR__ . '/../models/movies.php';

$arrayMovies = [
    $ForrestGump = new Movies('Forrest Gump', 1994, 'Inglese', 'Robert Zemeckis', 'Tom Hanks', new Genres('drammatico, comico')),
    $Titanic = new Movies('Titanic', 1997, 'Inglese', 'James Cameron', 'Leonardo Di Caprio', new Genres('drammatico, romantico')),
    $Inception = new Movies('Inception', 2010, 'Inglese', 'Christopher Nolan', 'Leonardo Di Caprio', new Genres('fantascienza, azione')),
    $TheGodfather = new Movies('The Godfather', 1972, 'Inglese', 'Francis Ford Coppola', 'Marlon Brando, Al Pacino', new Genres('giallo')),
    $Avatar = new Movies('Avatar', 2009, 'Inglese', 'James Cameron', 'Sam Worthington', new Genres('fantascienza, azione')),
];

?>