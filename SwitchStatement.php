<?php

$nilai = "B";

switch($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus dengan baik " . PHP_EOL;
        break;
    case "D":
        echo "Anda lulus dengan jelek" . PHP_EOL;
        break;
    default:
        echo "Anda mungkin salah jurusan";
}

// menggunakan semi colon
switch($nilai) :
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus dengan baik " . PHP_EOL;
        break;
    case "D":
        echo "Anda lulus dengan jelek" . PHP_EOL;
        break;
    default:
        echo "Anda mungkin salah jurusan";
endswitch;
