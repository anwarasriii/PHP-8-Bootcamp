<?php

function sum(...$numbers){
    $sum = 0;
    var_dump($numbers);
    foreach ($numbers as $number){
        $sum += $number;
    }
    return $sum;
}

var_dump(sum(5, 10, 15));

function introduceTeam($teamName, ...$members){
    echo "Team: $teamName\n";
    echo "Members: ".implode(", ", $members)."\n";
}

$members = ["Ali", "Bill"];

introduceTeam("A Team", "John", "Samad", ...$members);