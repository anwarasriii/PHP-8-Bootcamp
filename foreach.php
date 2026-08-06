<?php

$basket = [
    "apple" => 3,
    "Banana" => 4,
];

$total = 0;

foreach($basket as $item => $quantity){
    echo "$item: $quantity\n";
    $total += $quantity;
}