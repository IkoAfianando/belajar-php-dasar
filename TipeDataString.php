<?php

echo 'Name : ';
echo 'Iko Afianando ';
echo "\n";

echo "Name : ";
echo "Iko\t Afianando\n";

// bisa juga menggunakan text IKO sebagai contoh
echo <<<IKO
Selamat Belajar PHP Dasar, Sekarang kita belajar tipe data String,
ini adalah cara ketiga untuk membuat String, bisa menggunakan
heredoc

IKO;

echo <<<'IKO'
Selamat Belajar PHP Dasar, Sekarang kita belajar tipe data String,
ini adalah cara ketiga untuk membuat String, bisa menggunakan
nowdoc
IKO;
