<?php

// Set the response header to indicate JSON content
header("Content-Type: application/json");

$studentProfiles = [
    [ // Student 1
        "id" => 1,
        "name" => "Jean Calvin Nueva",
        "email" => "nuevajeancalvin_bsit@plmun.edu.ph",
        "status" => "Regular Student"
    ],
    [ // Student 2
        "id" => 2,
        "name" => "Ryhea Jean Quita",
        "email" => "quitaryheajean.bsit@edu.ph",
        "status" => "Irregular Student"
    ],
    [ // Student 3
        "id" => 3,
        "name" => "Melvic Jane Sabando",
        "email" => "sabandomelvicjane_bsit@plmun.edu.ph",
        "status" => "Regular Student"
    ],
    [ // Student 4
        "id" => 4,
        "name" => "Krisalyn Sama",
        "email" => "samakrisalyn_bsit@plmun.edu.ph",
        "status" => "Irregular Student"
    ]
];


echo json_encode($studentProfiles, JSON_PRETTY_PRINT);

?>
