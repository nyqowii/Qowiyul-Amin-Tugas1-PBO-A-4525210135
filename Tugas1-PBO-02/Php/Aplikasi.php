<?php

require_once "Mahasiswa.php";

// Menggunakan constructor tanpa parameter
$soja = new Mahasiswa();
$soja->tampilkanInfo();

echo "\n";

// memberikan value Soja Purnamasari ke property nama dari objek soja
$soja->setNama("Soja Purnamasari");
echo "Nama : " . $soja->getNama() . "\n";

$soja->setNim("4523210104");
echo "NIM : " . $soja->getNim() . "\n";

$soja->setUmur(15);
echo "Umur : " . $soja->getUmur() . "\n";

echo "\n";

// Constructor lengkap
$nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
$nenden->tampilkanInfo();

?>