<?php

$int = 42;
$float = 3.14;
$stringToInt = (int)"100";
$floatToInt = (int)3.99;

var_dump($int, $float, $stringToInt, $floatToInt);
var_dump(7 % 2 == 0);

var_dump(
    round(3.7),
    round(3.2),
    floor(3.8),
    ceil(3.1),
    min(3,2,1,8),
    max(3,2,1,8)
);

$number = 121324.342432;
var_dump( number_format($number, 2, '.',','));