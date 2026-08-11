<?php

function countDown(int $start): Generator{
    for($n = $start; $n > 0; $n--){
        echo "Generating...\n";
        yield random_int(1,100);
    }
}

foreach (countDown(5) as $numbers){
    echo "Echoing...";
    echo "$numbers\n";
}