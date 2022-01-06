<?php

$data = [1,2,3,4,5,6,7,8,9,10];

$dataResult = array_map(fn($value) => $value * 10, $data); // mengubah data array yang sebelumnya menjadi data baru dengan function yang kita inginkan
var_dump($dataResult);

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));

$person = [
    "first_name" => "Iko",
    "last_name" => "Afianando"
];

var_dump(array_keys($person));
var_dump(array_values($person));