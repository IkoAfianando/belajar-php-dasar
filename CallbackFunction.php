<?php

function sayHello(string $name, callable $filter)
{
    $fullName = call_user_func($filter, $name);
    echo "Hello $fullName" . PHP_EOL;
}

sayHello("Iko", "strtolower");
sayHello("Iko", "strtoupper");
sayHello("Iko", function (string $name): string{
    return strtoupper($name);
});
sayHello("Iko", fn ($name) => strtoupper($name)); // menggunakan arrow function
