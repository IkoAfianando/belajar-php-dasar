<?php

$name = "Iko"; // global scope

function sayHello()
{
    global $name; // ini adalah globa keyword
    echo $name . PHP_EOL; // tidak bisa mengakses global scope

    var_dump($GLOBALS);
}

sayHello();
