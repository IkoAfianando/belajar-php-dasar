<?php

function sayHello($firstName, $lastName  = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Iko");
sayHello("Iko", "Afianando");
sayHello("Budi", " Santoso");

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(100, 100);
sum(true, false); // true menjadi 1, false menjadi 0
//sum([], []);

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(10,20,30);

$values = [1,3,4,4,5];
sumAll(...$values);
//sumAll(["10", "20", "30"]); // tidak perlu menjadikan array apabila ...$values
