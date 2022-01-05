<?php

$a = 10;

$b = $a++; // post increment = $b = $a; $a = $a + 1;
//$b = ++$a; // pre increment = $a = $a + 1; $b = $a;
$b++; // sebelum dilakukan seperti ini hasilnya maka 10

var_dump($a);
var_dump($b);
