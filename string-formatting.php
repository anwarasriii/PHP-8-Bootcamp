<?php

$name = "Ali";
$age = 30;

printf("%s is %d years old.\n", $name, $age);

$csv = "apple,banana,cherry";
$fruits = explode(",", $csv);

var_dump($fruits, implode(", ", $fruits));
