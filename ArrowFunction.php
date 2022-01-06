<?php

$firstName = "Iko";
$lastName = "Afianando";

$sayHelloIko = fn() => "Hello $firstName $lastName" . PHP_EOL; // menggunakan kata fn

$anonymusFunction = function () use ($firstName, $lastName) {
    return "Hello $firstName $lastName" . PHP_EOL;
};

echo $sayHelloIko();
echo $anonymusFunction();