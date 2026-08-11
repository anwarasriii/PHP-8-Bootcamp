<?php
declare(strict_types=1);

function processInput(int|float|string $input){
    return match(true){
        is_int($input) => "integer: ".($input * 2),
        is_float($input) => "Float: ".round($input,2),
        is_string($input) => "String: ".strtoupper($input),
        default => "Unknown type",
    };
}

$inputs = [2,3.2,"hello"];

foreach ($inputs as $input){
    echo processInput($input)."\n";
}