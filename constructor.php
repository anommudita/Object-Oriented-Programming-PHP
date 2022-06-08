<?php

// use Produk as GlobalProduk;

class Produk
{
    /// Property / data variable
    public $judul,
        $pembuat,
        $penerbit;


    //Constructor
    public function __construct($judul = "judul", $pembuat = "pembuat", $penerbit = 0)
    {
        $this->judul = $judul;
        $this->pembuat = $pembuat;
        $this->penerbit = $penerbit;
    }

    ///Menthod / Function

    public function getLabel()
    {

        return "$this->judul, $this->pembuat, $this->penerbit";  // jika tida menggunakan this-> maka property diatas tidak dianggap malah dianggap property baru 
        //dikarenakan sudah masuk didalam function
        //jika menggunakan $this akan mencakup variable diluarnya (variable scope)

    }
}

$produk6 = new Produk("lari dari kenyataan", "Anom Mudita", 2021);

$produk7 = new Produk("Game Anom", "Gusmang Ananda", 2022);

$produk8 = new Produk("Mudita");

echo $produk6->getLabel(); /// menampilkan function/method;
echo "<br>";
echo $produk7->getLabel();

echo "<br>";
echo $produk8->getlabel();

//// agak merepotkan jika membuat seperti diatas semisal kita memiliki 10 produkk;
