<?php

$name = "Iko";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "IS Name NUll? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Iko";
$contoh = null;
//unset($contoh); // unset untuk hapus variable

var_dump(isset($contoh));