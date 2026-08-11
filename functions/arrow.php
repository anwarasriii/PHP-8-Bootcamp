<?php

$numbers = [1,2,3,4,5];
$multipliers = 3;

$squared = array_map(fn ($n)=> $n *$multipliers, $numbers);

var_dump($numbers, $squared);