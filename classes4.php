<?php

class MathUtils {
    public static float $pi = 3.14159;

    public static function square(float $num): float {
        return $num * $num;
    }
}

class Connection{
    private static $instance = null;
    private function __construct(){}

    public static function singleton(){
        if(null == static::$instance){
        Connection::$instance = new static();
    }
    return Connection::$instance;
    } 
}

$connection = Connection::singleton();

// var_dump(
//     MathUtils::$pi,
//     MathUtils::square(4)
// );