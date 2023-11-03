<?php

include_once "Produk.php";

class TanggaLipat implements Produk{

    public function namaProduk():void{
        echo "Nama Produk: Tangga Lipat 2in1";
    }
    public function harga():void{
        echo "Harga: Rp. 900.000";
    }
    public function bahan():void{
        echo "Bahan: kayu jati";
    }
}