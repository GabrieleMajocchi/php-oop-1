<?php

require_once "./models/movie.php";

$clientsData = [
    [
        "title" => "Mission impossible",
        "genres" => ["Action"],
        "age" => 25
    ],
    [
        "title" => "Back to the future",
        "genres" => ['Science', 'Fiction comedy'],
        "age" => 15
    ],
];

$clients = [];

foreach ($clientsData as $clientData) {
    $client = new Movie($clientData["title"], $clientData["genres"]);
    $client->discount($clientData["age"]);
    $clients[] = $client;
}

?>