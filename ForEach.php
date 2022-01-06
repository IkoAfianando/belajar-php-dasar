<?php

$names = ["Iko", "Afianando", "Iko Afianando"];

for($i = 0; $i < count($names); $i++) { // count digunakan untuk menghitung seluruh jumlah index
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "Iko",
    "last_name" => "Afianando",
    "full_name" => "Iko Afianando"
];

foreach ($person as $key => $value) {
    echo "$key : $value ". PHP_EOL;

}
