<?php

$values = array(10,9,8,7.5);
var_dump($values);

$names = ["Iko", "Afianando", "Iko Afianando"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Iko KUN"; // mengubah value index 0
var_dump($names);

unset($names[1]); // mengahapus index dan value pertama dalam array
var_dump($names);

$names[] = "Joko"; // menambahkan index terakhir
var_dump($names);

var_dump(count($names)); // menhitung berapa data di dalam array

// menggunakan tipe data map dapat dibuah untuk nama sebuah index
$iko = array(
    "id" => "Iko",
    "lastName" => "Afianando",
    "age" => 10,
    "address" => [
        "city" => "jakarta",
        "country" => "indonesia"
    ]
);
var_dump($iko);
var_dump($iko["id"]);

$budi = [
    "id" => "budi",
    "name" => "budi nugraha",
    "age" => 20,
    "address" => array(
        "city" => "jakarta",
        "country" => "indonesia"
    )
];
var_dump($budi);

var_dump($budi["address"]["country"]); // memanggil array di dalam array
