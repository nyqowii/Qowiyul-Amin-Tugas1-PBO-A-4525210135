<?php

require_once "MahasiswaInternational.php";

// Menggunakan constructor tanpa parameter
$mhsInt1 = new MahasiswaInternational();

$mhsInt1->setNama("Paolo Dicanio");
$mhsInt1->setNim("INT12345");
$mhsInt1->setUmur(21);
$mhsInt1->setNegaraAsal("Italy");

$mhsInt1->tampilkanInfo();

echo "\n";

// Menggunakan constructor dengan nama, nim, negara
$mhsInt2 = new MahasiswaInternational(
    "Sarah",
    "INT67890",
    22,
    "Australia"
);

$mhsInt2->tampilkanInfo();

echo "\n";

// Menggunakan constructor dengan nama, nim, umur, negara
$mhsInt3 = new MahasiswaInternational(
    "David",
    "INT54321",
    23,
    "UK"
);

$mhsInt3->tampilkanInfo();

?>
