<?php

$first = [
    "first_name" => "Iko"
];

$last = [
    "first_name" => "Iko KUN",
    "last_name" => "Afianando"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Iko",
    "last_name" => "Afianando"
];

$b = [
    "last_name" => "Afianando",
    "first_name" => "Iko"
];

var_dump($a == $b); // true
var_dump($a === $b); // false dikarenakan beda posisi
