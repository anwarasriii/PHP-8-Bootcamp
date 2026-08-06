<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while($attempts < $maxAttempts){
    echo "Guess the password: ";
    $guess = trim(fgets(STDIN));
    $attempts++;

    if($guess == $secret){
        echo "Successfully! You unlock it.\n";
        break;
    } elseif ($attempts == $maxAttempts){
        echo "Out of limit! This remains locked.\n";
    } else {
        echo "Try again! You have attempts: ".
        ($maxAttempts - $attempts). "\n";
    }
}
