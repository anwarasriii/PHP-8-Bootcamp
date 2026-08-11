<?php

function countVisitors(){
    static $number = 0;
    $number++;
    echo "The number #$number \n";
}

countVisitors();
countVisitors();
countVisitors();

function getDB(){
    static $db;

    if($db == null){
        $db = connect();
    }

    return $db;
}