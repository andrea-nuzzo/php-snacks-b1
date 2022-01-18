<?php
/*Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60*/


$games = [
    [
        "home_team" => "Dinamo Sassari",
        "score_home-team" => 88,
        "outside_team" => "Trento",
        "score_outside_team" => 80
    ],
    [
        "home_team" => "VL Pesaro",
        "score_home-team" => 85,
        "outside_team" => "Olimpia Milano",
        "score_outside_team" => 82
    ],
    [
        "home_team" => "Trieste",
        "score_home-team" => 83,
        "outside_team" => "Reggiana",
        "score_outside_team" => 85
    ],
    
];

for($i = 0; $i< count($games); $i++){
    
    echo"{$games[$i]['home_team']} - {$games[$i]['outside_team']} | {$games[$i]['score_home-team']}-{$games[$i]['score_outside_team']} <br>";
}

?>