<?php
include_once "TanggaLipat.php";

$tangga = new TanggaLipat();
echo "<strong>Produk 1</strong><br>";
$tangga->namaProduk();
echo "<br>";
$tangga->bahan();
echo "<br>";
$tangga->harga();
echo "<br>";
