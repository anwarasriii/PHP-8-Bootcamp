<?php

$haystack = "Hey there are two";

$pos = strpos($haystack, "there");
var_dump($pos);

var_dump(str_replace("there", "nohhh", $haystack));

preg_match_all('/\w{5}/', $haystack, $matches);
var_dump($matches);