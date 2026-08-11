<?php

function greet($name){
    echo "HI ".($name ?? "strager")."!\n";
};

greet("Alice");
greet(null);