<?php

$simpleArray = [1,2,3,4,5];
$associateArray = [
    'name' => "John",
    'age' => 30,
    'city' => "New York"
];

echo $simpleArray[1];
echo $associateArray['name'];

$simpleArray[]= 6;
$associateArray['country'] = "USA";

$matrix = [
    [1,2,3],
    [4,5,6]
];

echo $matrix[1][1];

$fruits = ['apple', 'banana', 'cherry'];
var_dump(count($fruits));
sort($fruits);
var_dump($fruits);
rsort($fruits);
var_dump($fruits);

var_dump($associateArray);
asort($associateArray);
var_dump($associateArray);
ksort($associateArray);
var_dump($associateArray);

$numbers = range(1,5);
var_dump($numbers);
$squared = array_map(fn($n) => $n ** 2, $numbers);
var_dump($squared);

$evenNumbers = array_filter(
    $numbers,
    fn($n) => $n % 2 == 0
);
var_dump($evenNumbers);

//$sum = array_reduce($numbers,fn,0)
$sum = array_reduce(
    $numbers,
    fn($carry, $n) => $carry + $n,
    0
);

var_dump($sum);

$moreNumbers = [0, ...$numbers,6];
var_dump($moreNumbers);

[$first, $second] = $fruits;
var_dump($first, $second);


$set1 = [1,2,3,4,5];
$set2 = [3,4,5,6,7];

var_dump(
    array_intersect($set1, $set2),
    array_intersect($set2, $set1),
    array_diff($set1, $set2),
    array_diff($set2, $set1)
);

$keys = array_maps(
    fn($keys) => ucfirst($keys),
    array_keys($associateArray)
);
$values = array_values($associateArray);

var_dump($key, $values);

var_dump(
    array_key_exists('name', $associateArray),
    in_array('John', $associateArray)
);

$fruitString = implode(', ', $fruits);
$backToArray = explode(', ', $fruits);

var_dump($fruitString, $backToArray);

var_dump(
    array_merge($set1, $set2),
    array_merge($associateArray, ['country' => 'DE']),
    [...$set1, ...$set2],
    [...$associateArray, ...['county' => 'EN']]
);

var_dump(
    array_search('banana', $fruits)
);

