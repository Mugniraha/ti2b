<?php

include_once "Produk.php";

class Meja implements Produk{

    public function namaProduk(): void{
        echo "Nama Produk: Meja Makan Set";
    }
    public function harga(): void{
        echo "Harga: Rp. 1.359.000";
    }

    public function jumlahKursi(): void{
        echo "Jumlah Kursi: 4 buah";
    }
    
}