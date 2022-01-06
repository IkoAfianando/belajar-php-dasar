<?php

function foo()
{
    echo "Foo " . PHP_EOL;
}

function bar()
{
    echo "Bar " . PHP_EOL;
}

$functionYangAkanDipanggil = "foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggilBar = "bar";
$functionYangAkanDipanggilBar();

// penggunaan variable function digunakan untuk pemangglan function dalam bentuk nama variable

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleSayHello(string $name) : string
{
    return "Sample $name ";
}

sayHello("Iko", "sampleSayHello");
sayHello("Iko", "strtoupper");
sayHello("Iko", "strtolower");