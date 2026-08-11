<?php

$person = "John";
$client = &$person;

var_dump($person, $client);

$client = "Robwrt";

var_dump($person, $client);

$client = "Rawr";

var_dump($person, $client);
