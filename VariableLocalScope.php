<?php

function createName()
{
    $name = "Iko"; // local scope
}
createName();
echo $name . PHP_EOL; // tidak bisa akses
