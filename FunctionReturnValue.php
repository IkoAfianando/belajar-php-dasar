<?php

function sum(int $first, int $second) : int // sebagai kembalian value yang keluar apa di functoin
{
   $total =  $first + $second;
   return $total;
}

$total = sum(10, 10);
var_dump($total);

$result = sum(100, 100);
var_dump($result);

function getFinalValue(int $value) : string // sebagai kembalian value yang keluar apa di function
{
    if($value >= 80) {
        return "A";
    }else if($value >= 70) {
        return "B";
    }else if($value >= 60) {
        return "C";
    }else if($value >= 50){
        return "D";
    }else {
        return "E";
    }
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(20);
var_dump($score);
