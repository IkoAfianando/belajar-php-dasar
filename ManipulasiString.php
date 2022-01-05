<?php

$name = "Iko Afianando";

echo "Name : " . $name . PHP_EOL; // PHP_EOL sama dengan enter
echo "Value : " . 100 . PHP_EOL; // PHP_EOL sama dengan enter ${.} sama dengan tambah

echo "Name : ";
echo $name;
echo "\n";

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"1.01";
var_dump($valueFloat);

$name = "Iko";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;

echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL;
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL;

// Curly Brace menggabungkan dengan nama variabel
$var = "iko";
echo "This is {$var}'s" . PHP_EOL;
