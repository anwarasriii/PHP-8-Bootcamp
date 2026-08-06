<?php

do {
    $diceRoll = rand(1,6);
    echo "You rolled at $diceRoll\n";
    if(6 == $diceRoll){
        echo "You have hit jackpot!\n";
    }
    echo "Wanna roll again (y/n): ";
    $rollAgain = trim(fgets(STDIN));
    //loop body
} while ($rollAgain == "y");