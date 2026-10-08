<?php

require_once "BangunDatar.php";
require_once "Lingkaran.php";
require_once "Persegi.php";
require_once "Segitiga.php";

$bd = new BangunDatar();

$bd->luas();
$bd->keliling();

echo "\n";

// Membuat objek lingkaran
$lk = new Lingkaran(15);
echo "Luas lingkaran: " . $lk->luas() . "\n";
echo "Keliling lingkaran: " . $lk->keliling() . "\n";

echo "\n";

// Membuat objek Persegi
$pj = new Persegi(10);
echo "Luas Bujur Sangkar: " . $pj->luas() . "\n";
echo "Keliling Bujur Sangkar: " . $pj->keliling() . "\n";

echo "\n";

// Membuat objek segitiga
$sg = new Segitiga(10, 8);
echo "Luas Segitiga: " . $sg->luas() . "\n";

// Karena class Segitiga tidak memiliki method keliling(),
// maka method keliling() dari parent BangunDatar yang dipanggil
$sg->keliling();

?>

