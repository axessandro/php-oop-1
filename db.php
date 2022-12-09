<?php
$movies = [];
$movie_1 = new Movie("Avatar", ["Azione", "Avventura"], ["Jack", "James"], "Usa", 2012);
$movie_2 = new Movie("Avatar2", ["Azione", "Avventura"], ["Jack", "James"], "Usa", 2022);
$movie_3 = new Movie("Avatar", ["Azione", "Avventura"], ["Jack", "James"], "Usa", 2012);
$movie_4 = new Movie("Avatar2", ["Azione", "Avventura"], ["Jack", "James"], "Usa", 2022);

$movies[] = $movie_1;
$movies[] = $movie_2;
$movies[] = $movie_3;
$movies[] = $movie_4;

// $movies = [
//     [
//         "title" => "Avatar",
//         "genre" => ["Action", "Adventure"],
//         "actors" => ["Jack", "James"],
//         "nation" => "Usa",
//         "year" => 2012
//     ],
//     [
//         "title" => "Avatar2",
//         "genre" => ["Action", "Adventure"],
//         "actors" => ["Jack", "James"],
//         "nation" => "Usa",
//         "year" => 2022
//     ],
//     [
//         "title" => "Avatar2",
//         "genre" => ["Action", "Adventure"],
//         "actors" => ["Jack", "James"],
//         "nation" => "Usa",
//         "year" => 2022
//     ],
//     [
//         "title" => "Avatar2",
//         "genre" => ["Action", "Adventure"],
//         "actors" => ["Jack", "James"],
//         "nation" => "Usa",
//         "year" => 2022
//     ]
// ];
