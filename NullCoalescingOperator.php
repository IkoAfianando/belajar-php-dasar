<?php

$data = [
    "action" => "Create",
];

if(isset($data["action"])) {
    $action =  $data["action"];
}else {
    $action = "Tidak ada data";
}

echo $action;
