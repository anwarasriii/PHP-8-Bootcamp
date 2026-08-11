<?php

$greet = function($name){
    return "Hello $name\n";
};

echo $greet("Haaland");

$numbers = [1,2,3];

$squared = array_map(function ($n){
    return $n * $n;
}, $numbers);

var_dump($numbers, $squared);

$message = "Hye";
$greet = function($name) use ($message){
    return "$message, $name\n";
};

echo $greet("Sabri");