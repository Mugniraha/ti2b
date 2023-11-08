<?php

include_once "Produk.php";

class Kursi implements Produk{

    public function namaProduk(): void{
        echo "Nama Produk: Kursi Bundar";
    }
    public function harga(): void{
        echo "Harga: Rp. 250.000";
    }
}