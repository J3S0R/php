<?php
$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Jean',
        'notes' => [12, 14, 16, 19]
    ],
    [
        'nom' => 'Rose',
        'prenom' => 'Jonathan',
        'notes' => [18, 11, 7, 10]
    ],
    [
        'nom' => 'tuto',
        'prenom' => 'php',
        'notes' => [20, 19, 18, 17]
    ]
    ];

// Afficher la 2e note du 2e élève
echo $classe[1]['notes'][1] . "\n";
// Afficher la 1ere note du 3e élève
echo $classe[2]['notes'][0] . "\n";
// afficher le nom du 2e élève
echo $classe[1]['nom'] . "\n";
// afficher la 4e note du 1er élève
echo $classe[0]['notes'][3];
