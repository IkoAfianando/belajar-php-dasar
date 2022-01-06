<?php

$name = "Iko";

$otherName = &$name; // reference shorcutnya dapat diubah apabila tidak ada reference maka valuenhya tidak dapat diubah
$otherName = "Budi";

echo $name . PHP_EOL;

function increment(int &$value) // dapat dikirim melalui reference sehingga bisa ditambahkan
{
    $value++;
}

$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;