<?php

$counter = 1;
$maxNumber = 7;

while($counter <= $maxNumber){
    if($counter % 3 == 0){
        echo "Fizz!\n";
    }else{
        echo "$counter\n";
    }
    $counter++;
}