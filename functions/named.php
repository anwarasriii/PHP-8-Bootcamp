<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false):string {
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message):$message;
}

echo greet(name: "David", shout: false);