<?php

echo "Rockect will launched in: ";

for($i = 10; $i > 0; $i--){
    if(1 == $i){
        echo "Lift Rocket Off!\n";
    } else {
        echo "$i ...";
    }
    sleep(1);
}