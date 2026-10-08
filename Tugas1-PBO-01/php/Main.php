<?php

require_once "iPhone.php";

// Membuat object iPhone
$iphone13 = new iPhone("Red", "128GB");
$iphone14 = new iPhone("Grey", "256GB");

// Menampilkan spesifikasi iPhone 13
echo "Spesifikasi iPhone 13\n";
echo "Warna: " . $iphone13->getColor() . "\n";
echo "Storage: " . $iphone13->getStorage() . "\n";

// Menampilkan spesifikasi iPhone 14
echo "Spesifikasi iPhone 14\nph";
echo "Warna: " . $iphone14->getColor() . "\n";
echo "Storage: " . $iphone14->getStorage() . "\n";

?>