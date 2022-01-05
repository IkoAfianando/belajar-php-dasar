<?php

$gender = "PRIA";
$hi = null;

//if($gender = "PRIA") {
//    $hi = "Hi Bro";
//}else {
//    $hi = "Hi Nona";
//}

// menggunaakan ternary operator
$hi = $gender == "PRIA" ? "Hi Bro!" : "Hi Nona";

echo $hi . PHP_EOL;
echo $hi . PHP_EOL;
