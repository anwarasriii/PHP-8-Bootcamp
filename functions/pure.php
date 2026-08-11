<?php

$total = 0;

function addToTotal($value){
    global $total;
    $total += $value;
    return $total;
}

var_dump(addToTotal(3), addToTotal(3));