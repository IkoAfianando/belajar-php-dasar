<?php

$sayHello = function (string $name)
{
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Iko");
$sayHello("Budi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName " . PHP_EOL;
}

sayGoodBye("Iko", function (string $name) : string {
    return strtoupper($name);
});

$filterFunction = function (string $name) : string {
    return strtoupper($name);
};

sayGoodBye("Iko", $filterFunction);

// mengakses variable luar
$firstName = "Iko";
$lastName = "Afianando";

$fullName = function () use ($firstName, $lastName) { // dengan menggunakan use
    echo "Hello $firstName $lastName" . PHP_EOL; // tidak dapat dirubah dirubah hanya dapat merubah pada saat variable awal
};
$fullName();
