<?php

class Produk
{
    /// Property / data variable
    public $judul = "Judul",
        $pembuat = "Pembuat",
        $penerbit = "Tahun";


    ///Menthod / Function

    public function getLabel()
    {

        return "$this->judul, $this->pembuat";  // jika tida menggunakan this-> maka property diatas tidak dianggap malah dianggap property baru 
        //dikarenakan sudah masuk didalam function
        //jika menggunakan $this akan mencakup variable diluarnya (variable scope)

    }
}

$produk1 = new Produk();
$produk1->judul = "anom mudita"; //kita bisa timpa dengan cara ->nama propertynya 
//var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "gusmang";
$produk2->tambahproperty = "yes"; /// bisa menambahkan property, jadi hati-hati saat menimpa property harus sama dengan nama propertinya jangan 
/// sampai salah nama akan dianggap membuat property baru,
/// Visibilty penting supaya tidak sembarangnan digunakan.


$produk3 = new Produk(); ///object 3
$produk3->judul = "Lari Dari Kenyataan";
$produk3->pembuat = "Anom Mudita";
$produk3->penerbit = "2021";


$produk4 = new Produk(); //object 4
$produk4->judul = "Game Anom";
$produk4->pembuat = "Gusmang Ananda";
$produk4->penerbit = "2022";

echo "Novel : $produk3->judul, $produk3->pembuat";
echo "<br>";

echo $produk3->getLabel(); /// menampilkan function/method;
echo "<br>";
echo $produk4->getLabel();



/////// agak merepotkan jika membuat seperti diatas semisal kita memiliki 10 produkk;
