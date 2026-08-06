<?php

$x = 10;
if($x > 5){
 echo "x is greater than 5\n";
}

$score = 85;

if($score > 90){
    echo "A\n";
} elseif($score >= 70){
    echo "B\n";
}

$num = -3;

if($num > 0){
    if($num % 2 == 0){
        echo "Positive even number\n";
    } else {
        echo "Positive odd number\n";
    }
} else {
    echo "Non-positive number\n";
}

$username = "admin";
$password = "password123";

if($username == "admin" && $password == "password123"){
    echo "success\n";
} else {
    echo "failure\n";
}