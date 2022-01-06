<?php

function factorialLoop(int $value)
{
    $total = 1;
    for($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

function factorialRecursive(int $value) : int
{
    if($value === 1) {
        return 1;
    }else {
        return $value * factorialRecursive($value - 1);
    }
}

function factorialTailRecursive(int $result, int $value) : int
{
    if($value <= 0) {
        return $result;
    }else {
        return factorialTailRecursive($result * $value, $value - 1);
    }
}

var_dump(factorialLoop(5));
var_dump(factorialRecursive(5));
var_dump(factorialTailRecursive(1, 5));

function loop(int $value)
{
    if($value == 0) {
        echo "End Loop" . PHP_EOL;
    }else {
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(30);
